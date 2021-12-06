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
    <div>
      <div class="row">
        <div class="col-4">
        </div>
        <div class="col-5">
            <div class="card mx-auto">
              <div class="card-header">
                <p style="font-family:serif; font-size:50px;">Be-Blog</p>
              </div>
              <div class="card-body">
                <div class="text-left">
                  <form action="/daftar" method="post" >
                 @csrf
                 <div s class="form-group">
                     <label for="nama">Nama</label>
                     <input  type="text" class="form-control mt-1 @error('nama') is-invalid @enderror"  name="nama"  id="nama"  value="{{ old('nama') }}">
                     @error('nama')
                     <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
                 </div>

                 <div s class="form-group">
                     <label for="email" >Email</label>
                     <input value="{{ old('email') }}" type="text" class="form-control mt-1 @error('email') is-invalid @enderror " name="email"  id="email">
                     @error('email')
                     <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
                 </div>
                 <div s class="form-group">
                     <label for="telpon" >No. Handphone</label>
                     <input value="{{ old('telpon') }}" type="text" class="form-control mt-1 @error('telpon') is-invalid @enderror " name="telpon"  id="telpon">
                     @error('telpon')
                     <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
                 </div>
                 <div s class="form-group">
                     <label for="password" >Kata Sandi</label>
                     <input value="{{ old('password') }}"  type="password" class="form-control mt-1 @error('password') is-invalid @enderror " name="password"  id="password">
                     @error('password')
                     <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
                 </div>
                 <div s class="form-group">
                     <label for="confirm-password" >Konfirmasi Kata Sandi</label>
                     <input value="" type="password" class="form-control mt-1 @error('confirm-password') is-invalid @enderror " name="confirm-password"  id="confirm-password">
                     @error('confirm-password')
                     <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
                 </div>
                 Sudah Punya Akun? <a  href="/login">Login</a>
                 <button  class="btn btn-primary mt-2 mb-4 ml-5" type="submit">Register</button>
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
