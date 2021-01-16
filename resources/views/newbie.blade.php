<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Table!</title>
  </head>
  <body>
    <div class="container">
   
        <h1>Latian Ngoding</h1>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">First</th>
              <th scope="col">Second</th>
              <th scope="col">Third</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mael</td>
              <td>Maeel</td>
              <td>@Maell</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>sutel</td>
              <td>sutell</td>
              <td>@suttel</td>
            </tr>
            <tr>
              <th scopr="row">3</th>
              <td>igor</td>
              <td>igorr</td>
              <td>@iggorr</td>
            </tr>
          </tbody>
        </table>

        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-primary">
              <th scope="row">1</th>
              <td width="50%">primary</td>
            </tr>
            <tr class="table-secondary">
              <th scope="row">2</th>
              <td>secondary</td>
            </tr>
            <tr class="table-success">
              <th scope="row">3</th>
              <td>success</td>
            </tr>
            <tr class="table-danger">
              <th scope="row">4</th>
              <td>danger</td>
            </tr>
            <tr class="table-warning">
              <th scope="row">5</th>
              <td>warning</td>
            </tr>
            <tr class="table-info">
              <th scope="row">6</th>
              <td>info</td>
            </tr>
            <tr class="table-light">
              <th scope="row">7</th>
              <td>light</td>
            </tr>
            <tr class="table-dark">
              <th scope="row">8</th>
              <td>dark</td>
            </tr>
          </tbody>
        </table>
        <a class="btn btn-primary btn-lg d-grid gap-1" href="#" role="button">link</a>
    
    </div>

    <div class="d-grid gap-2 col-6 mix-auto container">
      <button class="btn btn-primary">Button</button>
    </div>

    <div class="btn-group" role="group" aria-label="Basic checkbox toggle buuton group">
      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck1">checkbox1</label>

      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck2">checkbox2</label>
    </div> 

    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Adib</td>
            <td>18</td>
            <td>Bekerja</td>
          </tr>
          <tr>
            <td colspan="4">
              <table class="table mb-0">
                <tr class="table-dark">
                  <th scope="row">2</th>
                  <td>Suryo</td>
                  <td>17</td>
                  <td>Bekerja</td>
                </tr>
                <tr class="table">
                  <th scope="row"></th>
                  <td>Suryo</td>
                  <td>17</td>
                  <td>Sedang Bekerja</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Ismayanto</td>
            <td>19</td>
            <td>KUliah</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Mahmud</td>
            <td>23</td>
            <td>Takmir Masjid</td>
          </tr>
        </tbody>
      </table>
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