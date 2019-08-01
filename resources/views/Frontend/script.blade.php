
  <!-- Bootstrap core JavaScript

    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src={{asset("dist/js/bootstrap.js")}}></script>
    <script src={{asset("dist/js/jquery.min.js")}}></script>
    <script src={{asset("dist/js/popper.min.js")}}></script>
    <script src={{asset("dist/js/bootstrap_4.0.0_bootstrap.min.js")}}></script>
    <script src={{ asset("dist/js/donation_type.js")}} ></script>

<!-- show hide  when click on yes no radio button  -->
    {{-- <script type="text/javascript">
      $("#hide").click(function(){
        //console.log("clix")
        $("#specificdonate_show").hide();
      });
      $("#show").click(function(){
        //console.log("dfcdskj")
        $("#specificdonate_show").show();
      });
    </script> --}}

{{-- <!-- start onclick radio button value get jquery code -->
<script>
  function abc(a){
    //alert(a);
    $("#total_amount_test").html(a);
    $("#total_amount_test").val(a);
  }
</script>
<!-- end  onclick radio button value get jquery code--> --}}


{{-- <!-- start onchange other amount field jquery code -->

    <script>
      $("#amount_others, #monthly_input").on("change", function() {
         // alert($(this).val());
        $("#total_amount_test").val($('#amount_others').html());
        $('#total_amount_test').val($('#amount_others').val());
        $("#amount_others").hide();

      });
    </script> --}}

    {{-- clickEvent{
        if($('#monthly_input').hasClass('display-hide')){
            $("#monthly_input").removeClass('display-hide');
        }
    } --}}

<!-- end  onchane other amount field jquery code-->

<!-- start onchange monthly other amount field jquery code -->

{{-- <script type="text/javascript">
    $(document).ready(function() {
      // By Default Disable radio button
      $(".donation_type").attr('disabled', false);
    //   $("#donation_type").css('opacity', '.1'); // This line is used to lightly hide label for disable radio buttons.
      // Disable radio buttons function on Check Disable radio button.
      $("input:radio").change(function() {
        if ($(this).val() == "YES") {
          $(".donation_type").attr('checked', false);
          $(".donation_type").attr('disabled', true);
          $("#donation_type").css('opacity', '.2');
        }
        // Else Enable radio buttons.
        else {
          $(".donation_type").attr('disabled', false);
          $(".donation_type").css('opacity', '1');
        }
      });
      });
    </script> --}}

<!-- end  onchane monthly other amount field jquery code-->

<!-- start disable radio button after onclick yes button -->

    {{-- <script type="text/javascript">
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
    </script> --}}
<!-- end disable radio button after onclick yes button -->



<!-- start onclick radio button value get jquery code -->


    @include('Frontend.CustomJs.categoryJs')
    @include('Frontend.CustomJs.productJs')
    @include('Frontend.CustomJs.stateJs')
    @include('Frontend.CustomJs.cityJs')
