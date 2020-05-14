<!doctype html>
<!--html lang="en" oncontextmenu="return false"-->
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>বড়বাজার অনলাইন শপিং মাকের্টপ্লেস</title>
        <link rel="icon" href="{{ asset('img/logo-fav.ico') }}">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <!-- Styles -->
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mirazmac/bengali-webfont-cdn@master/solaimanlipi/style.css">
        <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:300,400,500,600,700&display=swap&subset=bengali,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
          <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/extra_style.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script>
          window.auth_user = {!! json_encode(Auth::user()); !!};  //retrieving auth user in a global script variable, it can be accessed in any vue component's script tag
        </script>
    </head>
    <body>
        @include('layouts.topNav')
        @include('layouts.bloodNavbar')
        <!--Navigator area -->
        @yield('content')
        @include('layouts.main-footer')
        @include('layouts.footer')
        <!-- Optional JavaScript -->
        
        <script src="{{ asset('js/views.js') }}" defer></script>
        <script src="{{asset('js/owl.carousel.js')}}"></script>
        
        <script>
        
          function openForm() {
            document.getElementById("myForm").style.display = "block";
            document.getElementById("textbutton").addEventListener("click", function(event){
                event.preventDefault()
              });
            }
  
          function closeForm() {
            document.getElementById("myForm").style.display = "none";
          }   
        </script>
        
        @yield('js-part')
    </body>
    
  </html>