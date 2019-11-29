<!doctype html>
<!--html lang="en" oncontextmenu="return false"-->
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSRF Token -->
    
    <title>বড়বাজার অনলাইন শপিং মাকের্টপ্লেস</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mirazmac/bengali-webfont-cdn@master/solaimanlipi/style.css">
      <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
      
      @include('layouts.topNav')
      <!--Navigator area -->
      @include('layouts.navbar')
      @yield('content')
      @include('layouts.footer')
      
      <!-- Optional JavaScript -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      
      

      <script>
          window.auth_user = {!! json_encode(Auth::user()); !!};  //retrieving auth user in a global script variable, it can be accessed in any vue component's script tag
      </script>
     
      


      <!--script>
        $(function () {
          $('[data-toggle="popover"]').popover()
        })
      </script-->
          
          
      <script type="text/javascript">
      
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
  </body>
</html>
