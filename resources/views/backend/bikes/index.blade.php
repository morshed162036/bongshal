@extends('backend.layout.main')

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
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
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
                    <h5 class="content-header-title float-left pr-1 mb-0">Bike Table</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Bikes
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
                            <h5 class="card-title">Bikes List</h5>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li class="ml-2"><a href="{{ route('bike.create') }}" class="btn btn-primary">+ Create</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Model</th>
                                                <th>Company</th>
                                                <th>Front Tire</th>
                                                <th>Rear Tire</th>
                                                <th>Battery Size</th>
                                                <th>Color</th>
                                                <th>Grade</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($bikes->count() > 0)

                                                @foreach ($bikes as $bike)
                                                    <tr>
                                                        <td>{{ $bike->model }}</td>
                                                        <td>@if ($bike->company)
                                                            {{ $bike->company->name }}
                                                        @endif</td>
                                                        <td>{{ $bike->front_tire_width }}/{{ $bike->front_tire_aspectratio }}-{{ $bike->front_tire_rim }}</td>
                                                        <td>{{ $bike->rear_tire_width }}/{{ $bike->front_tire_aspectratio }}-{{ $bike->front_tire_rim }}</td>
                                                        <td>{{ $bike->battery }}</td>
                                                        <td>
                                                            {{-- @foreach ($bike->color as $color)
                                                            <img src="{{ asset('images/multiimage/bike/'.$color->image) }}" alt="" height="100px">
                                                                {{ $color->color_name }},<br>
                                                            @endforeach --}}
                                                            <button type="button" class="btn btn-sm btn-outline-primary"
            data-bs-toggle="modal" data-bs-target="#colorsModal{{ $bike->id }}">
        View Colors ({{ $bike->color->count() }})
    </button>

    <!-- Modal -->
    <div class="modal fade" id="colorsModal{{ $bike->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content p-3 position-relative">

            <!-- Close Button -->
            <button type="button"
                    class="btn-close position-absolute"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    style="top:10px; right:15px;">
            </button>

            <h6 class="mb-3 mt-2 text-center">Available Colors</h6>

            <div class="container-fluid">
                @foreach ($bike->color->chunk(4) as $colorChunk)
                    <div class="row mb-3">
                        @foreach ($colorChunk as $color)
                            <div class="col-md-3 col-sm-4 col-6 text-center">
                                <img src="{{ asset('images/multiimage/bike/'.$color->image) }}"
                                     alt="{{ $color->color_name }}"
                                     class="img-fluid"
                                     style="border-radius:6px; height:100px; object-fit:cover;">
                                <div class="mt-1">{{ $color->color_name }}</div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>


                                                        </td>
                                                        <td>
                                                            @foreach ($bike->grade as $grade)
                                                                {{ $grade->grade }} :
                                                                {{ $grade->volume }}, <br>
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @if($bike->status == 'active')
                                                                <a class="updateBikeStatus" id="product_type-{{ $bike->id }}"
                                                                    product_type = "{{ $bike->id }}"
                                                                    href="javascript:void(0)">
                                                                        <label class="badge badge-success" status="active">Active</label>
                                                                </a>
                                                            @else
                                                                <a class="updateBikeStatus" id="product_type-{{ $bike->id }}"
                                                                    product_type = "{{ $bike->id }}"
                                                                    href="javascript:void(0)">
                                                                        <label class="badge badge-danger" status="inactive">Inactive</label>
                                                                </a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="{{ route('bike.edit',$bike->id) }}"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    {{-- <form action="{{ route('bike.destroy',$bike->id) }}" method="post"> @csrf @method('Delete')
                                                                        <button type="submit" class="dropdown-item"><i class="bx bx-trash mr-1"></i> delete</button>
                                                                    </form> --}}

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                {{ 'No Data Found' }}
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Model</th>
                                                <th>Company</th>
                                                <th>Front Tire</th>
                                                <th>Rear Tire</th>
                                                <th>Battery</th>
                                                <th>Color</th>
                                                <th>Grade</th>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>

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

    </script>
@endsection

