<input type="hidden" name="step" value="direct_multi_product" />
<input type="hidden" name="campaignId" value="" />
<input type="hidden" name="shippingId" value="" autocomplete="off" />
<input type="hidden" name="ipAddress" value="" />
<input type="hidden" id="cc_expires" name="cc_expires" value="">
<div class="crt-from-sec dsplay" id="chek-frm">
    <div class="imgCover mb-5 py-5" style="background-image: url('images/cart-bg.jpg')">
        <p class="text-center brn-p3">
            Always Ready For Action. <br />
            <span>And Thank You</span>
        </p>
    </div>
    <div class="cart-sec1 dsplay">
        <span class="nt-txt">You have not selected any product...</span><br /> <br />

        <button class="button-82-pushable" role="button">
            <span class="button-82-shadow"></span>
            <span class="button-82-edge"></span>
            <span class="button-82-front text">
                <a href="products.php">
                    BROWSE PRODUCTS
                </a>
            </span>
        </button>
    </div>
    <div class="div-box" id="div-bx">
        <div class="crt-frm1" id="frmsec">
            <div class="safebox">
                <div class="safe-iconbox">
                    <!--<img src="images/crt-side-arw.jpg" alt="">-->
                </div>
                <p style="color: #01e8eb">Shipping Information </p>
            </div>
            <div class="frm1 dsplay justifyBetween flexWrap">
                <input class="inputStyle" style="width: 47%" type="text" name="firstName" placeholder="First Name"
                    id="firstName" value="" required maxlength="64" />
                <input class="inputStyle" style="width: 47%" type="text" name="lastName" id="lastName"
                    placeholder="Last Name" value="" required maxlength="64" />
                <input class="inputStyle" type="email" name="email" id="email" placeholder="E-mail" value="" required
                    maxlength="96" class="h5-email" />
                <input class="inputStyle" type="text" name="shippingAddress1" id="shippingAddress1"
                    placeholder="Address" value="" required maxlength="64" />
                <input class="inputStyle" type="text" name="shippingCity" id="shippingCity" placeholder="City" value=""
                    required maxlength="32" />
                <select name="billingCountry" id="billingCountry" class="inputStyle" required>
                    <option value="">Select Country</option>
                    <option value="us">United States </option>
                </select>
                <select class="inputStyle " name="shippingState" id="shippingState" required>
                    <option value="">State</option>
                    <option value="AL">Alabama (AL)</option>
                    <option value="AK">Alaska (AK)</option>
                    <option value="AZ">Arizona (AZ)</option>
                    <option value="AR">Arkansas (AR)</option>
                    <option value="CA">California (CA)</option>
                    <option value="CO">Colorado (CO)</option>
                    <option value="CT">Connecticut (CT)</option>
                    <option value="DE">Delaware (DE)</option>
                    <option value="FL">Florida (FL)</option>
                    <option value="GA">Georgia (GA)</option>
                    <option value="HI">Hawaii (HI)</option>
                    <option value="ID">Idaho (ID)</option>
                    <option value="IL">Illinois (IL)</option>
                    <option value="IN">Indiana (IN)</option>
                    <option value="IA">Iowa (IA)</option>
                    <option value="KS">Kansas (KS)</option>
                    <option value="KY">Kentucky (KY)</option>
                    <option value="LA">Louisiana (LA)</option>
                    <option value="ME">Maine (ME)</option>
                    <option value="MD">Maryland (MD)</option>
                    <option value="MA">Massachusetts (MA)</option>
                    <option value="MI">Michigan (MI)</option>
                    <option value="MN">Minnesota (MN)</option>
                    <option value="MS">Mississippi (MS)</option>
                    <option value="MO">Missouri (MO)</option>
                    <option value="MT">Montana (MT)</option>
                    <option value="NE">Nebraska (NE)</option>
                    <option value="NV">Nevada (NV)</option>
                    <option value="NH">New Hampshire (NH)</option>
                    <option value="NJ">New Jersey (NJ)</option>
                    <option value="NM">New Mexico (NM)</option>
                    <option value="NY">New York (NY)</option>
                    <option value="NC">North Carolina (NC)</option>
                    <option value="ND">North Dakota (ND)</option>
                    <option value="OH">Ohio (OH)</option>
                    <option value="OK">Oklahoma (OK)</option>
                    <option value="OR">Oregon (OR)</option>
                    <option value="PA">Pennsylvania (PA)</option>
                    <option value="RI">Rhode Island (RI)</option>
                    <option value="SC">South Carolina (SC)</option>
                    <option value="SD">South Dakota (SD)</option>
                    <option value="TN">Tennessee (TN)</option>
                    <option value="TX">Texas (TX)</option>
                    <option value="UT">Utah (UT)</option>
                    <option value="VT">Vermont (VT)</option>
                    <option value="VA">Virginia (VA)</option>
                    <option value="WA">Washington (WA)</option>
                    <option value="WV">West Virginia (WV)</option>
                    <option value="WI">Wisconsin (WI)</option>
                    <option value="WY">Wyoming (WY)</option>
                </select>
                <input type="text" style="width: 47%" name="phone" id="phone" placeholder="Phone Number" value=""
                    required maxlength="12" class="h5-phone inputStyle" data-mask="phone" />
                <input type="text" style="width: 47%" name="shippingZip" id="shippingZip" placeholder="Zip Code"
                    value="" required maxlength="5" class="h5-zip inputStyle" />
            </div>
        </div>
        <div class="crt-frm2">
            <div class="safebox">
                <div class="safe-iconbox2">
                    <!--<img src="images/crt-side-arw.jpg" alt="">-->
                </div>
                <p style="color: #01e8eb">Payment Information</p>
                <img src="images/cards.png" alt="" class="cards">
            </div>
            <div class="frm2">
                <p class="sameas">
                    <input type="checkbox" checked class="chkbx" id="chkbx">
                    Is your billing address same as shipping address?
                </p>
                <div class="clearall"></div>
                <div id="billing-info" style="display:none;" class="topmar2 justifyBetween flexWrap">
                    <input class="inputStyle" style="width: 47%" type="text" name="firstName" placeholder="First Name"
                        id="firstName" value="" required maxlength="64" />
                    <input class="inputStyle" style="width: 47%" type="text" name="lastName" id="lastName"
                        placeholder="Last Name" value="" required maxlength="64" />
                    <input class="inputStyle" type="email" name="email" id="email" placeholder="E-mail" value=""
                        required maxlength="96" class="h5-email" />
                    <input class="inputStyle" type="text" name="shippingAddress1" id="shippingAddress1"
                        placeholder="Address" value="" required maxlength="64" />
                    <input class="inputStyle" type="text" name="shippingCity" id="shippingCity" placeholder="City"
                        value="" required maxlength="32" />
                    <select name="billingCountry" id="billingCountry" class="inputStyle" required>
                        <option value="">Select Country</option>
                        <option value="us">United States </option>
                    </select>
                    <select class="inputStyle" name="shippingState" id="shippingState" required>
                        <option value="">State</option>
                        <option value="AL">Alabama (AL)</option>
                        <option value="AK">Alaska (AK)</option>
                        <option value="AZ">Arizona (AZ)</option>
                        <option value="AR">Arkansas (AR)</option>
                        <option value="CA">California (CA)</option>
                        <option value="CO">Colorado (CO)</option>
                        <option value="CT">Connecticut (CT)</option>
                        <option value="DE">Delaware (DE)</option>
                        <option value="FL">Florida (FL)</option>
                        <option value="GA">Georgia (GA)</option>
                        <option value="HI">Hawaii (HI)</option>
                        <option value="ID">Idaho (ID)</option>
                        <option value="IL">Illinois (IL)</option>
                        <option value="IN">Indiana (IN)</option>
                        <option value="IA">Iowa (IA)</option>
                        <option value="KS">Kansas (KS)</option>
                        <option value="KY">Kentucky (KY)</option>
                        <option value="LA">Louisiana (LA)</option>
                        <option value="ME">Maine (ME)</option>
                        <option value="MD">Maryland (MD)</option>
                        <option value="MA">Massachusetts (MA)</option>
                        <option value="MI">Michigan (MI)</option>
                        <option value="MN">Minnesota (MN)</option>
                        <option value="MS">Mississippi (MS)</option>
                        <option value="MO">Missouri (MO)</option>
                        <option value="MT">Montana (MT)</option>
                        <option value="NE">Nebraska (NE)</option>
                        <option value="NV">Nevada (NV)</option>
                        <option value="NH">New Hampshire (NH)</option>
                        <option value="NJ">New Jersey (NJ)</option>
                        <option value="NM">New Mexico (NM)</option>
                        <option value="NY">New York (NY)</option>
                        <option value="NC">North Carolina (NC)</option>
                        <option value="ND">North Dakota (ND)</option>
                        <option value="OH">Ohio (OH)</option>
                        <option value="OK">Oklahoma (OK)</option>
                        <option value="OR">Oregon (OR)</option>
                        <option value="PA">Pennsylvania (PA)</option>
                        <option value="RI">Rhode Island (RI)</option>
                        <option value="SC">South Carolina (SC)</option>
                        <option value="SD">South Dakota (SD)</option>
                        <option value="TN">Tennessee (TN)</option>
                        <option value="TX">Texas (TX)</option>
                        <option value="UT">Utah (UT)</option>
                        <option value="VT">Vermont (VT)</option>
                        <option value="VA">Virginia (VA)</option>
                        <option value="WA">Washington (WA)</option>
                        <option value="WV">West Virginia (WV)</option>
                        <option value="WI">Wisconsin (WI)</option>
                        <option value="WY">Wyoming (WY)</option>
                    </select>
                    <input type="text" style="width: 47%" name="phone" id="phone" placeholder="Phone Number" value=""
                        required maxlength="12" class="h5-phone inputStyle" data-mask="phone" />
                    <input type="text" style="width: 47%" name="shippingZip" id="shippingZip" placeholder="Zip Code"
                        value="" required maxlength="5" class="h5-zip inputStyle" />
                    <div class="clearall"></div>
                </div>
                <div class="frmElmnts">
                    <div class="frmfld">
                        <select class="inputStyle" name="fields_card" id="fields_card" class="" required>
                            <option selected="" value="">Select A Card</option>
                            <option value="visa">Visa</option>
                            <option value="master">Master Card</option>
                            <option value="discover">Discover</option>
                        </select>
                    </div>
                </div>
                <div class="frmElmnts">
                    <input class="inputStyle" type="text" name="creditCardNumber" id="creditCardNumber" value=""
                        placeholder="Credit Card Number" autocomplete="off" required maxlength="16"
                        onkeydown="return onlyNumbers(event,'cc')" class="h5-ccno" data-mask='card' />
                </div>
                <div class="frmElmnts">
                    <div class="frmfld1 frmfld1-short1">
                        <select class="inputStyle" name="fields_expmonth" id="fields_expmonth" class="" onchange=""
                            required>
                            <option value="">Exp. Month</option>
                            <option value="01">(01) January</option>
                            <option value="02">(02) February</option>
                            <option value="03">(03) March</option>
                            <option value="04">(04) April</option>
                            <option value="05">(05) May</option>
                            <option value="06">(06) June</option>
                            <option value="07">(07) July</option>
                            <option value="08">(08) August</option>
                            <option value="09">(09) September</option>
                            <option value="10">(10) October</option>
                            <option value="11">(11) November</option>
                            <option value="12">(12) December</option>
                        </select>
                    </div>
                    <div class="frmfld1 frmfld1-short2">
                        <select class="inputStyle" name="fields_expyear" id="fields_expyear" class="" onchange=""
                            required>
                            <option value="">Exp. Year</option>
                            <?php
                            $firstYear = (int) date('Y');
                            $lastYear = $firstYear + 10;
                            for ($i = $firstYear; $i <= $lastYear; $i++) {
                                echo '<option value=' . $i . '>' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="frmElmnts">
                    <div class="frmfld1 frmfld1-short1">
                        <input class="inputStyle" autocomplete="off" maxlength="3" type="text" id="cc_cvv" name="CVV"
                            required onkeydown="return onlyNumbers(event,'phone')" class="small h5-cvv"
                            placeholder="CVV:" data-mask='cccvv' />
                    </div>
                    <a href="javascript:void(0)" class="what sccode">What is this?</a>
                </div>
                <p class="clearall"></p>
                <p class="trm trm-padd">
                    <input type="checkbox" name="agree" id="agree" value="Y" class="chk radio" required="required">
                    I agree to the <a href="terms.php" target="_blank">Terms &amp; Conditions</a> And
                    <a href="privacy.php" target="_blank">Privacy Policy</a>. <span class="trm_1"></span>
                </p>
                <div class="clearall"></div>
                <div class="wrap">
                    <button type="submit" class="submitBtn">Complete Checkout</button>
                </div>

                <img src="images/secure.png" class="secure" />
            </div>
        </div>
    </div>
</div>