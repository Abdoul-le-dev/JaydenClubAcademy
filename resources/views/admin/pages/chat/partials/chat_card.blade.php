{{-- css  --}}
<link href="/admin_assets/chat/css/chat_vendor.css" rel="stylesheet" type="text/css">

 <input type="hidden" id="userId" value="{{Auth::user()->id}}">

<div class="card card-chat overflow-hidden">
    <div class="card-body d-flex p-0 h-100">
      <div class="chat-sidebar">
        <div class="contacts-list scrollbar-overlay">
            <div class="card shadow-none">
                <div class="card-body border-bottom">
                    <div class="row flex-between-center ">
                        <div class="col-6 col-sm-8 d-flex align-items-center">
                          <div class="min-w-0">
                            <h5 class="mb-0 text-truncate fs-9">Discussions</h5>
                          </div>
                        </div>
                        <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-toggle="modal" data-target="#NewChatModal"><span class="fas fa-plus"></span></button></div>
                      </div>
                </div>
            </div>
          <div class="nav nav-tabs border-0 flex-column" id="conversation-list" role="tablist" aria-orientation="vertical">
            {{-- @include('admin.pages.chat.partials.components.chat_contact') --}}
            @include('admin.pages.chat.partials.components.empty_chat_contact')
          </div>
        </div>
        {{-- <form class="contacts-search-wrapper">
          <div class="form-group mb-0 position-relative d-md-none d-lg-block w-100 h-100"><input class="form-control form-control-sm chat-contacts-search border-0 h-100" type="text" placeholder="Search contacts ..." /><span class="fas fa-search contacts-search-icon"></span></div><button class="btn btn-sm btn-transparent d-none d-md-inline-block d-lg-none"><span class="fas fa-search fs-10"></span></button>
        </form> --}}
      </div>
      <div class="tab-content card-chat-content" id="chat-container">

      </div>
      {{-- @include('admin.pages.chat.partials.components.chat_content') --}}
    </div>
  </div>

{{-- modals  --}}*

@include('admin.pages.chat.partials.components.new_chat_modal')



  {{-- script --}}

