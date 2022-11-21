@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include("includes.back.menus")
        <div class="col-lg-9 col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4">Settings</h4>
                    <form action="{{ route('settings.save') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" required="" name="name" placeholder="Enter your Name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" required="" name="email" placeholder="Enter your Email" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group mt-2">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter your Password (blank it if no change)">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-dark btn-sm">
                                Save Changes
                                <i class="fa fa-check ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection