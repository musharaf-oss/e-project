     <!-- Signup Modal -->
<!-- Auth Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Sign Up Form -->
<!-- Sign Up Form -->
<form id="signup-form" action="register.php" method="POST">
        <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Sign Up</button>

<p class="text-center mt-3 mb-2">
  Already have an account? <a href="#" id="show-signin">Sign in</a>
</p>

<!-- OR text -->
<p class="text-center mb-2 font-weight-bold">— OR —</p>

<div class="text-center">
<a href="register-lawyer.php" target="_blank" class="btn btn-primary font-weight-bold px-4 py-2" style="box-shadow: 0 4px 12px rgba(0,0,0,0.2); border-radius: 8px;">
  Register as a Lawyer
</a>

</div>

</form>


        <!-- Sign In Form (Initially Hidden) -->
        <form id="signin-form" style="display: none;">
          <div class="form-group">
            <label for="signin-email">Email address</label>
            <input type="email" class="form-control" id="signin-email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="signin-password">Password</label>
            <input type="password" class="form-control" id="signin-password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          <p class="text-center mt-3">
            Don't have an account? <a href="#" id="show-signup">Sign up</a>
          </p>
        </form>

      </div>
    </div>
  </div>
</div>



<script>
  document.getElementById("show-signin").addEventListener("click", function (e) {
    e.preventDefault();
    document.getElementById("signup-form").style.display = "none";
    document.getElementById("signin-form").style.display = "block";
    document.getElementById("signupModalLabel").textContent = "Sign In";
  });

  document.getElementById("show-signup").addEventListener("click", function (e) {
    e.preventDefault();
    document.getElementById("signin-form").style.display = "none";
    document.getElementById("signup-form").style.display = "block";
    document.getElementById("signupModalLabel").textContent = "Sign Up";
  });
</script>