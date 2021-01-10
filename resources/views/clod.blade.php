<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, Coy!</title>
  </head>
  <body>
    <div class="container">
        <h1>Hello, world!</h1>
        <div class="row">
          <div class="col">
            <form class="row gy-2 gx-3 align-items-center">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">Default 1</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">Default 2</label>
                </div>

                <div class="row">
                  <input class="form-control" type="text" placeholder="Disable input" aria-label="Disable input example" disabled>
                </div>

                <div class="Border">
                <div class="mb-3 row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="ExampleExample@Email.com">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="Password" class="form-control" id="inputPassword">
                  </div>
                </div>
                </div>
            </form>

          </div>

          <div class="col">
            
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div>
                    <label for="exampleColorInput" class="form-label">Color Picker</label>
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="563d7c" tittle="choose your color">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCheked" checked>
                    <label class="form-check-label" for="flexCheckChecked"> berhail menambahkan checkbox</label>
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

          </div>
        </div>
        <form class="row g-3">
          <div class="col-auto">
            <label for="staticEmail" class="visually-hidden">Email</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Example@Email.com">
          </div>
          <div class="col-auto">
            <label for="inputPassword" class="visually-hidden">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Confirm Identity</button>
          </div>
          <div class="col-auto">
            <button type="button" class="btn-close btn-close-black" aria-label="close"></button>
          </div>
          <div class="container alert alert-primary" role="alert">A simple primary alert</div>
        </form>
    </div>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
