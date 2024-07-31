@extends('admin.components.app')

@section('page_content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Messagérie</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jadern</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <!-- end row-->

    <div class="row" >
        <div class="col-12" >
            @include('admin.pages.chat.partials.chat_card')
        </div>
    </div>
{{-- match list hier  --}}
{{-- @include('admin.pages.chat.partials.chat_card') --}}
    <!--end row-->



    <!--end row-->

</div> <!-- container-fluid -->
@endsection


@section('page_script')
<script src="/admin_assets/chat/vendors/popper/popper.min.js"></script>
<script src="/admin_assets/chat/vendors/bootstrap/bootstrap.min.js"></script>
<script src="/admin_assets/chat/vendors/anchorjs/anchor.min.js"></script>
<script src="/admin_assets/chat/vendors/is/is.min.js"></script>
<script src="/admin_assets/chat/vendors/glightbox/glightbox.min.js"></script>
<script src="/admin_assets/chat/vendors/emoji-mart/browser.js"></script>
<script src="/admin_assets/chat/vendors/fontawesome/all.min.js"></script>
<script src="/admin_assets/chat/vendors/lodash/lodash.min.js"></script>
<script src="/admin_assets/chat/vendors/list.js/list.min.js"></script>
<script src="/admin_assets/chat/js/chat_vendor.js"></script>
<script src="/admin_assets/chat/js/chat.js"></script>
@endsection
