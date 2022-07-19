<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta name="facebook-domain-verification" content="b47p943eru3syl4hxuvolq0yhg2syd" />
      <meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="গেম খেলে প্রতিদিন ইনকাম করুন 500-700 টাকা" />
      <meta property="og:description" content="গেম খেলে ইনকাম করতে ক্লিক করুন" />
      <meta property="og:image" content="tumb.jpg" />
      <meta name="google-site-verification" content="zTBZwQ4sH6F5RjkShJdhorvATY1qy_ik8K9PgbISLC4" />
      <title>@yield('title') | WinTk71.com</title>
      <link rel="icon" href="{{ asset('FILE/img/WinTk71.com.png') }}">
      <link rel="stylesheet" href="{{ asset('FILE/CSS/style.css') }}">
	   <link rel="stylesheet" href="{{ asset('FILE/CSS/style_game.css') }}">
      <script src="{{ asset('FILE/JQUERY/jquery.min.js') }}"></script>
      <script src="{{ asset('../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js') }}"></script>
      <link rel="stylesheet" href="{{ asset('../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css') }}" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
      {{-- Notify css --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
      <!-- personal css link -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>

   <body style="background-color: #387D71;">
      <style>
         a {
         text-decoration: none; color: #ffffff;
         }
         a:hover{
         color: #ffffff;
         }
      </style>
      <div class="header" style="background-color: #404F50;">
         <div class="centerize">
            <div class="logo">
               <a href="{{ route('index') }}">
                  <img src="{{ asset('FILE/img/WinTk71.com.png') }}" alt="">
               </a>
            </div>
            <div class="menu">
               @if (Auth::guest())
                     <li>
                        <a href="{{ route('login') }}">Login</a>
                     </li>
                     <li>
                        <a href="{{ route('register') }}">SignUp</a>
                     </li>
                     <li>
                        <a href="{{ route('reviewpage') }}">Our Customer Reviews</a>
                     </li>
                  @else
                  @if (Auth::user()->role == 1)
                     <li>
                        <a href="{{ route('admin.index') }}">Admin Panel</a>
                     </li>
                     <li onclick="location.href='{{ route('reviewpage') }}'">Our Customer Reviews</li>
                  @elseif(Auth::user()->role == 2)
                     <li>
                        <a href="{{ route('user.profile') }}">Profile</a>
                     </li>
                     <li onclick="location.href='{{ route('deposit') }}'">Deposit</li>
                     <li onclick="location.href='{{ route('withdrow') }}'">Withdraw</li>
                     <li onclick="location.href='{{ route('statement') }}'">Statement</li>
                     <li>
                        <form action="{{ route('logout') }}" method="POST">
                           @csrf
                           <button style="background: none; border: none; color: #fff;" type="submit">Logout</button>
                        </form>
                     </li>
                     <li onclick="">{{ App\Models\Balance::where('user_id', Auth::user()->id)->first()->balance ?? "0.00" }} ৳</li>
                  @endif
               @endif
            </div>
         </div>
      </div>

      @yield('content')

      <div class="footer" style="background-color: #404F50;">
         Copyright © 2022 WinTk71.com
      </div>
      
      <!--    JQUERY-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Toastr script CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <!-- Toastr Scripts render -->
      {!! Notify::message() !!}

      {{-- All error show in Toaster --}}
      @if ($errors->any())
         @foreach ($errors->all() as $error)
            <script>
               toastr.error(`{!! $error !!}`, 'Error')
            </script>
         @endforeach
      @endif

      <script>
         var slideIndex = 0;
         showSlides();
         
         function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
               slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
               dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000);
         }
      </script>
   </body>
</html>