<?php
	include 'header.php';
?>

    <aside class="clear-fix">
		<div class="buy-points">
			<div class="container">
				<h3>Buy Pay-Points</h3>
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
									<form action="" method="get">
										<p>20,000 Pay-Points</p>
										<input type="hidden" name="name" value="20000"><hr>
										<p>USD $1</p>
										<input type="hidden" name="amount" value="1">

										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="submit" class="btn"><i class="fa fa-cc-paypal"> PAY WITH PAYPAL</i></button>
										</div>
									</form>
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
									<form action="" method="get">
										<p>220,000 Pay-Points</p>
										<input type="hidden" name="name" value="220000"><hr>
										<p>USD $10</p>
										<input type="hidden" name="amount" value="10">

										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="submit" class="btn"><i class="fa fa-cc-paypal"> PAY WITH PAYPAL</i></button>
										</div>
									</form>
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
									<form action="checkout.php" method="post">
										<p>2,200,000 Pay-Points</p>
										<input type="hidden" name="product" value="2200000"><hr>
										<p>USD $100</p>
										<input type="hidden" name="price" value="100">

										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="submit" class="btn" name="pay"><i class="fa fa-cc-paypal"> PAY WITH PAYPAL</i></button>
										</div>
									</form>
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