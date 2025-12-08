    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        {{-- <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon bx bx-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href=""
                                    data-toggle="tooltip" data-placement="top" title="Email"><i
                                        class="ficon bx bx-envelope"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href=""
                                    data-toggle="tooltip" data-placement="top" title="Chat"><i
                                        class="ficon bx bx-chat"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href=""
                                    data-toggle="tooltip" data-placement="top" title="Todo"><i
                                        class="ficon bx bx-check-circle"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href=""
                                    data-toggle="tooltip" data-placement="top" title="Calendar"><i
                                        class="ficon bx bx-calendar-alt"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                        class="ficon bx bx-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Frest..."
                                        tabindex="0" data-search="template-search">
                                    <ul class="search-list"></ul>
                                </div>
                            </li>
                        </ul> --}}
                    </div>
                    <ul class="nav navbar-nav float-right">
                        {{-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                                    class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item"
                                    href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i>
                                    English</a><a class="dropdown-item" href="#" data-language="fr"><i
                                        class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item"
                                    href="#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i>
                                    German</a><a class="dropdown-item" href="#" data-language="pt"><i
                                        class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                    class="ficon bx bx-fullscreen"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                    class="ficon bx bx-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Us..." tabindex="-1"
                                    data-search="template-search">
                                <div class="search-input-close"><i class="bx bx-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label"
                                href="#" data-toggle="dropdown"><i
                                    class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span
                                    class="badge badge-pill badge-danger badge-up">0</span></a>
                        </li> --}}
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span
                                        class="user-name">{{ Auth::guard('web')->user()->name }}</span>
                                </div><span><img class="round"
                                        src="@if((Auth::guard('web')->user()->id == 1) && $company->favicon)
                                        {{ asset('images/setting/'.$company->favicon)}}
                                        @elseif (Auth::guard('web')->user()->id == 1)
                                        {{ asset('admin_template/app-assets/images/ico/zariq_favicon.ico') }}
                                         @elseif (Auth::guard('web')->user()->role == 'executive' && Auth::guard('web')->user()->adminDetails->image)
                                         {{ asset(Auth::guard('web')->user()->adminDetails->image) }}
                                        @else
                                        {{ asset('admin_template/app-assets/images/portrait/small/avatar-s-11.jpg') }}
                                        @endif"
                                        alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0">
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item"
                                    href="{{ route('admin.logout') }}"><i class="bx bx-power-off mr-50"></i>
                                    Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow d-block d-md-block d-lg-block" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                        <div class="brand-logo">
                            <img class="logo" style="height: 30px;"
                                src="{{ asset('images/setting/'.$company->logo) }}" />
                            </div>
                        {{-- <h2 class="brand-text mb-0 ml-auto">Cleaning</h2> --}}
                    </a></li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                        <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
                data-icon-style="">

                <li class=" navigation-header"><span>Client View</span>
                </li>
                <li class=" nav-item"><a href="{{ route('homepage') }}"><i class="bx bx-globe"></i><span
                            class="menu-title">Website</span></a>
                </li>
                @if (auth::guard('web')->user()->role == 'admin')

                    <li class=" navigation-header"><span>Home Page</span>
                    </li>
                    <li class=" nav-item"><a href="{{ route('slider') }}"><i class="bx bxs-map-alt"></i><span
                                class="menu-title">Home page Slider</span></a>
                    </li>
                    {{-- <li class=" nav-item"><a href="#"><i class="bx bxs-cog"></i><span class="menu-title">Service Section</span></a>
                        <ul class='menu-content'>
                            <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">Service List</span></a>
                            </li>
                            <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">Service Details</span></a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class=" nav-item"><a href="#"><i class="bx bxs-categories"></i><span
                                class="menu-title">About Tab</span></a>
                    </li>
                    {{-- <li class=" nav-item"><a href="#"><i class="bx bx-money"></i><span
                                class="menu-title">Pricing plan</span></a>
                    </li> --}}
                    <li class=" nav-item"><a href="#"><i class="bx
                        bxs-archive-in"></i><span
                                class="menu-title">Client Review</span></a>
                    </li>
                    {{-- <li class=" nav-item"><a href="#"><i class="bx bx-pulse"></i><span
                                class="menu-title">Counter</span></a>
                    </li> --}}

                    {{-- <li class=" navigation-header"><span>About Page</span>
                    <li class=" nav-item"><a href="#"><i class="bx bxs-customize"></i><span
                                class="menu-title">About Company</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="bx bx-group"></i><span
                                class="menu-title">Team Member</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="bx bx-photo-album"></i><span
                                class="menu-title">Gallery</span></a>
                    </li> --}}
                    {{--  order page  --}}
                    <li class=" navigation-header"><span>Product Section</span></li>
                        <li class=" nav-item"><a href="{{ route('product.create') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Add Product</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ route('product.index') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Product List</span></a>
                        </li>
                        <li class=" nav-item"><a href="#"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Product Variation</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ route('admin.vendorProductList') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Vendor Product List</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ route('admin.productApprovalList') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Vendor Pending Product List</span></a>
                        </li>

                        <!-- product promotion start -->
                     <li class=" navigation-header"><span>Product Section</span></li>
                     <li class=" nav-item">
                        <a href="{{ route('promotions.index') }}">
                            <i class="bx bx-cart-alt"></i>
                            <span class="menu-title">product Promotion</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('promotions.index') }}">
                            <i class="bx bx-cart-alt"></i>
                            <span class="menu-title">product wise ads</span>
                        </a>
                    </li>
                     <!-- product promotion end -->
                      <!-- ads manage start -->
                     <li class=" navigation-header"><span>Ads Section</span></li>
                     <li class=" nav-item">
                        <a href="{{ route('ading.index') }}">
                            <i class="bx bx-cart-alt"></i>
                            <span class="menu-title">Image & video ads</span>
                        </a>
                    </li>
                     <!-- ads manage end -->
                    <li class=" navigation-header"><span>Order Section</span></li>
                        <li class=" nav-item"><a href="#"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">New Order</span></a>
                        </li>
                        <li class=" nav-item"><a href="#"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Confirm Order</span></a>
                        </li>
                        <li class=" nav-item"><a href="#"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Shipping Order</span></a>
                        </li>
                        <li class=" nav-item"><a href="#"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Delivered Order</span></a>
                        </li>
                        <li class=" nav-item"><a href="#"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Cancel Order</span></a>
                        </li>

                    <!-- Contact Page -->
                    {{-- <li class=" navigation-header"><span>Contact page</span>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="bx bxl-slack"></i><span
                                class="menu-title">Contact</span></a>
                    </li> --}}
                    <li class=" navigation-header"><span>User Section</span></li>

                    <li class=" nav-item"><a href="#"><i class="bx bx-detail"></i><span class="menu-title">User Section</span></a>
                        <ul class='menu-content'>
                            <li><a href="{{ route('admin.createuser') }}"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">Create</span></a>
                            </li>
                            <li><a href="{{ route('admin.userlist') }}"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">User List</span></a>
                            </li>
                            {{-- <li><a href="{{ route('vendorApproval') }}"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">Vendor Approval</span></a>
                            </li> --}}
                        </ul>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="bx bx-detail"></i><span class="menu-title">Vendor Section</span></a>
                        <ul class='menu-content'>
                            <li><a href="{{ route('vendor.create') }}"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">Create</span></a>
                            </li>
                            <li><a href="{{ route('vendor.index') }}"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">Vendor List</span></a>
                            </li>
                            <li><a href="{{ route('vendorApproval') }}"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">Vendor Approval</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class=" navigation-header"><span>Blog Section</span></li>

                    <li class=" nav-item"><a href="#"><i class="bx bx-detail"></i><span class="menu-title">Blog Section</span></a>
                        <ul class='menu-content'>
                            <li><a href="{{ route('blog-category') }}"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">Category</span></a>
                            </li>
                            <li><a href="{{ route('blog.index') }}"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">Blog</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class=" navigation-header"><span>Commission Section</span></li>

                    <li class=" nav-item"><a href="#"><i class="bx bx-detail"></i><span class="menu-title">Commission</span></a>
                        <ul class='menu-content'>
                            <li><a href="{{ route('commission-chart.create') }}"><i class="bx bx-right-arrow-alt"></i><span
                                        class="menu-item" data-i18n="LivIcons">Create</span></a>
                            </li>
                            <li><a href="{{ route('commission-chart.index') }}"><i class="bx bx-right-arrow-alt"></i><span
                                class="menu-item" data-i18n="LivIcons">List</span></a>
                            </li>
                        </ul>
                    </li>


                    <li class=" navigation-header"><span>Settings</span>
                    </li>
                    <li class=" nav-item"><a href="{{ route('settings.update') }}"><i class="bx bx-badge"></i><span
                                class="menu-title">Basic Setting</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('brand') }}"><i class="bx bx-badge"></i><span
                                class="menu-title">Brand</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('unit') }}"><i class="bx bx-badge"></i><span
                                class="menu-title">Unit</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('company') }}"><i class="bx bx-badge"></i><span
                                class="menu-title">Bike Company</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('catalogue.index') }}"><i class="bx bx-badge"></i><span
                                class="menu-title">Catalogue</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('category.index') }}"><i class="bx bx-badge"></i><span
                                class="menu-title">Category</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('product.attribute') }}"><i class="bx bx-badge"></i><span
                                class="menu-title">Product Attribute</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('product.attributeValue') }}"><i class="bx bx-badge"></i><span
                                class="menu-title">Attribute Value</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('bike.index') }}"><i class="bx bx-badge"></i><span
                                class="menu-title">Bikes</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('tag') }}"><i class="bx bx-badge"></i><span
                                class="menu-title">Tags</span></a>
                    </li>
                @elseif (auth::guard('web')->user()->role == 'vendor')
                    <li class=" navigation-header"><span>Vendor Dashboard</span>
                    </li>
                    <li class=" nav-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home"></i><span
                                class="menu-title">Dashboard</span></a>
                    </li>
                    {{-- <li class=" nav-item"><a href="{{ route('vendor.addProduct') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Add Product</span></a>
                    </li> --}}
                    <li class=" nav-item"><a href="{{ route('vendor.createProduct') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Create Product</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('vendor.viewProducts') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Product List</span></a>
                    </li>


                    <li class=" nav-item"><a href="{{ route('vendor.orderList') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Order List</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('vendor.profile') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Profile</span></a>
                    </li>
                @elseif (auth::guard('web')->user()->role == 'executive')
                    <li class=" navigation-header"><span>Executive Dashboard</span>
                    </li>
                    <li class=" nav-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home"></i><span
                                class="menu-title">Dashboard</span></a>
                    </li>
                    {{-- <li class=" nav-item"><a href="{{ route('vendor.addProduct') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Add Product</span></a>
                    </li> --}}
                    <li class=" nav-item"><a href="{{ route('executive.createProduct') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Create Product</span></a>
                    </li>
                    <li class=" nav-item"><a href=""><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Product List</span></a>
                    </li>


                    <li class=" nav-item"><a href="{{ route('executive.vendorList') }}"><i class="bx bx-cart-alt"></i><span
                                class="menu-title">Vendor List</span></a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
