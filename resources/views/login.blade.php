<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet')}}" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Import font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Import font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Login</title>

    <style>
        body{
          background-color: #78A3EB;
          font-family: 'Montserrat';
        }

        .text-reset{
          text-decoration: none;
        }
    </style>
</head>
<body>
  @include('sweetalert::alert')
    <!-- Navbar -->
    <section id="navbar">
      <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <div class="col justify-content-center text-center">
                <a class="text-decoration-none small text-light me-3" href="#"><i class="fa-solid fa-check me-1"></i>FLASH SALE IS ONGOING</a>
                <div class="btn-group">
                  <button class="btn btn-sm dropdown-toggle text-light small" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Eng
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item small" href="#">Ind</a></li>
                  </ul>
                  <a class="nav-link small text-light">Faqs</a>
                  <a class="nav-link small text-light">Need Help<i class="fa-solid fa-exclamation ms-1"></i></a>
              </div>
            </div>
          </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
          <div class="container-fluid">
            <img src="assets/img/logo_tokobiru.png" alt="Logo Tokobiru" class="img-fluid mx-auto d-block mb-2">
            <a class="navbar-brand ms-1 fw-bolder" href="{{ route ('login')}}">TOKO BIRU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item ms-2 mb-2">
                  <!-- <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search here..." aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                      <i class="fa fa-search"></i>
                    </span>
                  </div> -->

                </li>
                <li class="nav-item text-center mb-2">
                <a href="/cart"> <button type="button" href="wishlish"class="btn btn-secondary ms-2"><i class="fas fa-shopping-cart me-2"></i>Cart</button>
                </a></li>
                <li class="nav-item text-center mb-2">
                <a href="/wishlist">  <button type="button" class="btn btn-outline-secondary ms-2"><i class="fa-regular fa-heart"></i></button>
                </a></li>
                <li class="nav-item text-center">
                <a href="/profile_settings"> <button type="button" class="btn btn-outline-secondary ms-2"><i class="fa-regular fa-user"></i></button>
                </a></li>
              </ul>
            </div>
        </div>
      </nav>
    </section>

      <!-- Login Form -->
      <section id="LoginForm">
        <div class="container text-light">
          <div class="row align-items-center pt-5 pb-5">
            <div class="col-md-6 mt-5">
              <img src="assets/img/Register-1.png" alt="Background Register" class="img-fluid mx-auto d-block mb-3" style="max-width: 30%;">
              <p class="h1 fw-bolder">SELAMAT DATANG DAN BERBELANJA!</p>
            </div>

            <div class="col-md-6">
                <div class="row">
                <p class="h2 fw-bold mt-3">Login</p>
                </div>
                <form method="POST" action="{{ url('proses_login')}}">
                  @if (Session::get('info'))
                    <div class="alert alert-info">
                      {{ Session::get('info') }}
                    </div>
                  @endif
                  @csrf
                  <div class="form-group">
                    <input id="email" type="text" class="form-control " name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required autocomplete="email" autofocus>
                  </div>

                  <div class="form-group">
                    <input id="password" type="password" class="form-control " name="password" placeholder="Masukan Password" required autocomplete="current-password">
                  </div>
                  <div class="row mt-3">
                    <p class="small text-end"><a href="forgot_password" class="text-light fw-bold" >Forgot Password</a></p>
                  </div>

                  <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                  </button>
                </form>
                <div class="row mt-3">
                  <p class="small text-center">Don't have an account yet? <a href="register" class="text-light fw-bold" >Register</a></p>
                </div>
            </div>

            {{-- <div id="tambah" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Masukan Data</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                  <form action="/login/store" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="nama" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control"  required>
                    </div>
                    <div class="form-group">
                      <label for="">No Telp</label>
                      <input type="number" name="notelp" class="form-control"  required>
                  </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control"  required>
                    </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Register</button>
                  </form>
                </div>
              </div> --}}
            </div>


            <!-- <div class="col-md-6">
              <div class="row">
                <p class="h2 fw-bold mt-3">Login</p>
              </div>
              <div class="row mt-3">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
              </div>
              <div class="row">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="email" placeholder="Enter your password">
                </div>
              </div>
              <div class="row">
                <div class="col text-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalComponent"><b>LOGIN</b></button> -->
                  <!-- Modal -->
                  <!-- <div class="modal fade" id="modalComponent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-body">
                          <p class="text-dark">Please fill all data requirements</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <p class="small text-center">Don't have an account yet? <a href="#" class="text-light fw-bold">Register</a></p>
              </div>
            </div> -->
          </div>
        </div>
      </section>

      <!-- footer -->
      <section id="footer">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-muted pt-1" style="background-color: #d7e3f9;">
          <!-- Section: Links  -->
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    <img src="assets/img/logo_tokobiru.png" alt="Logo Tokobiru" style="width: 12%;"> Tokobiru
                  </h6>
                  <p>
                  Transform your lifestyle and elevate your shopping experience with our exclusive collection of lifestyle products, available now on our e-commerce platform.
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    CATEGORY
                  </h6>
                  <p>
                    <a href="#" class="text-reset">Child’s Product</a>
                  </p>
                  <p>
                    <a href="#" class="text-reset">Clothes</a>
                  </p>
                  <p>
                    <a href="#" class="text-reset">Home</a>
                  </p>
                  <p>
                    <a href="#" class="text-reset">Stationery</a>
                  </p>
                  <p>
                    <a href="#" class="text-reset">Electronics</a>
                  </p>
                  <p>
                    <a href="#" class="text-reset">Face & Body Care</a>
                  </p>
                </div>

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    SUPPORT
                  </h6>
                  <p>
                    <a href="#" class="text-reset">Help & Support</a>
                  </p>
                  <p>
                    <a href="#" class="text-reset">Tearms & Conditions</a>
                  </p>
                  <p>
                    <a href="#" class="text-reset">Privacy Policy</a>
                  </p>
                  <p>
                    <a href="#" class="text-reset">Help</a>
                  </p>
                </div>

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">NEWSLETTER</h6>
                  <form class="d-flex">
                    <input class="form-control me-2" type="email" placeholder="Your email" aria-label="Email">
                    <button class="btn btn-outline-primary text-light fw-bold" type="submit" style="background-color: #78A3EB;">Subscribe</button>
                  </form>
                  <p class="mt-3 text-reset">We value your feedback and are always here to assist you. Connect with us today and let us know how we can help you achieve your goals.</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          <!-- Section: Links  -->

          <!-- Copyright -->
          <div class="text-center p-3 bg-light">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="#"><img src="assets/img/logo_tokobiru.png" alt="Logo Tokobiru" class="img-fluid"> Toko Biru</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </section>
      <!-- Bootstrap core JavaScript-->
      <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

      <!-- Core plugin JavaScript-->
      <script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

      <!-- Custom scripts for all pages-->
      <script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>
</body>

</html>
