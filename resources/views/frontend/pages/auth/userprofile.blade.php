<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
    body {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }

    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }

    .profile-img {
        text-align: center;
    }

    .profile-img img {
        width: 70%;
        height: 100%;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">


    <form>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img style="width:200px;height:250px" src="{{url('upload/'.auth()->user()->picture)}}" alt="" />
                </div>
            </div>

        </div>
        <div class="col-md-8 mb-4">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                    </div>


                    <div class="col-md-6">
                        <div class="profile-head">
                            <h1>
                                {{auth()->user()->name}}
                            </h1>
                        </div>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" style="background-color:black;color:white"
                                    aria-selected="true">About</a>
                            </li>
                        </ul>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone:</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{auth()->user()->phone}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email:</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{auth()->user()->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address:</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{auth()->user()->address}}</p>
                            </div>

                        </div>

                        <a href="{{route('user.profile.edit',auth()->user()->id)}}" class="btn btn-primary">Edit</a><br>

                    </div>

                </div>
            </div>
        </div>
        <table class="table">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Package Name</th>
                    <th scope="col">booking_from</th>
                    <th scope="col">booking_to</th>
                    <th scope="col">Total Cost</th>
                    <th scope="col">status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $key=>$data)
                {{-- @dd($data); --}}
                <tr>
                    <td>{{$key + 1 }}</td>
                    <td> {{$data->package->name}}</td>
                    <td> {{$data->booking_from}}</td>
                    <td> {{$data->booking_to}}</td>
                    <td> {{$data->bookingDetails->sum('package_price') + $data->package->price}}</td>
                    <td> {{$data->status}}</td>
                    <td>
                        <a href="{{route('frontend.booking.delete',$data->id)}}" class="btn btn-danger">Cancle</a>
                        <span><a href="{{ route('user.bookingDetails',$data->id) }}"
                                class="btn btn-primary">View</a></span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
</form>
</div>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</form>
