@extends('master.main')

@section('content')


    <br>
    <br>
    <div class="text-center">
        <h4 class="section-title bg-white text-center text-dark px-3" >Reservations</h4>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>User</th>
                    <th>Desk</th>
                    <th> Schedule</th
                    ><th> Date </th>

                </tr>


                @foreach (App\Models\Clients_desks::all() as $reservation)

                    <tr>
                        <td>{{ $reservation->user->name }}</td>
                        <td>{{ $reservation->desk->description }}</td>
                        <td>{{ $reservation->reservation->name }}</td>
                        <td>{{ $reservation->reservation_date}}</td>
                        <td>
                            <form method="post" action="{{ route('clientsdesk.destroy', $reservation->id) }}">
                                @csrf
                                @method('DELETE')


                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </form>

                        </td>
                    </tr>

                @endforeach


            </table>

        </div>
    </div>
@endsection
