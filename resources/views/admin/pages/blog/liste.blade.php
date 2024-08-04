@extends('admin.components.app')

@section('page_content')
<div class="w-full ">
   
    <div class="flex items-center justify-center">
        <h1 class="font_title_first text-xl titre2">Liste des articles</h1>
    </div>
   @forelse ($posts as $post )

   <div class="mt-6">
    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between"><span class="font-light text-gray-600 Placeholder titre3">{{ $post->created_at}}</span><a href="#"
                class="px-2 py-1 font-bold text-gray-100  rounded bg-[#4287F5] titre1">{{ $post->entete}}</a>
        </div>
        <div class="mt-2">
            <a href="{{ route('admin-blog-update',['id'=> $post->id])}}" class="text-xl font-normal text-black hover:underline font_title_first titre3">{{ $post->titre}}</a>
            <p class="mt-2 text-gray-600 Placeholder titre3">{{ Str::limit($post->description, 220) }}</p>
        </div>
        <div class="flex items-center justify-between mt-4"><a href="{{route('admin-blog-article',['id'=> $post->id])}}"
                class="text-blue-500 hover:underline font_title_first titre1">voir plus</a>
            <div><a href="#" class="flex items-center"><img
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                        alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                    <h1 class="font-bold text-gray-700 hover:underline font_title_first"></h1>
                </a></div>
        </div>
    </div>
   </div>
   
       
   @empty
   <div class="flex min-h-[50vh] justify-center items-center">
    <h1 class="mt-6 Placeholder titre3">Auccun article publier</h1>
   </div>
       
   @endforelse

     
   
   
    
    
</div>
@endsection