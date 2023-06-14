@extends('master.main')

@section('content')

    <div class="card">
        <div class="card-header">Edit Building</div>
        <div class="card-body">
            <form method="post" action="{{ route('buildings.update', $building->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Building  name</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" value="{{ $building->description }}" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Building Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="buildings_image" />
                        <br />
                        <img src="{{ asset('img/' . $building->buildings_image) }}" width="100" class="img-thumbnail" />
                        <input type="hidden" name="buildings_image" value="{{ $building->buildings_image }}" />
                    </div>
                </div>
                <div class="form-group col">
                    <label for="city_id">Choose city</label>
                    <select name="city_id" id="city_id">
                        @foreach($databuildingcity as $row)
                            @if($row->id == $building -> city_id)
                                <option value="{{$row->id}}" disabled selected>{{$row->description}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $building->id }}" />
                    <input type="submit" class="btn btn-primary" value="Edit" />
                </div>
            </form>
        </div>
    </div>


@endsection
