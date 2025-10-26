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
    
    <section id="ad-form-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <form 
                        action="@if (isset($ad)) {{ route('ading.update', $ad->id) }} @else {{ route('ading.store') }} @endif" 
                        method="post" 
                        enctype="multipart/form-data"> 
                        @csrf
                        @if (isset($ad))
                            @method('PUT')
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <h5>Ad Type <span class="star">*</span></h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="bx bx-select-multiple"></i></span>
                                            </div>
                                            <select name="type" id="ad_type_selector" class="form-control" required>
                                                <option value="image" 
                                                    @if (old('type') == 'image' || (isset($ad) && $ad->type == 'image')) selected @endif>
                                                    Image Ad
                                                </option>
                                                <option value="video" 
                                                    @if (old('type') == 'video' || (isset($ad) && $ad->type == 'video')) selected @endif>
                                                    Video Ad (URL)
                                                </option>
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <h5>Target Link (URL)</h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="bx bx-link"></i></span>
                                            </div>
                                            <input type="url" class="form-control" name="link" value="{{ old('link', $ad->link ?? '') }}" placeholder="e.g., https://example.com/product">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 mt-2" id="image_inputs" style="{{ old('type') == 'video' || (isset($ad) && $ad->type == 'video') ? 'display: none;' : '' }}">
                                    <fieldset>
                                        <h5>Image File <span class="star">@if (!isset($ad) || (isset($ad) && $ad->type == 'image' && !$ad->image)) * @endif</span></h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="bx bx-image"></i></span>
                                            </div>
                                            <input type="file" class="form-control" name="image_file" onchange="loadBg(event)">
                                        </div>
                                    </fieldset>
                                    @if (isset($ad) && $ad->type == 'image' && $ad->image)
                                        <img src="{{ asset($ad->image) }}" id="bg_current" alt="Current Ad Image" width="200px" height="200px" class="mt-2 mx-1 rounded shadow">
                                        <input type="hidden" name="current_image" value="{{ $ad->image }}">
                                    @endif
                                    <img id="bg_preview" src="" alt="New Image Preview" width="200px" height="200px" class="mt-2 mx-1 rounded shadow" style="display: none;">
                                </div>
                                <div class="col-md-6 mt-2" id="video_inputs" style="{{ old('type') == 'image' || (isset($ad) && $ad->type == 'image') || !isset($ad) ? 'display: none;' : '' }}">
                                    <fieldset>
                                        <h5>Video URL <span class="star">@if (!isset($ad) || (isset($ad) && $ad->type == 'video')) * @endif</span></h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="bx bxl-youtube"></i></span>
                                            </div>
                                            <input type="url" class="form-control" name="video_url" value="{{ old('video_url', $ad->video_url ?? '') }}" placeholder="e.g., https://www.youtube.com/watch?v=...">
                                        </div>
                                    </fieldset>
                                </div>
                                
                                <div class="col-md-6 mt-2">
                                    <fieldset>
                                        <h5>Status <span class="star">*</span></h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="bx bx-power-off"></i></span>
                                            </div>
                                            <select name="status" class="form-control" required>
                                                @php
                                                    $current_status = old('status', $ad->status ?? 'Active');
                                                @endphp
                                                <option value="Active" {{ $current_status == 'Active' ? 'selected' : '' }}>
                                                    Active
                                                </option>
                                                <option value="Inactive" {{ $current_status == 'Inactive' ? 'selected' : '' }}>
                                                    Inactive
                                                </option>
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const typeSelector = document.getElementById('ad_type_selector');
                                        const imageInputs = document.getElementById('image_inputs');
                                        const videoInputs = document.getElementById('video_inputs');
                                        const preview = document.getElementById('bg_preview');
                                        const currentImg = document.getElementById('bg_current');

                                        function toggleAdInputs() {
                                            if (typeSelector.value === 'image') {
                                                imageInputs.style.display = 'block';
                                                videoInputs.style.display = 'none';
                                            } else if (typeSelector.value === 'video') {
                                                imageInputs.style.display = 'none';
                                                videoInputs.style.display = 'block';
                                            }
                                        }

                                        typeSelector.addEventListener('change', toggleAdInputs);
                                        toggleAdInputs();

                                        window.loadBg = function(event) {
                                            if (event.target.files && event.target.files[0]) {
                                                preview.src = URL.createObjectURL(event.target.files[0]);
                                                preview.style.display = 'block';
                                                if (currentImg) { currentImg.style.display = 'none'; }
                                            } else {
                                                preview.style.display = 'none';
                                                if (currentImg) { currentImg.style.display = 'block'; }
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            
                            {{-- Submit Button --}}
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    @if (isset($ad))
                                        <i class="bx bx-check-circle"></i> Update Ad
                                    @else
                                        <i class="bx bx-plus-circle"></i> Create Ad
                                    @endif
                                </button>
                                {{-- Show Cancel button on edit page --}}
                                @if (isset($ad))
                                    <a href="{{ route('ading.index') }}" class="btn btn-light-secondary btn-lg ml-2">
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
    
    <!-- ading List Table start -->
    <section id="ad-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">All Ads Management</h5>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li class="ml-2"><a href="{{ route('ading.create') }}" class="btn btn-success">+ Create New Ad</a></li>
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
                                        <th>Type</th>                
                                        <th>Content</th>             
                                        <th>Target Link</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Change $promotions to $ads --}}
                                    @if (isset($ads) && $ads->isNotEmpty())
                                        @foreach ($ads as $ad)
                                            <tr>
                                                <td>{{ $ad->id }}</td>
                                                <td>
                                                    <span class="badge {{ $ad->type == 'video' ? 'badge-danger' : 'badge-primary' }}">
                                                        {{ ucfirst($ad->type) }}
                                                    </span>
                                                </td>
                                                <td class="text-bold-600">
                                                    @if ($ad->type === 'image' && $ad->image)
                                                        <img src="{{ asset($ad->image) }}" alt="Ad Image" height="80px" class="rounded">
                                                    @elseif ($ad->type === 'video' && $ad->video_url)
                                                        <a href="{{ $ad->video_url }}" target="_blank" class="text-info">
                                                            <i class="bx bxl-youtube"></i> Video Link
                                                        </a>
                                                    @else
                                                        <span class="text-muted">No Content</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ $ad->link }}" target="_blank" class="text-primary">{{ Str::limit($ad->link, 30) }}</a>
                                                </td>
                                                <td>
                                                    @if ($ad->status == 'Active')
                                                        <span class="badge badge-light-success">Active</span>
                                                    @else
                                                        <span class="badge badge-light-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{-- Edit Button --}}
                                                    <a href="{{ route('ading.edit', $ad->id) }}" class="btn btn-sm btn-icon btn-light-primary" title="Edit">
                                                        <i class="bx bx-edit"></i>
                                                    </a>
                                                    <form action="{{ route('ading.destroy', $ad->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Confirm deletion of Ad ID {{ $ad->id }}?');">
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
                                            <td colspan="6" class="text-center text-muted">No Ads have been added yet.</td>
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
