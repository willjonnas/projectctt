@extends('master.main')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Region Details</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('region.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Region name</b></label>
                <div class="col-sm-10">
                    {{ $region->description }}
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form"><b>Region Image</b></label>
                <div class="col-sm-10">
                    <img src="{{ asset('img/' .  $region->region_image) }}" width="500px" class="img-thumbnail" />
                </div>
            </div>
        </div>
    </div>

@endsection
