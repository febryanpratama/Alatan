@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include("includes.back.menus")
        <div class="col-lg-9 col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="mb-4">Data Recruitment</h4>
                        <a href="{{ url("admin/category-recruitment/create") }}">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus me-2"></i>
                                Add new
                            </button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name Category</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($data as $item=>$key)
                                <tr>
                                    <td>{{ $item+1 }}</td>
                                    <td>{{ $key->category }}</td>
                                    <td>
                                        <div class="d-flex flex-row">
                                            <a href="" class="me-2" target="_blank">
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="" class="me-2">
                                                <button class="btn btn-sm btn-warning text-dark">
                                                    <i class="fa fa-cog"></i>
                                                </button>
                                            </a>
                                            <form method="post" action="">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-times mx-1"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection