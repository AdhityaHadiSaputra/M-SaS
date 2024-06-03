<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Asset Management System">
<meta name="author" content="MetroxGroup">
<meta name="robots" content="noindex, nofollow">
<title>Metrox - Smart Asset System</title>

<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico">

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/css/animate.css">

<link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="index.html" class="logo">
<img src="../assets/img/ams.png" alt="">
</a>
<a href="index.html" class="logo-small">
<img src="../assets/img/ams-small.png" alt="">
</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">
<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-img"><img src="../assets/img/profiles/user1.png" alt="">
<span class="status online"></span></span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><img src="../assets/img/profiles/avator1.jpg" alt="">
<span class="status online"></span></span>
<div class="profilesets">
<h6><?php echo get_cookie('AmsUserName'); ?></h6>
<h5><?php echo get_cookie('AmsRole'); ?></h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href=""><i class="me-2" data-feather="settings"></i>Change Password</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="<?php echo base_url('login/logout'); ?>"><img src="../assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="">Change Password</a>
<a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<?php $this->load->view('navbar/nav_admin_submenu'); ?>
</div>
</div>
</div>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Asset Category list</h4>
<h6>View/Search Asset Category</h6>
</div>
<div class="page-btn">
<a href="" class="btn btn-added"><img src="../assets/img/icons/plus.svg" class="me-2" alt="img"> Add Asset Category</a>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-path">
<a class="btn btn-filter" id="filter_search">
<img src="../assets/img/icons/filter.svg" alt="img">
<span><img src="../assets/img/icons/closes.svg" alt="img"></span>
</a>
</div>
<div class="search-input">
<a class="btn btn-searchset"><img src="../assets/img/icons/search-white.svg" alt="img"></a>
</div>
</div>
<div class="wordset">
<ul>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="../assets/img/icons/pdf.svg" alt="img"></a>
</li>
<li>
<a  data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="../assets/img/icons/excel.svg" alt="img"></a>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="../assets/img/icons/printer.svg" alt="img"></a>
</li>
</ul>
</div>
</div>

<div class="card" id="filter_inputs">
<div class="card-body pb-0">
<div class="row">
<div class="col-lg-2 col-sm-6 col-12">
<div class="form-group">
<label>Category</label>
<select class="select">
<option>Choose Category</option>
<option>Computers</option>
</select>
</div>
</div>
<div class="col-lg-2 col-sm-6 col-12">
<div class="form-group">
<label>Sub Category</label>
<select class="select">
<option>Choose Sub Category</option>
<option>Fruits</option>
</select>
</div>
</div>
<div class="col-lg-2 col-sm-6 col-12">
<div class="form-group">
<label>Category Code</label>
<select class="select">
<option>CT001</option>
<option>CT002</option>
</select>
</div>
</div>
<div class="col-lg-1 col-sm-6 col-12 ms-auto">
<div class="form-group">
<label>&nbsp;</label>
<a class="btn btn-filters ms-auto"><img src="../assets/img/icons/search-whites.svg" alt="img"></a>
</div>
</div>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table  datanew">
<thead>
<tr>
<th>
<label class="checkboxs">
<input type="checkbox" id="select-all">
<span class="checkmarks"></span>
</label>
</th>
<th>Image</th>
<th>Category</th>
 <th>Parent category</th>
<th>Category Code</th>
<th>Description</th>
<th>Created By</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product1.jpg" alt="product">
</a>
</td>
<td>Computers</td>
<td>Computers</td>
<td>CT001</td>
<td>Computers Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product2.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT002</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product3.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT003</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product4.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT004</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product5.jpg" alt="product">
</a>
</td>
<td>Accessories</td>
<td>Accessories</td>
<td>CT005</td>
<td>Accessories Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product6.jpg" alt="product">
</a>
</td>
<td>Shoes</td>
<td>Shoes</td>
<td>CT006</td>
<td>Shoes Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product7.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT007</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product8.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT008</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product9.jpg" alt="product">
</a>
</td>
<td>Computers</td>
<td>Computers</td>
<td>CT009</td>
<td>Computers Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product10.jpg" alt="product">
</a>
</td>
<td>Health Care	</td>
<td>Health Care	</td>
<td>CT0010</td>
<td>Health Care Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product4.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT004</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product5.jpg" alt="product">
</a>
</td>
<td>Accessories</td>
<td>Accessories</td>
<td>CT005</td>
<td>Accessories Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product6.jpg" alt="product">
</a>
</td>
<td>Shoes</td>
<td>Shoes</td>
<td>CT006</td>
<td>Shoes Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product7.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT007</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product8.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT008</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product9.jpg" alt="product">
</a>
</td>
<td>Computers</td>
<td>Computers</td>
<td>CT009</td>
<td>Computers Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="../assets/img/product/product10.jpg" alt="product">
</a>
</td>
<td>Health Care	</td>
<td>Health Care	</td>
<td>CT0010</td>
<td>Health Care Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="../assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="../assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>


<script src="../assets/js/jquery-3.6.0.min.js"></script>

<script src="../assets/js/feather.min.js"></script>

<script src="../assets/js/jquery.slimscroll.min.js"></script>

<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap4.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/plugins/select2/js/select2.min.js"></script>

<script src="../assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="../assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="../assets/js/script.js"></script>

</body>
</html>