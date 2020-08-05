
@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Accounts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



        <!-- Small boxes (Stat box) -->
        <div class="row">
             
        <form action="{{ url('/accounts')  }}" method="post">
                   @csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"name ="aname" class="form-control"  placeholder="Enter Name">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text"name ="aaddress" class="form-control"  placeholder="Enter Address">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Contact1</label>
    <input type="text"name ="acontact1" class="form-control"  placeholder="Enter contact">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Contact2</label>
    <input type="text"name ="acontact2" class="form-control"  placeholder="Enter Contact">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Designation</label>
    <input type="text"name ="adesignation" class="form-control"  placeholder="Enter Designation">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Area</label>
    <input type="text"name ="aarea" class="form-control"  placeholder="Enter Area">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
    <input type="text"name ="atype" class="form-control"  placeholder="Enter Type">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Remarks</label>
    <textarea name="aremarks" class="form-control" ></textarea>
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection