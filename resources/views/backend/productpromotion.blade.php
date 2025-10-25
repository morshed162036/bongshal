@extends('backend.layout.main')

@section('css')
       <!-- BEGIN: Vendor CSS-->
       <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
       <link rel="stylesheet" type="text/css"
           href="{{ asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
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
       <link rel="stylesheet" type="text/css"
           href="{{ asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
       <!-- END: Page CSS-->

       <!-- BEGIN: Custom CSS-->
       <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
       <!-- END: Custom CSS-->
       <style>
           a label {
               cursor: pointer;
           }
       </style>
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Promotion Management</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Product Promotions
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">

    {{-- Validation Error Message and Success/Error Messages --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Validation Errors:</strong>
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
    
    <!-- Promotion Create/Edit Form start -->
    <section id="promotion-form-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        {{-- Determine action: store (POST) for new, update (PUT) for existing --}}
                        <form 
                            action="@if (isset($promotion)) {{ route('promotions.update', $promotion->id) }} @else {{ route('promotions.store') }} @endif" 
                            method="post" 
                            enctype="multipart/form-data"> 
                            @csrf
                            
                            {{-- If $promotion exists, use the PUT method for updates --}}
                            @if (isset($promotion))
                                @method('PUT')
                            @endif

                            <div class="card-body">
                                <div class="row">
                                    {{-- Title --}}
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Title <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="bx bx-text"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="title" value="{{ old('title', $promotion->title ?? '') }}" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    
                                    {{-- Short Description --}}
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Short Description (Subtitle)</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="bx bx-file-blank"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="description_short" value="{{ old('description_short', $promotion->description_short ?? '') }}">
                                            </div>
                                        </fieldset>
                                    </div>

                                    {{-- URL (Target Link) --}}
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>URL (Target Link)</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="bx bx-link"></i></span>
                                                </div>
                                                <input type="url" class="form-control" name="url" value="{{ old('url', $promotion->url ?? '') }}">
                                            </div>
                                        </fieldset>
                                    </div>

                                    {{-- Promotion Label (e.g., NEW, 50% OFF) --}}
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Promotion Label (e.g., NEW)</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="bx bx-tag"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="label" value="{{ old('label', $promotion->label ?? '') }}" placeholder="Optional banner text">
                                            </div>
                                        </fieldset>
                                    </div>

                                    {{-- Status --}}
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Status <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="bx bx-power-off"></i></span>
                                                </div>
                                                <select name="status" class="form-control" required>
                                                    {{-- Assuming constants are available in a Model or are simply 'Active'/'Inactive' --}}
                                                    <option value="active" 
                                                        @if (isset($promotion) && $promotion->status == 'active') selected @endif
                                                        @if (!isset($promotion) && old('status') == 'active') selected @endif>
                                                        Active
                                                    </option>
                                                    <option value="inactive" 
                                                        @if (isset($promotion) && $promotion->status == 'inactive') selected @endif
                                                        @if (!isset($promotion) && old('status') == 'inactive') selected @endif>
                                                        Inactive
                                                    </option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    
                                    {{-- Image --}}
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Image <span class="star">@if (!isset($promotion)) * @endif</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="bx bx-image"></i></span>
                                                </div>
                                                <input type="file" class="form-control" name="image" onchange="loadBg(event)" @if (!isset($promotion)) required @endif>
                                            </div>
                                        </fieldset>
                                        {{-- Image Preview/Current Image --}}
                                        @if (isset($promotion) && $promotion->image)
                                            <img src="{{ asset('images/promotions/'.$promotion->image) }}" id="bg" alt="Current Promotion Image" width="200px" height="200px" class="mt-2 mx-1 rounded shadow">
                                            <input type="hidden" name="current_image" value="{{ $promotion->image }}">
                                        @endif
                                        {{-- Placeholder for new image preview script --}}
                                        <img id="bg_preview" src="" alt="New Image Preview" width="200px" height="200px" class="mt-2 mx-1 rounded shadow" style="display: none;">
                                    </div>

                                    {{-- JavaScript for image preview (placed inline for single file mandate) --}}
                                    <script>
                                        function loadBg(event) {
                                            const preview = document.getElementById('bg_preview');
                                            const currentImg = document.getElementById('bg');
                                            if (event.target.files && event.target.files[0]) {
                                                preview.src = URL.createObjectURL(event.target.files[0]);
                                                preview.style.display = 'block';
                                                if (currentImg) {
                                                    currentImg.style.display = 'none'; // Hide current image if new one is selected
                                                }
                                            } else {
                                                preview.style.display = 'none';
                                                if (currentImg) {
                                                    currentImg.style.display = 'block';
                                                }
                                            }
                                        }
                                    </script>
                                </div>
                                
                                {{-- Submit Button --}}
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        @if (isset($promotion))
                                            <i class="bx bx-check-circle"></i> Update Promotion
                                        @else
                                            <i class="bx bx-plus-circle"></i> Create Promotion
                                        @endif
                                    </button>
                                    {{-- Show Cancel button on edit page --}}
                                    @if (isset($promotion))
                                        <a href="{{ route('promotions.index') }}" class="btn btn-light-secondary btn-lg ml-2">
                                            <i class="bx bx-x"></i> Cancel Edit
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Promotion List Table start -->
    <section id="promotion-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Promotions</h5>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li class="ml-2"><a href="{{ route('promotions.create') }}" class="btn btn-success">+ Create New Promotion</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Label</th>
                                            <th>URL</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($promotions) && $promotions->isNotEmpty())
                                            @foreach ($promotions as $promotion)
                                                <tr>
                                                    <td>{{ $promotion->id }}</td>
                                                    <td class="text-bold-600">
                                                        @if($promotion->image)
                                                            <img src="{{ asset('images/promotions/'.$promotion->image) }}" alt="{{ $promotion->title }}" height="80px" class="rounded">
                                                        @else
                                                            <span class="text-muted">No Image</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{-- Link to edit the promotion --}}
                                                        <a href="{{ route('promotions.edit', $promotion->id) }}" class="text-primary font-weight-bold">{{ $promotion->title }}</a>
                                                        <small class="d-block text-muted">{{ Str::limit($promotion->description_short, 50) }}</small>
                                                    </td>
                                                    <td><span class="badge badge-info">{{ $promotion->label ?? 'N/A' }}</span></td>
                                                    <td>{{ Str::limit($promotion->url, 30) }}</td>
                                                    <td>
                                                        @if ($promotion->status == 'active')
                                                            <span class="badge badge-light-success">Active</span>
                                                        @else
                                                            <span class="badge badge-light-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{-- Edit Button --}}
                                                        <a href="{{ route('promotions.edit', $promotion->id) }}" class="btn btn-sm btn-icon btn-light-primary" title="Edit">
                                                            <i class="bx bx-edit"></i>
                                                        </a>

                                                        {{-- Delete Button (using a form) --}}
                                                        <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Confirm deletion of {{ $promotion->title }}?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-icon btn-light-danger" title="Delete">
                                                                <i class="bx bx-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7" class="text-center text-muted">No Product Promotions have been added yet.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promotion List Table end -->

</div>

@endsection

@section('js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin_template/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/footer.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin_template/app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <!-- END: Page JS-->
    <script>
        var loadBg = function(event) {
            var output = document.getElementById('bg');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.height =  '400';
        }
    </script>
    {{-- <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script> --}}
@endsection
