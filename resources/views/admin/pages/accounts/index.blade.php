@extends('admin.components.app')

@section('page_css')

@endsection

@section('page_content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Joueurs</h4>

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
    <div class="row">
        <div class="col-12">
           @include('admin.pages.accounts.partials.user_list');
        </div>
    </div>



    <!--end row-->



    <!--end row-->

</div> <!-- container-fluid -->
@endsection

