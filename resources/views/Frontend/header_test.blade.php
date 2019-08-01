<header>
  <div class="bootstrap-iso">
<!-- Any HTML here will be styled with Bootstrap CSS -->

    <div class="header fixed-top">
        <div class="container">
            <ul>
                <li>
                    <div class="contact">
                        Contact Us:
                        <div class="contact-info">
                            <span class="contact-icon"><i class="fas fa-phone-volume"></i></span>
                            <div class="contact-no">+8801828066845</div>
                        </div>
                        <div class="contact-info">
                            <span class="mail-icon"><i class="fas fa-envelope-square"></i></span>
                            <div class="contact-no">contact@qkaf.org</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="follow">
                        Follow Us
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-linkedin-in"></i>

                    </div>
                </li>
                <li>
                    <div class="user">
                        <div class="icon">
                            <i class="fa fa-language fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="loguser">
                            <a href="#">English</a>
                        </div>
                        <div class="space">|</div>
                        <div class="icon">
                            <i class="far fa-user fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="userlogin">
                            <!-- <div class="loguser"><a href="{{url('/log')}}">Login</a></div> -->
                            @guest
                              <div class="loguser"><a href="{{url('/log')}}">Login</a></div>
                              @else
                              <ul>
                                <li class="dropdown">
                                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                      <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }}
                                  </a>
                                  <ul class="dropdown-menu dropdown-user">
                                  </ul>

                                  <!-- /.dropdown-user -->
                                </li>

                              </ul>
                              <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                                          </form>
                              </li>

                              @endguest
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
  </div>
</header>



<!--Top Header -->
 <div class="header__top">
   <div class="bootstrap-iso">

 <div class="container">
 <div class="col-md-12" style="margin-top:.5%; padding-right: 0px; padding-left: 0px;">
 <div class="col-md-5" style="padding-left: 0px; display: inline-block">
     <div class="col-md-3 contact" style="padding-left: 0px;" > CONTACT US: </div>
     <div class="col-md-4" style="font-size: 14.5px; color: #fff;display: inline;margin-left: 45px; margin-bottom: 20px;"> <span class="fa fa-phone"> +88 017 1406 3350 </span> </div>
     <div class="col-md-4" style="padding-left: 0px; font-size: 14.5px; color: #fff;"> <span class="fa fa-envelope"> contact@qkaf.org </span></div>
 </div>

 <div class="col-md-7">
      <div class="col-md-2 contact" > FOLLOW US: </div>
      <div class="col-md-1" style="font-size: 14.5px; color: #fff; padding-right: 0px; width: 5%;"> <a style="color:#ffffff;" href="https://www.facebook.com/QKAFoundation/" target="_blank"> <span class="fa fa-facebook">   </span> </a> </div>
      <div class="col-md-1" style="font-size: 14.5px; color: #fff; width: 5%; padding-left: 0px; padding-right: 0px;"> <a style="color:#ffffff;" href="https://twitter.com/qk_ahmad?lang=en" target="_blank"> <span class="fa fa-twitter"> </span>  </a>
      </div>
      <div class="col-md-1" style="font-size: 14.5px; color: #fff; width: 5%; padding-left: 0px; padding-right: 0px;"> <a style="color:#ffffff;" href="https://www.linkedin.com/company/qk-ahmad-foundation/" target="_blank"> <span class="fa fa-linkedin"> </span> </a>
      </div>
      <div class="col-md-1" style="font-size: 14.5px; color: #fff; width: 5%; padding-left: 0px; padding-right: 0px;">
            <a style="color:#ffffff;" href="https://www.youtube.com/channel/UCUycEFOHeN5_uI9PqWkDpVQ" target="_blank">
            <span class="fa fa-youtube-play"> </span>  </a>
      </div>
      <div class="col-md-6 pull-right" style="padding-right: 0px; width: 35%; display: inline">
            <div class="col-md-5" style="font-size: 14.5px; color: #fff; padding-left: 0px; padding-right: 0px; text-align: center;"> ENGLISH </div>
            <div class="col-md-1" style="text-align: center; color:#ffffff; font-weight: bold;" > | </div>
            <div class="col-md-5" style="font-size: 14.5px; color: #fff; padding-left: 0px; padding-right: 0px; text-align: right;"> <span class="glyphicon glyphicon-user"> </span>  LOGIN </div>

      </div>
 </div>
 </div>

 </div>
</div>

 </div>

<!--End Top Header -->
