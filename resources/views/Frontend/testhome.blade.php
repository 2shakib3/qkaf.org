@extends('Frontend.master')
@section('title')
    Home Page
@endsection
@section('content')
<div style="background-image:url('{{asset('images/bac.png')}}');background-repeat:no-repeat;background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 my-4">
                <div class="tab" role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist" style="height:500px;background-color:rgba(255, 255, 255, 0.8);display:block;">
                        <li role="presentation" class="active" style="min-height:166px;position:relative">
                        <a href="#Section1" aria-controls="home" role="tab" data-toggle="tab" style="position: absolute; left: 30%; top: 25%; bottom: 25%; right: 30%;text-decoration: none;" >
                            <img src="{{ asset('images/heart.png') }}" alt="" height="57px" width="57px" style="margin-left: auto;margin-right: auto;display: block;">
                            <p style="text-align:center">Donate</p>
                        </a>
                        <div class="sidebar" id="sidebar" style="border: 5px solid red; position: absolute; top: 0px; left: auto; right: 0px; bottom: 0px; background-color: red;">

                        </div>
                        </li>
                        <hr style="margin: 0px; padding: 0px;">
                        <li role="presentation" style="min-height:166px;position:relative">
                            <a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab" style="position: absolute; left: 30%; top: 25%; bottom: 25%; right: 30%;text-decoration: none;">
                                <img src="{{ asset('images/request.png') }}" alt="" height="57px" width="57px" style="margin-left: auto;margin-right: auto;display: block;">
                                <p style="text-align:center">Information</p>
                            </a>
                            <div class="sidebar" id="sidebar"  style="border: 5px solid green; position: absolute; top: 0px; left: auto; right: 0px; bottom: 0px; background-color: green;">
                        </li>
                        <hr style="margin:0px;padding:0px">
                        <li role="presentation" style="min-height:166px;position:relative">
                            <a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab" style="position: absolute; left: 30%; top: 25%; bottom: 25%; right: 30%;text-decoration: none;">
                                <img src="{{ asset('images/debit-card.png') }}" alt="" height="57px" width="57px" style="margin-left: auto;margin-right: auto;display: block;">
                                <p style="text-align:center">Payment</p>
                            </a>
                            <div class="sidebar" id="sidebar"  style="border: 5px solid red; position: absolute; top: 0px; left: auto; right: 0px; bottom: 0px; background-color: red;">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-10 my-4" style="height:500px;max-width: 83% !important;">
                <div class="col-sm-10 mb-4" style="height:75px;background-color:rgba(255, 255, 255, 0.8);max-width: 100% !important;">
                    @include('Frontend.homeContent_Page.up')
                </div>
                <div class="col-sm-10" style="height:400px;background-color:rgba(255, 255, 255, 0.8);max-width: 100% !important;">
                    <div class="tab-content tabs" style="display:block">
                        <div role="tabpanel" class="tab-pane fade active" id="Section1" >
                            @include('Frontend.homeContent_Page.donate')
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section2">
                            <h3>Section 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section3">
                            <h3>Section 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection










@section('scripts')
<!-- start show hide  when click radio button gifttype -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#Onetime").click(function(){
            console.log("Onetime")
            $(".onetime-content").show();
            $(".monthly-content").hide();
        });
        $("#Monthly").click(function(){
            console.log("monthly")
            $(".monthly-content").show();
            $(".onetime-content").hide();
        });
    });
</script>
<!-- end show hide when click radio button gifttype -->

<!-- start toggle  when click radio button onetime & monthly -->
<script>
    function onetime_input_toggle() {
    // console.log("monthly")
    var x = document.getElementById("onetime_input_field");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "block";
    }
  }
  function monthly_input_toggle() {
    // console.log("monthly")
    var x = document.getElementById("monthly_input_field");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "block";
    }
  }
</script>
<!-- start get value onchange amount input field field jquery code -->
<script>
    //one time input
    $("#onetime_input").on("change", function() {
    // alert($(this).val());
    $("#total_amount_test").val($('#onetime_input').html());
    $('#total_amount_test').val($('#onetime_input').val());
    // $("#onetime_input,#monthly_input").toggle();
    });

    //monthly input
    $("#monthly_input").on("change", function() {
    // alert($(this).val());
    $("#total_amount_test").val($('#monthly_input').html());
    $('#total_amount_test').val($('#monthly_input').val());
    // $("#onetime_input,#monthly_input").toggle();
    });
</script>
<!-- end get value onchange amount input field field jquery code -->

<!-- start onclick radio button value get jquery code -->
<script>
    function abc(a){
        //alert(a);
        var x = document.getElementById("onetime_input_field");
        var y = document.getElementById("monthly_input_field");
        if (x.style.display === "block") {
        x.style.display = "none";
        } else {
        x.style.display = "none";
        }
        if (y.style.display === "block") {
        y.style.display = "none";
        } else {
        y.style.display = "none";
        }
        $("#total_amount_test").html(a);
        $("#total_amount_test").val(a);
    }
</script>
<!-- end  onclick radio button value get jquery code-->

<script>
    $(document).ready(function(){
        $("#amount").click(function(){
            console.log("amount")
            $(".fixed_amount").show();
            $(".specific_project").hide();
        });
        $("#specific_project").click(function(){
            console.log("specific_project")
            $(".specific_project").show();
            $(".fixed_amount").hide();
        });
    });
</script>

<!-- start Refresh page jquery code-->
<script>
    function refreshPage(){
        location.reload();
    }
</script>
<!-- end Refresh page jquery code-->
@endsection
