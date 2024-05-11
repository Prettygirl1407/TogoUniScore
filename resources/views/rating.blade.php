@extends('base')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Notation</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Notation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Rating Start -->
    <form action="{{route('university.update', $university->id)}}" method="POST">
    @csrf
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Votre avis compte</h6>
                    <h1 class="mb-5">Notez {{$university->name}} en fonction des critères suivants</h1>
                </div>
                <div class="row g-4">

                    <!-- Enseignement -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                                </div>
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <select id="quality" name="quality" class="form-select">
                                    <option value="1">Satisfait 😊</option>
                                    <option value="0">Moyen 😐</option>
                                    <option value="-1">Insatisfait ☹️</option>
                                </select>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Qualité de l'enseignement</h5>
                                <!-- <small>Designation</small> -->
                            </div>
                        </div>
                    </div>

                    <!-- Infrastructure -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa-solid fa-building" style="color: #06bbcc; font-size: 3em;"></i>
                                </div>
                            </div><br>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <select id="building" name="building" class="form-select">
                                    <option value="1">Satisfait 😊</option>
                                    <option value="0">Moyen 😐</option>
                                    <option value="-1">Insatisfait ☹️</option>
                                </select>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">L'infrastructures</h5>
                                <!-- <small>Designation</small> -->
                            </div>
                        </div>
                    </div>

                    <!-- Recherches -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa-solid fa-magnifying-glass" style="color: #06bbcc; font-size: 3em;"></i>
                                </div>
                            </div><br>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <select id="search" name="search" class="form-select">
                                    <option value="1">Satisfait 😊</option>
                                    <option value="0">Moyen 😐</option>
                                    <option value="-1">Insatisfait ☹️</option>
                                </select>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">La recherche</h5>
                                <!-- <small>Designation</small> -->
                            </div>
                        </div>
                    </div>

                    <!-- Insertion -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa-solid fa-user-tie" style="color: #06bbcc; font-size: 3em;"></i>
                                </div>
                            </div><br>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <select id="insertion" name="insertion" class="form-select">
                                    <option value="1">Satisfait 😊</option>
                                    <option value="0">Moyen 😐</option>
                                    <option value="-1">Insatisfait ☹️</option>
                                </select>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">L'insertion professionnelle</h5>
                                <!-- <small>Designation</small> -->
                            </div>
                        </div>
                    </div>

                    <!-- Ecolage -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa-solid fa-coins" style="color: #06bbcc; font-size: 3em;"></i>
                                </div>
                            </div><br>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <select id="tuition" name="tuition" class="form-select">
                                    <option value="1">Satisfait 😊</option>
                                    <option value="0">Moyen 😐</option>
                                    <option value="-1">Insatisfait ☹️</option>
                                </select>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Frais de scolarité</h5>
                                <!-- <small>Designation</small> -->
                            </div>
                        </div>
                    </div>

                    <!-- Opportunite -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa-solid fa-plane-arrival" style="color: #06bbcc; font-size: 3em;"></i>
                                </div>
                            </div><br>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <select id="opportunity" name="opportunity" class="form-select">
                                    <option value="1">Satisfait 😊</option>
                                    <option value="0">Moyen 😐</option>
                                    <option value="-1">Insatisfait ☹️</option>
                                </select>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Opportunité de bourses</h5>
                                <!-- <small>Designation</small> -->
                            </div>
                        </div>
                    </div>

                    <!-- Professeurs -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa-solid fa-chalkboard-user" style="color: #06bbcc; font-size: 3em;"></i>
                                </div>
                            </div><br>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <select id="teacher" name="teacher" class="form-select">
                                    <option value="1">Satisfait 😊</option>
                                    <option value="0">Moyen 😐</option>
                                    <option value="-1">Insatisfait ☹️</option>
                                </select>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Niveau des professeurs</h5>
                                <!-- <small>Designation</small> -->
                            </div>
                        </div>
                    </div>

                    <!-- Geographique -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa-solid fa-map-location-dot" style="color: #06bbcc; font-size: 3em;"></i>
                                </div>
                            </div></br>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <select id="geographic" name="geographic" class="form-select">
                                    <option value="1">Satisfait 😊</option>
                                    <option value="0">Moyen 😐</option>
                                    <option value="-1">Insatisfait ☹️</option>
                                </select>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Situation géographique</h5>
                                <!-- <small>Designation</small> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Soumettre</button>
        </div>
    </form>
    <!-- Rating End -->
@endsection