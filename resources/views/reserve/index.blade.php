@extends('master.main')

<link href="{{ asset('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css')}}" rel="stylesheet">

<!-- Include the local jQuery UI library -->
<link rel="stylesheet" href="/path/to/jquery-ui.css">


@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="section-title bg-white text-center text-primary px-3">Regions</h3>
                <h1 class="mb-5"></h1>
            </div>
            @foreach($data as $dat)
                <div class="col-4 click1" data-id="{{ $dat->id }}">
                    <div class="col-lg-8 col-md-8 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid " src="{{ asset('img/' . $dat->region_image) }}" width="500"/>
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            </div>
                            <div class="text-center p-4">
                                <h4 class="click1" class="mb-0">{{$dat->description}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>
    <br>

    <div id="div1" style="display:none" class="container">
        <div class="row">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="section-title bg-white text-center text-primary px-3">Cities</h3>
                <h1 class="mb-5"></h1>
            </div>
            <div class="row box">


            </div>
        </div>
    </div>
    <br>
    <br>
    <div id="div2" style="display:none" class="container">
        <div class="row">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="section-title bg-white text-center text-primary px-3">Buildings</h3>
                <h1 class="mb-5"></h1>
            </div>
            <div class=" row box">


            </div>
        </div>
    </div>
    <br>
    <br>

    <div id="div3" style="display:none" class="container">
        <div class="row">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="section-title bg-white text-center text-primary px-3">Reservation</h3>
                <h1 class="mb-5"></h1>
            </div>

            <main class="d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    Choose table
                                </div>
                                <form method="post" action="{{ route('clientsdesk.store') }}"
                                      enctype="multipart/form-data">
                                    @foreach ($datauser->where('id', Auth::user()->id) as $dat)
                                        <input type="hidden" name="users_id" value="{{$dat->id}}">
                                        @endforeach

                                        <select name="reservations_id" id="reservations_id">
                                            @foreach($datareservations as $row)
                                                <option value="" disabled selected hidden>Schedule</option>
                                                <option value="{{$row->id}}" required>{{$row->name}}  </option>
                                            @endforeach
                                        </select>
                                        <label for="datepicker">Select a date:</label>
                                        <input type="text" id="datepicker" name="reservation_date" required>
                                        <div id="datepicker-calendar">
                                            <style>
                                                #datepicker-calendar {
                                                    display: none;
                                                }
                                            </style>
                                        </div>
                                        <div class="card-body row box">


                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary" value="Add">Reserve Desk</button>
                                        </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>


            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <script>
                $(function () {
                    $("#datepicker").datepicker({
                        dateFormat: "yy-mm-dd",
                        defaultDate: new Date(),
                        showOtherMonths: true,
                        selectOtherMonths: true
                    });

                    $("#show-calendar").click(function () {
                        $("#datepicker-calendar").toggle();
                    });
                });
            </script>


            <script>
                const cities = {!! json_encode($datacity) !!};
                const buildings = {!! json_encode($databuilding) !!};
                const desks = {!! json_encode($datadesk) !!};
                const users = {!! json_encode($datauser) !!};
                const reservations = {!! json_encode($datareservations) !!};


                $(document).ready(function () {
                    $(".click1").click(function () {
                        $("#div1").fadeIn("slow");

                        let idR = $(this).attr('data-id');
                        let citiesF = cities.filter(v => v.region_id == idR);

                        $("#div1 .box").html("");
                        $.each(citiesF, function (i, city) {
                            $("#div1 .box").append(`
                        <div class="col-4 click2" data-id="${city.id}">
                            <div class="col-lg-8 col-md-8 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item bg-light">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid " src="img/${city.cities_image}"
                                             width="500"/>
                                    </div>
                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                    </div>
                                    <div class="text-center p-4">
                                        <h4 class="mb-0">${city.description}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);

                        });

                        $(".click2").click(function () {
                            $("#div2").fadeIn("slow");

                            let idC = $(this).attr('data-id');
                            let buildingsF = buildings.filter(v => v.cities_id == idC);


                            $("#div2 .box").html("");
                            $.each(buildingsF, function (i, building) {
                                $("#div2 .box").append(`
                            <div class="col-4 click3" data-id="${building.id}">
                                <div class="col-lg-8 col-md-8 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item bg-light">
                                        <div class="overflow-hidden">
                                            <img class="img-fluid " src="img/${building.buildings_image}"
                                                 width="500"/>
                                        </div>
                                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                        </div>
                                        <div class="text-center p-4">
                                            <h4 class="mb-0">${building.description}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);

                            });

                            $(".click3").click(function () {
                                $("#div3").fadeIn("slow");

                                let idB = $(this).attr('data-id');
                                let deskF = desks.filter(v => v.building_id == idB);


                                $("#div3 .box").html("");
                                $.each(deskF, function (i, desk) {
                                    $("#div3 .box").append(`<div class="col-4 click4" data-id="${desk.id}">
                        <table class="table table-bordered">
                        <tr>
                        <th>Image</th>

                        </tr>
                         <tr>
                            <td><img src="img/${desk.desk_image}" width="75" /></td>


                        </tr>
                              </table>
                               <div class="form-group">
                                        <label for="name">Reserve desk:</label>




                                    </div>


                                    <input type="radio" id="desks_id" name="desks_id" value="${desk.id}" required>
                                    <label for="desks_id">${desk.description}</label>
@csrf
                                    </div>`);

                                });
                            });

                            });
                    });
                });

            </script>

@endsection


