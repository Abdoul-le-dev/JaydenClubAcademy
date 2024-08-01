<div class="card">
    <div class="card-body">
        <h4 class="card-title">Modfier votre profil</h4>
        <form method="POST" action="{{route('dashboard.profil.update')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
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

<div class="row">
    <div class="col-md-12 mb-3">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" value="{{$user->nom}}"  name="nom" id="nom" placeholder="Nom de l'utilisateur" required="">
    </div>

    <div class="col-md-12 mb-3">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control"  value="{{$user->prenom}}" name="prenom" id="prenom" placeholder="Prenom de l'utilisateur" required="">
    </div>
    <div class="col-md-12 mb-3">
        <label for="nom">Email</label>
        <input type="text" class="form-control" value="{{$user->email}}"  name="email" id="email" placeholder="Email de l'utilisateur" required="">
    </div>
    <div class="col-md-12 mb-3">
        <label for="role">Role</label>
        <select name="role" disabled class="form-control" id="role">
            <option  @if ($user->role=='1') @selected(true)  @endif value="1">Joueur</option>
            <option @if ($user->role=='2') @selected(true)  @endif value="2">Staff</option>
            <option @if ($user->role=='3') @selected(true)  @endif value="3">Admin</option>
            <option @if ($user->role=='0') @selected(true)  @endif value="0">Autre</option>
        </select>
    </div>
</div>

            <button class="btn btn-primary waves-effect waves-light" type="submit">Modifier</button>
          </form>

    </div> <!-- end card-body-->
</div>
