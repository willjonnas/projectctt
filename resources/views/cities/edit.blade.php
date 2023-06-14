
@extends('master.main')

@section('content')

    <div class="card">
        <div class="card-header">Edit City</div>
        <div class="card-body">
            <form method="post" action="{{ route('cities.update', $city->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">City Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" value="{{ $city->description }}" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">City Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="cities_image" />
                        <br />
                        <img src="{{ asset('img/' . $city->cities_image) }}" width="100" class="img-thumbnail" />
                        <input type="hidden" name="cities_image" value="{{ $city->cities_image }}" />
                    </div>
                </div>
                <div class="form-group col">
                    <label for="region_id">Choose Region</label>
                    <select name="region_id" id="region_id">
                        @foreach($dat as $row)
                            @if($row->id == $city -> region_id)
                                <option value="{{$row->id}}" disabled selected>{{$row->description}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $city->id }}" />
                    <input type="submit" class="btn btn-primary" value="Edit" />
                </div>
            </form>
        </div>
    </div>


@endsection
