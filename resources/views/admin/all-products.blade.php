
@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Products</li>
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
      <th scope="col">Product Title</th>
      <th scope="col">Product Slug</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Description</th>
      <th scope="col">Product Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products_data as $product)
    <tr>
      <td>{{ $product['product_title']}}</td>
      <td>{{ $product['product_slug']}}</td>
      <td>{{ $product['product_price']}}</td>
      <td>{{ $product['product_description']}}</td>
      <td>{{ $product['product_image']}}</td>
      <td><a href="/edit/{{$product['id']}}" class= "btn btn-primary">Edit</a></td>
      <td><a href="/delete/{{$product['id']}}" class= "btn btn-danger">Delete</a></td>
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