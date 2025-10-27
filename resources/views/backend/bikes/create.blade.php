@extends('backend.layout.main')

@section('css')
        <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/pickers/daterange/daterangepicker.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Bike Create</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('bike.index') }}">Bike</a>
                        </li>
                        <li class="breadcrumb-item active">Bike Create
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">

    {{-- Validation Error Message --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success: </strong>{{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error: </strong>{{ Session::get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <form action="{{ route('bike.store') }}" method="post" enctype="multipart/form-data"> @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        {{-- <fieldset>
                                            <h5>Image <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="image" onchange="loadFile(event)" required>
                                            </div>
                                        </fieldset>

                                        <img id="output"> --}}

                                        {{-- <fieldset class="mt-2">
                                            <h5>First Text</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <textarea class="form-control" id="basicTextarea" rows="3" placeholder="" name="first_text"></textarea>
                                            </div>
                                        </fieldset>--}}
                                        <fieldset class="mt-2">
                                            <h5>Company <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-building"></i></span>
                                                </div>
                                                <select name="company_id" id="" class="form-control" required>
                                                    <option value="" disabled selected>Select Company</option>
                                                    @foreach ($companies as $company)
<<<<<<< HEAD
                                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
=======
                                                        <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
                                                    @endforeach
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Model</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-spreadsheet"></i></span>
                                                </div>
<<<<<<< HEAD
                                                <input type="text" name="model" class="form-control">
=======
                                                <input type="text" name="model" class="form-control" value="{{ old('model') }}">
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Motorcycle Type</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <select name="type" id="" class="form-control" required>
                                                    <option value="" disabled selected>Select Type</option>
<<<<<<< HEAD
                                                    <option value="sports">Sports</option>
                                                    <option value="street">Street / Naked</option>
                                                    <option value="scooty">Scooty</option>
                                                </select>

                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Battery Capacity</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="battery_capacity" class="form-control">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Front Tire Size</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="front_tire_size" class="form-control">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Rear Tire Size</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="rear_tire_size" class="form-control">
                                            </div>
                                        </fieldset>
=======
                                                    <option value="sports" {{ old('type') == "sports" ? 'selected' : '' }}>Sports</option>
                                                    <option value="street" {{ old('type') == "street" ? 'selected' : '' }}>Street / Naked</option>
                                                    <option value="scooty" {{ old('type') == "scooty" ? 'selected' : '' }}>Scooty</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Battery Size</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="battery_capacity" class="form-control" value="{{ old('battery_capacity') }}">
                                            </div>
                                        </fieldset>

                                        {{-- ================= Tire Information Section ================= --}}
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <h5 class="mb-2">Tire Specifications</h5>
                                        </div>

                                        {{-- Front Tire --}}
                                        <div class="col-md-6">
                                            <fieldset>
                                                <h6>Front Tire</h6>
                                                <div class="row">
                                                    <div class="col-md-4 mb-2">
                                                        <label>Width</label>
                                                        <input type="text" name="front_tire_width" class="form-control" value="{{ old('front_tire_width') }}">
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <label>Aspect Ratio</label>
                                                        <input type="text" name="front_tire_aspectratio" class="form-control" value="{{ old('front_tire_aspectratio') }}">
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <label>Rim</label>
                                                        <input type="text" name="front_tire_rim" class="form-control" value="{{ old('front_tire_rim') }}">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>

                                        {{-- Rear Tire --}}
                                        <div class="col-md-6">
                                            <fieldset>
                                                <h6>Rear Tire</h6>
                                                <div class="row">
                                                    <div class="col-md-4 mb-2">
                                                        <label>Width</label>
                                                        <input type="text" name="rear_tire_width" class="form-control" value="{{ old('rear_tire_width') }}">
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <label>Aspect Ratio</label>
                                                        <input type="text" name="rear_tire_aspectratio" class="form-control" value="{{ old('rear_tire_aspectratio') }}">
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <label>Rim</label>
                                                        <input type="text" name="rear_tire_rim" class="form-control" value="{{ old('rear_tire_rim') }}">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
>>>>>>> 4c182987ded501b02deec36616d630990b82571f

                                        {{-- <fieldset class="mt-2">
                                            <h5>Color</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="color" class="form-control">
                                            </div>
                                        </fieldset> --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <h1>Color</h1>
                                                            <div class="row mt-2">
                                                                <div class="repeater-default">
                                                                    <div data-repeater-list="group-color">
                                                                        <div data-repeater-item>
                                                                            <div class="row justify-content-between" id='product_details'>
                                                                                <div class="col-md-4 col-sm-12 form-group">
                                                                                    <label for="color">Color</label>
                                                                                    <input type="text" class="form-control" id="color"
                                                                                        name="color" placeholder="Color" >
                                                                                </div>

                                                                                <div class="col-md-4 col-sm-12 form-group">
                                                                                    <label for="image">Image</label>
                                                                                    <input type="file" class="form-control" id="image"
                                                                                        name="image" placeholder="Image" >
                                                                                </div>

                                                                                <div
                                                                                    class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                                    <button class="btn btn-danger text-nowrap px-1"
                                                                                        data-repeater-delete type="button"> <i
                                                                                            class="bx bx-x"></i>
                                                                                        Delete
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col p-0">
                                                                            <button class="btn btn-primary" data-repeater-create type="button" id="product"><i
                                                                                    class="bx bx-plus"></i>
                                                                                Add
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <h1>Engine Oil Grades</h1>
                                                            <div class="row mt-2">
                                                                <div class="repeater-default">
                                                                    <div data-repeater-list="group-grade">
                                                                        <div data-repeater-item>
                                                                            <div class="row justify-content-between" id='product_details'>
                                                                                <div class="col-md-4 col-sm-12 form-group">
                                                                                    <label for="grade">Grade</label>
                                                                                    <input type="text" class="form-control" id="grade"
                                                                                        name="grade" placeholder="grade" >
                                                                                </div>

                                                                                <div class="col-md-4 col-sm-12 form-group">
<<<<<<< HEAD
                                                                                    <label for="volume">Volume</label>
=======
                                                                                    <label for="volume">Capacity</label>
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
                                                                                    <input type="text" class="form-control" id="volume"
                                                                                        name="volume" placeholder="Volume" >
                                                                                </div>

                                                                                <div
                                                                                    class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                                    <button class="btn btn-danger text-nowrap px-1"
                                                                                        data-repeater-delete type="button"> <i
                                                                                            class="bx bx-x"></i>
                                                                                        Delete
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col p-0">
                                                                            <button class="btn btn-primary" data-repeater-create type="button" id="product"><i
                                                                                    class="bx bx-plus"></i>
                                                                                Add
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-2 btn-lg mx-1">Create</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->

</div>
@endsection

@section('js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/pickers/daterange/moment.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin_template/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/core/app.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/components.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/footer.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/forms/form-repeater.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin_template/app-assets/js/scripts/pages/table-extended.js')}}"></script>
    <!-- END: Page JS-->

    {{-- <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.height =  '400';
        }
    </script> --}}
@endsection
