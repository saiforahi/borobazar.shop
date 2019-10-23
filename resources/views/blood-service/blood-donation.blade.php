@extends('layouts.app')
@section('content')
@include('auth.loginModal')
        <section class="blood-donar-area">
            <div class="container-fluid pb-5 pt-5" id="search-app-root">
                <search-app-root-component></search-app-root-component>
            </div>
        </section>
       
        <!--script type="text/javascript">
            $(window).on('load',function(){
                $('#myModal').modal('show');
            });
        </script-->
        <!--auto modal--> 
        <script> 
        // A $( document ).ready() block.
            $( document ).ready(function() {
                if (document.cookie.indexOf('visited=true') == -1){
                    // load the overlay
                    $('#automodal').modal({show:true});
                    var year = 1000*60*60*24*365;
                    var expires = new Date((new Date()).valueOf() + year);
                    document.cookie = "visited=true;expires=" + expires.toUTCString();
     
                }
            }); 	
        </script>          
        <!--end auto modal-->     
            
@endsection