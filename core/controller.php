<?php
	include 'config.php';

	class Controller {
		public function __construct() {
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
		}

		public function signUp($email, $user, $pass, $by, $conn) {
			$pass = md5($pass);
			$refer = uniqid();

			$sql = $conn->prepare("INSERT INTO usr_info (usr_name, usr_email, usr_pass, refer_link, referred_by, active) VALUES (?, ?, ?, ?, ?, 0)");
			$sql->bind_param("sssss", $user, $email, $pass, $refer, $by);
			
			if($sql->execute()) {
				return true;
			} else {
				return false;
			}
		}

		public function signIn($user, $pass, $conn) {
			$pass = md5($pass);

			$sql = $conn->prepare("SELECT * FROM usr_info WHERE usr_name = ?");
			$sql->bind_param("s", $user);
			$sql->execute();
			$res = $sql->get_result();
			$row = $res->fetch_assoc();

			if($user == $row['usr_name'] && $pass == $row['usr_pass']) {
				session_start();
              	$_SESSION["user"] = $user;
				return true;
			} else {
				return false;
			}
		}

		public function uniqe($field, $value, $conn) {
			if($field == 'username') {
				$sql = $conn->prepare("SELECT usr_name FROM usr_info WHERE usr_name = ?");
			} elseif ($field == 'email') {
				$sql = $conn->prepare("SELECT usr_email FROM usr_info WHERE usr_email = ?");
			}

			$sql->bind_param("s", $value);
			$sql->execute();
			$res = $sql->get_result();

			if($res->num_rows > 0) {
				return false;
			} else {
				return true;
			}
		}

		public function getRefer($name, $conn) {
			$sql = $conn->prepare("SELECT refer_link FROM usr_info WHERE usr_name = ?");
			$sql->bind_param("s", $name);
			$sql->execute();
			$res = $sql->get_result();
			$row = $res->fetch_assoc();

			return $row['refer_link'];
		}
	}

	$ctrl = new Controller;
?>