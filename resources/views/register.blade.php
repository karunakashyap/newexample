<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> User Registation Form</h2>
  <form action="/register" method='post'>
    @csrf
   
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
      <span class='danger'>
        @error('name')
        {{$message}}
        @enderror
      </span>
</div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
      <span class='danger'>
        @error('email')
        {{$message}}
        @enderror
      </span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" value="{{old('password')}}">
      <span class='danger'>
        @error('password')
        {{$message}}
        @enderror
      </span>
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
