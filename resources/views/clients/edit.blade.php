@extends('master.main')

@section('content')

    <div class="card">
        <div class="card-header">Edit client</div>
        <div class="card-body">
            <form method="post" action="{{ route('clients.update', $client->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Client Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" value="{{ $client->description }}" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Client Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="client_image" />
                        <br />
                        <img src="{{ asset('images/' . $client->client_image) }}" width="100" class="img-thumbnail" />
                        <input type="hidden" name="client_image" value="{{ $client->client_image }}" />
                    </div>
                </div>
                <div class="form-group col">
                    <label for="client_id">Choose Client</label>
                    <select name="client_id" id="client_id">
                        @foreach($dataclient as $row)
                            @if($row->id == $client -> $client)
                                <option value="{{$row->id}}" disabled selected>{{$row->description}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $client->id }}" />
                    <input type="submit" class="btn btn-primary" value="Edit" />
                </div>
            </form>
        </div>
    </div>


@endsection
