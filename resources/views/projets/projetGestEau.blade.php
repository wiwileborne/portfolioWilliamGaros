

@extends('Base/layout')
@section('content')
<div class="container my-5">

    <h4 class ="text-center ">Compétence</h4>
    <!--Section: Skill-->
    <section class="dark-grey-text py-4">
        <!--Skill row-->
        <div class="row">
            <!--First column-->
            <div class="col-lg-5 mb-4">
                <!-- Nav tabs -->
                <ul class="nav flex-column mx-0" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" data-toggle="tab" href="#panel141" role="tab">| A1.4.1 | Participation à un projet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" data-toggle="tab" href="#panel412" role="tab">| A4.1.2 | Conception ou adaptation de l'interface utilisateur d'une solution applicative</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" data-toggle="tab" href="#panel413" role="tab">| A4.1.3 |  Conception ou adaptation d'une base de  données</a>
                    </li>
<!--                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" data-toggle="tab" href="#panel521" role="tab">| A5.2.1 | Exploitation des référentiels, normes et standards adoptés par le prestataire</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" data-toggle="tab" href="#panel524" role="tab">| A5.2.4 | Étude d’une technologie, d'un composant, d'un outil ou d'une méthode</a>
                    </li>
                </ul>
                <!-- Nav tabs -->
            </div>
            <!--First column-->
            <!--Second column -->
            <div class="col-lg-7 mb-4 align-self-center text-center text-lg-left">
                <!--Tab panels-->
                <div class="tab-content text-center">

                    <!--Panel 1-->
                    <div class="tab-pane fade show in active" id="panel141" role="tabpanel">
                        <img class="img-fluid center-block" src="{{ asset('img/bucket.png') }}" alt="Sample image">
                        <p class="text-center font-weight-bold text-muted my-4">
                            En Collaboration avec <a href="#">Nicolas Bertrand</a>.
                        </p>
                    </div>
                    <!--Panel 1-->

                    <!--Panel 2-->
                    <div class="tab-pane fade" id="panel412" role="tabpanel">
                        <p class="text-center font-weight-bold text-muted my-4">
                            <img class="img-fluid center-block" src="{{ asset('img/exSite2.png') }}" alt="Sample image">
                        <p class="text-center font-weight-bold text-muted my-4">
                            Conception du site internet.
                        </p>
                        </p>
                    </div>
                    <!--Panel 2-->

                    <!--Panel 3-->
                    <div class="tab-pane fade" id="panel413" role="tabpanel">
                        <h6 class="text-center font-weight-bold text-muted my-4">
                            Modéle de BDD SEG.
                        </h6>
                        <img class="img-fluid center-block" src="{{ asset('img/BDD.png') }}" alt="Sample image">
                        <div class="divider"></div>
                        <h6 class="text-center font-weight-bold text-muted my-4">
                            Modéle de BDD sqlite pour android.
                        </h6>
                        <img class="img-fluid center-block" src="{{ asset('img/BDDAndroid.jpg') }}" alt="Sample image">
                    </div>
                    <!--Panel 3-->

