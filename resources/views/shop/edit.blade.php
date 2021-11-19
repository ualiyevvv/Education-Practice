@extends('layouts.admin')

@section('content')
<body class="admin hold-transition sidebar-mini" style="overflow: hidden;">
<!-- Site wrapper -->

<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.admin-nav ')
  @include('layouts.admin-aside ')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 84vh; overflow: scroll;padding-bottom: 10px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Add new order</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        <div class="card-body">
        <div class="card-body p-0">
            <!-- form start -->
            <form action="{{ route('admin.shop.update', $order->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="card-body">
                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" id="caption" placeholder="Enter caption" value="{{ $order->caption }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Enter description" value="{{ $order->description }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Enter price" value="{{ $order->price }}">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category">
                            <option value="null" disabled selected>{{$order->category}}</option>
                            <option value="shaving accessories">shaving accessories</option>
                            <option value="care products">care products</option>
                            <option value="accessories">accessories</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="maker">Maker</label>
                        <select name="maker" id="maker">
                            <option value="null" disabled selected>{{$order->maker}}</option>
                            <option value="baxter of california">baxter of california</option>
                            <option value="me natty">me natty</option>
                            <option value="murray's">murray's</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">Image</label>
                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" id="file">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </div>
           </form>
        </div>
        </div>
        <!-- /.card-body -->

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection