@extends('master.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Client Details</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('clients.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Client Name</b></label>
                <div class="col-sm-10">
                    {{ $client->description }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Client Id</b></label>
                <div class="col-sm-10">
                    {{ $client->client_id }}
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form"><b>Client Image</b></label>
                <div class="col-sm-10">
                    <img src="{{ asset('images/' . $client->client_image) }}" width="200" class="img-thumbnail" />
                </div>
            </div>
        </div>
    </div>
@endsection
