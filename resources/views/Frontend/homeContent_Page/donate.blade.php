<div class="fixed_amount" style="display:block">
    <div class="row chose_type_of_donation" style="padding-top:20px;padding-left:30px">
        <div>Choose a Gift Type:</div>
        <div class="gift_type">
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
    <div class="chose_amount_row row mt-4">
        <div class="chose_amount_position col-md-2">
            <div class="chose_amount">Choose Amount:</div>
        </div>
        <div class="col-md-10">
            @include('Frontend.homeContent_Page.fixedAmount')
        </div>
    </div>
</div>
<div class="row">
    <div class="mt-2" style="float: right;position: absolute;bottom: 10px; right: 40%;">
        <div class="row total_amount" style="margin:0px;padding:0px">
            <label class="col-md-4" for="">Total</label>
            <input class="col-md-8" type="text" readonly name="total_amount_test" id="total_amount_test" value="" onchange="myFunction()">
        </div>
    </div>
    <div class="mt-4" style="float: right;position: absolute;bottom: 10px; right: 60px;">
        <button class="btn btn-secondary" id="refresh" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="refreshPage()">Refresh</button>
        <button class="btn btn-primary" id="proccedtoinfo"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next()">Procced</button>
    </div>
</div>
