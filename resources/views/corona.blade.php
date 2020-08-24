<!DOCTYPE html>
<html>
<head>
<title> API LARAVEL CORONA</title>
</head>
<body>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="container-fluid">
<h1>test Api Kawal Corona </h1>
<table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
      <th scope="col">NO.</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Positif</th>
      <th scope="col">Meninggal</th>
      <th scope="col">Sembuh</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $corona)
    <tr>
    <td class="text-center">{{$loop->iteration}}</td>
    <td>{{ $corona ['attributes']['Provinsi'] }}</td>
    <td>{{ $corona ['attributes']['Kasus_Posi' ]}}</td>
    <td>{{ $corona ['attributes']['Kasus_Meni'] }}</td>
    <td>{{ $corona ['attributes']['Kasus_Semb'] }}</td>
@endforeach
    </tr>
  </tbody>
</table>
</div>

</body>
</html>