@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include("includes.back.menus")
        <div class="col-lg-9 col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="mb-4">Data Regulation</h4>
                        <a href="{{ route('regulations.create') }}">
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
                                    <th>Title</th>
                                    <th>Year</th>
                                    <th>Type</th>
                                    <th>Entity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($regulations as $key => $regulation)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><b>{{ $regulation->title }}</b></td>
                                    <td>{{ $regulation->year }}</td>
                                    <td>{{ $regulation->type }}</td>
                                    <td>{{ $regulation->entity }}</td>
                                    <td>
                                        <div class="d-flex flex-row">
                                            <a href="{{ asset('public/files/'.$regulation->file) }}" class="me-2">
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fa fa-download"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('regulations.edit', [$regulation->id]) }}" class="me-2">
                                                <button class="btn btn-sm btn-warning text-dark">
                                                    <i class="fa fa-cog"></i>
                                                </button>
                                            </a>
                                            <form method="post" action="{{ route('regulations.destroy', [$regulation->id]) }}">
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

                                @if(count($regulations) == 0)
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