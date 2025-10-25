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
                    @if(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error: </strong>{{ Session::get('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @endif
                    <h5 class="content-header-title float-left pr-1 mb-0">Blog Table</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Blogs
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
                            <h5 class="card-title">Blog List</h5>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    {{-- <li class="ml-2"><a href="{{ route('leadImport') }}" class="btn btn-success">Import</a></li> --}}
                                    <li class="ml-2"><a href="{{ route('blog.create') }}" class="btn btn-primary">+ Add Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>SI</th>
                                                <th>Category</th>
                                                <th>Title</th>
                                                <th>Thumbnail</th>
                                                <th>Date</th>
                                                <th>Views</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($posts->count() > 0)
                                                @foreach ($posts as $key=>$post)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>
                                                            @if ($post->category)
                                                                @foreach ($post->category as $category)
                                                                    {{ $category->title }}
                                                                @endforeach
                                                            @else
                                                                N/A
                                                            @endif
                                                        </td>
                                                        <td>{{ $post->title }}</td>
                                                        <td>@if ($post->image)
                                                            <img src="{{ asset('images/Blog/'.$post->image) }}" alt="Thumbnail" style="width: 100px; height: 50px;">
                                                        @endif</td>
                                                        <td>{{ $post->created_at->format('d-m-y') }}</td>
                                                        <td>{{ $post->views }}</td>
                                                        <td>
                                                            @if($post->status == 'Active')
                                                                <a class="updateBlogStatus" id="blog-{{ $post->id }}"
                                                                    post_id = "{{ $post->id }}"
                                                                    href="javascript:void(0)">
                                                                        <label class="badge badge-success" status="Active">Active</label>
                                                                </a>
                                                            @else
                                                                <a class="updateBlogStatus" id="blog-{{ $post->id }}"
                                                                    blog_id = "{{ $post->id }}"
                                                                    href="javascript:void(0)">
                                                                        <label class="badge badge-danger" status="Inactive">Inactive</label>
                                                                </a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="{{ route('blog.edit',$post->id) }}"><i class="bx bx-edit-alt mr-1"></i> Edit</a>
                                                                    {{-- <a class="dropdown-item" href="{{ route('lead.show',$lead->id) }}"><i class="bx bx-edit-alt mr-1"></i> remarks</a> --}}
                                                                    <form action="{{ route('blog.destroy',$post->id) }}" method="post"> @csrf @method('Delete')
                                                                        <button type="submit" class="dropdown-item"><i class="bx bx-trash mr-1"></i> Delete</button>
                                                                    </form>
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
                                                <th>SI</th>
                                                <th>Category</th>
                                                <th>Title</th>
                                                <th>Thumbnail</th>
                                                <th>Date</th>
                                                <th>Views</th>
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
    <script>

        $(document).ready(function (){
            $(document).on("click", ".updateBlogStatus", function () {
                var status = $(this).children("label").attr("status");
                var post_id = $(this).attr("blog_id");

                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    type: "post",
                    url: "{{ route('updateBlogStatus') }}",
                    data: { status: status, blog_id: post_id },
                    success: function (resp) {
                        if (resp["status"] == 'Inactive') {
                            $("#blog-" + post_id).html(
                                "<label class='badge badge-danger' status='Inactive'>Inactive</label>"
                            );
                        } else if (resp["status"] == 'Active') {
                            $("#blog-" + post_id).html(
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

