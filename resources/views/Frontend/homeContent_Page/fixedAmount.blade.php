<div class="donate_type">
    <div class="onetime-content" style="display:block">
        <div class="donate_box">
            <label>
                <input type="radio" name="amount" class="amount" value='50'  onclick="abc(50)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;margin-bottom: 30px;" class="donate_amount">$50</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='100'  onclick="abc(100)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;margin-bottom: 30px;" class="donate_amount">$100</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='150'  onclick="abc(150)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;margin-bottom: 30px;" class="donate_amount">$150</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='200'  onclick="abc(200)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;margin-bottom: 30px;" class="donate_amount">$50</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='250'  onclick="abc(250)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;margin-bottom: 30px;" class="donate_amount">$75</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='500'  onclick="abc(500)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;" class="donate_amount">$500</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='1000'  onclick="abc(1000)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;" class="donate_amount">$1000</span>
            </label>
            <label>
                <input type="radio"  name="amount" id="onetime_amount" class="amount" onclick="onetime_input_toggle()">
                <span class="donate_amount" id="onetime_amount_other" style="padding: 10px 70px 10px 35px; font-size: 20px;">others</span>
            </label>
            <label>
                <div class="onetime_input_field" id="onetime_input_field" style="display: none;">
                    <input type="number" name="amount_others" id="onetime_input" style="font-size: 20px; padding: 7px 5px 7px 5px; margin-left: 10px;">
                </div>
            </label>
        </div>
    </div>
    <div class="monthly-content" style="display:none">
        <div class="donate_box">
            <label>
                <input type="radio" name="amount" class="amount" value='15'  onclick="abc(15)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;margin-bottom: 30px;" class="donate_amount">$15</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='25'  onclick="abc(25)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;margin-bottom: 30px;" class="donate_amount">$25</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='35'  onclick="abc(35)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;margin-bottom: 30px;" class="donate_amount">$35</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='50'  onclick="abc(50)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;margin-bottom: 30px;" class="donate_amount">$50</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='75'  onclick="abc(75)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;margin-bottom: 30px;" class="donate_amount">$75</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='100'  onclick="abc(100)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;" class="donate_amount">$100</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='500'  onclick="abc(500)">
                <span style="padding: 10px 70px 10px 35px; font-size: 20px;" class="donate_amount">$500</span>
            </label>
            <label>
                <input type="radio"  name="amount" id="amount" class="amount" onclick="monthly_input_toggle()">
                <span class="donate_amount" id="monthly_amount_other" style="padding: 10px 70px 10px 35px; font-size: 20px;">others</span>
            </label>
            <label>
                <div class="monthly_input_field" id="monthly_input_field" style="display: none;">
                    <input type="number" name="amount_others" id="monthly_input" style="font-size: 20px; padding: 7px 5px 7px 5px; margin-left: 10px;">
                </div>
            </label>
        </div>
    </div>
</div>
