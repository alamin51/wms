

<nav style="background-color:black;height:100px" class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <form action="{{route('search')}}" method="get">
                <div class="col-md-3">



                    <input style="background-color: white;height:30px" name="event" type="search" class="form-control rounded"
                        placeholder="Search" aria-label="Search" aria-describedby="search-addon" />



                </div>

                <div class="col-md-2">
                <button class="btn btn-success" style="height:40px" type="submit">search</button>
                </div>
            </form>

            <div class="col-md-7 text-right menu-1">

                <ul>
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                   
                    <li><a href="{{route('frontend.package')}}">Package</a></li>
                    <li><a href="{{route('frontend.service')}}">Service</a></li>         
                    
                    <li><a href="{{route('contactus')}}">Contact Us</a></li>
                    @auth
                    <li>
                    <li><a href="{{route('user.profile')}}">profile | ({{auth()->user()->name}})</a></li>
                    </li>
                    <li><a href="{{route('user.logout')}}">Logout</a></li>
                    
                    @else

                    <li><a href="{{route('login')}}">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>

    </div>
</nav>
