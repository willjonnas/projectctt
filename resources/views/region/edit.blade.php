@extends('master.main')

@section('content')

    <div class="card">
        <div class="card-header">Edit Region</div>
        <div class="card-body">
            <form method="post" action="{{ route('region.update', $region->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Region Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" value="{{ $region->description }}" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Region Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="region_image" />
                        <br />
                        <img src="{{ asset('img/' . $region->region_image) }}" width="100" class="img-thumbnail" />
                        <input type="hidden" name="hidden_student_image" value="{{ $region->region_image }}" />
                    </div>
                </div>
                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $region->id }}" />
                    <input type="submit" class="btn btn-primary" value="Edit" />
                </div>
            </form>
        </div>
    </div>


@endsection
