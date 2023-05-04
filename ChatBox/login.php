<?php 
include_once "php/header.php";
?>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>RealTime Chat App
        <div class="logo">
            <img class="supernova" src="logo/SuperNova.svg" alt="">
          </div>
        </header>
        <form action="#">
          <div class="error-txt"></div>
            <div class="field input">
              <label>E-mail Address</label>
              <input type="text" name="email" placeholder="Enter Your e-mail" />
            </div>
            <div class="field input">
              <label>Password</label>
              <input type="password" name="password" placeholder="Enter Your password" />
              <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
              <input type="submit" value="Continue to Chat" />
            </div>
            <div class="link">
              Not Yet Signed Up ?
              <a href="index.php">Sign Up Now!</a>
            </div>
          </div>
        </form>
      </section>
    </div>
  </body>
  <script src="./javascript/pass-show-hide.js"></script>
  <script src="./javascript/login.js"></script>
</html>