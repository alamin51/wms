

@extends("backend.master")

@section("content")

<h1>Admin Dashboard</h1>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="badge badge-warning">
                        <div class="px-5 py-3">
                            <h4>Total Stuff</h4>
                            <p class="text-danger font-weight-bold">{{$stuffs->count()}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="badge badge-success">
                        <div class="px-5 py-3">
                            <h4>Total Booking</h4>
                            <p class="text-danger font-weight-bold">{{$bookings->count()}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection