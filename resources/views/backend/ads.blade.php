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
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="bx bx-home-alt"></i></a>
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
                        {{-- Form for creating or updating a Multiple Ad --}}
                        <form
                            action="@if (isset($multipleAd)) {{ route('ads.update', $multipleAd->id) }} @else {{ route('ads.store') }} @endif"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if (isset($multipleAd))
                            @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="row">

                                    {{-- Ad Position Type Selector --}}
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Ad Position Type <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="bx bx-map-pin"></i></span>
                                                </div>
                                                <select name="type" class="form-control" required>
                                                    @php
                                                    $current_type = old('type', $multipleAd->type ??
                                                    'single_main_banner');
                                                    @endphp
                                                    <option value="single_main_banner"
                                                        {{ $current_type == 'single_main_banner' ? 'selected' : '' }}>
                                                        Single Main Banner
                                                    </option>
                                                    <option value="single_side_banner"
                                                        {{ $current_type == 'single_side_banner' ? 'selected' : '' }}>
                                                        Single Side Banner
                                                    </option>
                                                    <option value="double_banner"
                                                        {{ $current_type == 'double_banner' ? 'selected' : '' }}>
                                                        Double Banner
                                                    </option>
                                                    <option value="triple_banner"
                                                        {{ $current_type == 'triple_banner' ? 'selected' : '' }}>
                                                        Triple Banner
                                                    </option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>

                                    {{-- Target Link (URL) --}}
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Target Link (URL)</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="bx bx-link"></i></span>
                                                </div>
                                                <input type="url" class="form-control" name="url"
                                                    value="{{ old('url', $multipleAd->url ?? '') }}"
                                                    placeholder="e.g., https://example.com/target-page">
                                            </div>
                                        </fieldset>
                                    </div>

                                    {{-- Title Field --}}
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Title (Optional)</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="bx bx-text"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="title"
                                                    value="{{ old('title', $multipleAd->title ?? '') }}"
                                                    placeholder="e.g., Summer Sale">
                                            </div>
                                        </fieldset>
                                    </div>
                                    {{-- Subtitle Field --}}
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Subtitle (Optional)</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="bx bx-align-left"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="subtitle"
                                                    value="{{ old('subtitle', $multipleAd->subtitle ?? '') }}"
                                                    placeholder="e.g., Up to 50% Off">
                                            </div>
                                        </fieldset>
                                    </div>
                                    {{-- Image Fields (up to 3) --}}
                                    @for ($i = 1; $i <= 3; $i++) @php $imageFieldName="image_$i" ;
                                        $currentImage=$multipleAd->$imageFieldName ?? null;
                                        @endphp
                                        <div class="col-md-4 mt-3">
                                            <fieldset>
                                                <h5>Image {{ $i }} File</h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="bx bx-image"></i></span>
                                                    </div>
                                                    <input type="file" class="form-control" name="{{ $imageFieldName }}"
                                                        id="{{ $imageFieldName }}_input"
                                                        onchange="loadMultipleBg(event, '{{ $imageFieldName }}')">
                                                </div>
                                            </fieldset>

                                            @if (isset($multipleAd) && $currentImage)
                                            <img src="{{ asset($currentImage) }}" id="{{ $imageFieldName }}_current"
                                                alt="Current Ad Image" width="100px" height="100px"
                                                class="mt-2 mx-1 rounded shadow">
                                            <input type="hidden" name="current_{{ $imageFieldName }}"
                                                value="{{ $currentImage }}">
                                            @endif
                                            <img id="{{ $imageFieldName }}_preview" src=""
                                                alt="New Image {{ $i }} Preview" width="100px" height="100px"
                                                class="mt-2 mx-1 rounded shadow" style="display: none;">
                                        </div>
                                        @endfo
                                        <div class="col-md-6 mt-3">
                                            <fieldset>
                                                <h5>Status <span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="bx bx-power-off"></i></span>
                                                    </div>
                                                    <select name="status" class="form-control" required>
                                                        @php
                                                        $current_status = old('status', $multipleAd->status ??
                                                        'inactive');
                                                        @endphp
                                                        <option value="active"
                                                            {{ $current_status == 'active' ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option value="inactive"
                                                            {{ $current_status == 'inactive' ? 'selected' : '' }}>
                                                            Inactive
                                                        </option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <script>
                                            window.loadMultipleBg = function (event, fieldName) {
                                                const preview = document.getElementById(fieldName + '_preview');
                                                const currentImg = document.getElementById(fieldName + '_current');

                                                if (event.target.files && event.target.files[0]) {
                                                    preview.src = URL.createObjectURL(event.target.files[0]);
                                                    preview.style.display = 'block';
                                                    if (currentImg) {
                                                        currentImg.style.display = 'none';
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
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        @if (isset($multipleAd))
                                        <i class="bx bx-check-circle"></i> Update Multiple Ad
                                        @else
                                        <i class="bx bx-plus-circle"></i> Create Multiple Ad
                                        @endif
                                    </button>
                                    {{-- Show Cancel button on edit page --}}
                                    @if (isset($multipleAd))
                                    <a href="{{ route('ads.index') }}" class="btn btn-light-secondary btn-lg ml-2">
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

    ---

    <section id="ad-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Multiple Ads Management</h5>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li class="ml-2"><a href="{{ route('ads.create') }}" class="btn btn-success">+ Create
                                        New Multiple Ad</a></li>
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
                                            <th>Position Type</th>
                                            <th>Title/Subtitle</th>
                                            <th>Content (Images)</th>
                                            <th>Target URL</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($multipleAds) && $multipleAds->isNotEmpty())
                                        @foreach ($multipleAds as $ad)
                                        <tr>
                                            <td>{{ $ad->id }}</td>
                                            <td>
                                                <span class="badge badge-primary">
                                                    {{ str_replace(['_', 'banner'], [' ', ''], ucfirst($ad->type)) }}
                                                </span>
                                            </td>
                                            <td class="text-bold-600">
                                                <p class="m-0">{{ $ad->title ?? 'N/A' }}</p>
                                                <small class="text-muted">{{ $ad->subtitle ?? '' }}</small>
                                            </td>
                                            <td>
                                                @if ($ad->image_1)
                                                <img src="{{ asset($ad->image_1) }}" alt="Ad 1" height="50px"
                                                    class="rounded mr-1">
                                                @endif
                                                @if ($ad->image_2)
                                                <img src="{{ asset($ad->image_2) }}" alt="Ad 2" height="50px"
                                                    class="rounded mr-1">
                                                @endif
                                                @if ($ad->image_3)
                                                <img src="{{ asset($ad->image_3) }}" alt="Ad 3" height="50px"
                                                    class="rounded">
                                                @endif
                                                @if (!$ad->image_1 && !$ad->image_2 && !$ad->image_3)
                                                <span class="text-muted">No Images</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ $ad->url }}" target="_blank"
                                                    class="text-primary">{{ Str::limit($ad->url, 25) }}</a>
                                            </td>
                                            <td>
                                                @if ($ad->status == 'active')
                                                <span class="badge badge-light-success">Active</span>
                                                @else
                                                <span class="badge badge-light-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{-- Edit Button --}}
                                                <a href="{{ route('ads.edit', $ad->id) }}"
                                                    class="btn btn-sm btn-icon btn-light-primary" title="Edit">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                                <form action="{{ route('ads.destroy', $ad->id) }}" method="POST"
                                                    style="display:inline;"
                                                    onsubmit="return confirm('Confirm deletion of Ad ID {{ $ad->id }}?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-icon btn-light-danger"
                                                        title="Delete">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">No Multiple Ads have been
                                                added yet.</td>
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
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}">
    </script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}">
    </script>
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
        var loadBg = function (event) {
            var output = document.getElementById('bg');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.height = '400';
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
