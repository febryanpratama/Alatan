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
                            <select name="specialist_id" class="form-control">
                                <option value="" selected disabled> == Pilih == </option>
                                @foreach ($data as $item)
                                    <option value="{{ $item->id }}">{{ $item->category }}</option>
                                @endforeach
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
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="" class="control-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="" class="control-label">E-Mail</label>
                            <input type="text" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="" class="control-label">Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" placeholder="Your Linkedin Url" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="card-header d-flex justify-content-between">
                            <h3 style="">Education History</h3>
                            <button type="button" class="btn btn-sm btn-primary" id="education">Add</button>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Education</th>
                                        <th>Qualification</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center" id="dynamiceducation">
                                    <tr>
                                        <td>#</td>
                                        <td>
                                            <input type="text" name="name_education[]" class="form-control" placeholder="Place your answer, SMK N 1 Pontianak">
                                        </td>
                                        <td>
                                            <input type="text" name="qualification[]" class="form-control" placeholder="Place your answer, Teknik Informatika">
                                        </td>
                                        <td>
                                            <input type="number" name="year[]" class="form-control" placeholder="Place your answer, 2022">
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger removeedu">Remove</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="card-header d-flex justify-content-between">
                            <h3>Work Experience</h3>
                            <button type="button" class="btn btn-sm btn-primary" id="work">Add</button>
                        </div>
                        <div class="col-md-12 mt-3 table-bordered">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Company</th>
                                        <th>specialist</th>
                                        <th>Date Start</th>
                                        <th>Date End</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center" id="dynamicwork">
                                    <tr>
                                        <td>#</td>
                                        <td>
                                            <input type="text" class="form-control" name="company[]" placeholder="PT Alatan Asasta Indonesia">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="programmer[]" placeholder="Programmer">
                                        </td>
                                        <td>
                                            <input type="date" class="form-control" name="date_start[]">
                                        </td>
                                        <td>
                                            <input type="date" class="form-control" name="date_start[]">
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger removework">Remove</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="card-header d-flex justify-content-between">
                            <h3>Skill</h3>
                            <button type="button" class="btn btn-sm btn-primary" id="skill">Add</button>
                        </div>
                        <div class="col-md-12 mt-3 table-bordered">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Skill</th>
                                        <th>Year Start</th>
                                        <th>Year End</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center" id="dynamicskill">
                                    <tr>
                                        <td>#</td>
                                        <td>
                                            <input type="text" class="form-control" name="skill[]" placeholder="Programmer or Data Scientist">
                                        </td>
                                        <td>
                                            <input type="date" class="form-control" name="year_start[]">
                                        </td>
                                        <td>
                                            <input type="date" class="form-control" name="year_end[]">
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger removeskill">Remove</button>
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

    $("#education").click(function(){
        // console.log('add');
        var i = 0;
   
        ++i;
   
        $("#dynamiceducation").append(`
            <tr>
                <td>#</td>
                <td>
                    <input type="text" name="name_education[]" class="form-control" placeholder="Place your answer, SMK N 1 Pontianak">
                </td>
                <td>
                    <input type="text" name="qualification[]" class="form-control" placeholder="Place your answer, Teknik Informatika">
                </td>
                <td>
                    <input type="number" name="year[]" class="form-control" placeholder="Place your answer, 2022">
                </td>
                <td>
                    <button class="btn btn-sm btn-danger removeedu">Remove</button>
                </td>
            </tr>
        `);
    });
    $(document).on('click', '.removeskill', function(){
        $(this).closest('tr').remove();
    });  

    $("#work").click(function(){
        var a = 0;
   
        ++a;
   
        $("#dynamicwork").append(`
            <tr>
                <td>#</td>
                <td>
                    <input type="text" class="form-control" name="company[]" placeholder="PT Alatan Asasta Indonesia">
                </td>
                <td>
                    <input type="text" class="form-control" name="programmer[]" placeholder="Programmer">
                </td>
                <td>
                    <input type="date" class="form-control" name="date_start[]">
                </td>
                <td>
                    <input type="date" class="form-control" name="date_start[]">
                </td>
                <td>
                    <button class="btn btn-sm btn-danger removework">Remove</button>
                </td>
            </tr>
        `);
    });
    $(document).on('click', '.removework', function(){
        $(this).closest('tr').remove();
    });  


    $("#skill").click(function(){
        var s = 0;
   
        ++s;
   
        $("#dynamicskill").append(`
            <tr>
                <td>#</td>
                <td>
                    <input type="text" class="form-control" name="skill[]" placeholder="Programmer or Data Scientist">
                </td>
                <td>
                    <input type="date" class="form-control" name="year_start[]">
                </td>
                <td>
                    <input type="date" class="form-control" name="year_end[]">
                </td>
                <td>
                    <button class="btn btn-sm btn-danger removeskill">Remove</button>
                </td>
            </tr>
        `);
    });
    $(document).on('click', '.removework', function(){
        $(this).closest('tr').remove();
    });  
</script>
@endsection