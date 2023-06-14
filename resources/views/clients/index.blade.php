@extends('master.main')

@section('content')

    @if($message = Session::get('success'))

        <div class="alert alert-success">
            {{ $message }}
        </div>

    @endif

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b></b></div>
                <div class="col col-md-6">
                    <a href="{{ route('clients.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Image</th>
                    <th>Description</th>

                </tr>
                @if(count($dataclient) > 0)

                    @foreach($dataclient as $row)

                        <tr>
                            <td><img src="{{ asset('img/' . $row->client_image) }}" width="75" /></td>
                            <td>{{ $row->description }}</td>
                            <td>
                                <form method="post" action="{{ route('clients.destroy', $row->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('clients.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ route('clients.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
            {!! $dataclient->links() !!}
        </div>
    </div>
@endsection
