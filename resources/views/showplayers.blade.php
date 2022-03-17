@extends('layouts.app')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color:blue;">Players</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Players</li>
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
         <a href="{{url('add/insert')}}" class="btn btn-primary btn-sm float-end">Add Player</a>
</h4>
      </div>
      
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Fullname</th>
            <th>Email</th>
            <th>Image</th>
            <th>Age</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Diseases</th>
            <th>Skils</th>
            <th>Password</th>
          </tr>
        </thead>
           <tbody>
             @foreach ($players as $item)
            <tr>
              <td>{{ $item->fullname }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->image }}</td>
              <td>{{ $item->age }}</td>
              <td>{{ $item->height }}</td>
              <td>{{ $item->weight }}</td>
              <td>{{ $item->disease }}</td>
              <td>{{ $item->skill }}</td>
              <td>{{ $item->password }}</td>
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