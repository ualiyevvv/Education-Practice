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
              <li class="breadcrumb-item active">News</li>
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
            <h3 class="card-title">Edit post</h3>

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
            <form action="{{ route('admin.news.update', $post->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="card-body">
                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" id="caption" placeholder="Enter caption" value="{{ $post->caption }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Image</label>
                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" id="file">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
                </div>
           </form>
        </div>
        </div>
        <!-- /.card-body -->
      <!-- /.card -->      
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