<?php
	include 'header.php';
?>

	<div class="referral clear-fix">
		<div class="container">
			<div class="form-group">
			    <label class="control-label" for="readOnlyInput">Your Referral Link</label>

			    <form class="form-inline" action="" method="post">
				    <input class="form-control col-md-10" id="refLink" type="text" value="<?php echo $lang['root'].'/sign?by='.$ctrl->getRefer($_SESSION['user'], $conn)?>" readonly>
				    <input type="submit" value="Copy Link" class="btn refer_copy" onclick="copy()">
				</form>
				<p>Refer People By Giving Them Your Above Link</p><hr>
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
						<a href="finalpayout" data-toggle="tooltip" data-placement="bottom"><button type="button" class="btn">Request Payout</button></a>
					</div>
				</div>
			</div>	
		</div>
	</div>

<?php
	include 'footer.php';
?>