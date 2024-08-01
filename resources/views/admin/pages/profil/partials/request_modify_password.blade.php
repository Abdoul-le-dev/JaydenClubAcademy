
<form action="{{route('dashboard.profil.update.password')}}" method="post">
    @csrf
    <div class="card h-100">
        <div class="card-body d-flex flex-column justify-content-center h-100">
        <h4 class="card-title">Modfier mot de passe</h4>

            <p>
               En cliquant sur ce bouton vous recevrez  un lien dans votre boite mail pour pouvoir changer votre mot de passe.
             </p>
             <button  class="btn btn-primary" type="submit" >Changer Mot de passe</button>

        </div>
    </div>
</form>


