@extends('layouts.app')

@section('content')

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
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Specialize</th>
            <th>Image</th>
          </tr>
        </thead>
           <tbody>
             @foreach ($coaches as $item)
            <tr>
              <td>{{ $item->firstname }}</td>
              <td>{{ $item->lastname }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->specialize }}</td>
              <td>{{ $item->image }}</td>
              
              <td>
                <a href="" class="btn btn-success">Edit</a>
              </td>
            </tr>
            @endforeach
           </tbody>
      </table>
      </div> 
    </div>

    


@endsection