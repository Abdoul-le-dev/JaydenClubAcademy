$(document).ready(function () {
    var userId = $('#userId').val();
    var active_conversation_id=null;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // Récupérer les utilisateurs disponibles
    function loadAvailableUsers() {
        $.ajax({
            url: '/chat/available-users/' + userId,
            method: 'GET',
            success: function (data) {
                $('#available-users').empty();
                data.forEach(function (user) {
                    $('#available-users').append('<div class="user" data-id="' + user.id + '">' +
                        '<strong>' + user.name + '</strong></div>');
                });

                // Ajouter un événement de clic pour créer une nouvelle conversation
                $('.user').click(function() {
                    var participantId = $(this).data('id');
                    createConversation(participantId);
                });
            }
        });
    }

    // Créer une nouvelle conversation
    function createConversation(participantId) {
        $.ajax({
            url: '/chat/conversations',
            method: 'POST',
            data: {
                user_id: userId,
                participant_id: participantId,
                _token: $('meta[name="csrf-token"]').attr('content') // CSRF token pour les requêtes POST
            },
            success: function (data) {
                loadConversations();
            },
            error: function (e){
                console.log('erreur',e);
            }
        });
    }

    // Récupérer les conversations
    function loadConversations() {
        $.ajax({
            url: '/chat/conversations/list',
            method: 'GET',
            success: function(data) {
                $('#conversation-list').empty();
                data.forEach(conversation => {
                    let friend = conversation.participants.find(p => p.id != userId);

                    let participants = conversation.participants;
                    $('#conversation-list').append(`
                        <div class="hover-actions-trigger chat-contact chat-contact-item nav-item ${conversation.conversation_id==active_conversation_id ? 'active' : ''} " role="tab" data-conversation-id="${conversation.conversation_id}">
                            <div class="d-flex p-3">
                                <div class="avatar avatar-xl status-online">
                                    <div class="avatar-name rounded-circle"><span>${friend.nom.charAt(0)}${friend.prenom.charAt(0)}</span></div>
                                </div>
                                <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-0 chat-contact-title">${friend.nom} ${friend.prenom}</h6>
                                        <span class="message-time fs-11">${conversation.message_time!=null ? conversation.message_time : '' }</span>
                                    </div>
                                    <div class="min-w-0">
                                        <div class="chat-contact-content pe-3">${conversation.latest_message ? conversation.latest_message : 'Nouveau' }</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });

                $('.chat-contact-item').on('click', function() {
                    let conversationId = $(this).data('conversation-id');
                    $('.chat-contact-item').removeClass('active');
                    document.querySelector('.chat-sidebar').style.left="-100%";
                    // Add 'active' class to the clicked chat-contact-item element
                     $(this).addClass('active');
                     active_conversation_id=conversationId;
                    loadConversationDetails(conversationId);
                });
            }
        });
    }


    //conversations details

    function loadConversationDetails(conversationId) {
        $.ajax({
            url: '/chat/conversations/' + conversationId + '/details',
            method: 'GET',
            success: function(data) {
                let friend = data.participants.find(p => p.id != userId);
                let user = data.participants.find(p => p.id == userId);


                $('#chat-container').html(`
                        <div class="tab-pane card-chat-pane active" id="chat-${conversationId}" role="tabpanel" aria-labelledby="chat-link-${conversationId}">
                            <div class="chat-content-header">
                                <div class="row flex-between-center">
                                    <div class="col-6 col-sm-8 d-flex align-items-center">
                                        <a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                                            <div class="fas fa-chevron-left"></div>
                                        </a>
                                        <div class="min-w-0">
                                            <h5 class="mb-0 text-truncate fs-9">${friend.nom} ${friend.prenom}</h5>
                                            <div class="fs-11 text-400">Active On Chat</div>
                                        </div>
                                    </div>
                                    <div class="col-auto">

                                        <button class="btn btn-sm btn-falcon-primary btn-chat-info" type="button" data-index="${conversationId}" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information">
                                            <span class="fas fa-info"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-content-body" style="display: inherit;">
                                <div class="chat-content-scroll-area scrollbar"  id="chat-messages-${conversationId}" >
                                    ${data.messages.map(message => message.messageable_id == userId ? rightMessage(message,user,friend): leftMessage(message,user,friend)).join('')}
                                </div>
                            </div>
                        </div>
                        <form class="chat-editor-area" data-conversation-id="${conversationId}">
                            <div class="emojiarea-editor outline-none scrollbar" placeholder="Ecrire ton message ici" contenteditable="true"></div>
                            <input class="d-none" type="file" id="chat-file-upload" />
                            <label class="chat-file-upload cursor-pointer" for="chat-file-upload">
                                <span class="fas fa-paperclip"></span>
                            </label>
                            <div class="chat-emoji-picker">
                                <div class="btn btn-link emoji-icon" data-emoji-mart="data-emoji-mart" data-emoji-mart-input-target=".emojiarea-editor">
                                    <span class="far fa-laugh-beam"></span>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-send shadow-none" type="submit">Send</button>
                        </form>
                `);

                $('.chat-editor-area').on('submit', function(event) {
                    event.preventDefault();
                    let conversationId = $(this).data('conversation-id');
                    let messageBody = $(this).find('.emojiarea-editor').text();

                    sendMessage(conversationId, messageBody);
                    $(this).find('.emojiarea-editor').empty()

                });
            }
        });
    }

    function sendMessage(conversationId, messageBody) {
        $.ajax({
            url: '/chat/send',
            method: 'POST',
            data: {
                user_id: userId,
                message: messageBody,
                conversation_id: conversationId,
            },
            success: function() {
                loadConvMessages(conversationId);
                // loadConversations();
            }
        });
    }

    //load messages
    function loadConvMessages(conversationId) {
        $.ajax({
            url: '/chat/conversations/' + conversationId + '/messages',
            method: 'GET',
            success: function(data) {
                let friend = data.participants.find(p => p.id != userId);
                let user = data.participants.find(p => p.id == userId);
                let messagesHtml = data.messages.map(message => message.messageable_id == userId ? rightMessage(message,user,friend): leftMessage(message,user,friend) ).join('');
                $(`#chat-messages-${conversationId}`).html(messagesHtml);
            }
        });
    }

    function leftMessage(message,user,friend){

        return `<div class="d-flex p-3 ${message.messageable_id == userId ? 'justify-content-end' : ''}">
                        <div class="avatar avatar-l me-2">

                        <div class="avatar-name rounded-circle"><span> ${ message.messageable_id == userId ? user.nom.charAt(0): friend.nom.charAt(0)}${ message.participation_id == userId ? user.prenom.charAt(0): friend.prenom.charAt(0)}</span></div>

                        </div>
                        <div class="flex-1">
                            <div class="w-xxl-75">
                                <div class="hover-actions-trigger d-flex align-items-center">
                                    <div class="chat-message bg-200 p-2 rounded-2">${message.body}</div>
                                    <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                        <li class="list-inline-item">
                                            <a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward">
                                                <span class="fas fa-share"></span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive">
                                                <span class="fas fa-archive"></span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <span class="fas fa-edit"></span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove">
                                                <span class="fas fa-trash-alt"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-400 fs-11"><span>${message.created_at}</span></div>
                            </div>
                        </div>
                    </div>
                `

    }

    function rightMessage(message,user,friend){

        return `<div class="d-flex p-3">
            <div class="flex-1 d-flex justify-content-end">
              <div class="w-100 w-xxl-75">
                <div class="hover-actions-trigger d-flex flex-end-center">
                  <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                    <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                    <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                    <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                    <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                  </ul>
                  <div class="bg-primary text-white p-2 rounded-2 chat-message" data-bs-theme="light">
                    <p class="mb-0">${message.body}</p>
                  </div>
                </div>
                <div class="text-400 fs-11 text-end">${message.created_at}<span class="fas fa-check ms-2 text-success"></span></div>
              </div>
            </div>
          </div>`
    }


    // load conversations details

    // Récupérer les messages pour une conversation
    function loadMessages(conversationId) {
        $.ajax({
            url: '/chat/messages/' + conversationId,
            method: 'GET',
            success: function (data) {
                    console.log('data',data)
                // $('#chat-box').empty();
                // data.forEach(function (message) {
                //     $('#chat-box').append('<div><strong>' + message.sender.name + ':</strong> ' + message.body + '</div>');
                // });
            }
        });
    }

    // loadAvailableUsers();
    loadConversations();

    // Envoyer un message
    $('#send-btn').click(function() {
        var message = $('#message').val();
        var conversationId = $('#conversation-id').val();
        var userId = $('#user-id').val();

        if (message !== '') {
            $.ajax({
                url: '/chat/send',
                method: 'POST',
                data: {
                    conversation_id: conversationId,
                    message: message,
                    user_id: userId,
                    _token: $('meta[name="csrf-token"]').attr('content') // CSRF token pour les requêtes POST
                },
                success: function (data) {
                    $('#message').val('');
                    loadConvMessages(conversationId);
                }
            });
        }
    });

    // Vérifier les nouveaux messages toutes les secondes
    function checkForNewMessages() {
        $.ajax({
            url: '/chat/conversations/messages/latest',
            method: 'GET',
            success: function(data) {
                if (data.new_messages) {
                    loadConversations();
                    let activeConversationId = $('.chat-contact-item.active').data('conversation-id');
                       console.log('convçid',activeConversationId);
                    if (activeConversationId) {
                        loadConvMessages(activeConversationId);
                    }
                }
            },
            error: function (params) {
                console.log(params);
            }
        });
    }

    setInterval(function() {
        checkForNewMessages();
    }, 1000);

    // setInterval(checkNewMessages, 1000); // Vérifier les nouveaux messages toutes les secondes

    // Recherche d'utilisateurs
    $('#search-user').keyup(function() {
        var keyword = $(this).val();
        if (keyword.length > 0) {
            $.ajax({
                url: '/chat/search-users/' + keyword,
                method: 'GET',
                success: function (data) {
                    $('#user-search-results').empty();
                    data.forEach(function (user) {
                        $('#user-search-results').append('<div class="chat-contact chat-contact-user nav-item" role="tab" data-id="' + user.id + '">' +
                            '<div class="d-flex p-3">' +
                                '<div class="avatar avatar-xl status-online">' +
                                    '<div class="avatar-name rounded-circle"><span>' + user.nom.charAt(0) + user.prenom.charAt(0) + '</span></div>' +
                                '</div>' +
                                '<div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">' +
                                    '<div class="d-flex justify-content-between">' +
                                        '<h6 class="mb-0 chat-contact-title">' + user.nom +' '+ user.prenom + '</h6>' +
                                    '</div>' +
                                    '<div class="min-w-0">' +
                                        '<div class="chat-contact-content pe-3">' + user.role + '</div>' +
                                        '<div class="position-absolute bottom-0 end-0 hover-hide"></div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>');
                    });

                    // Ajouter un événement de clic pour créer une nouvelle conversation
                    $('.chat-contact-user').click(function() {
                        var participantId = $(this).data('id');
                        createConversation(participantId);
                    });
                }
            });
        } else {
            $('#user-search-results').empty();
        }
    });

    $('.contacts-list-show').on('click',function (){
        console.log('toggle')
         $('chat-sidebar').toggleClass('show-contact');
    })
});
