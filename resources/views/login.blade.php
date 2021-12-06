<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--BOOSTRAP CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--END BOOSTRAP CSS-->
    <title>Login</title>
  </head>
  <body class="bg-dark">
    <div class=" " >
      <div class="row">
        <div class="col-4">

        </div>
        <div class="col-5 bg-dark " >
            <div class="card mx-auto" >
              <div class="card-header" >
                <p style="font-family:serif; font-size:50px;">Be-Blog</p>
              </div>
              <div class="card-body">
                <div class="text-left">
                  <form action="/login" method="post" >
                 @csrf
                 <div s class="form-group">
                     <label for="email">Email</label>
                     <input  type="text" class="form-control mt-1 @error('email') is-invalid @enderror"  name="email"  id="email"  value="{{ old('email') }}">
                     @if(session('alert'))
                     <small style="color:red;">
                       {{session('alert')}}
                     </small>
                     @endif
                 </div>

                 <div s class="form-group">
                     <label for="password" >Password</label>
                     <input value="{{ old('password') }}" type="password" class="form-control mt-1 @error('password') is-invalid @enderror " name="password"  id="password">
                     @if(session('alert2'))
                     <small style="color:red;">
                       {{session('alert2')}}
                     </small>
                     @endif
                 </div>
                 Belum Punya Akun ? <a  href="/daftar"> Register</a>
                 <button  class="btn btn-primary mt-2 mb-4 ml-5" type="submit">Login</button>
             </form>
              </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    <!--SCRIPT VALIDATOR-->
    <script>
      // Disable form submissions if there are invalid fields
      // (function() {
      //   'use strict';
      //   window.addEventListener('load', function() {
      //     // Get the forms we want to add validation styles to
      //     var forms = document.getElementsByClassName('needs-validation');
      //     // Loop over them and prevent submission
      //     var validation = Array.prototype.filter.call(forms, function(form) {
      //       form.addEventListener('submit', function(event) {
      //         if (form.checkValidity() === false) {
      //           event.preventDefault();
      //           event.stopPropagation();
      //         }
      //         form.classList.add('was-validated');
      //       }, false);
      //     });
      //   }, false);
      // })();
      // </script>
  </body>
</html>
