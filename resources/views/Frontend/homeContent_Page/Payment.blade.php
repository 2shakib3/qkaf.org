<h4 class="mb-3" style="text-align:center">Payment</h4>
<div class="container">
<div class="col-md-12 row" style="min-height:550px">
    <div class="card mr-4" style="width: 49%">
        <div class="card-body">
            <h5 class="card-title">Your Information</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card" style="width: 48%">
        <div class="card-body">
            <h5 class="card-title">Your Donation</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="form-group row">
            <div class="col-md-12 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                   <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        I accept term and Condition
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Terms and Condition</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                        (1) The donation services
                                        We will use your donation at our discretion but within our stated charitable objectives.
                                        All payments through the Website are to be made by payment card or via PayPal.
                                        Once you confirm to us through the Website that you wish to proceed with your donation your transaction will be processed through our payment services provider, WooCommerce. By confirming that you wish to proceed with your donation you authorize WooCommerce to request funds from your credit, debit, or PayPal card provider.
                                        (2) Unauthorised card use
                                        If you become aware of fraudulent use of your card, or if it is lost or stolen, you must notify your card provider.
                                        (4) Information from you
                                        Before we can process a donation you must provide us with (i) your name, address and email address; and (ii) details of the credit or debit card that you wish to use to fund the donation. We will use this information to process your donation. It is your responsibility to ensure you have provided us with the correct information.
                                        When you submit your payment details, these details will be transferred to our payment provider, WooCommerce, and your payment data will be collected and processed securely by them. You should make sure that you are aware of WooCommerce’s terms and conditions, which are different from our own, to ensure that you are comfortable with how they will process your personal data before you make a donation.
                                        We won’t share your personal details with any other third party other than is set out in our Privacy Policy. Our Privacy Policy forms part of these Donation Payment Terms and Conditions and by agreeing to these Terms and Conditions you are also agreeing to the way we use and protect your personal information in line with our Privacy Policy.
                                        (5) Refund policy
                                        If you make an error in your donation please contact us either by email at info@mentorinternational.org, by phone at +4687891180
                                        or by post at Mentor International, Brunnsgatan 21A, Stockholm, Sweden 11138 within 14 days and a full refund will be made to you.
                                        (6) Monthly donations
                                        These Donation Payment Terms and Conditions will only apply to successive donations made through the Website where you have set up a monthly donation. When you set up a regular donation you will be scheduling a series of donations to be made on the day of the month that you choose until further notice. You agree that these Terms and Conditions will apply to each of the donations in that series.
                                        By confirming that you wish to proceed with a monthly donation you authorize our payment service provider WooCommerce to request funds from your credit or debit card on the day of each month that you set.
                                        To cancel your regular donation please contact us at info@mentorinternational.org.
                                        (7) General
                                        We reserve the right to amend these Donation Payment Terms and Conditions at any time.
                                        These Donation Payment Terms and Conditions are governed by Swedish law and are subject to the exclusive jurisdiction of the Swedish courts.
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- <div class="col-md-6 userinfo">
            <h2>Your Information</h2>
        <p><span>Frist-Name:</span><span>Last-Name:</span></p>
        <p><span> {{ $user->frist_name }}</span><span> {{ $user->last_name }}</span></p>
        <p>Frist-Name:<span> {{ $user->last_name }}</span></p>
        <p>Last-Name:<span> {{ $user->frist_name }}</span></p>
        <p>Email:<span> {{ $user->email }}</span></p>
        <p>Country:<span> {{ $user->country }}</span></p>
        <p>Address:<span> {{ $user->address }}</span></p>

    </div>
    <div class="col-md-6 useraddres">
       <h2>Your Donation</h2>
      <p>Donation-type: <span>One time</span></p>
      <p>Donation_amount: <span>1200</span></p>
    </div> --}}
</div>
</div>
<div class="mt-4" style="float: right; padding-right: 70px;position:absolute;right:0px;bottom:10px">
    <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_info()">Back</button>
    <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next2()">Pay now</button>
</div>
