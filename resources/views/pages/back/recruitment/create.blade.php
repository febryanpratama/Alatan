@extends('layouts.app')

@section('custom-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"/>
<style>
    .ck-editor__editable {
        min-height: 200px;
    }
    .bootstrap-tagsinput input{
        min-width: 40vh;
        padding-top: 4px;
        padding-bottom: 5px;
    }
</style>
@endsection

@section('content')
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/grapesjs-plugin-ckeditor@0.0.9/dist/grapesjs-plugin-ckeditor.min.js"></script>
<div class="container">
    <div class="row">
        @include("includes.back.menus")
        <div class="col-lg-9 col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4">Add New Category Recruitment</h4>
                    <form action="{{ url('admin/category-recruitment/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="title" class="mb-2">Category</label>
                            <input type="text" placeholder="Category" required="" name="category" class="form-control">
                        </div>
                        <div class="form-group mb-2 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-2">
                                <i class="fa fa-check me-2"></i>
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
    });
</script>
@endsection

@section('custom-script')
<script src="{{ asset('js/bootstrap-tag.js') }}"></script>
@endsection