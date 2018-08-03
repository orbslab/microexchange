<?php
	include 'header.php';
?>

	<div class="referral clear-fix">
		<div class="container">
			<div class="form-group">
			  <fieldset>
			    <label class="control-label" for="readOnlyInput">Your referral link</label>
			    <input class="form-control" id="readOnlyInput" type="text" placeholder="https://macro.com/by/jhon1234" readonly="">
			    <p>Refer People By Giving Them Your Above Link</p><hr>
			  </fieldset>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class=" referral-status">
						<h3>Referral Status</h3>
						<p>Number of received referral: 0</p>
						<p>Number of sign up using your Referral link: 0</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="referral-commission">
						<h3>Commissions From Referrals</h3>
						<p>Task Comission - 5%</p>
						<p>Cash Commission - 10%</p>
					</div>
				</div>
				<div class="col-md-12 col-sm-12">
					<div class="request-payout">
						<h4>Cash: </h4><hr>
						<p><span>$</span> 0.00</p>
						<a href="file:///F:/New/New%20folder/final-payout.html#" data-toggle="tooltip" data-placement="bottom"><button type="button" class="btn">Request Payout</button></a>
					</div>
				</div>
			</div>	
		</div>
	</div>

<?php
	include 'footer.php';
?>