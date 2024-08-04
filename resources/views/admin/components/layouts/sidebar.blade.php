<div class="vertical-menu">

    <div data-simplebar="" class="h-100">

        <div class="navbar-brand-box">
            <a class='logo' href='index.htm'>
                <i class="mdi mdi-album"></i>
                <span>
                    JAYDEN
                </span>
            </a>
        </div>

        @php
            $user=Auth::user();
        @endphp

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a class='waves-effect titre2' href='{{route('dashboard.view')}}'><i class="mdi mdi-home-analytics"></i><span class="badge badge-pill badge-primary float-right">7</span><span>Dashboard</span></a>
                </li>
                @if ($user->role==3)
                <li>
                    <a class='waves-effect titre2' href='{{route('dashboard.joueurs')}}'><i class="mdi mdi-account"></i><span>Joueurs</span></a>
                </li>
                <li>
                    <a class='waves-effect titre2' href='{{route('dashboard.officiel.view')}}'><i class="mdi mdi-account"></i><span>Membres</span></a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect titre2 "><i class="mdi mdi-diamond-stone"></i><span>Match</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href='{{route('dashboard.match.new.view')}}' class="titre3">Ajouter un match</a></li>
                        <li><a href='{{route('dashboard.match.view')}}' class="titre3">Liste des matches</a></li>

                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect titre2 "><i class="mdi mdi-diamond-stone"></i><span>Blog</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href='{{route('admin-blog-add')}}' class="titre3">Ajouter un article</a></li>
                        <li><a href='{{route('admin-blog')}}' class="titre3">Liste des article</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect titre2"><i class="mdi mdi-diamond-stone"></i><span>Galerie</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href='{{route('galerie-add')}}' class="titre3">Ajouter </a></li>
                        <li><a href='{{route('galerie-view')}}' class="titre3">Photo Video</a></li>

                    </ul>
                </li>

                <li>
                    <a class='waves-effect titre2' href='{{route('recrutement-liste')}}'><i class="mdi mdi-account"></i><span>Recrutement</span></a>
                </li>
                <li>
                    <a class='waves-effect titre2' href='{{route('contact-liste')}}'><i class="mdi mdi-account"></i><span>Contact</span></a>
                </li>



                <li>
                    <a class='waves-effect titre2' href='{{route('dashboard.accounts.view')}}'><i class="mdi mdi-account-group"></i><span>Comptes</span></a>
                </li>
                @endif
                @if ($user->role==0)

                @endif
                <li>
                    <a class='waves-effect titre2' href='{{route('dashboard.chat.view')}}'><i class="mdi mdi-chat"></i><span>Messagerie</span></a>
                </li>
                <li>
                    <a class='waves-effect titre2' href='{{route('dashboard.profil.view')}}'><i class="mdi mdi-account"></i><span>Profil</span></a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
