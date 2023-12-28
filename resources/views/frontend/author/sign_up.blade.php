@extends('layouts.master')

@section('content')

   <!--====== Shop Wrapper Start ======-->
   <section class="shopping-login-page">
    <div class="container">
        <div class="login-wrapper">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="login-box">
                        <div class="form-title">
                            <h3>Login</h3>
                            <p>I'm an existing customer and would like to login.</p>
                        </div>
                        <form class="login-form" action="{{ route('author.login')}}" method="POST">
                           @csrf
                            <p>
                                <label for="email">Username or email address</label>
                                <input type="email" " name="email" value="{{ session('s_email') }}">
                            </p>

                            <p>
                                <label for="password">Password</label>
                                <input type="password"  name="password" value="{{ session('s_password') }}">
                            </p>
                            <p class="d-flex justify-content-between">
                                {{-- <span class="form-remember">
                                    <input type="checkbox" id="rememberme">
                                    <label for="rememberme">Remember me </label>
                                </span> --}}
                                <span>
                                    <a href="#">Lost your password?</a>
                                </span>
                            </p>
                            <p class="text-center">
                                <button type="submit" class="form-btn">Login</button>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="reg-box">
                        <div class="form-title">

                            <div class="d-flex justify-content-between">
                                <a href="/auth/google/redirect" class="mb-3" style="border: 1px solid blue; padding:15px 25px;" >Login With Google</a>
                                <a href="/auth/github/redirect" class="mb-3" style="border: 1px solid blue; padding:15px 25px;" >Login With Github</a>
                            </div>

                            <h3>Register</h3>
                            <p>I'm a new customer and would like to register.</p>
                        </div>
                        <form class="login-form" action="{{ route('root.author.register')}}" method="POST">
                            @csrf
                            <p>
                                <label for="name">Name</label>
                                <input type="text"  name="name">
                            </p>
                            <p>
                                <label for="email">Email address</label>
                                <input type="email"  name="email">
                            </p>
                            <p>
                                <label for="reqpassword">Password</label>
                                <input type="password"  name="password">
                            </p>
                            <p class="text-center">
                                <button type="submit" class="form-btn">Register</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Shop Wrapper End ======-->

<!--====== Instagram Area Start ======-->
<section class="instagram-section">
    <div class="container-fluid p-0">
        <h5 class="instagram-title">
            Follow Us <span class="instagram-icon"><i class="fab fa-instagram"></i></span> Instagram
        </h5>
        <div class="instagram-images">
            <div class="image">
                <img src="assets/img/instagram/01.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/02.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/03.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/04.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/05.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/06.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/07.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/01.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/02.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/03.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/04.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/05.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/06.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="image">
                <img src="assets/img/instagram/07.jpg" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</section>
<!--====== Instagram Area End ======-->

@endsection

@section('footer_script')

@if (session('author_registration'))

<script>
      Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: {{ session('author_registration')}},
  showConfirmButton: false,
  timer: 10000,
})
</script>

@endif

@endsection
