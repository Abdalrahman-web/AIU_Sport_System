@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
<title>Player Management | Add</title>
</head>
<body>

@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif

<!-- for all errors -->
@if ($errors->any())
<div class ="alert alert-danger">
  @foreach ($errors->all() as $error)
  <div>{{$error}}</div>
  @endforeach
</div>
@endif


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color:blue;">Add Player</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid px-4">

<h1 style="color:#0652DD" >General Information</h1> 
	<hr style="border-top: 3px double #8c8b8b;">
<br>

<form action = "{{route('add.create')}}" method = "post" enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Full name</label>
      <input type="text" class="form-control" id="validationServer01" placeholder="Player name" name="fullname" required>
	  
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationServer02">Password</label>
      <input type="password" class="form-control" id="validationServer02" placeholder="Password" name="password" required>
	  
    </div>
    <div class="col-md-4 mb-3">

      <label for="validationServer04">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="email" class="form-control" id="validationServer04" placeholder="Player email" name="email" required>
	
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer05">Age</label>
      <input type="number" class="form-control" id="validationServer05" placeholder="Player age" name="age" required>
	  
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationServer05">Image</label>
      <input type="file" class="form-control" id="validationServer05" placeholder="Player image" name="image" required>
	  
    </div>
</div>

<br>
<br>

<h1 style="color: #009432;">Health Information</h1> 
	<hr style="border-top: 3px double #8c8b8b;">
<br>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer06">Height</label>
      <input type="number" class="form-control" id="validationServer06" placeholder="Player Height" name="height" required>
	 
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationServer07">Weight</label>
      <input type="number" class="form-control" id="validationServer07" placeholder="Player Weight" name="weight" required>
	  
    </div>

	<div class="col-md-4 mb-3">
      <label for="validationServer08">Player Diseases</label>
      <input type="text" class="form-control" id="validationServer08" placeholder="Player Diseases" name="disease">
	  
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer09">Skills</label>
      <input type="text" class="form-control" id="validationServer09" placeholder="Player Skills" name="skill">
	  
    </div>
</div>
      
  <button class="btn btn-primary" type="submit">Submit Player</button>

</div>
</form>
</body>
</html>

@endsection