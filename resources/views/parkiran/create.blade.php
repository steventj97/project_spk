<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Create Kriteria</title>
  </head>
  <body>
  	<div class="content">
  		<div class="container">
  		<form method="POST" action="{{url('parkiran')}}">
       @csrf
  		  <div class="form-group">
  		    <label for="exampleInputEmail1">Tempat Parkiran</label>
  			  <input class="form-control" type="text" placeholder="Tempat Parkiran" name="tempat_parkiran"> 
  		  </div>
  		  <div class="form-group">
  		    <label for="exampleInputEmail1">Biaya Parkiran</label>
  			  <input class="form-control" type="text" placeholder="Biaya Parkiran" name="biaya_parkiran">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kondisi Cuaca</label>
           <!-- <input class="form-control" type="text" placeholder="Kondisi Cuaca" name="kondisi_cuaca"> -->
           <select class="form-control" id="exampleFormControlSelect1" name="kondisi_cuaca">
              <option name="kondisi_cuaca" value="cerah">cerah</option>
              <option name="kondisi_cuaca" value="berawan">berawan</option>
              <option name="kondisi_cuaca" value="mendung">mendung</option>
              <option name="kondisi_cuaca" value="gerimis">gerimis</option>
              <option name="kondisi_cuaca" value="hujan">hujan</option>
            </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Luas Wilayah Parkiran</label>
          <input class="form-control" type="text" placeholder="Luas Wilayah Parkiran" name="luas_parkiran">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Jarak Parkiran</label>
          <input class="form-control" type="text" placeholder="Jarak Parkiran" name="jarak_parkiran">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Waktu Parkir</label>
          <select class="form-control" id="exampleFormControlSelect1" name="waktu_parkir">
              <option value="subuh">subuh</option>
              <option value="pagi">pagi</option>
              <option value="siang">siang</option>
              <option value="sore">sore</option>
              <option class="malam">malam</option>
            </select>
  		  </div>
  		  <button type="submit" class="btn btn-primary">Create Alternatif Parkir</button>
  		</form>
  	</div>
  	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
