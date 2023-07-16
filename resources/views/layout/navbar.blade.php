
<nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('accueil.index')}}"><span>Bijoux_Yaye</span></a>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                <!-- Dans le href nous avions mis le lien qui mene vers la page accueil avec laravel --> 
                    <a class="nav-link" href="{{route('accueil.index')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <!-- Dans le href nous avions mis le lien qui mene vers la page accueil avec laravel suivi de redirection dans la section #prod -->
                    <a class="nav-link" href="{{route('accueil.index')}}#prod">Produit</a>
                </li>
                <li class="nav-item">
                  <!-- Dans le href nous avions mis le lien qui mene vers la page accueil avec laravel suivi de redirection dans la section #events -->
                    <a class="nav-link " href="{{route('accueil.index')}}#events">Evenement</a>
                </li>
                <li class="nav-item">
                  <!-- Dans le href nous avions mis le lien qui mene vers la page index avec laravel suivi de redirection dans la section #contact -->
                    <a class="nav-link active" aria-current="page" href="{{route('accueil.index') }}#contact" >contact</a>
                </li>
                <li class="nav-item">
                         <!-- Dans le href nous avions mis le lien qui mene vers la page index avec laravel  -->

                    <a class="nav-link active" aria-current="page" href="{{route('Commande.index')}}">
                        <img src="icon/shopping.png" alt=""> 
                    </a>
                </li>
            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
</nav>
