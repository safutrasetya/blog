<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--BOOSTRAP CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    <!--END BOOSTRAP CSS-->
    <title>Login</title>
  </head>

  <body>
    <div class="container">
      <div class="col-6">
      </div>
      <div class="col-6 d-flex justify-content-center">
        <form action="/admin/tambahSuplier" method="post" >
                    @csrf
                    <div s class="form-group">
                        <label for="nama">NAMA SUPPLIER</label>
                        <input  type="text" class="form-control mt-1 @error('nama') is-invalid @enderror"  name="nama"  id="nama"  value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>

                    <div s class="form-group">
                        <label for="alamat" >ALAMAT</label>
                        <input value="{{ old('alamat') }}" type="text" class="form-control mt-1 @error('alamat') is-invalid @enderror " name="alamat"  id="alamat">
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div s class="form-group">
                        <label for="telpon" >NOMOR TELPON  </label>
                        <input  data-toggle="tooltip" data-placement="bottom" title="Format 08XXXXXXXXXXX / +628XXXXXXXXXXX / 628XXXXXXXXXXX " type="tel"  pattern="^(\+62|62|0)8[1-9][0-9]{6,10}$"  required value="{{ old('telpon') }}"  class="form-control mt-1 @error('telpon') is-invalid @enderror" name="telpon"  id="telpon">
                        @error('telpon')>
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <button  class="btn btn-primary mt-2 mb-4" type="submit">Tambah!</button>
                </form>
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
