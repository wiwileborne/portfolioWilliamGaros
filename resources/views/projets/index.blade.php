

@extends('Base/layout')
@section('content')
<div class="container my-5">


  <!-- Section: Block Content -->
  <section class="dark-grey-text text-center">

    <h3 class="font-weight-bold mb-4 pb-2">Mes Projets</h3>
    <p class="text-muted w-responsive mx-auto mb-5">Les différents projets rassemble des PPE faits en cours, des projets faits en entreprise au cours de stage mais aussi des projets comlétement personnelle.</p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-4">

        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" class="img-fluid" alt="Sample project image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <div class="px-3 pt-3 mx-1 mt-1 pb-0">
          <h4 class="font-weight-bold mt-1 mb-3">PPE Gestion Eau</h4>
          <p class="text-muted">Ce Projet a été réalisé au cours de ma seconde année d'étude et a pour but de gérer ou de contrôler à l'aide d'un site web et d'une application mobile l'ensemble des informations d'eau de plusieurs communes.</p>
          <a class="btn btn-indigo btn-sm btn-rounded" href="{{ url('/GestEau') }}"><i class="fas fa-clone left"></i>Voir les détaille du Projet</a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" class="img-fluid" alt="Sample project image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <div class="px-3 pt-3 mx-1 mt-1 pb-0">
          <h4 class="font-weight-bold mt-1 mb-3">Stage 2nd Année BTS</h4>
          <p class="text-muted">Le But de ce stage était de récupérer des informations automatiquement sur certain site web (PDF dans ce cas) et ce n'est pas toujours facile, venez découvrir les informations essentielles à retenir..</p>
          <a class="btn btn-indigo btn-sm btn-rounded" href="{{ url('/Stage') }}"><i class="fas fa-clone left"></i>Voir les détaille du Projet</a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/images/88.jpg" class="img-fluid" alt="Sample project image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <div class="px-3 pt-3 mx-1 mt-1 pb-0">
          <h4 class="font-weight-bold mt-1 mb-3">Autre Idées</h4>
          <p class="text-muted">Je sais pos encore.</p>
          <a class="btn btn-indigo btn-sm btn-rounded" href="#"><i class="fas fa-clone left"></i>Voir les détaille du Projet</a>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!-- Section: Block Content -->


</div>

@stop