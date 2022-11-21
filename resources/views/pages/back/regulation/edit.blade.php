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
                    <h4 class="mb-4">Edit Regulation</h4>
                    <form action="{{ route('regulations.update', [$regulation->id]) }}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group mb-2">
                            <label for="title" class="mb-2">Title</label>
                            <input type="text" placeholder="Type the Title" required="" name="title" class="form-control" value="{{ $regulation->title }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="title" class="mb-2">Year</label>
                            <input type="number" placeholder="Type the Year" required="" name="year" class="form-control" value="{{ $regulation->year }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="title" class="mb-2">Type</label>
                            <input type="text" placeholder="Type the Type" required="" name="type" class="form-control" value="{{ $regulation->type }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="entity" class="mb-2">Entity</label>
                            <input type="text" placeholder="Type the Entity" required="" name="entity" class="form-control" value="{{ $regulation->entity }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="file" class="mb-2">File</label>
                            <input type="file" placeholder="Type the Title" name="file" accept="application/pdf" class="form-control">
                        </div>
                        <div class="form-group mb-2">
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