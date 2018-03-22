<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <title>Show Parkiran</title>
  </head>
  <body>
  	<div class="content row">
  		<div class="container">
        <br>
        <h3>Tabel Normalisasi</h3>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Tempat</th>
              <th>Biaya</th>
              <th>Kondisi</th>
              <th>Luas</th>
              <th>Jarak</th>
              <th>Waktu</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $matrik as $matrik )
              <tr>
                <td>{{$matrik->id}}</td>
                <td>{{$matrik->tempat_parkiran_matrik}}</td>
                <td>{{$matrik->biaya_parkiran_matrik}}</td>
                <td>{{$matrik->kondisi_cuaca_matrik}}</td>
                <td>{{$matrik->luas_tempat_parkir_matrik}}</td>
                <td>{{$matrik->jarak_dari_kampus_matrik}}</td>
                <td>{{$matrik->waktu_parkir_normalisasi}}</td>  
              </tr>
            @endforeach
          </tbody>
        </table>
  		</div>
  	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 