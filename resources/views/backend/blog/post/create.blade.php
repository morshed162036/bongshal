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
    <!-- In your layout or view -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add this if jQuery is missing -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}


    <!-- END: Custom CSS-->
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">


    {{-- <style>
        .ck-editor__editable_inline{
            height: 450px;
        }
    </style> --}}
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Blogs Secton</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog List</a>
                        </li>
                        <li class="breadcrumb-item active">Add Blog
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
                        <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data"> @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Title <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="title" id="title" value="{{ old('title') }}" required>
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
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="slug" id="slug" value="{{ old('slug') }}" required>
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
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="sub_title" value="{{ old('sub_title') }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Category <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <select name="category_id" class="form-control select2" id="category_id" required>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Blog Views Counter Start</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="views" value="{{ old('views') }}">
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
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="meta_title" value="{{ old('meta_title') }}">
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
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="meta_keywords" value="{{ old('meta_keywords') }}">
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
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="meta_description" value="{{ old('meta_description') }}">
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
                                        {{-- @if ($camp)
                                            @if($camp->image != null)
                                                <img src="{{ asset('images/camps/'.$camp->image) }}" id="bg" alt="bg" width="200px" height="200px" class="mt-2 mx-1">
                                            @endif
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Photo Caption</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="photo_caption" value="{{ old('photo_caption') }}">
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
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="short_description" value="{{ old('short_description') }}">
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
                                                <textarea name="description"  class="form-control" id="content" rows="10">{{ old('description','') }}
                                                </textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <button type="submit" class="btn btn-primary mt-2 btn-lg">Create</button>
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
            output.height =  '400';
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
   {{-- <script>
    $(document).ready(function () {
        $('#title').focus();

        $('#title').on('keyup', function () {
            var title = $(this).val();

            // Generate current date in YYYY-MM-DD format
            var date = new Date().toISOString().slice(0, 10);

            // Create slug: remove non-alphanumerics, convert spaces to hyphens, lowercase
            var slug = title
                .trim()
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')     // Remove special characters
                .replace(/\s+/g, '-')             // Replace spaces with -
                .replace(/-+/g, '-')              // Replace multiple dashes with one
                .replace(/^-|-$/g, '');           // Remove leading/trailing -

            $('#slug').val(date + '-' + slug);
        });
    });
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
                // $('#slug').val( slug);
            });

        });
</script>


@endsection
