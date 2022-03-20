@extends('layouts.app')

@section('content')



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
            <h1 class="m-0" style="color:blue;">Edit Player</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit</li>
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

<form action = "{{url('edit/update/'.$players->id) }}" method = "post" enctype="multipart/form-data">
@csrf

  @method('PUT')
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label>Full name</label>
      <input type="text" class="form-control" value="{{ $players->fullname }}" placeholder="Player name" name="fullname" required>
	  
    </div>

    <div class="col-md-4 mb-3">
      <label >Password</label>
      <input type="password" class="form-control" value="{{ $players->password }}" autofill="off" placeholder="Password" name="password" required>
	  
    </div>
    <div class="col-md-4 mb-3">

      <label>Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="email" class="form-control" value="{{ $players->email }}" autofill="off" placeholder="Player email" name="email" required>
	
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-3">
      <label>ID</label>
      <input type="text" class="form-control" value="{{ $players->player_id }}" placeholder="Player id" name="player_id" required>
	  
    </div>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label>Age</label>
      <input type="number" class="form-control" value="{{ $players->age }}" placeholder="Player age" name="age" required>
	  
    </div>

    <div class="col-md-4 mb-3">
      <label>Image</label>
      <input type="file" class="form-control" value="{{ $players->image }}" placeholder="Player image" name="image" >
	  
    </div>
</div>

<br>
<br>

<h1 style="color: #009432;">Health Information</h1> 
	<hr style="border-top: 3px double #8c8b8b;">
<br>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label>Height</label>
      <input type="number" class="form-control" value="{{ $players->height }}" placeholder="Player Height" name="height" required>
	 
    </div>

    <div class="col-md-4 mb-3">
      <label>Weight</label>
      <input type="number" class="form-control" value="{{ $players->weight }}" placeholder="Player Weight" name="weight" required>
	  
    </div>

	<div class="col-md-4 mb-3">
      <label>Player Diseases</label>
      <input type="text" class="form-control" value="{{ $players->diseases }}" placeholder="Player Diseases" name="disease">
	  
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label>Skills</label>
      <input type="text" class="form-control" value="{{ $players->skill }}" placeholder="Player Skills" name="skill">
	  
    </div>
</div>
      
  <button class="btn btn-primary" type="submit">Update Player</button>

</div>
</form>
</body>
@endsection