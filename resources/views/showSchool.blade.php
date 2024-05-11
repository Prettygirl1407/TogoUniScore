@extends('base')

@section('container')
<!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Université</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Détail</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">&</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Découverte</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<!-- Header End -->
<!-- Detail Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Qui sommes nous ?</h6>
                    <h1 class="mb-4">Bienvenue à {{$university->name}}</h1>
                    <p class="mb-4">{{$university->label}}</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>{{ $university->headmaster }}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{ $university->create_date }}</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$university->population}} etudiants</small>
                        </div>
                    </div>

                    @if (Route::has('login'))
                        @auth
                            <form method="POST">
                                <a href="{{ route('university.edit', $university->id) }}" class="btn btn-primary py-3 px-5 mt-2" href="#">Noter {{$university->name}}</a>
                            </form>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary py-3 px-5 mt-2" href="#">Connectez vous afin de noter {{$university->name}}</a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->
@endsection