@extends('admin.layouts.template')
@section('title','Category')
@section('content')

@if (count($errors)>0)
@foreach ($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{ $error }}
  </div>
@endforeach
@endif

@if (Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{ Session('success') }}
  </div>
@endif

<div class="row">
<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data @yield('title')</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-add">
            <i class="fa fa-plus"></i> Add Data
          </button>
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
    {{ $category->links() }}
    <!-- /.card-body -->
  </div>
</div>
</div>


<div class="modal fade" id="modal-add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add @yield('title')</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name Category">
                  </div>
            </div>
            <div class="modal-footer float-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

@endsection
