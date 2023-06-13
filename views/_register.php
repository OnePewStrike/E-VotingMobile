  <div class="hero auth">
    <div class="group-auth">
      <div class="title-header">
        <a href="index.php">
          <i class="fa-solid fa-arrow-left-long"></i>
        </a>
        <div class="title">
          <span>Title</span>
          <span>/Logo</span>
        </div>
      </div>
      <div class="login-details">
        <span class="name">Register</span>
        <span class="description">Register to join and vote!</span>
      </div>
      <form class="modify" action="" method="">
        <div class="fields">
          <div class="field full">
            <label for="student_id">Student ID*</label>
            <input id="student_id" type="text" name="student_id" required autocomplete="student_id" placeholder="e.g., 12384798" autofocus>
          </div>
          <div class="field full">
            <label for="name">Name*</label>
            <input id="name" type="text" name="name" required autocomplete="name" placeholder="e.g., John Doe">
          </div>
          <div class="field full">
            <label for="email">Email*</label>
            <input id="email" type="text" name="email" required autocomplete="email" placeholder="someone@example.com">
          </div>
          <div class="field full">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="password" placeholder="Enter password">
          </div>
        </div>
        <div class="actions">
          <button type="submit" class="primary">Register</button>
          <div class="redirect">
            <span class="address">Already have an account?</span>
            <a href="login.php">Login Now</a>
          </div>
        </div>
      </form>
    </div>
  </div>