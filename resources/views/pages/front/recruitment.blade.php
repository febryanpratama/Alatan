@extends("layouts.front")
@section("container")
<!-- Page Title Section -->
<div class="page-title-section">
    <div class="auto-container">
        <h2><span>Recruitment</span></h2>
    </div>
</div>
<!-- End Page Title Section -->

<!--Sidebar Page Container-->
<div class="sidebar-page-container padding-top">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="control-label">Full Name</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="control-label">Specialist</label>
                            <select name=""class="form-control">
                                <option value="" selected disabled> == Pilih == </option>
                                <option value="">Programmer</option>
                                <option value="">Specialist E-Procurement</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        {{-- <hr width="80%"> --}}
                        <h3 style="border-bottom: 1px solid black">KONTAK</h3>
                        {{-- <div class="col-md-4">
                        </div> --}}
                        <div class="col-md-6 mt-3">
                            <label for="" class="control-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="" class="control-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="" class="control-label">E-Mail</label>
                            <input type="text" class="form-control" name="email" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="" class="control-label">Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <h3 style="border-bottom: 1px solid black">Education History</h3>
                        <div class="col-md-12 mt-3 table-responsive">
                            {{-- <label for="" class="control-label"> Education History</label> --}}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Education</th>
                                        <th>Qualification</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>Edu</td>
                                        <td>Qua</td>
                                        <td>2022</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Add</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Edu</td>
                                        <td>Qua</td>
                                        <td>2022</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Add</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <h3 style="border-bottom: 1px solid black">Work Experience</h3>
                        <div class="col-md-12 mt-3 table-responsive">
                            {{-- <label for="" class="control-label"> Education History</label> --}}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Education</th>
                                        <th>Qualification</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>Edu</td>
                                        <td>Qua</td>
                                        <td>2022</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Add</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Edu</td>
                                        <td>Qua</td>
                                        <td>2022</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Add</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <h3 style="border-bottom: 1px solid black">Skill</h3>
                        <div class="col-md-12 mt-3 table-responsive">
                            {{-- <label for="" class="control-label"> Education History</label> --}}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Education</th>
                                        <th>Qualification</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>Edu</td>
                                        <td>Qua</td>
                                        <td>2022</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Add</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Edu</td>
                                        <td>Qua</td>
                                        <td>2022</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Add</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-danger ml-auto">Cancel</button>
                                <button class="btn btn-primary ml-auto">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
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