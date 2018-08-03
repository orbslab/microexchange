<?php
	include 'header.php';
?>

    <div class="payment">
    	<div class="row-fluid">
        <div class="modtitle">
          <p>Payment</p>
        </div>
        <form class="form-horizontal">
          <fieldset>
            <!-- Name -->
            <div class="control-group">
              <label class="control-label"  for="username">Card Holder's Name</label>
              <div class="controls">
                <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
              </div>
            </div>
       
            <!-- Card Number -->
            <div class="control-group">
              <label class="control-label" for="email">Card Number</label>
              <div class="controls">
                <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
              </div>
            </div>
       
            <!-- Expiry-->
            <div class="control-group">
              <label class="control-label" for="password">Card Expiry Date</label>
              <div class="controls">
                <select class="span3" name="expiry_month" id="expiry_month">
                  <option value="01">Jan (01)</option>
                  <option value="02">Feb (02)</option>
                  <option value="03">Mar (03)</option>
                  <option value="04">Apr (04)</option>
                  <option value="05">May (05)</option>
                  <option value="06">June (06)</option>
                  <option value="07">July (07)</option>
                  <option value="08">Aug (08)</option>
                  <option value="09">Sep (09)</option>
                  <option value="10">Oct (10)</option>1
                  <option value="11">Nov (11)</option>
                  <option value="12">Dec (12)</option>
                </select>
                <select class="span2" name="expiry_year">
                  <option value="18">2018</option>
                  <option value="19">2019</option>
                  <option value="20">2020</option>
                  <option value="21">2021</option>
                  <option value="22">2022</option>
                  <option value="23">2023</option>
                  <option value="24">2024</option>
                  <option value="25">2025</option>
                  <option value="26">2026</option>
                  <option value="27">2027</option>
                  <option value="28">2028</option>
                </select>
              </div>
            </div>
       
            <!-- CVV -->
            <div class="control-group">
              <label class="control-label"  for="password_confirm">Card CVV</label>
              <div class="controls">
                <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="span2">
              </div>
            </div>
       
            <!-- Save card -->
            <div class="control-group">
              <div class="controls">
                <label class="checkbox" for="save_card">
                  <input type="checkbox" id="save_card" value="option1">
                  Save card on file?
                </label>
              </div>
            </div>
       
            <!-- Submit -->
            <div class="control-group">
              <div class="controls">
                <button class="btn">Pay Now</button>
              </div>
            </div>
       
          </fieldset>
        </form>
      </div>
    </div>

<?php
	include 'footer.php';
?>