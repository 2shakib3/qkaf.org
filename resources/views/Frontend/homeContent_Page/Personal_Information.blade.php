<div class="row">
    <div class="col-md-6 mb-1">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
        @error('email')
            <div class="invalid-feedback">
                <strong>Please enter a valid email address for shipping updates.</strong>
            </div>
        @enderror
    </div>
    <div class="col-md-6 mb-1">
        <label for="phone">Phone Number</label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder="" required>
        <div class="invalid-feedback">
            Please enter your Phone Number.
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 mb-1">
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
</div>
<div class="row">
    <div class="col-md-4 mb-1">
        <label for="country">Countery</label>
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
    <div class="col-md-8 mb-1">
        <label for="address">Address Line 1</label>
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
</div>
<div class="mt-4" style="float: right; padding-right: 70px;">
        <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back()">Back</button>
        <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next2()">Procced</button>
</div>
