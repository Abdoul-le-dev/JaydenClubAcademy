@extends('admin.components.app')

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
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Joueurs</h4>
                            <p class="card-subtitle mb-4 font-size-13">Liste de vos joueurs
                            </p>
                        </div>
                        <div>
                            <a href="{{route('dashboard.joueurs.new.view')}}" class="btn btn-primary">Ajouter un joueur</a>
                        </div>
                    </div>



                    <div class="table-responsive">
                        <table class="table table-centered table-striped table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>Nom et prénom</th>
                                    <th>Email</th>
                                    <th>Date de naissance</th>
                                    <th>Nationalité</th>
                                    <th>Numero</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($joueurs as $joueur )
                                <tr>
                                    <td class="table-user">
                                        <img src="{{Storage::url($joueur->photo)}}" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold"> {{$joueur->nom}} {{$joueur->prenom}} </a>
                                    </td>
                                    <td>
                                        {{$joueur->email}}
                                    </td>
                                    <td>
                                        {{$joueur->date_de_naissance}}
                                    </td>
                                    <td>
                                        {{$joueur->nationalite}}
                                    </td>
                                    <td>
                                        {{$joueur->numero}}
                                    </td>
                                    <td>
                                        <div class="d-flex gap-4 flex-wrap">
                                            <a href="{{route('dashboard.joueurs.update.view',['id'=>$joueur->id])}}"  class="btn btn-warning me-3" >Modifier</a>
                                            <form action="{{ route('dashboard.joueurs.delete', $joueur->id) }}" method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger text-white px-4 py-2 rounded-lg">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach




                            </tbody>
                        </table>
                    </div>

                </div>
                <!--end card body-->

            </div>
        </div>
    </div>



    <!--end row-->



    <!--end row-->

</div> <!-- container-fluid -->
@endsection
