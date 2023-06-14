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
        <div class="card-header">Add client</div>
        <div class="card-body">
            <form method="post" action="{{ route('clients.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Client Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Client Id</label>
                    <div class="col-sm-10">
                        <input type="text" name="client_id" class="form-control" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">client Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="client_image" />
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Add" />
                </div>
            </form>
        </div>
    </div>

@endsection