<!--                    Panel 4
                    <div class="tab-pane fade" id="panel521" role="tabpanel">
                        <p class="text-center font-weight-bold text-muted my-4">
                            d
                        </p>
                    </div>
                    Panel 4-->

                    <!--Panel 5-->
                    <div class="tab-pane fade" id="panel524" role="tabpanel">
                        <h6 class="text-center font-weight-bold text-muted my-4">
                            Apprentissage de Android Studio pour dévellopper una application
                        </h6>
                        <img class="img-fluid center-block" src="{{ asset('img/androidStudio.png') }}" alt="Sample image">
                    </div>
                    <!--Panel 5-->

                </div>
                <!--Tab panels-->
            </div>
            <!-- Second column -->
        </div>
        <!--Skill row-->
    </section>
    <!--End Section: Skill-->






    <div class="divider"></div>
    <h4 class ="text-center ">Version Web</h4>
    <!--Section: Content-->
    <section class="py-4"> 
        <!-- Grid row -->
        <div class="row">
            <div class="col-lg-10 mb-8">
                <p text-muted mb-4>La Version web a deux gros avantages, la disponibilité et la simplicité.</p>
                <p text-muted mb-4>Disponible partout où il y a de l'internet, le site web réponds aux besoins de l'entreprise SEG, Ajouts, Consultations et Vérification.
                    <br>Avec son interface très épuré de toutes informations inutiles, le nouvel agent qui intègre SEG pourra facilement se retrouver .</p>
            </div>
        </div> 
        <!-- Grid row -->
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-lg-5 mb-4">

                <!-- Featured image -->
                <div class="view overlay mb-4">
                    <img class="img-fluid center-block" src="{{ asset('img/Site.png') }}" alt="Sample image">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Grid column -->
            <div class="col-lg-7 mb-4 align-self-center text-lg-left">

                <!-- Grid column -->
                <div>
                    <div class="py-4">

                        <div id="carouselWebIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselWebIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselWebIndicators" data-slide-to="1"></li>

                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="center-block w-50" src="{{ asset('img/exSite1.png') }}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <!--    <h5>Title</h5>
                                            <p class="center-block w-35">TEXT.</p>-->
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="center-block w-50" src="{{ asset('img/exSite2.png') }}" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <!--    <h5>Title</h5>
                                            <p class="center-block w-35">TEXT.</p>-->
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselWebIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselWebIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div> 
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="pl-lg-10">

                    <h2 class="h3 mb-4">Fonctionnalités</h2>
                    <p class="text-muted mb-4">La version Web permet plusieurs chose, on peut :</p>
                    <ul>
                        <li>Voir les Communes</li>
                        <li>Voir les Secteurs d'une Commune</li>
                        <li>Consulter les anomalies plus ou moins génantes</li>
                        <li>Ajouter des relevés</li>
                    </ul>

                    <button type="button" class="btn btn-outline-dark waves-effect btn-md">Se rendre sur le site</button>

                </div>
                <!-- Grid column -->

            </div>

        </div>
        <!-- Grid row -->

    </section>







    <div class="divider"></div>
    <h4 class ="text-center pt-3 py-4">Version Mobile</h4>
    <!--Section: Content-->
    <section class="py-4">
        <!-- Grid row -->
        <div class="row">
            <div class="col-lg-10 mb-8">
                <p text-muted mb-4>Une Version Mobile a été prévue par les professeurs dans le cahier des charges afin de simplifier le relevé des compteurs par les agents.</p>
                <p text-muted mb-4>L'application mobile est prévu pour fonctionner sans internet afin que les communes sans internet ne puissent poser problème aux agents, puis, quand internet est de nouveau disponible, de mettre à jour les relevés en exportant ces derniers.</p>
            </div>
        </div> 
        <!-- Grid row -->
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-lg-5 mb-4">

                <!-- Featured image -->
                <div class="view overlay mb-4">
                    <img class="img-fluid w-50 center-block" src="{{ asset('img/telApk.png') }}" alt="Sample image">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Grid column -->
            <div class="col-lg-7 mb-4 align-self-center text-center text-lg-left">
                <!-- Grid column -->
                <div>
                    <div class="py-4">

                        <div id="carouselMobileIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselMobileIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselMobileIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselMobileIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="center-block w-50" src="{{ asset('img/ex1.png') }}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <!--    <h5>Title</h5>
                                            <p class="center-block w-35">TEXT.</p>-->
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="center-block w-50" src="{{ asset('img/ex2.png') }}" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <!--    <h5>Title</h5>
                                             <p class="center-block w-35">TEXT.</p>-->
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="center-block w-50" src="{{ asset('img/ex3.png') }}" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <!--    <h5>Title</h5>
                                            <p class="center-block w-35">TEXT.</p>-->
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselMobileIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselMobileIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div> 
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div>

                    <h2 class="h3 mb-4">Fonctionnalités</h2>
                    <p class="text-muted mb-4">L'application mobile permet de consulter les relevés des vannes mes aussi d'en ajouter si ceux si ne sont pas disponible.</p>
                    <p class="text-muted mb-4">Il est fortement possible que l'import est l'export ne fonctionne pas car je n'est pas mis en ligne la base de données, cependant, la base de données de l'application est préremplie afin de pouvoir tester les fonctionnaliter local</p>
                    <p class="text-muted mb-3">(Pas Disponible pour l'instant)</p>
                    <button type="button" class="btn btn-outline-dark waves-effect btn-md"><i class="fab fa-google-play fa-lg pr-1"></i>Télécharger l'APK</button>

                </div>
                <!-- Grid column -->

            </div>

        </div>
        <!-- Grid row -->

    </section>
    <!--Section: Content-->


</div>

@stop






