@extends('base')

@section('container')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Bienvenue sur TogoEduScore</h5>
                                <h1 class="display-3 text-white animated slideInDown">votre source fiable de classements universitaires au Togo.</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Découvrez les meilleures institutions basées sur les avis authentiques des étudiants et des experts.</p>
                                <a href="{{ route('about') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Voir plus</a>
                                <a href="{{ route('raking') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Notez les Universités dès maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Explorez le paysage universitaire du Togo avec TogoEduScore</h5>
                                <h1 class="display-3 text-white animated slideInDown">Un système de notation unique vous permettant de façonner les classements en fonction de critères essentiels</h1>
                                <a href="{{ route('about') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Voir plus</a>
                                <a href="{{ route('raking') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Notez les Universités dès maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Des universités reconnus</h5>
                            <p>Découvrez une sélection d'universités d'élite sur notre plateforme.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Une évaluation internationale</h5>
                            <p>Une diversité d'avis et de notations provenant du monde entier.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Accès complet depuis chez vous</h5>
                            <p>Accédez à toutes les informations universitaires depuis chez vous.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Votre avis compte</h5>
                            <p>Grâce à notre système de notation. Notez les universités selon des critères.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">A propos de nous</h6>
                    <h1 class="mb-4">Bienvenue à TogoUniScore</h1>
                    <p class="mb-4">TogoUniScore est une plateforme innovante qui propose un système de notation pour évaluer et classer les universités. Avec des fonctionnalités interactives, elle offre une vision complète du paysage éducatif du Togo.</p>
                    <p class="mb-4">Découvrez notre fonctionnalité de notation qui repose sur des critères professionnels tels que la qualité de l'enseignement, les infrastructures, la recherche et l'insertion professionnelle. Grâce à cette approche rigoureuse, TogoUniScore vous offre une évaluation précise et complète des universités du Togo, vous permettant de prendre des décisions éclairées pour votre avenir académique.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Classement des meilleurs Universités du Togo</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Toutes les universités du pays classées par catégorie</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Un système de notation très puissant </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Un système de notation très puissant </p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('about') }}">Voir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- raking Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Le Top trois</h6>
                <h1 class="mb-5">Meilleures universités du Togo</h1>
            </div>
            <div class="row g-4 justify-content-center">

                @foreach($topUniversities as $university)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <form method="POST">
                                    <a href="{{ route('university.show', $university->id) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">Détail</a>
                                </form>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">{{ $university->tuition }}</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>{{$university->marks}} point(s)</small>
                            </div>
                            <h5 class="mb-4">{{ $university->name }}</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>{{ $university->headmaster }}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{ $university->create_date }}</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$university->population}}</small>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <a class="btn btn-primary py-3 px-3 mt-2" href="{{ route('raking') }}">Voir plus</a>
    </div>
    <!-- raking End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Avis et Commentaire</h6>
                <h1 class="mb-5">Ceux que nos utilisateurs disent!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Veronique</h5>
                    <p>Etudiant</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jean</h5>
                    <p>Etudiant</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Claude</h5>
                    <p>Professeur</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Andre</h5>
                    <p>Professeur</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    @endsection