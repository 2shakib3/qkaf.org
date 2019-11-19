<div class="personalInfo">
    @guest
    <div class="login_content" style="padding-top:10%;">
        <div class="text-center">LOGIN</div>
        <div class="login" style="margin:0 auto">
            <form method="POST" action="#">
                @csrf
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-4" style="float: right;padding-right: 70px;position:absolute;right:0px;bottom:10px">
                    <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_donate()">Back</button>
                    <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next2()">Login & Procced</button>
                </div>
            </form>
        </div>
    </div>

    <div class="registration_content" style="padding-top: 3%;margin: 15px;display:none">
        <form method="POST" action="{{ route('user.reg') }}">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-1">
                    <label for="fristname"> Frist Name</label>
                    <input type="text" class="form-control" id="fristname" name="fristname" placeholder="" value="" required>
                    @error('fristname')
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-1">
                    <label for="lastName"> Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="" required>
                    @error('lastname')
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-1">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                    @error('email')
                        <div class="invalid-feedback">
                            <strong>Please enter a valid email address for shipping updates.</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-1">
                    <label for="country">Countery</label>
                    <select name="dropdowncountry" id="dropdowncountry" class="dropdowncountry from-control col-md-12 p-2" onchange="countrySelect()" >
                        @foreach($countryname as $countrys)
                            <option value='{{ $countrys->id }}'>{{ $countrys->name }}</option>
                        @endforeach
                    </select>
                    @error('dropdowncountry')
                    <div class="invalid-feedback">
                        Valid Country is required.
                    </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-1">
                    <label for="state">State</label>
                    <select class="state custom-select d-block w-100" id="state" name="state" onchange="stateSelect()" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                    </select>
                    <div class="invalid-feedback">
                    Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-4 mb-1">
                    <label for="city">city</label>
                    <select class="city form-control" id="city" name="city" required>
                        <option value="">Choose...</option>
                        <option>California</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-1">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-md-4 mb-1">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" name ="zip" placeholder="" required>
                    <div class="invalid-feedback">
                    Zip code required.
                    </div>
                </div>
                <div class="col-md-4 mb-1">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="" required>
                    <div class="invalid-feedback">
                        Please enter your Phone Number.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-1">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                    <div class="invalid-feedback">
                        Please enter your Password.
                    </div>
                </div>
                <div class="col-md-4 mb-1">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <div class="invalid-feedback">
                        Please enter your Password.
                    </div>
                </div>
            </div>
            <div class="mt-4" style="float: right;padding-right: 70px;position:absolute;right:0px;bottom:10px">
                <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_donate()">Back</button>
                <button class="btn btn-primary" id="registarsubmit" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next2()">Create & Procced</button>
            </div>
        </form>
    </div>
    @else
        <b>Your Information</b>
        <div class="col-md-12 row">
            <div class="col-md-6 userinfo">
            <p>Frist-Name:</p>
            <span> {{ $user->frist_name }}</span>
            <p>Last-Name:</p>
            <span> {{ $user->last_name }}</span>
            <p>Email:</p>
            <span> {{ $user->email }}</span>
            <p>phone_no:</p>
            <span>{{ $user->Phone}}</span>
            </div>
            <div class="col-md-6 useraddres">
                <h2>User Address</h2>
                <p>Country: {{ $user->country }}</p>
                <p>State: {{ $user->state }}</p>
                <p>City: {{ $user->city }}</p>
                <p>Address: {{ $user->address }}</p>
                <p>Address: {{ $user->postal_code }}</p>
            </div>
        </div>
        <div class="mt-4" style="float: right; padding-right: 70px;position:absolute;right:0px;bottom:10px">
            <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_donate()">Back</button>
            <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next2()">Procced</button>
        </div>
    @endguest
</div>
<div class="mt-4" style="float: right; padding-right: 70px;position:absolute;right:0px;bottom:10px">
    <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_donate()">Back</button>
    <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next2()">Login & Procced</button>
</div>
