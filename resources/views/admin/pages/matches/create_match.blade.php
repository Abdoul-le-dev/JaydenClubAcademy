@extends('admin.components.app')
@section('page_css')
        <!-- Dropify css -->
        <link href="/admin_assets/plugins/dropify/dropify.min.css" rel="stylesheet" type="text/css">
@endsection
@section('page_content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Match</h4>

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


{{-- match list hier  --}}
 @include('admin.pages.matches.partials.create_match_form')
    <!--end row-->



    <!--end row-->

</div> <!-- container-fluid -->
@endsection
@section('page_script')
<script src="/admin_assets/assets/pages/validation-demo.js"></script>
<script src="/admin_assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
{{-- <script src="/admin_assets/assets/pages/advanced-plugins-demo.js"></script> --}}
<!--dropify-->
<script src="/admin_assets/plugins/dropify/dropify.min.js"></script>

<!-- Init js-->
<script src="/admin_assets/assets/pages/fileuploads-demo.js"></script>
<script src="/admin_assets/assets/js/match_team.js"></script>

@endsection
