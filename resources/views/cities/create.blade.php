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
        <div class="card-header">Add City</div>
        <div class="card-body">
            <form method="post" action="{{ route('cities.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" />
                    </div>
                </div>
                <div class="form-group col">
                    <label for="region_id">Choose Region</label>
                    <select name="region_id" id="region_id">
                        @foreach($dat as $row)
                            <option value="" disabled selected hidden> Region</option>
                            <option value="{{$row->id}}">{{$row->description}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">City Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="cities_image" />
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Add" />
                </div>
            </form>
        </div>
    </div>

@endsection
