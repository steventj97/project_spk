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
        <div class="row">
          <a class="btn btn-primary" href="{{url('parkiran/create')}}" role="button">Create Category</a>
        </div>
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
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $parkiran as $parkiran )
              <tr>
                <td>{{$parkiran->id}}</td>
                <td>{{$parkiran->tempat_parkiran}}</td>
                <td>Rp. {{$parkiran->biaya_parkiran}}</td>
                <td>{{$parkiran->kondisi_cuaca}}</td>
                <td>{{$parkiran->luas_tempat_parkir}} unit</td>
                <td>{{$parkiran->jarak_dari_kampus}} meter</td>
                <td>{{$parkiran->waktu_parkir}}</td>
                <td>
                  <div class="row">
                   <a href="{{ route('parkiran.edit', $parkiran->id) }}" class="btn btn-warning">Edit parkiran</a>
                  </div>
                </td>  
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