<!DOCTYPE html>
<html lang="en">
<head>
  <title>Division</title>
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
  <h2>Upazila add</h2>
  <form action="/upazilas" method="POST">

      {{csrf_field()}}
<div class="form-group">
     <select class="form-control" name="divisions_id" id="division">
        <option value="">
          Please select a division
        </option>


           @foreach($divisions as $div)
     <option value="{{$div->id}}">{{$div->division_name}}</option>
           @endforeach

      </select>
</div>

 <div class="form-group">
  <select name="districts_id" id="district" class="form-control">
   
    <option value="">Please select a district</option>
  </select>
  </div>

  <div class="form-group">
  <select name="districts_id" id="upazila" class="form-control">
   
    <option value="">Please select a Upazila</option>
  </select>
  </div>

    <div class="form-group">
      <label for="email"> Name</label>
      <input type="text" class="form-control" id="" placeholder="upazila name" name="upazila_name">
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script type="text/javascript">
               
                $('#division').on('change',function(e){
                    console.log(e);

                    var divisions_id= e.target.value;

                    $.get('/json-districts?divisions_id=' + divisions_id,function(data){
                        console.log(data);

                     $('#district').empty();
          $('#district').append('<option value="0" disable="true" selected="true">=== Select Districts ===</option>');

          $.each(data, function(index, districtsObj){
            $('#district').append('<option value="'+ districtsObj.id +'">'+ districtsObj.district_name +'</option>');
          });

                    });
                });

                 $('#district').on('change',function(e){
                    console.log(e);

                    var districts_id= e.target.value;

                    $.get('/json-upazila?districts_id=' + districts_id,function(data){
                        console.log(data);

                     $('#uaozila').empty();
          $('#upazila').append('<option value="0" disable="true" selected="true">=== Select Upazila ===</option>');

          $.each(data, function(index, districtsObj){
            $('#upazila').append('<option value="'+ districtsObj.id +'">'+ districtsObj.upazila_name +'</option>');
          });

                    });
                });
            </script>

</body>
</html>