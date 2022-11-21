@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include("includes.back.menus")
        <div class="col-lg-9 col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="mb-4">Data Categories</h4>
                        <a href="{{ route('categories.create') }}">
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-plus me-2"></i>
                                Add new
                            </button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Slug</th>
									<th>Template</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key => $category)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><b>{{ $category->name }}</b></td>
                                    <td><small><code>{{ $category->slug }}</code></small></td>
									<td><small><code>{{ $category->template }}</code></small></td>
                                    <td>
                                        <div class="d-flex flex-row">
                                            @if($category->slug !== null)
                                            <a href="{{ route('blog.categories', [$category->slug]) }}" class="me-2" target="_blank">
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            @endif
                                            <a href="{{ route('categories.edit', [$category->id]) }}" class="me-2">
                                                <button class="btn btn-sm btn-warning text-dark">
                                                    <i class="fa fa-cog"></i>
                                                </button>
                                            </a>
                                            <form method="post" action="{{ route('categories.destroy', [$category->id]) }}">
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

                                @if(count($categories) == 0)
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <b>There is nothing here.</b>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection