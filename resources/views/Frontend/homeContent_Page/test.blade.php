@extends('Frontend.master')
@section('title')
    Home Page
@endsection
@section('content')
<div style="background-image:url('{{asset('images/bac.png')}}');background-repeat:no-repeat;background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 my-4">
                    <div class="card left_body" style="height:500px; overflow-y: scroll; background-color:rgba(255, 255, 255, 0.8);">
                      <form action="{{ route('store') }}" class="needs-validation" novalidate method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="donation_type" id="donation_type">
                                <h2 style="font-size: 15px;text-align: left;">Choses a gift type</h2>
                                <div id="main">
                                    <div id="tab-btn col-md-8" class="chose_donate_type">
                                        <label>
                                            <input type="radio" name="donate_type" value='onetime'>
                                            <span class="onetime active" id="onetime">One Time</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="donate_type" value='monthly'>
                                            <span class="monthly" id="monthly">Monthly</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="currency col-md-12 mb-3" style="font-size: 0.8rem;font-style: normal;font-weight: 500;">
                                <div class="row">
                                    <div class="currencytype col-md-7">
                                            <p>Chose a currency type :</p>
                                    </div>
                                    <div class="currency-list col-md-5">
                                        <select name="currency" class="from-control col-md-12">
                                            @foreach($countryname as $countrys)
                                            <option value='{{ $countrys->id }}'>{{ $countrys->currency }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                        Valid currency is required.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="main" class="donate_type">
                                <div class="onetime-content">
                                    <div class="donate_box">
                                        <label>
                                            <input type="radio" name="amount" class="amount" value='15'  onclick="abc(15)">
                                            <span class="donate_amount">$15</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="amount" class="amount" value='25'  onclick="abc(25)">
                                            <span class="donate_amount">$25</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="amount" class="amount" value='35'  onclick="abc(35)">
                                            <span class="donate_amount">$35</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="amount" class="amount" value='50'  onclick="abc(50)">
                                            <span class="donate_amount">$50</span>
                                        </label>        <label>
                                            <input type="radio" name="amount" class="amount" value='75'  onclick="abc(75)">
                                            <span class="donate_amount">$75</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="amount" class="amount" value='100'  onclick="abc(100)">
                                            <span class="donate_amount">$100</span>
                                        </label>
                                        <label>
                                            <div class="row">
                                                <input type="radio"  name="amount" id="amount" class="amount">
                                                <span class="donate_amount" id="donate_amount_other">others</span>
                                                <div class="onetime_input_field" id="onetime_input_field" style="display: none;">
                                                    <input type="number" name="amount_others" id="amount_others">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="monthly-content">
                                    <div class="donate_box">
                                        <label>
                                            <input type="radio" name="amount" class="amount" value='50' onclick="abc(50)">
                                            <span class="donate_amount">$50</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="amount" class="amount" value='100' onclick="abc(100)">
                                            <span class="donate_amount">$100</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="amount" class="amount" value='150' onclick="abc(150)">
                                            <span class="donate_amount">$150</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="amount" class="amount" value='250' onclick="abc(250)">
                                            <span class="donate_amount">$250</span>
                                        </label>        <label>
                                            <input type="radio" name="amount" class="amount" value='500' onclick="abc(500)">
                                            <span class="donate_amount">$500</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="amount" class="amount" value='1000' onclick="abc(1000)">
                                            <span class="donate_amount">$1000</span>
                                        </label>
                                        <label>
                                            <div class="row">
                                                <input type="radio"  name="amount" id="amount" class="amount";>
                                                <span class="donate_amount" id="donate_amount_other">others</span>
                                                <div class="monthly_input_field" id="monthly_input_field" style="display: none;">
                                                    <input type="number" name="monthly_input" id="amount_others">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="total_amount">
                                    <label for="">Donation Amount</label>
                                    <input type="text" readonly name="total_amount_test"  id="total_amount_test" value="{{Cart::subtotal()}}">
                                </div>
                            </div>
                            <h4 class="mt-3">Enter Your Billing Information</h4>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                                @error('email')
                                <div class="invalid-feedback">
                                     <strong>Please enter a valid email address for shipping updates.</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title">Title</label>
                                    <br>
                                    <select name="title" class="title from-control col-md-12 p-2">
                                        <option value="mr">Mr</option>
                                        <option value="miss">Miss</option>
                                        <option value="ms">Ms</option>
                                        <option value="mrs">Mrs</option>
                                        <option value="dr">Dr</option>
                                    </select>
                                    @error('title')
                                    <div class="invalid-feedback">
                                    Valid title is required.
                                    </div>

                                    @enderror

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="fristname"> Frist Name</label>
                                    <input type="text" class="form-control" id="fristname" name="fristname" placeholder="" value="" required>
                                    @error('fristname')
                                    <div class="invalid-feedback">
                                    Valid last name is required.
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                    <label for="lastName"> Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="" required>
                                    @error('lastname')
                                    <div class="invalid-feedback">
                                    Valid last name is required.
                                    </div>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label for="country">Countery</label>
                                <br>
                                <select name="dropdowncountry" class="dropdowncountry from-control col-md-12 p-2" onchange="countrySelect()" >

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
                            <div class="mb-3">
                                <label for="address">Address Line 1</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address2">Address Line 2</label>
                                <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="state">State</label>
                                    <select class="state custom-select d-block w-100" id="state" name="state" onchange="stateSelect()" required>
                                    <option value="">Choose...</option>
                                    <option>California</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Please provide a valid state.
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="city">city</label>
                                    <select class="city form-control" id="city" name="city" required>
                                        <option value="">Choose...</option>
                                        <option>California</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" id="zip" name ="zip" placeholder="" required>
                                    <div class="invalid-feedback">
                                    Zip code required.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone">Phone Number</label>
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="" required>
                                <div class="invalid-feedback">
                                    Please enter your Phone Number.
                                </div>
                            </div>
                            <h4 class="mb-3">Payment</h4>
                            <div class="d-block my-3 Payment_type">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="debit">Debit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">PayPal</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                Credit card number is required
                                </div>
                            </div>
                            <div class="form-row ml-sm-2">
                                <div class="form-group col-md-4">
                                    <label for="cc-expiration-month">Expiration Month</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback">
                                    Expiration date required
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cc-expiration-year">Expiration year</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback">
                                    Expiration date required
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-cvv">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                Security code required
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="col-sm-8 my-4">
                    <div class="card w-80 mb-3" style="background-color:rgba(255, 255, 255, 0.8);">
                        <div class="card-body my-2" style="height:50px;">
                                <div class=" row col-md-12 specific_donate_box ">
                                    <div class="text col-md-8">
                                        <p>Do you want to donate for specific project ?</p>
                                    </div>
                                    <div class="select_for_spacefic colo-md-4">
                                        <label>
                                            <input type="radio" name="specific_donate" id="show" value="YES">
                                            <span class="YES">YES</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="specific_donate" checked id="hide" value="NO">
                                            <span class="no">NO</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card w-80 mb-3" style="background-color:rgba(255, 255, 255, 0.8);">
                        <div class="card-body" style="height:280px; overflow: scroll;">
                            <div class="specificdonate_show" id="specificdonate_show" style="display: none;">
                                <div class="col-md-12 donate_project">
                                  <div class="row">
                                      <div class="col-md-2">
                                          <label for="project">Choose project:</label>
                                      </div>
                                      <div class="col-md-4">
                                          <select name="project" id="project" class="project col-md-12 p-1" onchange="projectSelect()">
                                            <option style="color:#696969" value="0"> choose project....  </option>';
                                              @foreach($projects as $project)
                                                   <option value='{{  $project->id}}'>{{ $project->projectName }}</option>
                                              @endforeach
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="donate_project_catagory">Choose catagory:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="category" id="category" class="category col-md-12 p-1" onchange="categorySelect()">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item mt-4">
                                    <p>Items</p>
                                    <div class="list-group-item  mb-2 product" id="product">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                    <div class="row">
                      <div class="card right_bottom_part_left col-sm-9 mr-3" style="height:150px; overflow: scroll;display: inline;background-color:rgba(255, 255, 255, 0.8);">
                        <!--  -->
                              @include('Frontend.showCart')
                        <!--  -->
                      </div>
                      <div class="card right_bottom_part_right" id="total_amount"style="height:150px; overflow: hidden;background-color:rgba(255, 255, 255, 0.8);width:22%;">
                          <p style="text-align:center;">Donation Amount</p>
                          <h4 style="text-align: center;color: red;"><span>$</span>{{Cart::subtotal()}}</h4>
                      </div>
                      </div>
                    </div>
                </div>
            </div>

    </div>
</div>

@endsection
