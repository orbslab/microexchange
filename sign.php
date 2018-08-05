<?php
  include 'header.php';
?>

    <!-- Sign Up / Sign In -->
    <div class="login-wrap">
      <div class="login-html">
        <?php
          if(isset($_POST['signin'])) {
            if($ctrl->signIn($_POST['log_usr'], $_POST['log_pass'], $conn)) {
              header("Location: User/account");
            } else {
              echo "<p style='text-align: center; color: red; margin: 5px !important;'>Wrong Password or Email</p><br>";
            }
          }

          if(isset($_POST['signup'])) {
            if($ctrl->uniqe('email', $_POST['signEmail'], $conn) == true && $ctrl->uniqe('username', $_POST['username'], $conn) == true) 
            {
              if($_POST['signPass'] == $_POST['signPass2']) {
                if($ctrl->signUp($_POST['signEmail'], $_POST['username'], $_POST['signPass2'], $conn)) {
                  echo "<p style='text-align: center; color: green; margin: 5px !important;'>Signup Success</p><br>";
                } else {
                  echo "<p style='text-align: center; color: red; margin: 5px !important;'>Signup Failed!!</p><br>";
                }
              } else {
                echo "<p style='text-align: center; color: red; margin: 5px !important;'>Password Not Matched!!</p><br>";
              }
            } else {
              echo "<p style='text-align: center; color: red; margin: 5px !important;'>Please Use Unique Email and Username</p><br>";
            }
          }
        ?>
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
          <!-- Log In -->
          <div class="sign-in-htm">
            <form action="" method="post">
              <div class="group">
                <label for="user" class="label">Username</label>
                <input type="text" class="input" name="log_usr" placeholder="Enter Username" required>
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input type="password" class="input" name="log_pass" placeholder="Enter Password" required>
              </div>
              <div class="group">
                <label for="check" class="checkbox-inline" style="color: #6a6f8c;"><input id="check" type="checkbox" checked> Keep me Signed in</label>
              </div>
              <div class="group">
                <button type="submit" class="button" name="signin">Sign In</button>
              </div>
            </form>
            
            <div class="foot-lnk">
              <a href="#" data-toggle="modal" data-target="#myModal">Forgot Password?</a>
            </div>
          </div>

          <!-- Sign Up -->
          <div class="sign-up-htm">
            <form action="" method="post">
              <div class="group">
                <label for="pass" class="label">Email Address</label>
                <input type="text" class="input" name="signEmail" placeholder="Enter Email" required>
              </div>
              <div class="group">
                <label for="user" class="label">Username</label>
                <input id="username" type="text" class="input" name="username" minlength="3" placeholder="Enter Username" required">
                <div id="status"></div>
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass1" type="password" class="input" name="signPass" minlength="8" placeholder="Enter Password" required>
              </div>
              <div class="group">
                <label for="pass" class="label">Repeat Password</label>
                <input id="pass2" type="password" class="input" name="signPass2" minlength="8" placeholder="Enter Password" required>
                <div id="match"></div>
              </div>
              <div class="group">
                <label class="checkbox-inline" style="color: #6a6f8c;">
                  <input type="checkbox" id="tick" required> I agree to the <a href="tos" target="_blank">Terms of Services</a>
                </label>
              </div>
              <div class="group">
                <button type="submit" class="button" id="signup" name="signup">Sign Up</button>
              </div>
            </form>
            <div class="foot-lnk">
              <label for="tab-1"><a>Already Member?</a>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <script type="text/javascript">
      usernameusername
    </script>

    <!-- Forget Password Model -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="form-group" align="center">
                <input id="email" type="email" class="form-control" placeholder="Your Registred Email Address" required><br>
                <button type="submit" class="btn btn-info">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


<?php
  include 'footer.php';
?>