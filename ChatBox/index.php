<?php 
include_once "php/header.php";
?>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>RealTime Chat App
          <div class="logo">
            <img class="supernova" src="logo/SuperNova.svg" alt="">
          </div>
        </header>
        <form action="#" enctype="multipart/form-data" autocomplete="off">
          <div class="error-txt"></div>
          <div class="name-details">
            <div class="field input">
              <label>First Name</label>
              <input type="text" placeholder="First Name" name="fname" required/>
            </div>
            <div class="field input">
              <label>Last Name</label>
              <input type="text" placeholder="Last Name" name="lname" required/>
            </div>
            <div class="field input">
              <label>E-mail Address</label>
              <input type="text" placeholder="Enter Your e-mail" name="email" required/>
            </div>
            <div class="field input">
              <label>Password</label>
              <input type="password" placeholder="Enter new password" name="password" required/>
              <i class="fas fa-eye"></i>
            </div>
            <div class="field image">
              <label>Select Image</label>
              <input type="file" name="image" />
            </div>
            <div class="field button">
              <input type="submit" value="Continue to Chat" />
            </div>
            <div class="link">
              Already Signed Up ?
              <a href="login.php">Login Now!</a>
            </div>
          </div>
        </form>
      </section>
    </div>
  </body>
  <script src="./javascript/pass-show-hide.js"></script>
  <script src="./javascript/signup.js"></script>
</html>
