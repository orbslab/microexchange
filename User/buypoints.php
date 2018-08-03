<?php
	include 'header.php';
?>

    <aside class="clear-fix">
		<div class="buy-points">
			<div class="container">
				<h3>Buy pay-points</h3>
				<div class="container">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Pay-points</th>
								<th scope="col">USD ($)</th>
								<th scope="col"></th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">20000 <span class="mod-text">pay-points</span></th>
								<td>$1</td>
								<td>
									<button type="button" class="btn" data-toggle="modal" data-target="#myModal">Buy
		  				</button>
								</td>
							</tr>

							<tr>
								<th scope="row"> 220,000 <span class="mod-text">pay-points</span></th>
								<td>$10</td>
								<td>
									<button type="button" class="btn" data-toggle="modal" data-target="#myModal1">Buy
		  				</button>
								</td>
							</tr>

							<tr>
								<th scope="row"> 2,200,000 <span class="mod-text">pay-points</span></th>
								<td>$100</td>
								<td>
									<button type="button" class="btn" data-toggle="modal" data-target="#myModal2">Buy
		  				</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>You will earn <span>10% or $1USD</span> extra For every <span>$10</span> USD spent. </p>

				<div class="container">


					<!-- The Modal -->
					<div class="modal" id="myModal">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Checkout</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<p>20,000 Pay-Points</p>
									<hr>
									<p>USD $1</p>
									<hr>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
											<label class="custom-control-label" for="customCheck1">I want this package to renew every month!</label>
										</div>
									</div>

									<div class="modal-body">

									</div>

									<!-- Modal footer -->
									<div class="modal-footer">
										<a href="file:///F:/New/New%20folder/payment.html?username=&email=&expiry_month=&expiry_year=13&password_confirm=" data-toggle="tooltip" data-placement="bottom" title="PAY WITH DEBIT OR CREDIT CARD"><button type="button" class="btn"><i class="far fa-credit-card"> PAY WITH DEBIT OR CREDIT CARD</i></button></a>
										<a href="#" data-toggle="tooltip" data-placement="bottom" title="PAYPAL"><button type="button" class="btn" data-dismiss="modal"><i class="fab fa-paypal"> PAYPAL</i></button></a>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container">


					<!-- The Modal -->
					<div class="modal" id="myModal1">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Checkout</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<p>220,000 Pay-Points</p>
									<hr>
									<p>USD $10</p>
									<hr>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
											<label class="custom-control-label" for="customCheck2">I want this package to renew every month!</label>
										</div>
									</div>

									<div class="modal-body">

									</div>

									<!-- Modal footer -->
									<div class="modal-footer">
										<a href="file:///F:/New/New%20folder/payment.html?username=&email=&expiry_month=&expiry_year=13&password_confirm=" data-toggle="tooltip" data-placement="bottom" title="PAY WITH DEBIT OR CREDIT CARD"><button type="button" class="btn"><i class="far fa-credit-card"> PAY WITH DEBIT OR CREDIT CARD</i></button></a>
										<a href="#" data-toggle="tooltip" data-placement="bottom" title="PAYPAL"><button type="button" class="btn" data-dismiss="modal"><i class="fab fa-paypal"> PAYPAL</i></button></a>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container">


					<!-- The Modal -->
					<div class="modal" id="myModal2">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Checkout</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<p>2,200,000 Pay-Points</p>
									<hr>
									<p>USD $100</p>
									<hr>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck3" checked="">
											<label class="custom-control-label" for="customCheck3">I want this package to renew every month!</label>
										</div>
									</div>

									<div class="modal-body">

									</div>

									<!-- Modal footer -->
									<div class="modal-footer">
										<a href="file:///F:/New/New%20folder/payment.html?username=&email=&expiry_month=&expiry_year=13&password_confirm=" data-toggle="tooltip" data-placement="bottom" title="PAY WITH DEBIT OR CREDIT CARD"><button type="button" class="btn"><i class="far fa-credit-card"> PAY WITH DEBIT OR CREDIT CARD</i></button></a>
										<a href="#" data-toggle="tooltip" data-placement="bottom" title="PAYPAL"><button type="button" class="btn" data-dismiss="modal"><i class="fab fa-paypal"> PAYPAL</i></button></a>
									</div>
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