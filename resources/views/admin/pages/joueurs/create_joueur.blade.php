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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter un joueur</h4>
                    <p class="card-subtitle mb-4">Ajouter un nouveau en quelques clics.</p>
                    <form method="POST" action="{{route('dashboard.joueurs.new.create')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" value="{{old('nom')}}" name="nom" id="nom" placeholder="Nom du joueur" required="">
                            <div class="valid-tooltip">
                              Bon travail!
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="prenom">Prénoms</label>
                            <input type="text" class="form-control" value="{{old('prenom')}}" id="prenom" name="prenom" placeholder="Prénoms du joueur" required="">
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
                              <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="Email du joueur" aria-describedby="validationTooltipUsernamePrepend" required="">
                              <div class="invalid-tooltip">
                                Veuillez entrer le mail du joueur.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Date de naissance</label>
                                <input type="date" name="date_de_naissance" value="{{old('date_de_naissance')}}" class="form-control" required>
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="nationalite">Nationalité</label>
                            <input type="text" class="form-control" value="{{old('nationalite')}}" id="nationalite" name="nationalite" placeholder="Nationalité du joueur" required="">
                            <div class="valid-tooltip">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="numero">Numero de maillot</label>
                            <input type="number" class="form-control" id="numero" value="{{old('numero')}}" name="numero" placeholder="Numero du joueur" required="">
                            <div class="valid-tooltip">
                              Bon travail!
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="position_sur_terrain">Position sur terrain</label>
                            <input type="text" class="form-control" value="{{old('position_sur_terrain')}}" id="position_sur_terrain" name="position_sur_terrain" placeholder="Position  du joueur" required="">
                            <div class="valid-tooltip">
                              Bon travail!
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="style_du_jeu">Style du jeu</label>
                            <input type="text" class="form-control" value="{{old('style_du_jeu')}}" id="style_du_jeu" name="style_du_jeu" placeholder="Style du jeu">
                            <div class="valid-tooltip">
                              Bon travail!
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="objectif">Objectifs</label>
                            <textarea class="form-control" id="objectif"  name="objectif" placeholder="Objectifs du jeu">{{old('objectif')}}</textarea>
                            <div class="valid-tooltip">
                              Bon travail!
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="photo">Photo du joueur</label>
                            <input type="file" class="dropify" accept="images/*" data-label="Selectionner la photo du joueur" id="photo" name="photo" data-height="300"  required="">
                            <div class="valid-tooltip">
                              Bon travail!
                            </div>
                          </div>
                        </div>

                        <button class="btn btn-primary waves-effect waves-light" type="submit">Créer joueur</button>
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
