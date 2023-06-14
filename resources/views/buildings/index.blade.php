@extends('master.main')

@section('content')

    @if($message = Session::get('success'))

        <div class="alert alert-success">
            {{ $message }}
        </div>

    @endif
    <br>

    <div class="text-center">
        <h4 class="section-title bg-white text-center text-dark px-3" >Buildings</h4>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b></b></div>
                <div class="col col-md-6">
                    <a href="{{ route('buildings.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Image</th>
                    <th>Description</th>

                </tr>
                @if(count($databuilding) > 0)

                    @foreach($databuilding as $row)

                        <tr>
                            <td><img src="{{ asset('img/' . $row->buildings_image) }}" width="75" /></td>
                            <td>{{ $row->description }}</td>
                            <td>
                                <form method="post" action="{{ route('buildings.destroy', $row->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('buildings.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ route('buildings.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                                </form>

                            </td>
                        </tr>

                    @endforeach

                @else
                    <tr>
                        <td colspan="5" class="text-center">No Data Found</td>
                    </tr>
                @endif
            </table>
            {!! $databuilding->links() !!}
        </div>
    </div>
@endsection
