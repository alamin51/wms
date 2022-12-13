
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>




<section class="vh-100 bg-image"
  style="background-image: url('{{url('frontend/images/login-bg.jpg')}}'); ">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="{{route('user.do.registration')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="phone" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Phone</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="address" id="form3Example4cg" name="address" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Your Address</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="file" id="form3Example4cg" name="picture" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg"></label>
                </div>


                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
