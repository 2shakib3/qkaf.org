<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href={{asset("favicon.ico")}}>

    <title> @yield('title') </title>
    <!--   Font Awesome   link    -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
        <link href={{asset("dist/css/bootstrap.css")}} rel="stylesheet">



        <link href="{{ asset("dist/css/style.css")}}" rel="stylesheet">

        <link href="{{ asset("dist/css/try.css") }}" rel="stylesheet" >

    <!--  js -->
        <script src={{asset("dist/js/jquery-3.4.1.min.js")}}></script>




    <style media="screen">
    .bottom_nav ul{
        list-style:none;
        display: inline-block;
    }
    .bottom_nav ul li{
        display: inline-block;
        margin-left:15px;
    }
    </style>
        <script type="text/javascript">
        	$(document).ready(function(){
        		$(".register").click(function(){
        			$(".other").show();
        			$(".content").hide();
        			$(".register").addClass('active');
        			$(".login").removeClass('active');
        		});
        		$(".login").click(function(){
        			$(".content").show();
        			$(".other").hide();
        			$(".login").addClass('active');
        			$(".register").removeClass('active');
        		});
        	});
        </script>


  </head>

  <body>


        @include('Frontend.header')

        @include('Frontend.errormessage.message')

        <div class="mt-2">
            @yield('content')
        </div>


        @include('Frontend.footer')

        @include('Frontend.script')

        @yield('scripts')

  </body>
</html>
