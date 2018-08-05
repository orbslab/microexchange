<?php
	include 'core/config.php';

	if(isset($_POST['username'])) {

	    $user = $_POST['username'];

	    $stmt = $conn->prepare("SELECT usr_name FROM usr_info WHERE usr_name = ?");
		$stmt->bind_param("s", $user);
		$stmt->execute();
		$res1 = $stmt->get_result();

		if($res1->num_rows > 0) {
			echo '<p style="color: red;"> <b>'.$user.'</b> is already in use!</p>';
		} else {
			echo '<p style="color: green;"> <b>'.$user.'</b> is avaialable</p>';
		}
	}
?>