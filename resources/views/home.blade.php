@extends('layouts.app')

@section('content')


        <div class="container py-4 wow fadeInUp">
            <div class="text-center">
                <h4 class="section-title bg-white text-center text-dark px-3 wow fadeInUp" data-wow-delay="1s">Dashboard</h4>
            </div>

            <div class="container-xxl py-5">
                <!-- Área Principal -->
                <p></p>
                <main class="container-xxl py-5 wow fadeInUp">
                    <div class="row d-flex justify-content-center">
                        <!-- Cards -->
                        <div class="col-md-4 animated">
                            <div class="card card-small">
                                <img src="{{ asset('img/cliente.jpg') }}" class="card-img-top img-fluid" alt="Card 1">
                                <div class="card-body ">
                                    <h5 class="card-title text-center wow fadeInUp" data-wow-delay="0.2s">Client</h5>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('clients.index') }}" class="btn btn-primary btn-sm float-end">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-smal animated">
                                <img src="{{ asset('img/calendario.jpg') }}" class="card-img-top img-fluid" alt="Card 5">
                                <div class="card-body">
                                    <h5 class="card-title text-center wow fadeInUp" data-wow-delay="0.4s">Reservations</h5>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('reservations.index') }}" class="btn btn-primary btn-sm float-end">Settings</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-small">
                                <img src="{{ asset('img/mesas.jpg') }}" class="card-img-top img-fluid" alt="Card 2">
                                <div class="card-body">
                                    <h5 class="card-title text-center wow
                                    fadeInUp" data-wow-delay="0.6s">Desks</h5>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('desk.index') }}" class="btn btn-primary btn-sm float-end">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p></p>
                        <p></p>
                        <div class="col-md-4">
                            <div class="card card-small">
                                <img src="{{ asset('img/ctt1.jpg') }}" class="card-img-top img-fluid" alt="Card 4">
                                <div class="card-body">
                                    <h5 class="card-title text-center wow fadeInUp" data-wow-delay="0.8s">Buildings</h5>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('buildings.index') }}" class="btn btn-primary btn-sm float-end">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/mapaa.jpg') }}" class="card-img-top img-fluid" alt="Card 3">
                                <div class="card-body">
                                    <h5 class="card-title text-center wow fadeInUp" data-wow-delay="1s">Cities</h5>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('cities.index') }}" class="btn btn-primary btn-sm float-end">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('img/regiaoo.webp')}}" class="card-img-top img-fluid" alt="Card 5">
                                <div class="card-body">
                                    <h5 class="card-title text-center wow fadeInUp" data-wow-delay="1.2s">Regions</h5>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('region.index') }}" class="btn btn-primary btn-sm float-end">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>


    </div>
@endsection
