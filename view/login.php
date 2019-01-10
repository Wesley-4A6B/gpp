<?php include('partials/header.php'); ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form action="" method="POST" class="form-signin">

              <div class="form-label-group">
              <label for="inputEmail">E-mail</label>
                <input value="test" type="text" id="username" name="username" required="required" class="form-control" placeholder="E-mail.." required autofocus>
              </div>
              <hr class="my-4">

              <div class="form-label-group">
              <label for="inputPassword">Wachtwoord</label>
                <input value="test" type="password" id="password" name="password" required="required" class="form-control" placeholder="Wachtwoord.." required>
              </div>
              <hr class="my-4">

              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit" style="background-color: #A3CB38; border: none;">Log in</button>
              
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('partials/footer.php'); ?>