<?php
	include 'header.php';
?>

	<aside class="clear-fix">
		<div class="buy-slots">
			<div class="container">
				<h3>Buy Slots</h3>
				<p><span>$0.25</span> Per Bowser/Website Slot</p>
				<div class="form-group">
					<label class="col-form-label col-form-label-lg" for="inputLarge">How many slots you want to buy: </label>
					<input class="form-control form-control-lg" type="text" placeholder="Number of slots" id="inputLarge">
				</div>
				<div class="submit">
					<div data-toggle="buttons">
						<button type="button" class="btn" data-toggle="modal" data-target="#myModal">Submit</button>
					</div>
				</div>
				<!-- The Modal -->
				<div class="modal" id="myModal" style="padding-left: 0;">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Checkout</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">
								<p>______ Slots</p>
								<hr>
								<p>***</p>
								<hr>
								<div class="form-group">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
										<label class="custom-control-label" for="customCheck1">I want this package to renew every month!</label>
									</div>
								</div>
								<!-- Modal footer -->
								<div class="modal-footer">
									<a href="file:///F:/New/New%20folder/payment.html?username=&email=&expiry_month=&expiry_year=13&password_confirm=" data-toggle="tooltip" data-placement="bottom" title="PAY WITH DEBIT OR CREDIT CARD"><button type="button" class="btn"><i class="far fa-credit-card"> PAY WITH DEBIT OR CREDIT CARD</i></button></a>
									<a href="#" data-toggle="tooltip" data-placement="bottom" title="PAYPAL"><button type="button" class="btn"><i class="fab fa-paypal"> PAYPAL</i></button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>

<?php
	include 'footer.php';
?>