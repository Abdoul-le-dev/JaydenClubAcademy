<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h4 class="card-title">Utilisateurs</h4>
                <p class="card-subtitle mb-4 font-size-13">Liste des utilisateurs de la plateforme
                </p>
            </div>
            <div>
                @include('admin.pages.accounts.partials.add_user_modal')
            </div>
        </div>



        <div class="table-responsive">
            <table class="table table-centered table-striped table-nowrap mb-0">
                <thead>
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                    <tr>
                        <td class="table-user">
                            <a href="javascript:void(0);" class="text-body font-weight-semibold"> {{$user->nom}} {{$user->prenom}} </a>
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            {{$user->getRole()}}
                        </td>
                        <td>
                            <div class="d-flex gap-4 flex-wrap">
                                @include('admin.pages.accounts.partials.update_user_modal')
                                @if ($user->id!=Auth::user()->id)
                                @include('admin.pages.accounts.partials.delete_user_modal')
                                @endif
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
