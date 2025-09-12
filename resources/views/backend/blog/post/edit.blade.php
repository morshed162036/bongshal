@extends('backend.layout.layout')

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
    <!-- In your layout or view -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add this if jQuery is missing -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}


    <!-- END: Custom CSS-->
    <style>
        .ck-editor__editable_inline{
            height: 450px;
        }
    </style>
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">News Secton</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">News List</a>
                        </li>
                        <li class="breadcrumb-item active">Edit News
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
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success: </strong>{{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    @endif
    @if(Session::has('error'))
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
                        <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data"> @csrf @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Title <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="title" id="title" value="{{ old('title',$post->title) }}" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Slug <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="slug" id="slug" value="{{ old('slug',$post->slug) }}" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Sub Title</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="sub_title" value="{{ old('sub_title',$post->sub_title) }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Category <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <select name="category_id[]" class="form-control select2" multiple id="category_id" required>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ in_array($category->id, $post->multicategory->pluck('category_id')->toArray()) ? 'selected' : '' }}>
                                                            {{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="row mt-2" id="location_section" style="display: none;">
                                    <!-- Division -->
                                    <div class="col-md-4">
                                        <fieldset>
                                            <h5>Division</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                {{-- <select name="division_id" class="form-control select2" id="division_id" data-url="{{ route('getDistricts') }}">
                                                    <option value="">Select Division</option>
                                                    @foreach ($divisions as $division)
                                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                                                    @endforeach
                                                </select> --}}
                                                <select name="division_id" class="form-control select2" id="division_id" data-url="{{ route('getDistricts') }}">
                                                    <option value="0">Select Division</option>
                                                    @foreach ($divisions as $division)
                                                        <option value="{{ $division->id }}" {{ $post->division_id == $division->id ? 'selected' : '' }}>
                                                            {{ $division->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <!-- District -->
                                    <div class="col-md-4">
                                        <fieldset>
                                            <h5>District</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <select name="district_id" class="form-control select2" id="district_id" data-url="{{ route('getUpazilas') }}">
                                                    {{-- <option value="0">Select District</option> --}}
                                                    {{-- @foreach ($districts as $district)
                                                        <option value="{{ $district->id }}" {{ $post->district_id == $district->id ? 'selected' : '' }}>
                                                            {{ $district->name }}
                                                        </option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <!-- Upazila -->
                                    <div class="col-md-4">
                                        <fieldset>
                                            <h5>Upazila</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <select name="upazila_id" class="form-control select2" id="upazila_id" >
                                                    {{-- <option value="0">Select Upazila</option> --}}
                                                    {{-- @foreach ($upazilas as $upazila)
                                                        <option value="{{ $upazila->id }}" {{ $post->upazila_id == $upazila->id ? 'selected' : '' }}>
                                                            {{ $upazila->name }}
                                                        </option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>News Views Counter Start</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="views" value="{{ old('views',$post->views) }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Meta Title</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="meta_title" value="{{ old('meta_title',$post->meta_title) }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Meta Keyword</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="meta_keyword" value="{{ old('meta_keyword',$post->meta_keywords) }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Meta Description</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="meta_description" value="{{ old('meta_description',$post->meta_description) }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Image</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="image" onchange="loadBg(event)">
                                            </div>
                                        </fieldset>
                                        @if ($post->image != null)
                                            <img src="{{ asset('images/post/'.$post->image) }}" id="bg" alt="bg" width="300px" height="150px" class="mt-2 mx-1">
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Photo Caption</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="caption" value="{{ old('caption',$post->caption) }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Short Details (Maximum 60 Word)</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="short_description" value="{{ old('short_description',$post->short_description) }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <fieldset>
                                            <h5>Details Content <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <textarea name="description"  class="form-control" id="content" rows="10">{{ old('description',$post->description) }}
                                                </textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <h4>News View Section</h4>
                                        <div class="form-group d-flex flex-wrap gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="main_menu" value="1" id="main_menu" {{ $post->main_menu == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="main_menu">Main Menu</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="editors_choice" value="1" id="editors_choice" {{ $post->editors_choice == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="editors_choice">Editor's Pick</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="selected_news" value="1" id="selected_news" {{ $post->selected_news == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="selected_news">Selected News</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="homepage_menu" id="homepage_menu" value="1" {{ $post->homepage_menu == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="homepage_menu">Homepage Menu Section</label>
                                            </div>

                                            <div>
                                                <label class="form-check-label" for="homepage_menu_position">News Position In Homepage Menu Section</label>
                                                <select name="homepage_menu_position" id="homepage_menu_position" class="form-control">
                                                    <option value="">Select HomePage Menu News Position</option>
                                                    <option value="lead_menu" {{ $post->homepage_menu_position == "lead_menu" ? 'selected': '' }}>Lead in Menu Section</option>
                                                    <option value="image_headline_short" {{ $post->homepage_menu_position == "image_headline_short" ? 'selected': '' }}>Image with headline & Short Details</option>
                                                    <option value="headline_short_details" {{ $post->homepage_menu_position == "headline_short_details" ? 'selected': '' }}>Headline with Short Details</option>
                                                    <option value="only_headline" {{ $post->homepage_menu_position == "only_headline" ? 'selected': '' }}>Only Headline</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label class="form-check-label" for="lead">Homepage Lead</label>
                                                <select name="lead" id="lead" class="form-control">
                                                    <option value="">Select HomePage Lead</option>
                                                    <option value="lead_1" {{ $post->lead == 'lead_1' ? 'selected' : ''}}>Lead 1</option>
                                                    <option value="lead_2" {{ $post->lead == 'lead_2' ? 'selected' : ''}}>Lead 2</option>
                                                    <option value="lead_3" {{ $post->lead == 'lead_3' ? 'selected' : ''}}>Lead 3</option>
                                                </select>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label" for="menu_lead">Menupage Lead</label>
                                                <select name="menu_lead" id="menu_lead" class="form-control">
                                                    <option value="">Select MenuPage Lead</option>
                                                    <option value="lead_1" {{ $post->menu_lead == 'lead_1' ? 'selected' : ''}}>Lead 1</option>
                                                    <option value="lead_2" {{ $post->menu_lead == 'lead_2' ? 'selected' : ''}}>Lead 2</option>
                                                    <option value="lead_3" {{ $post->menu_lead == 'lead_3' ? 'selected' : ''}}>Lead 3</option>
                                                </select>
                                            </div>
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lead_menu" value="1" id="lead_menu">
                                                <label class="form-check-label" for="lead_menu">Lead in Menu Section</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="image_headline_short" id="image_with_healine">
                                                <label class="form-check-label" for="image_with_healine">Image with headline & Short Details</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="headline_short_details" id="headline_with_short">
                                                <label class="form-check-label" for="headline_with_short">Headline with Short Details</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="headline" id="only_headline">
                                                <label class="form-check-label" for="only_headline">Only Headline</label>
                                            </div> --}}

                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lead_1" value="1" id="lead_1">
                                                <label class="form-check-label" for="lead_1">Lead 1</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lead_2" value="1" id="lead_2">
                                                <label class="form-check-label" for="lead_2">Lead 2</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lead_3" value="1" id="lead_3">
                                                <label class="form-check-label" for="lead_3">Lead 3</label>
                                            </div> --}}

                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="menu_lead_1" value="1" id="menu_lead_1">
                                                <label class="form-check-label" for="menu_lead_1">Menu Lead 1</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="menu_lead_2" value="1" id="menu_lead_2">
                                                <label class="form-check-label" for="menu_lead_2">Menu Lead 2</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="menu_lead_3" value="1" id="menu_lead_3">
                                                <label class="form-check-label" for="menu_lead_3">Menu Lead 3</label>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 mt-2">
                                    <button type="submit" class="btn btn-primary mt-2 btn-lg">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection

@section('js')
    <!-- jQuery (Only once, before Bootstrap JS) -->
<!-- jQuery 3.6.0 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper + Bootstrap 4.5.2 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Initialize Summernote & Select2 -->
<script>
    $(document).ready(function () {
        $('#content').summernote({
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video', 'hr']],
                ['view', ['fullscreen', 'codeview', 'help']],
                ['edit', ['undo', 'redo']]
            ]
            });

        $('.select2').select2();

        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
    <script>
        var loadBg = function(event) {
            var output = document.getElementById('bg');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.height =  '150';
            output.width =  '300';
        }
    </script>
    {{-- <script>
        ClassicEditor
            .create( document.querySelector( '#content' ),{
                ckfinder:{

                }
            } )

            .catch( error => {
                console.error( error );
            } );
    </script> --}}

    <script>
        $(document).ready(function () {
            $('#title').focus();

            $('#title').on('keyup', function () {
                var title = $(this).val();

                // Generate current date in YYYY/MM/DD format
                var date = new Date();
                var formattedDate = date.getFullYear() + '-' +
                    String(date.getMonth() + 1).padStart(2, '0') + '-' +
                    String(date.getDate()).padStart(2, '0');

                // Clean slug from title
                var slug = title
                    .trim()
                    .toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .replace(/^-|-$/g, '');

                $('#slug').val(formattedDate + '-' + slug);
            });

            // Initialize select2
            $('.select2').select2();

            // Initialize select2 with placeholder
            $('#category_id').select2({
            placeholder: "Select Category",
            allowClear: true
            });

            $('#district_id').select2({
            placeholder: "Select District",
            allowClear: true
            });

            $('#division_id').select2({
            placeholder: "Select Division",
            allowClear: true
            });

            $('#upazila_id').select2({
            placeholder: "Select Upazila",
            allowClear: true
            });

            // Function to toggle location section
            function toggleLocationSection() {
                var selectedCategory = $('#category_id').val();
                if (selectedCategory && selectedCategory.includes('1')) {
                    $('#location_section').show();
                } else {
                    $('#location_section').hide();
                    $('#division_id').val(null).trigger('change');
                    $('#district_id').val(null).trigger('change');
                    $('#upazila_id').val(null).trigger('change');
                }
            }

            // Initial check
            toggleLocationSection();

            // Event listener for category selection
            $('#category_id').on('change', function() {
                toggleLocationSection();
            });

            let oldDivision = '{{ $post->division_id }}';
            let oldDistrict = '{{ $post->district_id }}';
            let oldUpazila = '{{ $post->upazila_id }}';

            // Load districts when division is selected
            function loadDistricts(divisionId, url, selectedDistrict = null) {
                $.ajax({
                    url: url +'/' + divisionId,
                    type: 'GET',
                    success: function (data) {
                        $('#district_id').empty().append('<option value="0">Select District</option>');
                        $.each(data, function (key, value) {
                            $('#district_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });

                        if (selectedDistrict) {
                            $('#district_id').val(selectedDistrict).trigger('change');
                        }
                    }
                });
            }

            // Load upazilas when district is selected
            function loadUpazilas(districtId, url, selectedUpazila = null) {
                $.ajax({
                    url: url +'/' + districtId,
                    type: 'GET',
                    success: function (data) {
                        $('#upazila_id').empty().append('<option value="0">Select Upazila</option>');
                        $.each(data, function (key, value) {
                            $('#upazila_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });

                        if (selectedUpazila) {
                            $('#upazila_id').val(selectedUpazila);
                        }
                    }
                });
            }
            // On change: load dependent values
            $('#division_id').on('change', function () {
                let divisionId = $(this).val();
                let url = $(this).data('url');
                loadDistricts(divisionId, url); // no selected district
                $('#upazila_id').empty().append('<option value="0">Select Upazila</option>');
            });

            $('#district_id').on('change', function () {
                let districtId = $(this).val();
                let url = $(this).data('url');
                loadUpazilas(districtId, url);
            });

            // On page load: load districts/upazilas if division exists
            if (oldDivision && oldDivision !== "0") {
                $('#division_id').val(oldDivision);
                var url = $('#division_id').data('url');
                loadDistricts(oldDivision, url, oldDistrict);
            }

            if (oldDistrict && oldDistrict !== "0") {
                // wait until districts are loaded, then fetch upazilas
                setTimeout(() => {
                    var url = $('#district_id').data('url');
                    loadUpazilas(oldDistrict, url, oldUpazila);
                }, 1000);
            }

            // $('#division_id').on('change', function() {
            //     var divisionId = $(this).val();
            //     // console.log(divisionId);
            //     var url = $(this).data('url');
            //     // console.log(url);
            //     // console.log(divisionId);
            //     if (divisionId) {
            //         $.ajax({
            //             url: url +'/' + divisionId,
            //             type: 'GET',
            //             dataType: 'json',
            //             success: function(data) {
            //                 $('#district_id').empty();
            //                 $('#district_id').append('<option value="">Select District</option>');
            //                 $.each(data, function(key, value) {
            //                     $('#district_id').append('<option value="' + value.id + '">' + value.name + '</option>');
            //                 });
            //             }
            //         });
            //     } else {
            //         $('#district_id').empty();
            //         $('#district_id').append('<option value="">Select District</option>');
            //     }
            // });
            // $('#district_id').on('change', function() {
            //     var districtId = $(this).val();
            //     var url = $(this).data('url');
            //     if (districtId) {
            //         $.ajax({
            //             url: url +'/' + districtId,
            //             type: 'GET',
            //             dataType: 'json',
            //             success: function(data) {
            //                 $('#upazila_id').empty();
            //                 $('#upazila_id').append('<option value="">Select Upazila</option>');
            //                 $.each(data, function(key, value) {
            //                     $('#upazila_id').append('<option value="' + value.id + '">' + value.name + '</option>');
            //                 });
            //             }
            //         });
            //     } else {
            //         $('#upazila_id').empty();
            //         $('#upazila_id').append('<option value="">Select Upazila</option>');
            //     }
            // });

            // // On load, prefill if editing
            // let oldDivision = '{{ $post->division_id }}';
            // let oldDistrict = '{{ $post->district_id }}';
            // let oldUpazila = '{{ $post->upazila_id }}';

            // if (oldDivision) {
            //     $('#division_id').val(oldDivision).trigger('change');
            //     setTimeout(function () {
            //         $('#district_id').val(oldDistrict).trigger('change');
            //         setTimeout(function () {
            //             $('#upazila_id').val(oldUpazila);
            //         }, 500);
            //     }, 500);
            // }
        });
</script>


@endsection
