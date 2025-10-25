@extends('backend.layout.main')

@section('title', 'Product List')

@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
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
    <style>
        a label{
            cursor: pointer;
        }
    </style>
@endsection

@section('content')

    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success: </strong>{{ Session::get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @endif
                    <h5 class="content-header-title float-left pr-1 mb-0">Product Table</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Products List
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Product List</h5>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li class="ml-2"><a href="{{ route('product.create') }}" class="btn btn-primary">+ Create</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Image</th>
                                                <th>Category</th>
                                                <th>Brand</th>
                                                <th>Name</th>
                                                <th>Part Number</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($products->count() > 0)

                                                @foreach ($products as $key => $product)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>
                                                            @if ($product->image)
                                                                <img src="{{ asset('images/products/image/' . $product->image) }}" alt="{{ $product->name }}" width="80">
                                                            @else
                                                                <img src="{{ asset('images/products/image/default.png') }}" alt="Default Image" width="50">
                                                            @endif
                                                        <td>{{ $product->category->name ?? '' }}</td>
                                                        <td>{{ $product->brand->name ?? '' }}</td>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->parts_number }}</td>
                                                        <td>{{ $product->unit_price }}</td>
                                                        <td>{{ $product->stock }}</td>
                                                        <td>
                                                            @if ($product->status == 'active')
                                                                <span class="badge badge-success">Active</span>
                                                            @else
                                                                <span class="badge badge-danger">Inactive</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info btn-sm">Edit</a>
                                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                {{ 'No Data Found' }}
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SL</th>
                                                <th>Image</th>
                                                <th>Category</th>
                                                <th>Brand</th>
                                                <th>Name</th>
                                                <th>Part Number</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Action</th>
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
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}"></script>
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
    {{-- <script>

        $(document).ready(function (){
            $(document).on("click", ".updateBikeStatus", function () {
                var status = $(this).children("label").attr("status");
                var product_type = $(this).attr("product_type");

                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    type: "post",
                    url: "{{ route('updateBikeStatus') }}",
                    data: { status: status, product_type: product_type },
                    success: function (resp) {
                        if (resp["status"] == 'inactive') {
                            $("#product_type-" + product_type).html(
                                "<label class='badge badge-danger' status='Inactive'>Inactive</label>"
                            );
                        } else if (resp["status"] == 'active') {
                            $("#product_type-" + product_type).html(
                                "<label class='badge badge-success' status='Active'>Active</label>"
                            );
                        }
                    },
                    error: function () {
                        alert("Error");
                    },
                });
            });
        })

    </script> --}}
@endsection
