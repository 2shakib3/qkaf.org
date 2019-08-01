 <div class="header__top">

 <div class="container">
 <div class="col-sm-12" style="padding-right: 0px; padding-left: 0px;">
 <div class="row">
 <div class="col-sm-5" style="padding-left: 0px;">
 <div class="row">
 <div class="col-sm-3 contact" style="padding-left: 0px;" > CONTACT US: </div>
 <div class="col-sm-4" style="font-size: 14.5px; color: #fff; padding-left: 0px; padding-right: 0px;"> <span class="fa fa-phone"> +88 017 1406 3350 </span> </div>
 <div class="col-sm-4" style="padding-left: 0px; font-size: 14.5px; color: #fff;"> <span class="fa fa-envelope"> contact@qkaf.org </span></div>
 </div>
 </div>
<div class="col-sm-7">
<div class="row">
<div class="col-sm-2 contact" > FOLLOW US: </div>
<div class="col-sm-1" style="font-size: 14.5px; color: #fff; padding-right: 0px; width: 5%;">
<a style="color:#ffffff;" href="https://www.facebook.com/QKAFoundation/" target="_blank">
<i class="fab fa-facebook-f"></i> </a> </div>
<div class="col-sm-1" style="font-size: 14.5px; color: #fff; width: 5%; padding-left: 0px; padding-right: 0px;">
 <a style="color:#ffffff;" href="https://twitter.com/qk_ahmad?lang=en" target="_blank"> <i class="fab fa-twitter-square"></i>
  </a>
</div>
<div class="col-sm-1" style="font-size: 14.5px; color: #fff; width: 5%; padding-left: 0px; padding-right: 0px;"> <a style="color:#ffffff;" href="https://www.linkedin.com/company/qk-ahmad-foundation/" target="_blank"><i class="fab fa-linkedin"></i> </a>
</div>
<div class="col-sm-1" style="font-size: 14.5px; color: #fff; width: 5%; padding-left: 0px; padding-right: 0px;">
<a style="color:#ffffff;" href="https://www.youtube.com/channel/UCUycEFOHeN5_uI9PqWkDpVQ" target="_blank">
<i class="fab fa-youtube"></i> </a>
</div>
<div class="col-sm-6 pull-right" style="padding-right: 0px; width: 35%;">
<div class="row">
<div class="col-sm-5" style="font-size: 14.5px; color: #fff; padding-left: 0px; padding-right: 0px; text-align: right;"> ENGLISH </div>
<div class="col-sm-1" style="text-align: center; color:#ffffff; font-weight: bold;" > | </div>
<div class="col-sm-5" style="font-size: 14.5px; color: #fff; padding-left: 0px; padding-right: 0px; text-align: left;"> <i class="fa fa-user" aria-hidden="true" style="margin-top: 5px;"></i>
 {{-- LOGIN --}}
 <ul class="navbar-nav ml-auto" style="margin-top: -6px;margin-right: 15px;display: inline-flex;">
    <!-- Authentication Links -->
    {{-- @guest
        <li class="nav-item" style="color:#ffffff">
            <a class="nav-link" style="color:white" href="{{ route('customLogin') }}">{{ __('Login') }}</a>
        </li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;margin-top: -6px;margin-right: 88px;" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
        </li>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    @endguest --}}
    @guest
    <li><a class="nav-link" href="{{ route('user.login') }}">Login</a></li>
     @else
    <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->frist_name }}
      </a>

      <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="{{ route('user.dashboard') }}">
          My dashboard
        </a>

        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
        </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </div>
  </li>
@endguest

    </ul>
</div>
</div>
</div>
</div>

 </div>
  </div>
 </div>

 </div>

 </div>
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container" >
        <div class="col-md-12" style="padding-left: 0px;" >
        <div class="row">
            <div class="col-md-3" id="headermenu" >
            <div class="navbar-brand hidden-sm hidden-xs ">
                <a href="/"><img style="height: 55px;" src="{{asset('images/Logo.png')}}" class="img-responsive" alt=""> </a>
            </div>
        </div>
        <div class="col-md-7 " style="padding-top:8px; padding-left:0px;">
    <div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="mission_vision.html">Misson & Vision</a>
                <a class="dropdown-item" href="executive_committee.html">Executive Committee</a>
                <a class="dropdown-item" href="general_body.html"> General Body</a>

                </div>
            </li>
                <li class="nav-item">
                <a class="nav-link" href="#">What We Do</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Chairman’s Section</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Total Accounting</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    </nav>

        </div>
          </div>
            <div class="col-md-2" style="border-radius: 20px; background-color: #da291c; font-size: 16px; height: 30px; margin-top: 1.5%; padding-top: 3px; text-align: center; color: #fff;">
                <span class="glyphicon glyphicon-heart" style="font-size:16px;"> </span> <a href="{{url('/')}}"> Donate Now </a>
            </div>
          </div>
          </div>
        </div>

</nav>
