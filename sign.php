<?php
  include 'header.php';
?>

    <!-- Sign Up / Sign In -->
    <div class="login-wrap">
      <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">

          <!-- Log In -->
          <div class="sign-in-htm">
            <form action="" method="post">
              <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" type="text" class="input" placeholder="Enter Username" required>
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" type="password" class="input" placeholder="Enter Password" required>
              </div>
              <div class="group">
                <label for="check" class="checkbox-inline" style="color: #6a6f8c;"><input id="check" type="checkbox" checked> Keep me Signed in</label>
              </div>
              <div class="group">
                <button type="submit" class="button">Sign In</button>
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
                <input id="pass" type="text" class="input" placeholder="Enter Email" required>
              </div>
              <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" type="text" class="input" placeholder="Enter Username" required>
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" type="password" class="input" placeholder="Enter Password" required>
              </div>
              <div class="group">
                <label for="pass" class="label">Repeat Password</label>
                <input id="pass" type="password" class="input" placeholder="Enter Password" required>
              </div>
              <div class="group">
                <label for="check" class="checkbox-inline" style="color: #6a6f8c;"><input id="check" type="checkbox" checked> I agree to the <a href="tos" target="_blank">Terms of Services</a></label>
              </div>
              <div class="group">
                <button type="submit" class="button">Sign Up</button>
              </div>
            </form>
            <div class="foot-lnk">
              <label for="tab-1"><a>Already Member?</a>
            </div>
          </div>
        </div>
      </div>
    </div><br>

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