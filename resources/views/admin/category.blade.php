@extends('admin.layouts.template')
@section('title','Category')
@section('content')
<div class="row">
<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data @yield('title')</h3>
      <div class="card-tools">
        <a href="#" class="btn btn-outline-success btn-sm"><i class="fa fa-plus"></i> Add Data</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive table-stripped p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($category as $row => $result)
          <tr>
            <td>{{ $row + $category->firstitem() }}</td>
            <td>{{ $result->name }}</td>
            <td>
                <a href="#" class="btn btn-outline-info btn-xs"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
</div>

@endsection
