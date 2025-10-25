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
                <h5 class="content-header-title float-left pr-1 mb-0">Setting Section</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        {{-- <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Sliders</a>
                        </li> --}}
                        <li class="breadcrumb-item active">Product Attributes Value Section
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
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <form action="@if ($attributevalue) {{ route('product.attributeValue',$attributevalue->id) }} @else {{ route('product.attributeValue') }} @endif" method="post" enctype="multipart/form-data"> @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Attribute <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <select name="attribute_id" id="" class="form-control">
                                                    <option value="">Select Attribute</option>
                                                    @if ($attributes)
                                                        @foreach ($attributes as $attribute)
                                                            <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Attribute Value <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="name" value="@if ($attributevalue) {{ old('name',$attributevalue->name) }}@endif" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <fieldset>
                                            <h5>Order</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="order" value="@if ($brand) {{ old('order',$brand->order) }}@endif" required>
                                            </div>
                                        </fieldset>
                                    </div> --}}
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Status <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                {{-- <input type="text" class="form-control" aria-describedby="basic-Createon1" name="title" value="@if ($branch) {{ old('title',$branch->title) }}@endif" required> --}}
                                                <select name="status" id="" class="form-control">
                                                    <option @if ($attributevalue)
                                                        @if ($attributevalue->status == 'Active')
                                                            selected
                                                        @endif
                                                    @endif value="Active">Active</option>
                                                    <option @if ($attributevalue)
                                                    @if ($attributevalue->status == 'Inactive')
                                                        selected
                                                    @endif
                                                @endif value="Inctive">Inctive</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    {{-- <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Details</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="details" value="@if ($attribute) {{ old('details',$attribute->details) }}@endif">
                                            </div>
                                        </fieldset>
                                    </div> --}}

                                </div>
                                <div class="col-md-2 mt-2">
                                    <button type="submit" class="btn btn-primary mt-2 btn-lg">@if ($attributevalue)
                                        Update
                                    @else
                                        Create
                                    @endif </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Attribute Value List</h5>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li class="ml-2"><a href="{{ route('product.attributeValue') }}" class="btn btn-primary">+ Create</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            {{-- <th>Logo</th> --}}
                                            <th>Attribute</th>
                                            <th>Value</th>
                                            {{-- <th>Details</th> --}}
                                            {{-- <th>Order</th> --}}
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($attributevalues)
                                            @foreach ($attributevalues as $value)
                                                <tr>
                                                    {{-- <td class="text-bold-600" ><img src="{{ asset('images/brand/'.$brand->logo) }}" alt="" height="150px"></td> --}}
                                                    <td>@if ($value->attribute) <a href="{{ route('product.attribute',$value->attribute->id) }}">{{ $value->attribute->name }}</a> @else N/A @endif</td>
                                                    <td><a href="{{ route('product.attributeValue',$value->id) }}">{{ $value->name }}</a></td>
                                                    {{-- <td>
                                                        {{ $value->details }}
                                                    </td> --}}
                                                    {{-- <td>{{ $value->order }}</td> --}}
                                                    <td>{{ $value->status }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            {{ 'No Data Found' }}
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           {{-- <th>Logo</th> --}}
                                            <th>Name</th>
                                            <th>Details</th>
                                            {{-- <th>Order</th> --}}
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
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
@endsection
