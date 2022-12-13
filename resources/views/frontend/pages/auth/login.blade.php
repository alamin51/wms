<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!-- Section: Design Block -->
  <section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
        background-image: url('{{url('frontend/images/login-bg.jpg')}}');
        background-position: center center;
        height: 300px;
        "></div>
    <!-- Background image -->
    @if(session()->has('message'))
    <p class="alert alert -success">{{session()->get('message')}}</p>
    @endif

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
      <div class="card-body py-5 px-md-5">


        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Login Now</h2>
            <form action="{{route('admin.dologin')}}" method="post">

              @csrf
              
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" name="email" />
                <label class="form-label" for="form3Example3">Email address</label>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>
              <button type="submit" class="btn btn-primary btn-block mb-4">Login</button><br>
              <a href="{{route('user.registration')}}" class="btn btn-success">Registration</a>
          </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
