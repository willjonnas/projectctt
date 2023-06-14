@extends('master.main')

@section('content')

    <div class="card">
        <div class="card-header">Edit Desk</div>
        <div class="card-body">
         <form method="post" action="{{ route('desk.update',$desk->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Desk  name</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" value="{{ $desk->description }}" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Desk Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="desk_image" />
                        <br />
                        <img src="{{ asset('img/' . $desk->desk_image) }}" width="100" class="img-thumbnail" />
                        <input type="hidden" name="desk_image" value="{{ $desk->desk_image }}" />
                    </div>
                </div>
                <div class="form-group col">
                    <label for="building_id">Choose building</label>
                    <select name="building_id" id="building_id">
                        @foreach($datatablebuilding as $row)
                            @if($row->id == $desk -> building_id)
                                <option value="{{$row->id}}" disabled selected>{{$row->description}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="level_id">Choose city</label>
                    <select name="level_id" id="level_id">
                        @foreach($datatablelevel as $row)
                            @if($row->id == $desk -> level_id)
                                <option value="{{$row->id}}" disabled selected>{{$row->description}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="sector_id">Choose city</label>
                    <select name="sector_id" id="sector_id">
                        @foreach($datatablesector as $row)
                            @if($row->id == $desk -> sector_id)
                                <option value="{{$row->id}}" disabled selected>{{$row->description}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="subsector_id">Choose city</label>
                    <select name="subsector_id" id="subsector_id">
                        @foreach($datatablesubsector as $row)
                            @if($row->id == $desk -> subsector_id)
                                <option value="{{$row->id}}" disabled selected>{{$row->description}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $desk->id }}" />
                    <input type="submit" class="btn btn-primary" value="Edit" />
                </div>
            </form>
        </div>
    </div>


@endsection
