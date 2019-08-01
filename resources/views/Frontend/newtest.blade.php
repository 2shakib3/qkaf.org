@extends('Frontend.master')
@section('title')
    Home Page
@endsection
@section('content')
<div style="background-image:url('{{asset('images/bac.png')}}');background-repeat:no-repeat;background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 my-4">
                <div class="tab">
                    <a class="tablinks" onclick="openTab(event, 'donation')" id="defaultOpen">
                        <img src="{{ asset('images/heart.png') }}" alt="" height="57px" width="57px" style="margin-left: auto;margin-right: auto;display: block;">
                        donate
                    </a>
                    <hr style="margin: 0px; padding: 0px;">
                    <a class="tablinks" onclick="openTab(event, 'PersonalInfo')">
                        <img src="{{ asset('images/request.png') }}" alt="" height="57px" width="57px" style="margin-left: auto;margin-right: auto;display: block;">
                        info
                    </a>
                    <hr style="margin: 0px; padding: 0px;">
                    <a class="tablinks" onclick="openTab(event, 'Payment')">
                        <img src="{{ asset('images/debit-card.png') }}" alt="" height="57px" width="57px" style="margin-left: auto;margin-right: auto;display: block;">
                        pay
                    </a>
                </div>
            </div>
            <div id="donation" class="tabcontent col-sm-10 my-4">
                <div class="col-sm-10 mb-4" style="height:75px;background-color:rgba(255, 255, 255, 0.8);max-width: 100% !important;">
                    @include('Frontend.homeContent_Page.up')
                </div>
                <div class="col-sm-10 mb-4" style="height:400px;background-color:rgba(255, 255, 255, 0.8);max-width: 100% !important;" >
                    {{-- @include('Frontend.homeContent_Page.donate') --}}
                </div>
            </div>
            <div id="PersonalInfo" class="tabcontent col-sm-10 my-4">
                <div class="col-sm-10 mb-4" style="height:500px;background-color:rgba(255, 255, 255, 0.8);max-width: 100% !important;border:10px solid black;">
                    <h3>INfo</h3>
                    <p>my info</p>
                </div>
            </div>
            <div id="Payment" class="tabcontent col-sm-10 my-4">
                <div class="col-sm-10 mb-4" style="height:500px;background-color:rgba(255, 255, 255, 0.8);max-width: 100% !important;">
                    <h3>Payment</h3>
                    <p>Pay</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection










@section('scripts')
<script>
    function openTab(evt, name) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(name).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
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
