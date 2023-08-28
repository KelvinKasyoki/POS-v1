<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 21:40:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::eBazar::  Checkout </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/ebazar.style.min.css">
</head>
<body>
    <div id="ebazar-layout" class="theme-blue">                          
        
        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">
                <a href="index.php" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
                    <span class="logo-text">eBazar</span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link" href="index.php"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
                    <li class="collapsed">
                        <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Products</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse show" id="menu-product">
                                <li><a class="ms-link" href="product-grid.php">Product Grid</a></li>
                                <li><a class="ms-link" href="product-list.php">Product List</a></li>
                                <li><a class="ms-link" href="product-edit.php">Product Edit</a></li>
                                <li><a class="ms-link" href="product-detail.php">Product Details</a></li>
                                <li><a class="ms-link" href="product-add.php">Product Add</a></li>
                                <li><a class="ms-link" href="product-cart.php">Shopping Cart</a></li>
                                <li><a class="ms-link active" href="checkout.html">Checkout</a></li>
                            </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#categories" href="#">
                            <i class="icofont-chart-flow fs-5"></i> <span>Categories</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="categories">
                                <li><a class="ms-link" href="categorie-list.php">Categories List</a></li>
                                <li><a class="ms-link" href="categories-edit.php">Categories Edit</a></li>
                                <li><a class="ms-link" href="categories-add.php">Categories Add</a></li>
                            </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-order" href="#">
                        <i class="icofont-notepad fs-5"></i> <span>Orders</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-order">
                            <li><a class="ms-link" href="order-list.php">Orders List</a></li>
                            <li><a class="ms-link" href="order-details.php">Order Details</a></li>
                            <li><a class="ms-link" href="order-invoices.php">Order Invoices</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#customers-info" href="#">
                        <i class="icofont-funky-man fs-5"></i> <span>Customers</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="customers-info">
                            <li><a class="ms-link" href="customers.php">Customers List</a></li>
                            <li><a class="ms-link" href="customer-detail.php">Customers Details</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-sale" href="#">
                        <i class="icofont-sale-discount fs-5"></i> <span>Sales Promotion</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-sale">
                            <li><a class="ms-link" href="coupons-list.php">Coupons List</a></li>
                            <li><a class="ms-link" href="coupon-add.php">Coupons Add</a></li>
                            <li><a class="ms-link" href="coupon-edit.php">Coupons Edit</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-inventory" href="#">
                        <i class="icofont-chart-histogram fs-5"></i> <span>Inventory</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-inventory">
                            <li><a class="ms-link" href="inventory-info.php">Stock List</a></li>
                            <li><a class="ms-link" href="purchase.php">Purchase</a></li>
                            <li><a class="ms-link" href="supplier.php">Supplier</a></li>
                            <li><a class="ms-link" href="returns.php">Returns</a></li>
                            <li><a class="ms-link" href="department.php">Department</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                                class="icofont-ui-calculator"></i> <span>Accounts</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Componentsone">
                            <li><a class="ms-link" href="invoices.php">Invoices </a></li>
                            <li><a class="ms-link" href="expenses.php">Expenses </a></li>
                            <li><a class="ms-link" href="salaryslip.php">Salary Slip </a></li>
                            <li><a class="ms-link" href="create-invoice.php">Create Invoice </a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#app" href="#">
                        <i class="icofont-code-alt fs-5"></i> <span>App</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="app">
                            <li><a class="ms-link" href="calendar.php">Calandar</a></li>
                            <li><a class="ms-link" href="chat.php"> Chat App</a></li>
                        </ul>
                    </li>
                    <li><a class="m-link" href="store-locator.php"><i class="icofont-focus fs-5"></i> <span>Store Locator</span></a></li>
                    <li><a class="m-link" href="ui-elements/ui-alerts.html"><i class="icofont-paint fs-5"></i> <span>UI Components</span></a></li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#page" href="#">
                        <i class="icofont-page fs-5"></i> <span>Other Pages</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="page">
                            <li><a class="ms-link" href="admin-profile.php">Profile Page</a></li>
                            <li><a class="ms-link" href="purchase-plan.php">Price Plan Example</a></li>
                            <li><a class="ms-link" href="charts.php">Charts Example</a></li>
                            <li><a class="ms-link" href="table.php">Table Example</a></li>
                            <li><a class="ms-link" href="forms.php">Forms Example</a></li>
                            <li><a class="ms-link" href="icon.php">Icons</a></li>
                            <li><a class="ms-link" href="contact.php">Contact Us</a></li>
                            <li><a class="ms-link" href="todo-list.php">Todo List</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Menu: menu collepce btn -->
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
            </div>
        </div>       

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4"> 

            <!-- Body: Header -->
            <div class="header">
                <nav class="navbar py-4">
                    <div class="container-xxl">
        
                        <!-- header rightbar icon -->
                        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                            <div class="d-flex">
                                <a class="nav-link text-primary collapsed" href="help.php" title="Get Help">
                                    <i class="icofont-info-square fs-5"></i>
                                </a>
                            </div>
                            <div class="dropdown zindex-popover">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="assets/images/flag/GB.png" alt="">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0">
                                        <ul class="list-unstyled py-2 px-3">
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/GB.png" alt=""> English</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/DE.png" alt=""> German</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/FR.png" alt=""> French</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/IT.png" alt=""> Italian</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/RU.png" alt=""> Russian</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dropdown notifications">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="icofont-alarm fs-5"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                                <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0 w380">
                                        <div class="card-header border-0 p-3">
                                            <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                                <span>Notifications</span>
                                                <span class="badge text-white">06</span>
                                            </h5>
                                        </div>
                                        <div class="tab-content card-body">
                                            <div class="tab-pane fade show active">
                                                <ul class="list-unstyled list mb-0">
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar1.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Chloe Walkerr</span> <small>2MIN</small></p>
                                                                <span class="">Added New Product 2021-07-15 <span class="badge bg-success">Add</span></span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <div class="avatar rounded-circle no-thumbnail">AH</div>
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Hill</span> <small>13MIN</small></p>
                                                                <span class="">Invoice generator </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar3.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Melanie	Oliver</span> <small>1HR</small></p>
                                                                <span class="">Orader  Return RT-00004</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar5.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Boris Hart</span> <small>13MIN</small></p>
                                                                <span class="">Product Order to Toyseller</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar6.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Lambert</span> <small>1HR</small></p>
                                                                <span class="">Leave Apply</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar7.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                                <span class="">Product Stoke Entry Updated</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">John Quinn</span></p>
                                    <small>Admin Profile</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.svg" alt="profile">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="assets/images/profile_av.svg" alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span class="font-weight-bold">John	Quinn</span></p>
                                                    <small class="">Johnquinn@gmail.com</small>
                                                </div>
                                            </div>
                                            
                                            <div><hr class="dropdown-divider border-dark"></div>
                                        </div>
                                        <div class="list-group m-2 ">
                                            <a href="admin-profile.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Profile Page</a>
                                            <a href="order-invoices.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-file-text fs-5 me-3"></i>Order Invoices</a>
                                            <a href="ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="setting ms-2">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal"><i class="icofont-gear-alt fs-5"></i></a>
                            </div>
                        </div>
        
                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>
        
                        <!-- main menu Search-->
                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                            <div class="input-group flex-nowrap input-group-lg">
                                <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                                <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                                
                            </div>
                        </div>
        
                    </div>
                </nav>
            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-3">  
                <div class="container-xxl"> 
                    <div class="row align-items-center"> 
                        <div class="border-0 mb-4"> 
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Checkout Details</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3"> 
                        <div class="col-lg-12 col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="checkout-steps">
                                        <ul id="accordionExample">
                                            <li>
                                                <section>
                                                    <h6 class="title collapsed fw-bold" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Your Personal Details </h6>
                                                    <div class="checkout-steps-form-content collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample" >
                                                        <form class="mt-3">
                                                            <div class="row g-3 align-items-center">
                                                                <div class="col-md-6">
                                                                    <label for="firstname1" class="form-label">First Name</label>
                                                                    <input type="text" class="form-control" id="firstname1" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="lastname1" class="form-label">Last Name</label>
                                                                    <input type="text" class="form-control" id="lastname1" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="phonenumber1" class="form-label">Phone Number</label>
                                                                    <input type="text" class="form-control" id="phonenumber1" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="emailaddress1" class="form-label">Email Address</label>
                                                                    <input type="email" class="form-control" id="emailaddress1" required>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label class="form-label">Shipping Address</label>
                                                                    <input type="email" class="form-control" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="cityblock1" class="form-label">City</label>
                                                                    <input type="text" class="form-control" id="cityblock1" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="postcode1" class="form-label">Post Code</label>
                                                                    <input type="text" class="form-control" id="postcode1" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label  class="form-label">Country</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>Country Option</option>
                                                                        <option value="1">India</option>
                                                                        <option value="2">Australia</option>
                                                                        <option value="3">Italy</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label  class="form-label">State</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>State Option</option>
                                                                        <option value="1">Gujrat</option>
                                                                        <option value="2">Kerela</option>
                                                                        <option value="3">Rajesthan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked>
                                                                    <label class="form-check-label" for="flexCheckChecked1">
                                                                        My delivery and Shipping addresses are the same.
                                                                    </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <button type="submit" class="btn btn-primary mt-4 px-5 text-uppercase">Save</button>
                                                        </form>
                                                    </div>
                                                </section>
                                            </li>
                                            <li>
                                                <section>
                                                    <h6 class="title collapsed fw-bold" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Shipping Address</h6>
                                                    <div class="checkout-steps-form-content collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <form class="mt-3">
                                                            <div class="row g-3 align-items-center">
                                                                <div class="col-md-6">
                                                                    <label for="firstname" class="form-label">First Name</label>
                                                                    <input type="text" class="form-control" id="firstname" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="lastname" class="form-label">Last Name</label>
                                                                    <input type="text" class="form-control" id="lastname" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="phonenumber" class="form-label">Phone Number</label>
                                                                    <input type="text" class="form-control" id="phonenumber" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="emailaddress" class="form-label">Email Address</label>
                                                                    <input type="email" class="form-control" id="emailaddress" required>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label class="form-label">Shipping Address</label>
                                                                    <input type="email" class="form-control" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="cityblock" class="form-label">City</label>
                                                                    <input type="text" class="form-control" id="cityblock" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="postcode" class="form-label">Post Code</label>
                                                                    <input type="text" class="form-control" id="postcode" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label  class="form-label">Country</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>Country Option</option>
                                                                        <option value="1">India</option>
                                                                        <option value="2">Australia</option>
                                                                        <option value="3">Italy</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label  class="form-label">State</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>State Option</option>
                                                                        <option value="1">Gujrat</option>
                                                                        <option value="2">Kerela</option>
                                                                        <option value="3">Rajesthan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12">
                                                                <div class="checkout-payment-option mt-4">
                                                                    <h6 class="form-label mb-0">Select Delivery Option</h6>
                                                                    <div class="payment-option-wrapper">
                                                                        <div class="single-payment-option">
                                                                            <input type="radio" name="shipping" checked="" id="shipping-1">
                                                                            <label for="shipping-1">
                                                                                <img src="assets/images/product/shipping-4.png" alt="Sipping">
                                                                                <span class="s-info">Standerd Shipping</span>
                                                                                <span class="price">$12.00</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="single-payment-option">
                                                                            <input type="radio" name="shipping" id="shipping-2">
                                                                            <label for="shipping-2">
                                                                                <img src="assets/images/product/shipping-3.png" alt="Sipping">
                                                                                <span class="s-info">Standerd Shipping</span>
                                                                                <span class="price">$10.00</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="single-payment-option">
                                                                            <input type="radio" name="shipping" id="shipping-3">
                                                                            <label for="shipping-3">
                                                                                <img src="assets/images/product/shipping-2.png" alt="Sipping">
                                                                                <span class="s-info">Standerd Shipping</span>
                                                                                <span class="price">$11.00</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="single-payment-option">
                                                                            <input type="radio" name="shipping" id="shipping-4">
                                                                            <label for="shipping-4">
                                                                                <img src="assets/images/product/shipping-1.png" alt="Sipping">
                                                                                <span class="s-info">Standerd Shipping</span>
                                                                                <span class="price">$18.00</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="steps-form-btn">
                                                                    <a href="#" class="btn btn-primary px-5 text-uppercase">Save</a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </section>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-4">
                            <div class="card  mb-3">
                                <div class="card-body">
                                    <div class="checkout-sidebar">
                                        <div class="checkout-sidebar-price-table mt-30">
                                            <h5 class="title fw-bold">Pricing</h5>
                                            <div class="sub-total-price">
                                                <div class="total-price">
                                                    <p class="value">Subotal Price:</p>
                                                    <p class="price">$1096.00</p>
                                                </div>
                                                <div class="total-price shipping">
                                                    <p class="value">Shipping Cost:</p>
                                                    <p class="price">$12.00</p>
                                                </div>
                                                <div class="total-price discount">
                                                    <p class="value">Discount Price:</p>
                                                    <p class="price">$10.00</p>
                                                </div>
                                                <div class="total-price">
                                                    <p class="value">Tax(18%):</p>
                                                    <p class="price">$198.00</p>
                                                </div>
                                            </div>
                                            <div class="total-payable">
                                                <div class="payable-price">
                                                    <p class="value fw-bold">Total Payable:</p>
                                                    <p class="price fw-bold">$1296.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0 align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                        <label class="form-check-label fw-bold d-flex align-items-center" for="flexRadioDefault1">
                                            <i class="icofont-mastercard-alt fs-3 mx-2"></i> Debit/Credit Card
                                        </label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-12">
                                                <label  class="form-label">Enter Card Number</label>
                                                <input type="text" class="form-control"  required>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Valid Date</label>
                                                <input type="date" class="form-control w-100"  required>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">CVV</label>
                                                <input type="text" class="form-control"  required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0 align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label fw-bold d-flex align-items-center" for="flexRadioDefault2">
                                            <i class="icofont-world fs-3 mx-2"></i> Net Banking
                                        </label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-12">
                                                <label  class="form-label">Enter Your Name</label>
                                                <input type="text" class="form-control"  required>
                                            </div>
                                            <div class="col-md-12">
                                                <label  class="form-label">Account Number</label>
                                                <input type="text" class="form-control"  required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Bank Name</label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="admittime1" class="form-label">IFC Code</label>
                                                <input type="text" class="form-control" id="admittime1" required>
                                            </div>
                                        </div>
                                        <a href="invoices.php" class="btn btn-primary mt-4 text-uppercase">Pay Now</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  -->
                </div>
            </div>
        
            <!-- Modal Custom Settings-->
            <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog  modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Custom Settings</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body custom_setting">
                            <!-- Settings: Color -->
                            <div class="setting-theme pb-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                                <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                    <li data-theme="indigo"><div class="indigo"></div></li>
                                    <li data-theme="tradewind"><div class="tradewind"></div></li>
                                    <li data-theme="monalisa"><div class="monalisa"></div></li>
                                    <li data-theme="blue" class="active"><div class="blue"></div></li>
                                    <li data-theme="cyan"><div class="cyan"></div></li>
                                    <li data-theme="green"><div class="green"></div></li>
                                    <li data-theme="orange"><div class="orange"></div></li>
                                    <li data-theme="blush"><div class="blush"></div></li>
                                    <li data-theme="red"><div class="red"></div></li>
                                </ul>
                            </div>
                            <div class="sidebar-gradient py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                                <div class="form-check form-switch gradient-switch pt-2 mb-2">
                                    <input class="form-check-input" type="checkbox" id="CheckGradient">
                                    <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                                </div>
                            </div>
                            <!-- Settings: Template dynamics -->
                            <div class="dynamic-block py-3">
                                <ul class="list-unstyled choose-skin mb-2 mt-1">
                                    <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                                </ul>
                                <div class="dt-setting">
                                    <ul class="list-group list-unstyled mt-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Primary Color</label>
                                            <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Secondary Color</label>
                                            <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 1</label>
                                            <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 2</label>
                                            <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 3</label>
                                            <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 4</label>
                                            <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 5</label>
                                            <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Settings: Font -->
                            <div class="setting-font py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                                <ul class="list-group font_setting mt-1">
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                            <label class="form-check-label" for="font-poppins">
                                                Poppins Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                            <label class="form-check-label" for="font-opensans">
                                                Open Sans Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                            <label class="form-check-label" for="font-montserrat">
                                                Montserrat Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-mukta" value="font-mukta">
                                            <label class="form-check-label" for="font-mukta">
                                                Mukta Google Font
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Settings: Light/dark -->
                            <div class="setting-mode py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                                <ul class="list-group list-unstyled mb-0 mt-1">
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-switch mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-switch">
                                            <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-high-contrast mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                            <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-rtl mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-rtl">
                                            <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-start">
                            <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary lift">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div> 
            
        </div>                                 

    </div> 

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="../js/template.js"></script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 21:40:57 GMT -->
</html> 