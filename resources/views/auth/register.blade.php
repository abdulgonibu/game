<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Register | WinTk71.com</title>
      <link rel="icon" href="FILE/img/WinTk71.com.png">
      <link rel="stylesheet" href="FILE/CSS/style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
      {{-- Notify css --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <script src="FILE/JQUERY/jquery.min.js"></script>
      <script src="../kit.fontawesome.com/dcf187d9cc.js" crossorigin="anonymous"></script>
   </head>
   <body style="background-color: #387D71;">
      <div class="join_wrapper">
         <div class="sign">
            <a href="{{ route('index') }}">
               <center><img src="FILE/img/WinTk71.com.png" alt=""></center>
            </a>
            <h2>Sign Up</h2>
            <form action="{{ route('register') }}" method="POST">
              @csrf
              <span><input type="text" name="name" placeholder="Full name" value="{{ old('name') }}"></span><br>
              <span><input type="text" name="username" placeholder="User Name" value="{{ old('username') }}"></span><br>
              <span><input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}"></span><br>
              <span><input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}"></span><br>
              <span><input type="password" name="password" placeholder="Password" value="{{ old('password') }}"></span><br>
              <span><input type="password" name="password_confirmation" placeholder="Retype Password"></span><br>
              <span><button type="submit" name="signup">Join</button></span><br>
            </form>
            <span id="s">
              <button onclick="location.href='joind56b.html?login'">
                <a style="text-decoration: none; color: #0988d1;" href="{{ route('login') }}">Sign In</a>
              </button>
            </span>
         </div>
      </div>
    </body>
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
</html>























