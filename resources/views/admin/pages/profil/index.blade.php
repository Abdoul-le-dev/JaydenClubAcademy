@extends('admin.components.app')


@section('page_css')
        <!-- Dropify css -->

@endsection
@section('page_content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Membres</h4>

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
    @php
        $user=Auth::user();
    @endphp

    <!-- end row-->
    <div class="row">
        <div class="col-md-6">
           @include('admin.pages.profil.partials.update_profil_form')
        </div> <!-- end col-->
        <div class="col-md-6 h-full">
        @include('admin.pages.profil.partials.request_modify_password')
        </div>
    </div>



    <!--end row-->



    <!--end row-->

</div> <!-- container-fluid -->
@endsection
@section('page_script')
@endsection
