<div class="fixed_amount" style="display:block">
    <div class="row chose_type_of_donation" style="padding-top:20px;padding-left:30px">
        <div>Choose a Gift Type:</div>
        <div style="margin-left:160px">
            <label class="radio-inline">
                <input type="radio" name="gifttype" id="Onetime" checked>
                <span style="margin-left: 20px;"> One Time</span>
            </label>
            <label class="radio-inline" style="margin-left:80px">
                <input type="radio" name="gifttype" id="Monthly">
                <span style="margin-left: 20px;">Monthly</span>
            </label>
        </div>
    </div>
    <div class="row mt-4" style="padding:0px 30px;min-height:100px">
        <div class="col-md-2" style="position:relative;min-height:100px">
            <div style="position: absolute; top: 27%; right: 0px;">Choose Amount:</div>
        </div>
        <div class="col-md-10">
        @include('Frontend.homeContent_Page.fixedAmount')
        </div>
        <div class="col-md-6" style="position: absolute; bottom: 10px; right: 32px;">
            <div class="total_amount" style="float:right;margin-right: 80px;">
                <label for="">Donation Amount</label>
                <input type="text" readonly name="total_amount_test"  id="total_amount_test" value="{{Cart::subtotal()}}">
            </div>
            <div class="mt-4" style="float: right; padding-right: 70px;">
                <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="refreshPage()">Refresh</button>
                <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next()">Procced</button>
            </div>
        </div>
    </div>
</div>
<div class="specific_project" style="display:none">
    @include('Frontend.homeContent_Page.specificProject')
</div>
