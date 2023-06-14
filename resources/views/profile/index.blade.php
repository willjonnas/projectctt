

@extends('master.main')

@section('content')
<br>
<br>
<div class="testimonial-item text-center">
    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
    <h5 class="mb-0">Client Name</h5>
    <p>Profession</p>

</div>
<br><br>
@if (Auth::check())
    <div class="text-center">
        <h4 class="section-title bg-white text-center text-dark px-3" >reservations</h4>
    </div>



<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th>User</th>
            <th>Desk</th>
            <th> Schedule</th
            ><th> Date </th>

        </tr>


            @foreach (App\Models\Clients_desks::where('users_id', Auth::user()->id)->get() as $reservation)

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
@endif

@endsection

