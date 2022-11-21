@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include("includes.back.menus")
        <div class="col-lg-9 col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4">Dashboard</h4>
                    <p>Welcome to the Alatan's Admin Panel. You can easily manage blog posts, blog categories, regulation and manage your profile. Don't forget to signout/logout after all of your activity using me.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection