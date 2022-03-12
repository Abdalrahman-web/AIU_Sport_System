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

<h1 style="color:#0652DD" >Coache Information</h1> 
	<hr style="border-top: 3px double #8c8b8b;">
<br>

<form action = "{{route('addcoache.create')}}" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">First name</label>
      <input type="text" class="form-control" id="validationServer01" placeholder="Coache Firstname" name="firstname" required>
	  @error('firstname')
      <div style="color:red;">
       {{ $message }}
      </div>
	  @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control" id="validationServer02" placeholder="Coache Lastname" name="lastname" required>
	  @error('lastname')
      <div style="color:red;">
        {{ $message }}
      </div>
	  @enderror
    </div>
    <div class="col-md-4 mb-3">

      <label for="validationServer04">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="email" class="form-control" id="validationServer04" placeholder="Player email" name="email" required>
		@error('email')
        <div style="color:red;">{{ $message }}</div>
        @enderror
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer05">Specialize</label>
      <input type="text" class="form-control" id="validationServer05" placeholder="Coache Specialize" name="specialize" required>
	  @error('specialize')
      <div style="color:red;">
        {{ $message }}
      </div>
	  @enderror
    </div>
</div>

    
<button class="btn btn-primary" type="submit">Submit Coache</button>

</form>
</body>
</html>

@endsection