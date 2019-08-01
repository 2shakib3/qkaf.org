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
    <!-- <link href={{asset("dist/css/fontawesome_all.css")}}" rel="stylesheet"> -->

    <!-- Bootstrap core CSS -->
        <link href={{asset("dist/css/bootstrap.css")}} rel="stylesheet">



    <!-- Custom styles for this template -->
        <link href="{{ asset("dist/css/style.css")}}" rel="stylesheet">
        <link href="{{ asset("dist/css/header.css") }}" rel="stylesheet" >
        <link href="{{ asset("dist/css/try.css") }}" rel="stylesheet" >
        <link href="{{ asset("dist/css/bottomheader.css") }}" rel="stylesheet" >

    <!--  js -->
        <script src={{asset("dist/js/jquery-3.4.1.min.js")}}></script>




    <style media="screen">



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
    <div class="container">

        @include('Frontend.header')

        @include('Frontend.bottomheader')
        @include('Frontend.errormessage.message')

        @yield('content')

        @include('Frontend.footer')
    </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src={{asset("dist/js/jquery-slim.min.js")}}></script>
    <script src={{asset("dist/js/popper.min.js")}}></script>
    <script src={{asset("dist/js/bootstrap.js")}}></script>
    <script src={{asset("dist/js/holder.min.js")}}></script>
    <script src={{asset("dist/js/jquery.min.js")}}></script>
     -->
     <!-- <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src={{asset("dist/js/jquery-3.3.1.slim.min.js")}}></script> -->
    <script src={{asset("dist/js/bootstrap.js")}}></script>
    <script src={{asset("dist/js/popper.min.js")}}></script>


<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <script src={{ asset("dist/js/donation_type.js")}} ></script>

<!-- show hide when click on radio button  -->
    <script type="text/javascript">
      $("#hide").click(function(){
        //console.log("clix")
        $("#specificdonate_show").hide();
      });
      $("#show").click(function(){
        //console.log("dfcdskj")
        $("#specificdonate_show").show();
      });
    </script>

<!-- start onclick radio button value get jquery code -->
<script>
  function abc(a){
    //alert(a);
    $("#total_amount_test").html(a);
    $("#total_amount_test").val(a);


  }
</script>
<!-- end  onclick radio button value get jquery code-->


<!-- start onchane other amount field jquery code -->

    <script>
      $("#amount_others").on("change", function() {
         // alert($(this).val());

        $("#total_amount_test").val($('#amount_others').html());
        $('#total_amount_test').val($('#amount_others').val());
        $("#amount_others").hide();

      });
    </script>

<!-- end  onchane other amount field jquery code-->

<!-- start onchane monthly other amount field jquery code -->

    <script>
      $("#monthly_input").on("change", function() {
         // alert($(this).val());
        $("#total_amount_test").val($('#monthly_input').html());
        $('#total_amount_test').val($('#monthly_input').val());
        $("#monthly_input").hide();

      });
    </script>

<!-- end  onchane monthly other amount field jquery code-->

<!-- start disable radio button after onclick yes button -->

    <script type="text/javascript">
    $(document).ready(function() {
      // By Default Disable radio button
      $(".amount").attr('disabled', false);
      $("#donate_amount").css('opacity', '.1'); // This line is used to lightly hide label for disable radio buttons.
      // Disable radio buttons function on Check Disable radio button.
      $("input:radio").change(function() {
        if ($(this).val() == "YES") {
          $(".amount").attr('checked', false);
          $(".amount").attr('disabled', true);
          $("#donate_amount").css('opacity', '.2');
        }
        // Else Enable radio buttons.
        else {
          $(".amount").attr('disabled', false);
          $(".donate_amount").css('opacity', '1');
        }
      });
      });
    </script>
<!-- end disable radio button after onclick yes button -->
    @include('Frontend.CustomJs.categoryJs')
    @include('Frontend.CustomJs.productJs')
    @include('Frontend.CustomJs.stateJs')
    @include('Frontend.CustomJs.cityJs')


  </body>
</html>
