<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upazila</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>

@endif
@if(Session::has('warning'))
    <div class="alert alert-danger">
        {{ Session::get('warning') }}
    </div>

@endif



<div class="container">
  <h2>Upazila</h2>
  <form action="" method="">
  {{csrf_field()}}

  <div class="form-group">

  <select class="form-control"  name="divisions_id" id="division">
      <option value="">
      Select A division
      </option>

      @foreach($divisions as $div)

      <option value="{{$div->id}}"> {{$div->division_name}} </option>

      @endforeach

     
      </select>
      </div>

      <div class="form-group">

      <select name="districts_id" id="district" class="form-control">

      <option> Bashar </option>


      </select>



      </div>








    <div class="form-group">
      <label for="email">Upazila Name</label>
      <input type="text" class="form-control" id="Upozila" placeholder="Upazila Name" name="Upozila_name">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
