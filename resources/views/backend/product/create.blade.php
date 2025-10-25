@extends('backend.layout.main')

@section('title', 'Create Product')

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
          {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
         <!-- include summernote css/js -->
       <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
       <style>
           a label {
               cursor: pointer;
           }
       </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Product</h3>
                        <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Product Information</h3>
                        <hr>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Product Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> --}}
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="slug">Slug <span class="text-danger">*</span></label>
                                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug" value="{{ old('slug') }}" required>
                                        @error('slug')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Category <span class="text-danger">*</span></label>
                                        <select name="category_id" id="category_id" class="form-control" required>
                                            <option value="">Select Category</option>
                                            {{-- @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach --}}
                                             @foreach ($catalogues as $catalogue)
                                                <optgroup label="{{ $catalogue['name'] }}"></optgroup>
                                                @foreach ($catalogue['category'] as $category)
                                                    <option value="{{ $category['id'] }} {{ old('category_id') == $category->id ? 'selected' : '' }}">&nbsp;&nbsp;&nbsp;--&nbsp;{{ $category['name'] }}</option>
                                                    @foreach ($category['subcategories'] as $subcategories)
                                                        <option value="{{ $subcategories['id'] }} {{ old('category_id') == $subcategories['id'] ? 'selected' : '' }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;{{ $subcategories['name'] }}</option>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand_id">Brand</label>
                                        <select name="brand_id" id="brand_id" class="form-control">
                                            <option value="">Select Brand</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bike_id">Fitment Model <span class="text-danger">*</span></label>
                                        <select name="bike_id" id="bike_id" class="form-control" required>
                                            <option value="">Select Model</option>
                                            @foreach($bikes as $bike)
                                                <option value="{{ $bike->id }}">{{ $bike->model }} ({{ $bike->company->name }})</option>
                                            @endforeach
                                        </select>
                                        @error('bike_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="series">Model / Series</label>
                                        <input type="text" name="series" class="form-control" id="series" placeholder="(e.g. G-TX Series etc)" value="{{ old('series') }}">
                                        @error('series')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="traditional_name">Traditional Name <span class="text-danger">*</span></label>
                                        <input type="text" name="traditional_name" class="form-control" id="traditional_name" placeholder="(e.g. Rear Suspension etc)" value="{{ old('traditional_name') }}" required>
                                        @error('traditional_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="commercial_name">Commercial Name <span class="text-danger">*</span></label>
                                        <input type="text" name="commercial_name" class="form-control" id="commercial_name" placeholder="(e.g. CUSHION ASSY, REAR etc)" value="{{ old('commercial_name') }}" required>
                                        @error('commercial_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="part_number">Part Number <span class="text-danger">*</span></label>
                                        <input type="text" name="part_number" class="form-control" id="part_number" placeholder="(e.g. 123-322-1212)" value="{{ old('part_number') }}">
                                        @error('part_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="unit">Unit <span class="text-danger">*</span></label>
                                        <input type="text" name="unit" class="form-control" id="unit" placeholder="Enter Unit (e.g. KG, Pc etc)" value="{{ old('unit') }}" required>
                                        @error('unit')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="unit_price">Unit Price <span class="text-danger">*</span></label>
                                        <input type="number" name="unit_price" class="form-control" id="unit_price" placeholder="Enter Unit Price" value="{{ old('unit_price') }}" required>
                                        @error('unit_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">

                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="unit">Unit <span class="text-danger">*</span></label>
                                        <input type="text" name="unit" class="form-control" id="unit" placeholder="Enter Unit" value="{{ old('unit') }}" required>
                                        @error('unit')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="barcode">Barcode</label>
                                        <input type="text" name="barcode" class="form-control" id="barcode" placeholder="Enter barcode" value="{{ old('barcode') }}">
                                        @error('barcode')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="min_purchase_qty">Minimum Purchase Quantity</label>
                                        <input type="number" name="min_purchase_qty" class="form-control" id="min_purchase_qty" placeholder="Enter Minimum Purchase Quantity" value="{{ old('min_purchase_qty') }}">
                                        @error('min_purchase_qty')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product Gallery</h3>
                        <hr>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Product Image <span class="text-danger">*</span></label>
                                        <input type="file" name="image" class="form-control" id="image" required>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="multi_image">Product Multi Image</label>
                                        <input type="file" name="multi_image[]" class="form-control" id="multi_image" multiple>
                                        @error('multi_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="size_chart">Size Chart</label>
                                        <input type="file" name="size_chart" class="form-control" id="size_chart">
                                        @error('size_chart')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="youtube_video">Youtube Video</label>
                                        <input type="text" name="youtube_video" class="form-control" id="youtube_video">
                                        @error('youtube_video')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product Attribute</h3>
                        <hr>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            {{-- <div class="row">
                                <div class="repeater-default">
                                    <div data-repeater-list="group-attribute">
                                        <div data-repeater-item>
                                            <div class="row justify-content-between" id='product_details'>
                                                <div class="col-md-4 col-sm-12 form-group">
                                                    <label for="attribute">Attribute Name</label>
                                                    <select name="attribute_id" id="attribute_id" class="form-control">
                                                        <option value="">Select Attribute</option>
                                                        @foreach($attributes as $attribute)
                                                        <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-4 col-sm-12 form-group">
                                                    <label for="volume">Volume</label>
                                                    <select name="volume" class="form-control">
                                                        <option value="">Select Volume</option>
                                                    </select>
                                                </div>

                                                <div
                                                    class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                    <button class="btn btn-danger text-nowrap px-1"
                                                        data-repeater-delete type="button"> <i
                                                            class="bx bx-x"></i>
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col p-0">
                                            <button class="btn btn-primary" data-repeater-create type="button" id="product"><i
                                                    class="bx bx-plus"></i>
                                                Add
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="repeater-default">
                                    <div data-repeater-list="group-attribute">
                                        <div data-repeater-item>
                                            <div class="row justify-content-between" id="product_details">
                                                <div class="col-md-4 col-sm-12 form-group">
                                                    <label>Attribute Name</label>
                                                    <select name="attribute_id" class="form-control attribute-select">
                                                        <option value="">Select Attribute</option>
                                                        @foreach($attributes as $attribute)
                                                            <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-4 col-sm-12 form-group value-col">
                                                    <label>Value</label>
                                                    <select name="attribute_value_id" class="form-control value-select">
                                                        <option value="">Select Value</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                    <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button">
                                                        <i class="bx bx-x"></i> Delete
                                                    </button>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col p-0">
                                            <button class="btn btn-primary" data-repeater-create type="button" id="product">
                                                <i class="bx bx-plus"></i> Add
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product Stock & Price</h3>
                        <hr>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="unit_price">Unit Price <span class="text-danger">*</span></label>
                                        <input type="number" name="unit_price" class="form-control" id="unit_price" placeholder="0" value="{{ old('unit_price') }}" required>
                                        @error('unit_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="purchase_price">Purchase Price</label>
                                        <input type="number" name="purchase_price" class="form-control" id="purchase_price" placeholder="0" value="{{ old('purchase_price') }}">
                                        @error('purchase_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_date">Discount Start Date</label>
                                        <input type="date" name="start_date" class="form-control" id="start_date" placeholder="0" value="{{ old('start_date') }}">
                                        @error('start_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end_date">Discount End Date</label>
                                        <input type="date" name="end_date" class="form-control" id="end_date" placeholder="0" value="{{ old('end_date') }}">
                                        @error('end_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <input type="number" name="discount" class="form-control" id="discount" placeholder="0" value="{{ old('discount') }}">
                                        @error('discount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="discount_type">Discount Type</label>
                                        <select name="discount_type" id="discount_type" class="form-control">
                                            <option value="">Select</option>
                                            <option value="%">Percentage (%)</option>
                                            <option value="fixed">Fixed</option>
                                        </select>
                                        @error('discount_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stock_quantity">Stock Quantity </label>
                                        <input type="number" name="stock_quantity" class="form-control" id="stock_quantity" placeholder="0" value="{{ old('stock_quantity',0) }}">
                                        @error('stock_quantity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alert_quantity">Alert Quantity</label>
                                        <input type="number" name="alert_quantity" class="form-control" id="alert_quantity" placeholder="0" value="{{ old('alert_quantity') }}">
                                        @error('alert_quantity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        <input type="text" name="weight" class="form-control" id="weight" placeholder="Enter Weight" value="{{ old('weight') }}">
                                        @error('weight')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sku">SKU</label>
                                        <input type="text" name="sku" class="form-control" id="sku" placeholder="Enter SKU" value="{{ old('sku') }}">
                                        @error('sku')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="content">Description</label>
                                        <textarea name="description" id="content" class="form-control" rows="4">{{ old('description','') }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product View</h3>
                        <hr>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        <input type="text" name="weight" class="form-control" id="weight" placeholder="Enter Weight" value="{{ old('weight') }}">
                                        @error('weight')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="is_oem">OEM</label>
                                        <select name="is_oem" id="is_oem" class="form-control">
                                            <option value="">Select Option</option>
                                            <option value="yes" {{ old('is_oem') == 'yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="no" {{ old('is_oem') == 'no' ? 'selected' : '' }}>No</option>
                                        </select>
                                        @error('is_oem')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="is_preorder">Preorder</label>
                                        <select name="is_preorder" id="is_preorder" class="form-control">
                                            <option value="">Select Option</option>
                                            <option value="yes" {{ old('is_preorder') == 'yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="no" {{ old('is_preorder') == 'no' ? 'selected' : '' }}>No</option>
                                        </select>
                                        @error('is_preorder')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shipping_time">Shipping Time</label>
                                        <input type="text" name="shipping_time" class="form-control" id="shipping_time" placeholder="Enter Shipping Time" value="{{ old('shipping_time') }}">
                                        @error('shipping_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">SEO Meta Tags</h3>
                        <hr>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Enter meta title" value="{{ old('meta_title') }}">
                                        @error('meta_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description</label>
                                        <input type="text" name="meta_description" class="form-control" id="meta_description" placeholder="Enter meta description" value="{{ old('meta_description') }}">
                                        @error('meta_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta_keywords">Meta Keywords</label>
                                        <input type="text" name="meta_keywords" class="form-control" id="meta_keywords" placeholder="Enter meta keywords" value="{{ old('meta_keywords') }}">
                                        @error('meta_keywords')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta_image">Meta Image</label>
                                        <input type="file" name="meta_image" class="form-control" id="meta_image">
                                        @error('meta_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Create Product</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    @endsection

@section('js')
     <!-- jQuery 3.6.0 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper + Bootstrap 4.5.2 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('admin_template/app-assets/js/scripts/forms/form-repeater.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
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
    });
</script>
<script>
    $(document).ready(function () {
            $('#title').focus();
            $('.select2').select2();
            // $('[data-toggle="tooltip"]').tooltip();
            $('#name').on('keyup', function () {
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

                // $('#slug').val(formattedDate + '-' + slug);
                $('#slug').val(slug);
            });

        });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Event delegation: works for current and future repeater rows
        $(document).on('change', "select[name$='[attribute_id]'], .attribute-select", function () {
            const $row = $(this).closest('[data-repeater-item]');
            const attributeId = $(this).val();

            // Locate the select that will hold values inside the same row
            let $valueSelect = $row.find("select[name$='[attribute_value_id]'], .value-select");

            // Reset value dropdown
            $valueSelect.empty().append('<option value="">Loading...</option>').prop('disabled', true);

            if (!attributeId) {
                $valueSelect.empty().append('<option value="">Select Value</option>').prop('disabled', false);
                return;
            }

            // Build URL (either use route() or direct path)
            // const url = "/attributes/" + encodeURIComponent(attributeId) + "/values";
            const url = "{{ route('attributes.values', ':id') }}".replace(':id', attributeId);
            // Alternatively (Blade-safe template):
            // const url = "{{ route('attributes.values', ':id') }}".replace(':id', attributeId);

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json'
            })
            .done(function (res) {
                $valueSelect.empty();

                if (res && res.status && Array.isArray(res.values) && res.values.length) {
                    $valueSelect.append('<option value="">Select Value</option>');
                    res.values.forEach(function (v) {
                        // v.id, v.value => adjust if column names differ
                        $valueSelect.append('<option value="'+ v.id +'">' + (v.name ?? ('#'+v.id)) + '</option>');
                    });
                } else {
                    $valueSelect.append('<option value="">No values found</option>');
                }

                $valueSelect.prop('disabled', false);
            })
            .fail(function () {
                $valueSelect.empty().append('<option value="">Failed to load</option>').prop('disabled', false);
            });
        });

    });
</script>



@endsection
