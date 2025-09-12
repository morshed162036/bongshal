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
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                        <div class="brand-logo">
                            <img class="logo" style="height: 30px;"
                                src="{{ asset('images/setting/'.$company->logo) }}" />
                            </div>
                        {{-- <h2 class="brand-text mb-0 ml-auto">Cleaning</h2> --}}
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="bx-disc"></i></a></li>
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
                    <li class=" nav-item"><a href="#"><i class="bx bx-cart-alt"></i><span
                            class="menu-title">Vendor Product List</span></a>
                    </li>
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


                <li class=" navigation-header"><span>Settings</span>
                </li>
                <li class=" nav-item"><a href="{{ route('settings.update') }}"><i class="bx bx-badge"></i><span
                            class="menu-title">Basic Setting</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('brand') }}"><i class="bx bx-badge"></i><span
                            class="menu-title">Brand</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('company') }}"><i class="bx bx-badge"></i><span
                            class="menu-title">Company</span></a>
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
                {{--<li class=" nav-item"><a href="product.index"><i class="bx bx-package"></i><span
                            class="menu-title">Shift/Roster Management</span></a>
                </li>
                <li class=" nav-item"><a href="product.index"><i class="bx bx-package"></i><span
                            class="menu-title">Overtime</span></a>
                </li> --}}

                {{-- <li class=" navigation-header"><span>HR</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bx-group"></i><span class="menu-title">Payroll</span></a>
                    <ul class='menu-content'>
                        <li><a href="team.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Employee Salary</span></a>
                        </li>
                        <li><a href="team-members.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Pay Slip</span></a>
                        </li>
                        <li><a href="team-members.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Payroll Items</span></a>
                        </li>
                        <li><a href="team-members.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Salary Summary</span></a>
                        </li>
                    </ul>
                </li>
            </li>
                <li class=" nav-item"><a href="#"><i class="bx bxs-buoy"></i><span
                            class="menu-title">Bonus</span></a>
                    <ul class='menu-content'>
                        <li><a href="project.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Festival Bonus Generate</span></a>
                        </li>
                        <li><a href="project-estimation.index"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">performance bonus</span></a>
                        </li>
                        <li><a href="project.start"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Manage wages and incentive</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bxs-buoy"></i><span
                            class="menu-title">Provident Fund & Gratuity </span></a>
                    <ul class='menu-content'>
                        <li><a href="project.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Provident Fund Set Up</span></a>
                        </li>
                        <li><a href="project-estimation.index"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Provident Fund Statement</span></a>
                        </li>
                        <li><a href="project.start"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Provident Fund Schedule</span></a>
                        </li>
                        <li><a href="project-machine.index"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Complete PF History</span></a>
                        </li>
                        <li><a href="project-otherexpense.index"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Employee Gratuity Calculation</span></a>
                        </li>
                        <li><a href="project-payment.index"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Gratuity Statement</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bxs-buoy"></i><span
                            class="menu-title">Increment</span></a>
                    <ul class='menu-content'>
                        <li><a href="{{ route('increment.create','new') }}"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Salary Increment Entry</span></a>
                        </li>
                        <li><a href="{{ route('increment.create','previous') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Add Previous Increment History</span></a>
                        </li>
                        <li><a href="{{ route('increment.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Increment Approval</span></a>
                        </li>
                        <li><a href="{{ route('increment.history') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Salary Increment Statement</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bxs-buoy"></i><span
                            class="menu-title">Promotion</span></a>
                    <ul class='menu-content'>
                        <li><a href="{{ route('promotion.create','new') }}"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">New Promotion</span></a>
                        </li>
                        <li><a href="{{ route('promotion.create','previous') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Add Previous Promotion History</span></a>
                        </li>
                        <li><a href="{{ route('promotion.index') }}"><i class="bx bx-right-arrow-alt"></i><span
                            class="menu-item" data-i18n="LivIcons">Promotion Approval</span></a>
                        </li>
                        <li><a href="{{ route('promotion.history') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Employee Promotion Statement</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bxs-buoy"></i><span
                            class="menu-title">Allowance</span></a>
                    <ul class='menu-content'>
                        <li><a href="project.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Arrear</span></a>
                        </li>
                        <li><a href="{{ route('allowance.index') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Allowance Type</span></a>
                        </li>
                        <li><a href="{{ route('allowance-list.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Allowance List</span></a>
                        </li> --}}

                        {{-- <li><a href="project-payment.index"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">All Allowance Report</span></a>
                        </li> --}}
                    {{-- </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bxs-buoy"></i><span
                            class="menu-title">Medical & Hospitalization </span></a>
                    <ul class='menu-content'>
                        <li><a href="project.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Entry Medical & Hospitalization Benefit</span></a>
                        </li>
                        <li><a href="project-estimation.index"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Medical & Hospitalization Benefit Statement</span></a>
                        </li>
                        <li><a href="project.start"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Entry Medical & Hospitalization Benefit Limit</span></a>
                        </li>
                        <li><a href="project-machine.index"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Medical & Hospitalization Benefit Limit List</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bxs-buoy"></i><span
                            class="menu-title">Loan Management</span></a>
                    <ul class='menu-content'>
                        <li><a href="{{ route('loan.index') }}"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Loan Type</span></a>
                        </li>
                        <li><a href="{{ route('loan-application.create') }}"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Loan Apply</span></a>
                        </li>
                        <li><a href="{{ route('loan-application.index') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Manage Loan</span></a>
                        </li>
                        <li><a href="project.start"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Loan Approval</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bxs-buoy"></i><span
                            class="menu-title">Tax System & Certificate </span></a>
                    <ul class='menu-content'>
                        <li><a href="project.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">TAX Chalan Entry</span></a>
                        </li>
                        <li><a href="project-estimation.index"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">TAX Chalan Management</span></a>
                        </li>
                        <li><a href="project.start"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="LivIcons">Tax Calculation</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Administration</span>
                </li>
                <li class=" nav-item"><a href="user.index"><i class="bx bx-user-circle"></i><span class="menu-title"
                            data-i18n="Colors">Users</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bx-bulb"></i><span class="menu-title"
                            data-i18n="Icons">Assets Management</span></a>
                    <ul class="menu-content">
                        <li><a href="role.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Assigned Employee</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Damage Assets list</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bx-bulb"></i><span class="menu-title"
                            data-i18n="Icons">Job</span></a>
                    <ul class="menu-content">
                        <li><a href="role.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Job Dashboard</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Manage Jobs</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Manage Resumes</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Short list candidate</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Interview Questions</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Offer Approvals</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Candidate List</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Schedule Timing</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bx-bulb"></i><span class="menu-title"
                            data-i18n="Icons">Policies</span></a>
                    <ul class="menu-content">
                        <li><a href="role.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Manage Policy</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Approve Policy</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Privacy Policy</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Terms</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bx-bulb"></i><span class="menu-title"
                            data-i18n="Icons">Role & Permission</span></a>
                    <ul class="menu-content">
                        <li><a href="role.index"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">User Role</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Permission</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Basic Settings</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bx-wallet"></i><span class="menu-title"
                            data-i18n="Icons">Company Management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('wings.index') }}"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item">Wings</span></a>
                        </li>
                        <li><a href="{{ route('branch.index') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Branch</span></a>
                        </li>
                        <li><a href="{{ route('department.index') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Department</span></a>
                        </li>
                        <li><a href="{{ route('section.index') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                    data-i18n="boxicons">Section</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="{{ route('designation.index') }}"><i class="bx bx-grid-alt"></i><span
                            class="menu-title" data-i18n="Colors">Designation</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('grade.index') }}"><i class="bx bx-grid-alt"></i><span
                            class="menu-title" data-i18n="Colors">Grade</span></a>
                </li>


                <li class=" navigation-header"><span>Supplier Management</span>
                </li>
                <li class=" nav-item"><a href="supplier.index"><i class="bx bx-user"></i><span
                            class="menu-title">Supplier</span></a>
                </li>
                <li class=" nav-item"><a href="supplier.advance"><i class="bx bx-archive-out"></i><span
                            class="menu-title">Advance Supplier</span></a>
                </li>
                <li class=" nav-item"><a href="supplier.payable"><i class="bx bx-archive-out"></i><span
                            class="menu-title">Payable Supplier</span></a>
                </li>

                <li class=" navigation-header"><span>Client Management</span>
                </li>
                <li class=" nav-item"><a href="client.index"><i class="bx bx-user"></i><span
                            class="menu-title">Client</span></a>
                </li>
                <li class=" nav-item"><a href="client.advance"><i class="bx bx-archive-in"></i><span
                            class="menu-title">Advance Client</span></a>
                </li>
                <li class=" nav-item"><a href="client.payable"><i class="bx bx-archive-in"></i><span
                            class="menu-title">Payable Client</span></a>
                </li>


                <li class=" navigation-header"><span>Inventory Management</span>
                </li>
                <li class=" nav-item"><a href="stock.index"><i class="bx bx-store-alt">
                    </i><span class="menu-title">Stock</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bxs-barcode"></i><span
                            class="menu-title">Invoice</span></a>
                            <ul class='menu-content'>
                                <li><a href="invoice.index"><i class="bx bx-receipt"></i><span
                                            class="menu-item" data-i18n="LivIcons">All Invoice</span></a>
                                </li>
                                <li><a href="purchase_index"><i class="bx bx-receipt"></i><span
                                            class="menu-item" data-i18n="LivIcons">Purchase Invoice</span></a>
                                </li>
                            </ul>
                </li>
                <li class=" navigation-header"><span>Damage and Return Product</span>
                </li>
                <li class=" nav-item"><a href="client-return-product.index"><i class="bx bx-user">
                    </i><span class="menu-title">Employee</span></a>
                </li>
                <li class=" nav-item"><a href="supplier-return-product.index"><i class="bx bx-user">
                    </i><span class="menu-title">Supplier</span></a>
                </li>

                <li class=" navigation-header"><span>Accounts</span>
                </li>
                <li class=" nav-item"><a href="accounts.index"><i class="bx bx-list-ul"></i><span
                            class="menu-title">Accounts Groups</span></a>
                </li>
                <li class=" nav-item"><a href="chart-of-account.index"><i
                            class="bx bx-book-content"></i><span class="menu-title">Chart of Accounts</span></a>
                </li>
                <li class=" nav-item"><a href="accounts-ledger.index"><i class="bx bx-book-bookmark"></i><span
                            class="menu-title">Accounts Ledgers</span></a>
                </li>

                <li class=" navigation-header"><span>Reports</span>
                </li>
                <li class=" nav-item"><a href="cash-flow.index"><i class="bx bx-repost"></i><span
                            class="menu-title">Salary report</span></a>
                </li>
                </li> --}}

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
