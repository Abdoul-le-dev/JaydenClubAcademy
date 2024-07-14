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


    <!-- end row-->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter un membre du staff</h4>
                    <p class="card-subtitle mb-4">Ajouter un nouveau membre</p>
                    <form method="POST" action="{{route('dashboard.officiel.new.create')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                        @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger bg-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
            <div class="alert alert-success m-2">{{ session('success') }}</div>
            @endif

                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" value="{{old('nom')}}" name="nom" id="nom" placeholder="Nom du membre" required="">
                            <div class="valid-tooltip">
                              Bon travail!
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="prenom">Prénoms</label>
                            <input type="text" class="form-control" value="{{old('prenom')}}" id="prenom" name="prenom" placeholder="Prénoms du membre" required="">
                            <div class="valid-tooltip">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                              </div>
                              <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="Email du membre" aria-describedby="validationTooltipUsernamePrepend" required="">
                              <div class="invalid-tooltip">
                                Veuillez entrer le mail du joueur.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Fonction</label>
                                <input type="text" name="fonction" value="{{old('fonction')}}" class="form-control" placeholder="La fonction du membre" required>
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="telephone">Telephone</label>
                            <input type="text" class="form-control" value="{{old('telephone')}}" id="telephone" name="telephone" placeholder="Telephone du membre" required="">
                            <div class="valid-tooltip">
                              Bon travail!
                            </div>
                          </div>




                          <div class="col-md-12 mb-3">
                            <label for="photo">Photo du membre</label>
                            <input type="file" class="dropify" accept="images/*" data-label="Selectionner la photo du membre" id="photo" name="photo" data-height="300"  required="">
                            <div class="valid-tooltip">
                              Bon travail!
                            </div>
                          </div>
                        </div>

                        <button class="btn btn-primary waves-effect waves-light" type="submit">Créer le membre</button>
                      </form>

                </div> <!-- end card-body-->
            </div> <!-- end card -->
        </div> <!-- end col-->
    </div>



    <!--end row-->



    <!--end row-->

</div> <!-- container-fluid -->
@endsection
@section('page_script')
<script src="/admin_assets/assets/pages/validation-demo.js"></script>
<script src="/admin_assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="/admin_assets/assets/pages/advanced-plugins-demo.js"></script>
<!--dropify-->
<script src="/admin_assets/plugins/dropify/dropify.min.js"></script>

<!-- Init js-->
<script src="/admin_assets/assets/pages/fileuploads-demo.js"></script>

@endsection
