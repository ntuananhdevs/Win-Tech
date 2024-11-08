<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/login.css">
  <link rel="icon" href="/assets/img/logo.png">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters content-login">
          <div class="col-md-5 img-login slider">
            <div class="list">
              <div class="item">
                <img src="/assets/img/login.JPG" alt="login" class="login-card-img">
              </div>
              <div class="item">
                <img src="/assets/img/login2.JPG" alt="login" class="login-card-img">
              </div>
              <div class="item">
                <img src="/assets/img/login3.JPG" alt="login" class="login-card-img">
              </div>
            </div>
            <!-- Dots -->
            <ul class="dots">
              <li class="active"></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="col-md-7 form-login">
            <div class="card-body">
              <div class="brand-wrapper">
                <div class="brand-container">
                  <img src="/assets/img/logo.png" alt="logo" class="logo">
                  <div class="brand-text" id="winTech">
                    <span>W</span>
                    <span>i</span>
                    <span>n</span>
                    <span> </span>
                    <span>T</span>
                    <span>e</span>
                    <span>c</span>
                    <span>h</span>
                  </div>
                  
                </div>
              </div>
              <p class="login-card-description">Sign into your account</p>
              <form action="#!">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-6">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-" type="button" value="Login">
                  <a href="#!" class="forgot-password-link">Forgot password?</a>
                  <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>

                  <div class="hr display-1">
                    <hr>
                    <div class="or-text">Or</div>
                  </div>
                    <div class="or-login">
                      <div class="fb icon-login">
                          <a href="#" role="button"><ion-icon name="logo-facebook" aria-label="Favorite"></ion-icon></a>
                      </div>
                      <div class="git icon-login">
                          <a href="#" role="button"><ion-icon name="logo-github"></ion-icon></a>
                      </div>
                      <div class="gg icon-login">
                        <a href="#" role="button"><ion-icon name="logo-google"></ion-icon></ion-icon></a>
                      </div>
                      <div class="gg icon-login">
                        <a href="#" role="button"><ion-icon name="logo-apple"></ion-icon></a>
                      </div>
                    
                    </div>
                  </form>
                </div>
                <nav class="login-card-footer-nav">
                  <a href="#!" class="a">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>
  <script src="https://kit.fontawesome.com/3c0ad6f299.js" crossorigin="anonymous"></script>
  <script src="login.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
