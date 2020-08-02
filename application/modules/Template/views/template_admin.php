<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title><?= $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url();?>assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link rel="stylesheet" href="cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <link href="<?= base_url();?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar"> 
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?= base_url();?>assets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url();?>assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= base_url();?>assets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url();?>assets/images/logo-light.png" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
            
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-flag-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="<?= base_url();?>assets/images/flags/us.jpg" alt="Header Language" height="14">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
        
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url();?>assets/images/flags/spain.jpg" alt="user-image" class="mr-2" height="12"><span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url();?>assets/images/flags/germany.jpg" alt="user-image" class="mr-2" height="12"><span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url();?>assets/images/flags/italy.jpg" alt="user-image" class="mr-2" height="12"><span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url();?>assets/images/flags/russia.jpg" alt="user-image" class="mr-2" height="12"><span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?= base_url();?>assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1">Bimo Adiparwa</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Billing</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                            </div>
                        </div>
            
                    </div>
                </div>

            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="<?= base_url();?>" class="waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-box"></i></div>
                                    <span>Data Master</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="<?= base_url('penjualan');?>"><i class="mdi mdi-file-table-box-multiple"></i><span>  Penjualan</span></a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1"><?= $sub_title; ?></h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active"><a href="javascript: void(0);"><?= $sub_title ?></a></li>
                                    </ol>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <?php $this->load->view($content_view); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                        </div>
                        <!-- end container-fluid -->
                    </div> 
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2020 © Bimo Adiparwa.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Bimo Adiparwa
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="<?= base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url();?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url();?>assets/libs/node-waves/waves.min.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>
        <!-- Required datatable js -->
        <script src="<?= base_url();?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url();?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Datatable init js -->
        <script src="<?= base_url();?>assets/js/pages/datatables.init.js"></script>
        <script src="<?= base_url();?>assets/js/app.js"></script>
        <!-- Responsive examples -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="<?= base_url();?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url();?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script type="text/javascript">
	$(document).on("click", "#tambah", function(e){
		e.preventDefault();
	var produk = $('#produk').val();
	var tahun = $('#tahun').val();
	var unit = $('#unit').val();
	var harga = $('#harga').val();
	var biaya_variabel = $('#biaya_variabel').val();
	var biaya_tetap = $('#biaya_tetap').val();
	var mc = $('#mc').val();
    var total_penjualan = harga * unit;

    $.ajax({
        url: "<?= base_url()?>penjualan/tambah",
    type: "post",
    dataType: "json",
    data: {
        produk: produk,
        tahun: tahun,
        unit: unit,
        harga: harga,
        biaya_variabel: biaya_variabel,
        biaya_tetap: biaya_tetap,
        mc: mc,
        total_penjualan: total_penjualan
    },
    success: function(data){
        $('#exampleModal').modal('hide');
        
        if(data.message == "success"){
            toastr["success"](data.message);
            toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "2000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
        }else{
            toastr["error"](data.message);
            toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "2000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
        }
        
    }
    
    });
        $('#form')[0].reset();
        location.reload();
	});
</script>
        <!-- <script type="text/javascript">
	var save_method;
	var table;

    function add_data(){
        save_method = 'add';
        $('#form')[0].reset();
        $('#modal_form').modal('show');
    }

	function save() {
		var url;

		if (save_method == 'add') {
			url = '<?= base_url('Penjualan/tambah');?>';
		} else {
            url = '<?= base_url('Penjualan/ubah');?>';
        }
		$.ajax({
			url: url,
			type: "POST",
			data: $('#form').serialize(),
			dataType: "JSON",
			success: function (data) {
				$('#modal_form').modal('hide');
				location.reload();
			},
            error: function(jqXHR, textStatus, errorThrown){
                alert('Error Tambah Data');
            }
		});
	}
    function edit_data(id){
        save_method = 'update';
        $('#form')[0].reset();

        //load data
        $.ajax({
            url: "<?= base_url('Penjualan/ajax_edit/');?>/"+id,
            type: "GET",
			dataType: "JSON",
			success: function (data) {
				$('[name="id_lapkeu"]').val(data.id_lapkeu);
				$('[name="produk"]').val(data.produk);
				$('[name="tahun"]').val(data.tahun);
				$('[name="unit"]').val(data.unit);
				$('[name="harga"]').val(data.harga);
				$('[name="biaya_variabel"]').val(data.biaya_variabel);
				$('[name="biaya_tetap"]').val(data.biaya_tetap);
				$('[name="mc"]').val(data.mc);

				$('#modal_form').modal('show');
				$('.modal_title').text('Edit Data Penjualan');

			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('Error Get Data From Ajax');
			}
        })
    }
	function buat_rencana(id_lapkeu) {
		save_method = 'update';
		$('#form')[0].reset();
        $('#modal_form').modal('show');
		//load data
		$.ajax({
			url: "<?= base_url('penjualan/ajax_buat/') ?>" + id_lapkeu,
			type: "GET",
			dataType: "JSON",
			success: function (data) {
				$('[name="laba_bersih"]').val(data.laba_bersih);
				$('#modal_form').modal('show');
				$('.modal_title').text('Buat Rencana Penjualan');

			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('Gagal');
			}
		});
	} 

</script>-->
    </body>
</html>
