<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Musonza\Chat\Facades\ChatFacade as Chat;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Musonza\Chat\Models\Conversation;
use Musonza\Chat\Models\Message;

class ChatController extends Controller
{
    public function getMessages($conversationId)
    {
        $conversation = Chat::conversations()->getById($conversationId);
        $messages = $conversation->messages;

        return response()->json($messages);
    }

    public function sendMessage(Request $request)
    {
        $conversationId = $request->input('conversation_id');
        $messageText = $request->input('message');
        $userId = $request->input('user_id');

        $conversation = Chat::conversations()->getById($conversationId);
        $user = User::find($userId);

        if ($request->hasFile('files')) {
            $my_files=[];
            foreach ($request->file('files') as $file) {
                $path = $file->store('public/messages_attachment');
                $my_files[]=[
                    'file_url' => $path,
                    'file_name' => $file->getClientOriginalName()
                ];
            }
             Chat::message($messageText!=null ? $messageText : '')
                ->type('attachment')
                ->data($my_files)
                ->from($user)
                ->to($conversation)
                ->send();

        }else{
            Chat::message($messageText)
            ->from($user)
            ->to($conversation)
            ->send();
        }

        return response()->json($messageText);
    }

    public function getUserConversations()
{

    $userId = auth()->user()->id;
    $user = User::find($userId);
    $conversations = DB::table('chat_conversations')
        ->join('chat_participation', 'chat_conversations.id', '=', 'chat_participation.conversation_id')
        ->leftJoin(DB::raw('(SELECT * FROM chat_messages WHERE (chat_messages.id) IN (SELECT MAX(id) FROM chat_messages GROUP BY conversation_id)) as latest_messages'), 'chat_conversations.id', '=', 'latest_messages.conversation_id')
        ->select(
            'chat_conversations.id as conversation_id',
            'chat_conversations.private',
            'chat_conversations.direct_message',
            'chat_conversations.data',
            'latest_messages.body as latest_message',
            'latest_messages.created_at as message_time'
        )
        ->where('chat_participation.messageable_id', '=', $userId)
        ->orderBy('latest_messages.created_at', 'desc')
        ->groupBy('chat_conversations.id', 'latest_messages.body', 'latest_messages.created_at')
        ->get();

    // Ajouter les participants pour chaque conversation
    foreach ($conversations as $conversation) {
        $participants = DB::table('chat_participation')
            ->join('users', 'chat_participation.messageable_id', '=', 'users.id')
            ->where('chat_participation.conversation_id', $conversation->conversation_id)
            ->select('users.id', 'users.nom', 'users.prenom', 'users.email') // Ajustez les colonnes selon les besoins
            ->get();

        $conversation->participants = $participants;
    }

    return response()->json($conversations);
}

    public function createConversation(Request $request)
    {
        $userId = auth()->user()->id;
        $participantId = $request->input('participant_id');

       // Récupérer les instances des utilisateurs
    $user = User::find($userId);
    $participant = User::find($participantId);

    // Vérifier s'il existe déjà une conversation entre les deux utilisateurs
    $existingConversation = Chat::conversations()
        ->between($user, $participant);

    if ($existingConversation) {
        return response()->json($existingConversation);
    }

    // Créer une nouvelle conversation
    $conversation = Chat::createConversation([$user, $participant]);

    return response()->json($conversation);
    }

    public function getAvailableUsers($userId)
    {
        $user = User::find($userId);
        $conversations = Chat::conversations()->for($user)->get();

        $participantIds = $conversations->map(function($conversation) use ($user) {
            return $conversation->participants->where('id', '!=', $user->id)->pluck('id')->first();
        });

        $availableUsers = User::whereNotIn('id', $participantIds)->where('id', '!=', $userId)->get();

        return response()->json($availableUsers);
    }



    public function searchUsers($keyword)
{
    $users = User::where('nom', 'LIKE', '%' . $keyword . '%')
                  ->orWhere('prenom', 'LIKE', '%' . $keyword . '%')
                  ->get();

    return response()->json($users);
}

public function getConversationDetails($conversationId)
{
    $conversation = DB::table('chat_conversations')->where('id', $conversationId)->first();

    if (!$conversation) {
        return response()->json(['error' => 'Conversation not found'], 404);
    }

    $participants = DB::table('chat_participation')
        ->join('users', 'chat_participation.messageable_id', '=', 'users.id')
        ->where('chat_participation.conversation_id', $conversationId)
        ->select('users.id', 'users.nom','users.prenom','users.email')
        ->get();

    $messages = DB::table('chat_messages')
        ->join('chat_participation', 'chat_messages.participation_id', '=', 'chat_participation.id')
        ->join('users', 'chat_participation.messageable_id', '=', 'users.id')
        ->where('chat_messages.conversation_id', $conversationId)
        ->select('chat_messages.*','chat_participation.messageable_id')
        ->orderBy('created_at','asc')
        ->get();

    return response()->json([
        'conversation' => $conversation,
        'participants' => $participants,
        'messages' => $messages,
    ]);
}

public function getConversationMessages($conversationId)
{
    $conversation = DB::table('chat_conversations')->where('id', $conversationId)->first();

    if (!$conversation) {
        return response()->json(['error' => 'Conversation not found'], 404);
    }

    $participants = DB::table('chat_participation')
        ->join('users', 'chat_participation.messageable_id', '=', 'users.id')
        ->where('chat_participation.conversation_id', $conversationId)
        ->select('users.id', 'users.nom','users.prenom','users.email')
        ->get();

        $messages = DB::table('chat_messages')
        ->join('chat_participation', 'chat_messages.participation_id', '=', 'chat_participation.id')
        ->join('users', 'chat_participation.messageable_id', '=', 'users.id')
        ->where('chat_messages.conversation_id', $conversationId)
        ->select('chat_messages.*','chat_participation.messageable_id')
        ->orderBy('created_at','asc')
        ->get();

    return response()->json([
        'conversation' => $conversation,
        'participants' => $participants,
        'messages' => $messages,
    ]);
}


public function checkForNewMessages(Request $request)
{
    $user = auth()->user(); // Obtenez l'utilisateur authentifié
    $user=User::find($user->id);



    if (is_null($user->last_checked_at)) {
        $user->last_checked_at = $user->created_at;
    }

    // Obtenez les conversations de l'utilisateur
    $conversations = Conversation::whereHas('participants', function ($query) use ($user) {
        $query->where('messageable_id', $user->id);
    })->get();

    $newMessagesExist = false;

    // Vérifiez chaque conversation pour de nouveaux messages
    foreach ($conversations as $conversation) {
        $lastMessage = $conversation->messages()->orderBy('created_at', 'desc')->first();
        if ($lastMessage && $lastMessage->created_at->gte($user->last_checked_at)) {
            $newMessagesExist = true;
            break;
        }
    }

    // Mettez à jour l'heure de la dernière vérification
    $user->last_checked_at = now();
    $user->save();


    return response()->json(['new_messages' => $newMessagesExist,'user_id'=>$user->id]);
}



}

