<!DOCTYPE html>
<html lang="en">
<head>
  <title>District</title>
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
  <h2>divisions</h2>
  <form action="{{route('store')}}" method="POST">
  {{csrf_field()}}
    <div class="form-group">
      <label for="email">Division Name</label>
      <select class="form-control"  name="divisions_id">
      <option value="">
      Select A division
      </option>

      @foreach($divisions as $div)

      <option value="{{$div->id}}"> {{$div->division_name}} </option>

      @endforeach

     
      </select>

      </div>


      <div class="form-group">
      <label for="district">District Name</label>
      <input type="text" class="form-control" id="district" placeholder="District name"  name="district_name">
      </div>
      

     
      

    

      

      



    
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
