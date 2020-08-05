
@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All All Accounts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
             
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact1</th>
      <th scope="col">Contact2</th>
      <th scope="col">Designation</th>
      <th scope="col">Area</th>
      <th scope="col">Type</th>
      <th scope="col">Remarks</th>

      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($acc_data as $cus)
    <tr>
      <td>{{ $cus['acc_name']}}</td>
      <td>{{ $cus['acc_address']}}</td>
      <td>{{ $cus['acc_contact1']}}</td>
      <td>{{ $cus['acc_contact2']}}</td>
      <td>{{ $cus['acc_designation']}}</td>
      <td>{{ $cus['acc_area']}}</td>
      <td>{{ $cus['acc_type']}}</td>
      <td>{{ $cus['acc_remarks']}}</td>
      <td><a href="/edit/{{$cus['id']}}" class= "btn btn-primary">Edit</a></td>
      <td><a href="/delete/{{$cus['id']}}" class= "btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
        
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection