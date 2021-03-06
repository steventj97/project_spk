<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Update Kriteria</title>
  </head>
  <body>
  	<div class="content">
  		<div class="container">
  		<form>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Biaya parkir</label>
			<input class="form-control" type="text" placeholder="Satuan Rupiah" name="biaya_parkir"> 
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Kondisi cuaca</label>
			<input class="form-control" type="text" placeholder="Kondisi Cuaca" name="kondisi_cuaca">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Luas tempat parkir</label>
			<input class="form-control" type="text" placeholder="Luas tempat parkir" name="luas_tempat_parkir">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Jarak dari kampus</label>
			<input class="form-control" type="text" placeholder="arak dari kampus" name="jarak_kampus">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Waktu parkir</label>
			<input class="form-control" type="text" placeholder="Waktu parkir" name="waktu_parkir">
		  </div>
		  <button type="submit" class="btn btn-primary">Update Bobot</button>
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