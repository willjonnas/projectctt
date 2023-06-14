@extends('master.main')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Building Details</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('buildings.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Building Name</b></label>
                <div class="col-sm-10">
                    {{ $building->description }}
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form"><b>Building Image</b></label>
                <div class="col-sm-10">
                    <img src="{{ asset('img/' .  $building->buildings_image) }}" width="500" class="img-thumbnail" />
                </div>
            </div>
        </div>
    </div>

@endsection
