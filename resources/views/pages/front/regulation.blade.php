@extends("layouts.front")
@section("container")
<!-- Page Title Section -->
<div class="page-title-section">
    <div class="auto-container">
        <h2><span>Regulasi</span></h2>
    </div>
</div>
<!-- End Page Title Section -->

<!--Sidebar Page Container-->
<div class="sidebar-page-container padding-top">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="our-blogs table-responsive" style="padding-right: 0;">
                    <table class="table table-striped table-bordered" id="regulation">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Tahun</th>
                                <th>Jenis</th>
                                <th>Entitas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($regulations as $key => $regulation)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <a href="{{ asset('public/files/'.$regulation->file) }}" target="_blank">{{ $regulation->title }}</a>
                                </td>
                                <td>{{ $regulation->year }}</td>
                                <td>{{ $regulation->type }}</td>
                                <td>{{ $regulation->entity }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("custom-script")
<script>
    $('#regulation').DataTable();
</script>
@endsection