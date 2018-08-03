<?php
	include 'header.php';
?>

	<div class="final-payout clearfix">
		<div class="container">
			<div class="modtitle">
				<p>Request affiliate payout</p>
			</div>
			<div class="payout-form">
				<div class="clearfix">
					<div class="float-left">
						<p>Current cash balance:</p>
					</div>
					<div class="float-right">
						<p>$ 0.00</p>
					</div>
				</div><hr>
				<div class="clearfix">
					<div class="float-left">
						<p>The minimum amount to withdraw is:</p>
					</div>
					<div class="float-right">
						<p>$ 5.00</p>
					</div>
				</div>
			</div>
			<div class="idea-icon">
				<p>
					<i class="far fa-lightbulb"></i>
					For fraud prevention purposes, there's a delay of 3 days in processing your request.
				</p>
			</div>
			<div class="form-group">
				<label class="col-form-label col-form-label-lg" for="inputLarge">
					Enter your PayPal email
				</label>
				<input class="form-control form-control-lg" type="text" placeholder="Enter your PayPal email" id="inputLarge">
			</div>
			<div class="clearfix">
				<div class="float-left">
					<a href="#" data-toggle="tooltip" data-placement="bottom"><button type="button" class="btn">Request Payout</button></a>
				</div>
				<div class="float-right">
					<a href="#" data-toggle="tooltip" data-placement="bottom"><button type="button" class="btn">Cancel</button></a>
				</div>
			</div>
		</div>
	</div>

<?php
	include 'footer.php';
?>