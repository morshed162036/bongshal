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
                        <li class="breadcrumb-item active">Company Section
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
                        <form action="@if ($brand) {{ route('company',$brand->id) }} @else {{ route('company') }} @endif" method="post" enctype="multipart/form-data"> @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Company Name <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="name" value="@if ($brand) {{ old('name',$brand->name) }}@endif" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Order</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="order" value="@if ($brand) {{ old('order',$brand->order) }}@endif" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Status <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                {{-- <input type="text" class="form-control" aria-describedby="basic-Createon1" name="title" value="@if ($branch) {{ old('title',$branch->title) }}@endif" required> --}}
                                                <select name="status" id="" class="form-control">
                                                    <option @if ($brand)
                                                        @if ($brand->status == 'active')
                                                            selected
                                                        @endif
                                                    @endif value="active">Active</option>
                                                    <option @if ($brand)
                                                    @if ($brand->status == 'inactive')
                                                        selected
                                                    @endif
                                                @endif value="inctive">Inctive</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Details</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="details" value="@if ($brand) {{ old('details',$brand->details) }}@endif">
                                            </div>
                                        </fieldset>
                                    </div>
                                    {{-- <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Email <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="email" value="@if ($branch) {{ old('email',$branch->email) }}@endif" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Telephone <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="tnt" value="@if ($branch) {{ old('tnt',$branch->tnt) }}@endif">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Mobile <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="mobile" value="@if ($branch) {{ old('mobile',$branch->mobile) }}@endif" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Website Url <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="url" value="@if ($branch) {{ old('url',$branch->url) }}@endif" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Google Map Location <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="map" value="@if ($branch) {{ old('map',$branch->map) }}@endif" required>
                                            </div>
                                        </fieldset>
                                    </div> --}}
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Logo <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="image" onchange="loadBg(event)">
                                            </div>
                                        </fieldset>
                                        @if ($brand)
                                            @if($brand->logo != null)
                                                <img src="{{ asset('images/company/'.$brand->logo) }}" id="bg" alt="bg" width="200px" height="200px" class="mt-2 mx-1">
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-md-12">
                                        <fieldset class="mt-2">
                                            <h5>Content <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <textarea name="content"  class="form-control" id="content" cols="30" rows="10" required> @if ($branch)
                                                    {{ old('content',$branch->content) }}
                                                @endif</textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div> --}}
                                <div class="col-md-2 mt-2">
                                    <button type="submit" class="btn btn-primary mt-2 btn-lg">@if ($brand)
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
                        <h5 class="card-title">Company List</h5>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li class="ml-2"><a href="{{ route('company') }}" class="btn btn-primary">+ Create</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Details</th>
                                            <th>Order</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($brands)
                                            @foreach ($brands as $brand)
                                                <tr>
                                                    <td class="text-bold-600" ><img src="{{ asset('images/company/'.$brand->logo) }}" alt="" height="150px"></td>
                                                    <td><a href="{{ route('company',$brand->id) }}">{{ $brand->name }}</a></td>
                                                    {{-- <td><span>Email: </span>{{ $brand->email }} <br> <span>Telephone: </span>{{ $brand->tnt }} <br>
                                                    <span>Mobile: </span>{{ $brand->mobile }} <br>
                                                <span>Address: </span>{{ $brand->address }}</td> --}}
                                                    <td>
                                                        {{-- <iframe src="{{ $brand->map }}" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                                        {{ $brand->details }}
                                                    </td>
                                                    <td>{{ $brand->order }}</td>
                                                    <td>{{ $brand->status }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            {{ 'No Data Found' }}
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           <th>Logo</th>
                                            <th>Name</th>
                                            <th>Details</th>
                                            <th>Order</th>
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
