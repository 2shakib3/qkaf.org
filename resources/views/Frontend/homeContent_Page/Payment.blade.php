<h4 class="mb-3" style="text-align:center">Payment</h4>
<div>
    <div class="row Payment_type" style="padding-left:10%">
        <div class="col-md-3 custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
        </div>
        <div class="col-md-3 custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
        </div>
        <div class="col-md-3 custom-radio">
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
    <div class="row" style="margin:0px;padding:0px">
        <div class="col-md-4">
            <label for="cc-expiration-month">Expiration Month</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
            Expiration date required
            </div>
        </div>
        <div class="col-md-4">
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
    <div class="col-md-3 mb-3">
        <label for="cc-cvv">CVV</label>
        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
        <div class="invalid-feedback">
        Security code required
        </div>
    </div>
</div>
<hr class="mb-4">
<button class="btn btn-primary col-md-4" style="float:right" type="submit">Pay Now</button>
