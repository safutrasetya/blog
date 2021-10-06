<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--BOOSTRAP CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--END BOOSTRAP CSS-->
    <title>Sign Up</title>
  </head>
  <body class="bg-dark">
    <div class="bg-dark p-3 h-100" style="height: 750px;">
      <div class="row">
        <div class="col-sm-7">
          <p>enter image here</p>
        </div>
        <div class="col-sm-5">
          <div class="jumbotron" style="height: 675px; padding-top:-50px;">
            <div class="card mx-auto">
              <div class="card-header">
                <p style="font-family:serif; font-size:50px;">Be-Blog</p>
              </div>
              <div class="card-body">
                <div class="text-left">
                  <form action="#" class="needs-validation" novalidate>
                    <div class="form-group">
                      <label for="nama">Enter your Name (this will be your username): </label>
                      <input type"text" name="nama" class="form-control" placeholder="Enter Email" id="nama" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Enter your Email : </label>
                      <input type"email" name="email" class="form-control" placeholder="Enter Email" id="email" required>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Enter new Password:</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd" required>
                    </div>
                    <div class="form-group">
                      <label for="pwd-ulang">Re-enter Password:</label>
                      <input type="password" name="password-ulang" class="form-control" placeholder="Enter password" id="pwd" required>
                    </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                      </label>
                    </div>

                </div>
              </div>
              <div class="card-footer">
                <a href="login"><button type="button" class="btn btn-secondary">Back to login</button></a>
                <button type"submit" class="btn btn-primary">Sign Up!</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--SCRIPT VALIDATOR-->
  </body>
</html>
