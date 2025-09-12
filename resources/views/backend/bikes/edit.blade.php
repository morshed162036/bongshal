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
                <h5 class="content-header-title float-left pr-1 mb-0">Bike Edit</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('bike.index') }}">Bikes</a>
                        </li>
                        <li class="breadcrumb-item active">Bike Edit
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

    <form class="form" action="{{ route('bike.update', $bike->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bike Edit Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company_id">Company <span class="text-danger">*</span></label>
                                        <select name="company_id" id="company_id" class="form-control" required>
                                            <option value="" disabled selected>Select Company</option>
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}" {{ $bike->company_id == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="model_name">Model Name <span class="text-danger">*</span></label>
                                        <input type="text" id="model_name" class="form-control" name="model" value="{{ $bike->model }}" placeholder="Enter Model Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="battery">Battery <span class="text-danger">*</span></label>
                                        <input type="text" id="battery" class="form-control" name="battery_capacity" value="{{ $bike->battery }}" placeholder="Enter Battery" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="front_tire_size">Front Tire Size <span class="text-danger">*</span></label>
                                        <input type="text" id="front_tire_size" class="form-control" name="front_tire_size" value="{{ $bike->front_tire_size }}" placeholder="Enter Front Tire Size" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="rear_tire_size">Rear Tire Size <span class="text-danger">*</span></label>
                                        <input type="text" id="rear_tire_size" class="form-control" name="rear_tire_size" value="{{ $bike->rear_tire_size }}" placeholder="Enter Rear Tire Size" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="type">Type <span class="text-danger">*</span></label>
                                        <select name="type" id="type" class="form-control" required>
                                            <option value="" disabled selected>Select Type</option>
                                            <option value="scooty" {{ $bike->type == 'scooty' ? 'selected' : '' }}>Scooty</option>
                                            <option value="street" {{ $bike->type == 'street' ? 'selected' : '' }}>Street / Naked</option>
                                            <option value="sports" {{ $bike->type == 'sports' ? 'selected' : '' }}>Sports</option>

                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">

                                        <input type="hidden" id="price" class="form-control" name="price" placeholder="Enter Price">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Bike Colors</h5>
                            <div id="color-container">
                                @foreach ($bike->color as $index => $color)
                                    <div class="row color-group" data-index="{{ $index }}">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="color_{{ $index }}">Color Name <span class="text-danger">*</span></label>
                                                <input type="hidden" id="color_{{ $index }}" class="form-control" name="group-color[{{ $index }}][id]" value="{{ $color->id }}" placeholder="Enter Color Name" required>
                                                <input type="text" id="color_{{ $index }}" class="form-control" name="group-color[{{ $index }}][color]" value="{{ $color->color_name }}" placeholder="Enter Color Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="color_image_{{ $index }}">Color Image <span class="text-danger">*</span></label>
                                                <input type="file" id="color_image_{{ $index }}" class="form-control" name="group-color[{{ $index }}][image]" onchange="loadFile(event)">
                                                @if($color->image)
                                                    <img src="{{ asset('images/multiimage/bike/'.$color->image) }}" alt="Color Image" width="150" class="mt-2">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 d-flex align-items-end">
                                            <button type="button" class="btn btn-danger remove-color-btn" onclick="removeColor(this)">Remove Color</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-primary" id="add-color-btn">Add Color</button>
                            <hr>
                            <h5>Bike Grades</h5>
                            <div id="grade-container">
                                @foreach ($bike->grade as $index => $grade)
                                    <div class="row grade-group" data-index="{{ $index }}">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="grade_{{ $index }}">Grade <span class="text-danger">*</span></label>
                                                <input type="hidden" class="form-control" name="group-grade[{{ $index }}][id]" value="{{ $grade->id }}">
                                                <input type="text" id="grade_{{ $index }}" class="form-control" name="group-grade[{{ $index }}][grade]" value="{{ $grade->grade }}" placeholder="Enter Grade" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="volume_{{ $index }}">Volume <span class="text-danger">*</span></label>
                                                <input type="text" id="volume_{{ $index }}" class="form-control" name="group-grade[{{ $index }}][volume]" value="{{ $grade->volume }}" placeholder="Enter Volume" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 d-flex align-items-end">
                                            <button type="button" class="btn btn-danger remove-grade-btn" onclick="removeGrade(this)">Remove Grade</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-primary" id="add-grade-btn">Add Grade</button>
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update Bike</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
    <script>
        let colorIndex = {{ count($bike->color) }};
        let gradeIndex = {{ count($bike->grade) }};

        document.getElementById('add-color-btn').addEventListener('click', function() {
            const container = document.getElementById('color-container');
            const colorGroup = document.createElement('div');
            colorGroup.classList.add('row', 'color-group');
            colorGroup.setAttribute('data-index', colorIndex);

            colorGroup.innerHTML = `
                <div class="col-md-4 col-12">
                    <div class="form-group">
                        <label for="color_${colorIndex}">Color Name <span class="text-danger">*</span></label>
                        <input type="hidden" class="form-control" name="group-color[${colorIndex}][color]" placeholder="Enter Color Name" required>
                        <input type="text" id="color_${colorIndex}" class="form-control" name="group-color[${colorIndex}][color]" placeholder="Enter Color Name" required>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="form-group">
                        <label for="color_image_${colorIndex}">Color Image <span class="text-danger">*</span></label>
                        <input type="file" id="color_image_${colorIndex}" class="form-control" name="group-color[${colorIndex}][image]" onchange="loadFile(event)">
                    </div>
                </div>
                <div class="col-md-4 col-12 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-color-btn" onclick="removeColor(this)">Remove Color</button>
                </div>
            `;
            container.appendChild(colorGroup);
            colorIndex++;
        });
        function removeColor(button) {
            const colorGroup = button.closest('.color-group');
            colorGroup.remove();
        }
        document.getElementById('add-grade-btn').addEventListener('click', function() {
            const container = document.getElementById('grade-container');
            const gradeGroup = document.createElement('div');
            gradeGroup.classList.add('row', 'grade-group');
            gradeGroup.setAttribute('data-index', gradeIndex);

            gradeGroup.innerHTML = `
                <div class="col-md-4 col-12">
                    <div class="form-group">
                        <label for="grade_${gradeIndex}">Grade <span class="text-danger">*</span></label>
                        <input type="text" id="grade_${gradeIndex}" class="form-control" name="group-grade[${gradeIndex}][grade]" placeholder="Enter Grade" required>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="form-group">
                        <label for="volume_${gradeIndex}">Volume <span class="text-danger">*</span></label>
                        <input type="text" id="volume_${gradeIndex}" class="form-control" name="group-grade[${gradeIndex}][volume]" placeholder="Enter Volume" required>
                    </div>
                </div>
                <div class="col-md-4 col-12 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-grade-btn" onclick="removeGrade(this)">Remove Grade</button>
                </div>
            `;
            container.appendChild(gradeGroup);
            gradeIndex++;
        });
        function removeGrade(button) {
            const gradeGroup = button.closest('.grade-group');
            gradeGroup.remove();
        }
    </script>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.height =  '200';
        }
    </script>

@endsection


