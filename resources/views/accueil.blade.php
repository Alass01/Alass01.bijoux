@extends('layout.app')

@push('styles')
<style>

/* le code du stle */

</style>
@endpush

@section('contenu')
    <header>
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://cdn.pixabay.com/photo/2022/08/16/04/52/jewel-7389356_960_720.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bijoux_Yaye</h5>
                    <p>Une boutiaue en Une boutique de vente de bijoux est un endroit où les clients peuvent acheter des bijoux en argent, or, platine, et éventuellement des pierres précieuses et fines..</p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://images.pexels.com/photos/4711886/pexels-photo-4711886.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ARTICLE POPULAIRE</h5>
                    <p>Les bijoux vendus peuvent inclure des colliers, des bracelets, des boucles d'oreilles, des bagues, des pendentifs, et d'autres articles. Les bijoux peuvent être fabriqués à la main ou en série, et peuvent être de différents styles, tels que classique, moderne, ou de mode..</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://images.pexels.com/photos/8398842/pexels-photo-8398842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PROMOTION</h5>
                    <p>SLes prix des bijoux vendus dans ces boutiques peuvent varier considérablement en fonction de la qualité, des matériaux utilisés, et de la marque..</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <!-- main start -->
    <main>

        <section   class="prod" id="prod">
            <div class="container">
                    <div class="title">
                        <h1>Produits</h1>
                    </div>
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Anneau</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Essentiels</button>                            
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">ordinaire</button>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            

                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                <div class="container">
                                    <div class="row ">
                                        @foreach($anneaus as $anneau)
                                            @if($loop->index <= 3)
                                                <div class="col-md-6 col-lg-3">
                                                    <a href="{{route('description',$anneau->id)}}">
                                                        <!-- ici on bouge la souris pour afficher le cachant -->
                                                        <div >
                                                            <img   src="{{ $anneau->img_url }}" alt="img">
                                                            <p>
                                                            {{ $anneau->nom }}
                                                            </p>

                                                            <span>{{ $anneau->prix }}FCFA</span>

                                                            <del>{{ $anneau->prix }}FCA</del>

                                                            <div class="ajout">
                                                                <button class="btn btn-outline-success" type="submit">AJOUTER AU PANIER</button>
                                                            </div>
                                                        </div>
                                                            <!-- ici on affiche le texte cacher -->                                                   
                                                    </a>
                                                </div> 
                                            @endif

                                        @endforeach

                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabin class="row">
                                <div class="container">
                                    <div class="row ">
                                        @foreach($essentiels as $essentiel)
                                            <div class="col-md-6 col-lg-3">
                                                <a href="{{route('description',$essentiel->id)}}">
                                                        <div class="imgajout">
                                                            <img src="{{ $essentiel->img_url }}" alt="img">
                                                            <p>
                                                                {{ $essentiel->nom }}
                                                            </p>
                                                            <span>{{ $essentiel->prix }}FCFA</span>

                                                            <del>{{ $essentiel->prix }}FCA</del>

                                                            <div class="ajout">
                                                                <button class="btn btn-outline-success" type="submit">AJOUTER AU PANIER</button>
                                                            </div>
                                                        </div>      
                                                </a>
                                            </div> 
                                        @endforeach 
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                                <div class="container ">
                                    <div class="row ">
                                        @foreach($oridinaires as $oridinaire)        
                                            <div class="col-md-6 col-lg-3">
                                                <a href="{{route('description',$oridinaire->id)}}">
                                                    <div class="imgajout">
                                                        <img src="{{ $oridinaire->img_url }}" alt="img">
                                                        <p>
                                                        {{ $oridinaire->nom }}
                                                        </p>
                                                        <span>{{ $oridinaire->prix }}FCFA</span>

                                                        <del>{{ $oridinaire->prix }}FCA</del>

                                                        <div class="ajout">
                                                            <button class="btn btn-outline-success" type="submit">AJOUTER AU PANIER</button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>  
                                        @endforeach 

                                    </div>        
                                </div>
                            </div>
                            <!-- ddd -->

                            <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                                <div class="container ">
                                    @foreach($oridinaires as $oridinaire)
                                        <div class="row ">
                                            <div class="col-md-6 col-lg-3">
                                                <a href="">
                                                    <div class="imgajout">
                                                        <img src="{{ $oridinaire->img_url }}" alt="img">
                                                        <p>
                                                        {{ $oridinaire->nom }}
                                                        </p>
                                                        <span>{{ $oridinaire->prix }}FCFA</span>

                                                        <del>{{ $oridinaire->prix }}FCA</del>
                                                        
                                                        <div class="ajout">
                                                            <button class="btn btn-outline-success" type="submit">AJOUTER AU PANIER</button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>  
                                        </div>
                                    @endforeach    
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- SECTION 2 START -->

        <section  class="events"  id="events">
            <div class="title">
                <h1>Evenement</h1>
            </div>
            <div class="container">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Mariage</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cadeaux</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Anniversaire</button>
                    </li>
                </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">      
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                            @foreach($mariages as $mariage)
                                <div class="col">
                                    <div class="p-3">
                                        <a href="{{route('description',$mariage->id)}}">
                                            <div class="imgajout">
                                                <img src="{{ $mariage->img_url }}" alt="img">
                                                <p>
                                                {{ $mariage->nom }}
                                                </p>
                                                <span>{{ $mariage->prix }}FCFA</span>
                                                <del>{{ $mariage->prix }}FCA</del>
                                                <div class="ajout">
                                                    <button class="btn btn-outline-success" type="submit">AJOUTER AU PANIER</button>
                                                </div>
                                            </div>
                                                
                                        </a>
                                    </div>
                                </div>
                            @endforeach    
                        </div>
                    </div>
                
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <div class="container text-center">
                    </div>      
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        @foreach($manches as $manche)
                            <div class="col">
                                <div class="p-3">
                                    <a href="{{route('description',$manche->id)}}">
                                        <div class="imgajout">
                                            <img src="{{ $manche->img_url }}" alt="img">
                                            <p>
                                                {{ $manche->nom }}
                                                </p>
                                                <span>{{ $manche->prix }}FCFA</span>

                                                <del>{{ $manche->prix }}FCA</del>
                                            <div class="ajout">
                                                <button class="btn btn-outline-success" type="submit">AJOUTER AU PANIER</button>
                                            </div>
                                        </div>
                                            
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade show " id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">      
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                            @foreach($annivs as $anniv)
                                <div class="col">
                                    <div class="p-3">
                                        <a href="{{route('description',$anniv->id)}}">
                                            <div class="imgajout">
                                                <img src="{{ $anniv->img_url }}" alt="img">
                                                <p>
                                                    {{ $anniv->nom }}
                                                    </p>
                                                    <span>{{ $anniv->prix }}FCFA</span>

                                                    <del>{{ $anniv->prix }}FCA</del>
                                                <div class="ajout">
                                                    <button class="btn btn-outline-success" type="submit">AJOUTER AU PANIER</button>
                                                </div>
                                            </div>
                                                
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                
            </div>   
        </ul>         

        </section>
        <!-- SECTION 2 END -->
    </main>
    <!-- main end -->

@stop

