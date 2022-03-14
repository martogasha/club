<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:37:02 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="{{asset('img/fav.png')}}">

    <!-- Title -->


    <!-- *************
        ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{asset('fonts/style.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">


    <!-- *************
        ************ Vendor Css Files *************
    ************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{asset('vendor/megamenu/css/megamenu.css')}}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{asset('vendor/search-filter/search-filter.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/search-filter/custom-search-filter.css')}}">
    <!-- Data Tables -->
    <link rel="stylesheet" href="{{asset('vendor/datatables/dataTables.bs4.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/datatables/dataTables.bs4-custom.css')}}" />
    <link href="{{asset('vendor/datatables/buttons.bs.css')}}" rel="stylesheet" />

</head>
<body>

<!-- Loading wrapper start -->
<div id="loading-wrapper">
    <div class="spinner-border"></div>
    Loading...
</div>
<!-- Loading wrapper end -->

<!-- Page wrapper start -->
<div class="page-wrapper">

    <!-- Sidebar wrapper start -->
    <nav class="sidebar-wrapper">

        <!-- Sidebar content start -->
        <div class="sidebar-tabs">

            <!-- Tabs nav start -->
            <div class="nav" role="tablist" aria-orientation="vertical">
                <a href="#" class="logo">
                    <img src="img/logo.svg" alt="Uni Pro Admin">
                </a>
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">
                    <i class="icon-home2"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
                <a class="nav-link settings" id="settings-tab" data-bs-toggle="tab" href="#tab-settings" role="tab" aria-controls="tab-authentication" aria-selected="false">
                    <i class="icon-settings1"></i>
                    <span class="nav-link-text">Settings</span>
                </a>
            </div>
            <!-- Tabs nav end -->

            <!-- Tabs content start -->
            <div class="tab-content">

                <!-- Chat tab -->
                <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">

                    <!-- Tab content header start -->
                    <div class="tab-pane-header">
                        Dashboards
                    </div>
                    <!-- Tab content header end -->

                    <!-- Sidebar menu starts -->
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-menu">
                            <ul>
                                @if(\Illuminate\Support\Facades\Auth::user()->role==2)
                                <li>
                                    <a href="{{url('HardwareDashboard')}}">Hardware Dashboard</a>
                                </li>
                                @else
                                    <li>
                                        <a href="{{url('HardwareDashboard')}}">Hardware Dashboard</a>
                                    </li>
                                @endif
                                    @if(\Illuminate\Support\Facades\Auth::user()->role==0)
                                    <li>
                                    <a href="{{url('users')}}">Users</a>
                                </li>
                                    @endif
                                        @if(\Illuminate\Support\Facades\Auth::user()->role==0 || \Illuminate\Support\Facades\Auth::user()->role==2)
                                        <li>
                                        <a href="{{url('stock')}}">Hardware Stock</a>
                                        </li>
                                        <li>
                                        <a href="{{url('purchase')}}">Purchased Stock</a>
                                        </li>
                                        <li>
                                        <a href="{{url('stockBelowFive')}}">Hardware Stock Below 5</a>
                                        </li>
                                        @endif
                                    @if(\Illuminate\Support\Facades\Auth::user()->role==2)
                                    <li>
                                    <a href="{{url('sell')}}">Sell Hardware</a>
                                </li>
                                    @else
                                        <li>
                                            <a href="{{url('sell')}}">Sell Hardware</a>
                                        </li>
                                    @endif
                                    @if(\Illuminate\Support\Facades\Auth::user()->role==2)
                                    <li>
                                    <a href="{{url('expense')}}">Hardware Expenses</a>
                                </li>
                                    @else
                                        <li>
                                            <a href="{{url('expense')}}">Hardware Expenses</a>
                                        </li>
                                        <li>
                                            <a href="{{url('quotation')}}">Quote</a>
                                        </li>
                                        <li>
                                            <a href="{{url('highMovingproducts')}}">Highly Moving Products</a>
                                        </li>
                                    @endif
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar menu ends -->


                </div>

                <!-- Pages tab -->
                <div class="tab-pane fade" id="tab-product" role="tabpanel" aria-labelledby="product-tab">

                    <!-- Tab content header start -->
                    <div class="tab-pane-header">
                        Product
                    </div>
                    <!-- Tab content header end -->

                    <!-- Sidebar menu starts -->
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-menu">
                            <ul>
                                <li>
                                    <a href="products.html">Products Grid</a>
                                </li>
                                <li>
                                    <a href="products-list.html">Products List</a>
                                </li>
                                <li>
                                    <a href="add-product.html">Add Product</a>
                                </li>
                                <li>
                                    <a href="orders.html">Orders</a>
                                </li>
                                <li>
                                    <a href="customers-list.html">Customers</a>
                                </li>
                                <li>
                                    <a href="products-reviews.html">Reviews</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="list-heading">Calendars</li>
                                <li>
                                    <a href="calendar-daygrid-view.html">Daygrid View</a>
                                </li>
                                <li>
                                    <a href="calendar-list-view.html">List View</a>
                                </li>
                                <li>
                                    <a href="calendar-external-dragging.html">Draggable</a>
                                </li>
                                <li>
                                    <a href="calendar-google-view.html">Google View</a>
                                </li>
                                <li>
                                    <a href="calendar-selectable.html">Selectable</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar menu ends -->

                    <!-- Sidebar actions starts -->
                    <div class="sidebar-actions">
                        <div class="support-tile">
                            <i class="icon-headphones"></i> 24/7 Support
                        </div>
                    </div>
                    <!-- Sidebar actions ends -->

                </div>

                <!-- Pages tab -->
                <div class="tab-pane fade" id="tab-pages" role="tabpanel" aria-labelledby="pages-tab">

                    <!-- Tab content header start -->
                    <div class="tab-pane-header">
                        Pages
                    </div>
                    <!-- Tab content header end -->

                    <!-- Sidebar menu starts -->
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-menu">
                            <ul>
                                <li>
                                    <a href="chat.html">Chat</a>
                                </li>
                                <li>
                                    <a href="tasks.html">Tasks</a>
                                </li>
                                <li>
                                    <a href="create-invoice.html">Create Invoice</a>
                                </li>
                                <li>
                                    <a href="view-invoice.html">View Invoice</a>
                                </li>
                                <li>
                                    <a href="documents.html">Documents</a>
                                </li>
                                <li>
                                    <a href="faq.html">Faq's</a>
                                </li>
                                <li>
                                    <a href="contacts.html">Contacts</a>
                                </li>
                                <li>
                                    <a href="pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="gallery-tiles.html">Gallery Tiles</a>
                                </li>
                                <li>
                                    <a href="gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="search-results.html">Search Results</a>
                                </li>
                                <li>
                                    <a href="account-settings.html">Account Settings</a>
                                </li>
                                <li>
                                    <a href="user-profile.html">User Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar menu ends -->

                    <!-- Sidebar actions starts -->
                    <div class="sidebar-actions">
                        <div class="support-tile green">
                            <i class="icon-pie-chart1"></i> 5GB Free Space
                        </div>
                    </div>
                    <!-- Sidebar actions ends -->

                </div>

                <!-- Forms tab -->
                <div class="tab-pane fade" id="tab-forms" role="tabpanel" aria-labelledby="forms-tab">

                    <!-- Tab content header start -->
                    <div class="tab-pane-header">
                        Forms
                    </div>
                    <!-- Tab content header end -->

                    <!-- Sidebar menu starts -->
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-menu">
                            <ul>
                                <li class="list-heading">Form Layouts</li>
                                <li>
                                    <a href="forms-layout-one.html">Default Layout</a>
                                </li>
                                <li>
                                    <a href="forms-layout-two.html">Layout Sections</a>
                                </li>
                                <li>
                                    <a href="forms-layout-three.html">Simple Form Layout</a>
                                </li>
                                <li>
                                    <a href="forms-layout-four.html">Select 2 Tags and Mask</a>
                                </li>
                                <li>
                                    <a href="forms-layout-five.html">Horizontal Form Layout</a>
                                </li>
                                <li>
                                    <a href="forms-layout-six.html">Layout Six with Tabs</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="list-heading">Form Fields</li>
                                <li>
                                    <a href="forms-inputs.html">Form Inputs</a>
                                </li>
                                <li>
                                    <a href="forms-input-groups.html">Input Groups</a>
                                </li>
                                <li>
                                    <a href="forms-checkbox-radio.html">Checkbox &amp; Radios</a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">Form Validation</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="list-heading">Plugins</li>
                                <li>
                                    <a href="forms-dropzone.html">Dropzone</a>
                                </li>
                                <li>
                                    <a href="forms-bs-select.html">Select 2 Dropdowns</a>
                                </li>
                                <li>
                                    <a href="forms-date-time-picker.html">Date Time Picker</a>
                                </li>
                                <li>
                                    <a href="forms-input-mask.html">Input Mask</a>
                                </li>
                                <li>
                                    <a href="forms-input-range.html">Input Range</a>
                                </li>
                                <li>
                                    <a href="forms-editor.html">WYSIWYG Editor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar menu ends -->

                    <!-- Sidebar actions starts -->
                    <div class="sidebar-actions">
                        <div class="support-tile red">
                            <i class="icon-mail"></i> Inbox Full
                        </div>
                    </div>
                    <!-- Sidebar actions ends -->

                </div>

                <!-- Components tab -->
                <div class="tab-pane fade" id="tab-components" role="tabpanel" aria-labelledby="components-tab">

                    <!-- Tab content header start -->
                    <div class="tab-pane-header">
                        Components
                    </div>
                    <!-- Tab content header end -->

                    <!-- Sidebar menu starts -->
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-menu">
                            <ul>
                                <li>
                                    <a href="accordions.html">Accordions</a>
                                </li>
                                <li>
                                    <a href="alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="badges.html">Badges</a>
                                </li>
                                <li>
                                    <a href="cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="list-group.html">List group</a>
                                </li>
                                <li>
                                    <a href="modals.html">Modal</a>
                                </li>
                                <li>
                                    <a href="paginations.html">Paginations</a>
                                </li>
                                <li>
                                    <a href="popovers.html">Popovers</a>
                                </li>
                                <li>
                                    <a href="progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="spinners.html">Spinners</a>
                                </li>
                                <li>
                                    <a href="tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="toasts.html">Toasts</a>
                                </li>
                                <li>
                                    <a href="tooltips.html">Tooltips</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar menu ends -->

                    <!-- Sidebar actions starts -->
                    <div class="sidebar-actions">
                        <div class="support-tile yellow">
                            <i class="icon-arrow-down-circle"></i><a href="#">Download Reports</a>						</div>
                    </div>
                    <!-- Sidebar actions ends -->

                </div>

                <!-- Graphs tab -->
                <div class="tab-pane fade" id="tab-graphs" role="tabpanel" aria-labelledby="graphs-tab">

                    <!-- Tab content header start -->
                    <div class="tab-pane-header">
                        Graphs &amp; Tables
                    </div>
                    <!-- Tab content header end -->

                    <!-- Sidebar menu starts -->
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-menu">
                            <ul>
                                <li class="list-heading">Graphs</li>
                                <li>
                                    <a href="apex-graphs.html">Apex Graphs</a>
                                </li>
                                <li>
                                    <a href="morris-graphs.html">Morris Graphs</a>
                                </li>
                                <li>
                                    <a href="vector-maps.html">Vector Maps</a>
                                </li>
                            </ul>

                            <ul>
                                <li class="list-heading">Tables</li>
                                <li>
                                    <a href="bootstrap-tables.html">Bootstrap Tables</a>
                                </li>
                                <li>
                                    <a href="custom-tables.html">Custom Tables</a>
                                </li>
                                <li>
                                    <a href="data-tables.html">Data Tables</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar menu ends -->

                    <!-- Sidebar actions starts -->
                    <div class="sidebar-actions">
                        <div class="support-tile pink">
                            <i class="icon-align-right1"></i> RTL Support
                        </div>
                    </div>
                    <!-- Sidebar actions ends -->

                </div>

                <!-- Authentication tab -->
                <div class="tab-pane fade" id="tab-authentication" role="tabpanel" aria-labelledby="authentication-tab">

                    <!-- Tab content header start -->
                    <div class="tab-pane-header">
                        Authentication
                    </div>
                    <!-- Tab content header end -->

                    <!-- Sidebar menu starts -->
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-menu">
                            <ul>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="signup.html">Signup</a>
                                </li>
                                <li>
                                    <a href="forgot-password.html">Forgot Password</a>
                                </li>
                                <li>
                                    <a href="reset-password.html">Reset Password</a>
                                </li>
                                <li>
                                    <a href="lock-screen.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="subscribe.html">Subscribe</a>
                                </li>
                                <li>
                                    <a href="maintenance.html">Maintenance</a>
                                </li>
                                <li>
                                    <a href="error.html">404</a>
                                </li>
                                <li>
                                    <a href="error-option2.html">Error</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar menu ends -->

                    <!-- Sidebar actions starts -->
                    <div class="sidebar-actions">
                        <div class="support-tile blue">
                            <a href="pricing.html" class="btn btn-light m-auto">Upgrade Account</a>
                        </div>
                    </div>
                    <!-- Sidebar actions ends -->

                </div>

                <!-- Settings tab -->
                <div class="tab-pane fade" id="tab-settings" role="tabpanel" aria-labelledby="settings-tab">

                    <!-- Tab content header start -->
                    <div class="tab-pane-header">
                        Settings
                    </div>
                    <!-- Tab content header end -->

                    <!-- Settings start -->
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-settings">
                            <div class="accordion" id="settingsAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genInfo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genCollapse" aria-expanded="true" aria-controls="genCollapse">
                                            General Info
                                        </button>
                                    </h2>
                                    <div id="genCollapse" class="accordion-collapse collapse show" aria-labelledby="genInfo" data-bs-parent="#settingsAccordion">
                                        <div class="accordion-body">
                                            <div class="field-wrapper">
                                                <input type="text" value="Jeivxezer Lopexz" />
                                                <div class="field-placeholder">Full Name</div>
                                            </div>

                                            <div class="field-wrapper">
                                                <input type="email" value="jeivxezer-lopexz@email.com" />
                                                <div class="field-placeholder">Email</div>
                                            </div>

                                            <div class="field-wrapper">
                                                <input type="text" value="0 0000 00000" />
                                                <div class="field-placeholder">Contact</div>
                                            </div>
                                            <div class="field-wrapper m-0">
                                                <button class="btn btn-primary stripes-btn">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="chngPwd">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chngPwdCollapse" aria-expanded="false" aria-controls="chngPwdCollapse">
                                            Change Password
                                        </button>
                                    </h2>
                                    <div id="chngPwdCollapse" class="accordion-collapse collapse" aria-labelledby="chngPwd" data-bs-parent="#settingsAccordion">
                                        <div class="accordion-body">
                                            <div class="field-wrapper">
                                                <input type="text" value="">
                                                <div class="field-placeholder">Current Password</div>
                                            </div>
                                            <div class="field-wrapper">
                                                <input type="password" value="">
                                                <div class="field-placeholder">New Password</div>
                                            </div>
                                            <div class="field-wrapper">
                                                <input type="password" value="">
                                                <div class="field-placeholder">Confirm Password</div>
                                            </div>
                                            <div class="field-wrapper m-0">
                                                <button class="btn btn-primary stripes-btn">Save</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Settings end -->

                    <!-- Sidebar actions starts -->
                    <div class="sidebar-actions">
                        <div class="support-tile blue">
                            <a href="account-settings.html" class="btn btn-light m-auto">Advance Settings</a>
                        </div>
                    </div>
                    <!-- Sidebar actions ends -->
                </div>

            </div>
            <!-- Tabs content end -->

        </div>
        <!-- Sidebar content end -->

    </nav>
    <!-- Sidebar wrapper end -->

    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">

        <!-- Page header starts -->
        <div class="page-header">

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

                    <!-- Search container start -->
                    <div class="search-container">

                        <!-- Toggle sidebar start -->
                        <div class="toggle-sidebar" id="toggle-sidebar">
                            <i class="icon-menu"></i>
                        </div>

                        <!-- Search input group end -->

                    </div>
                    <!-- Search container end -->

                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

                    <!-- Header actions start -->
                    <ul class="header-actions">
                        <li class="dropdown">
                            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                <h5>{{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</h5>
                                <span class="avatar">
											<img src="img/user.svg" alt="User Avatar">
										</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                                <div class="header-profile-actions">
                                    <a href="{{url('profile')}}"><i class="icon-user1"></i>Profile</a>
                                        <a href="#"><i class="icon-settings1"></i>Settings</a>
                                    <form action="{{route('logout')}}" method="post" id="logout">
                                        @csrf
                                    <a href="javascript:document.getElementById('logout').submit();"><i class="icon-log-out1"></i>Logout</a>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Header actions end -->

                </div>
            </div>
            <!-- Row end -->

        </div>
