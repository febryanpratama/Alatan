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
                        {{-- <a href="{{ route('posts.create') }}">
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-plus me-2"></i>
                                Add new
                            </button>
                        </a> --}}
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Education</th>
                                    {{-- <th>Visited</th> --}}
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($posts as $key => $post)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><b>{{ $post->title }}</b></td>
                                    <td><small>{{ $post->slug }}</small></td>
                                    <td>{{ $post->keywords }}</td>
                                    <td><small><b>{{ $post->visited }}</b> times</small></td>
                                    <td><small>{{ dateID($post->created_at) }}</small></td>
                                    <td>
                                        <div class="d-flex flex-row">
                                            <a href="{{ route('blog.detail', [$post->slug]) }}" class="me-2" target="_blank">
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('posts.edit', [$post->id]) }}" class="me-2">
                                                <button class="btn btn-sm btn-warning text-dark">
                                                    <i class="fa fa-cog"></i>
                                                </button>
                                            </a>
                                            <form method="post" action="{{ route('posts.destroy', [$post->id]) }}">
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

                                @if(count($posts) == 0)
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <b>There is nothing here.</b>
                                    </td>
                                </tr>
                                @endif --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection