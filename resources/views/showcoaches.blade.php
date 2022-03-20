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

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color:green;">Coaches</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Coaches</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid px-4">
    <div class="card mt-4">
      <div class="card-header">
         <h4>View Players
         <a href="{{url('addcoache/insert')}}" class="btn btn-primary btn-sm float-end">Add Coache</a>
</h4>
      </div>
      
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Image</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Specialize</th>
            
          </tr>
        </thead>
           <tbody>
             @foreach ($coaches as $item)
            <tr>
              <td><img src="{{ asset('uploads/images/' .$item->image) }}" width="100px" height="100px" alt="image"></td>
              <td>{{ $item->firstname }}</td>
              <td>{{ $item->lastname }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->specialize }}</td>
              
              
              <td>
              <a href="{{ url('edit/coache/'. $item->id) }}" class="btn btn-success">Edit</a>
              </td>
              <td>
                <a href="{{ url('delete/coache/'. $item->id) }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
           </tbody>
      </table>
      </div> 
    </div>

    


@endsection