@extends('master.main')

@section('content')

    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>

    @endif

    <div class="card">
        <div class="card-header">Add city</div>
        <div class="card-body">
            <form method="post" action="{{ route('buildings.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" />
                    </div>
                </div>
                <div class="form-group col">
                    <label for="cities_id">Choose City</label>
                    <select name="cities_id" id="cities_id">
                        @foreach($databuildingcity as $row)
                            <option value="" disabled selected hidden> City</option>
                            <option value="{{$row->id}}">{{$row->description}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Building Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="buildings_image" />
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Add" />
                </div>
            </form>
        </div>
    </div>

@endsection
