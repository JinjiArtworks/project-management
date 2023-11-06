<?= $this->extend('template/content') ?>

<?= $this->section('content') ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-transparent card-block card-stretch card-height border-none">
                    <div class="card-body p-0 mt-lg-2 mt-0">
                        <h3 class="mb-3">Hello, Manik!</h3>
                        <p class="mb-0 ">Silahkan ajukan tiket jika memiliki permasalahan pada sistem.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-info-light">
                                        <img src="template/assets/images/product/1.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Total Sales</p>
                                        <h4>31.50</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-info iq-progress progress-1" data-percent="85">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-danger-light">
                                        <img src="template/assets/images/product/2.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Total Cost</p>
                                        <h4>$ 4598</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-danger iq-progress progress-1" data-percent="70">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-success-light">
                                        <img src="template/assets/images/product/3.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Product Sold</p>
                                        <h4>4589 M</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-success iq-progress progress-1" data-percent="75">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Pengaduan Memo (ditaruh di detail)</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton002" data-toggle="dropdown">
                                    This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton002">
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-inline p-0 m-0 w-100">
                            <li>
                                <div class="row align-items-top">
                                    <div class="col-md-3">
                                        <h6 class="mb-2">Sabtu, 13 October 2023</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media profile-media align-items-top">
                                            <div class="profile-dots border-primary mt-1"></div>
                                            <div class="ml-4">
                                                <a href="">
                                                    <h6 class=" mb-1"> Reschedule PPP </h6>
                                                </a>
                                                <p class="mb-0 font-size-14">Manik Yudistira (PPIC) - Tiara Cipta Nirwana</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="badge bg-warning mb-2  p-2">Status : Waiting Validation</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-top">
                                    <div class="col-md-3">
                                        <h6 class="mb-2">Senin, 15 October 2023</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media profile-media align-items-top">
                                            <div class="profile-dots border-primary mt-1"></div>
                                            <div class="ml-4">
                                                <a href="">
                                                    <h6 class=" mb-1"> Bug fitur x pada halaman x </h6>
                                                </a>
                                                <p class="mb-0 font-size-14">Manik Yudistira (PPIC) - Tiara Cipta Nirwana</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="badge bg-warning mb-2  p-2">Status : Waiting Validation</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-top">
                                    <div class="col-md-3">
                                        <h6 class="mb-2">Kamis, 17 October 2023</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media profile-media align-items-top">
                                            <div class="profile-dots border-primary mt-1"></div>
                                            <div class="ml-4">
                                                <a href="">
                                                    <h6 class=" mb-1"> Fitur X tidak berfungsi </h6>
                                                </a>
                                                <p class="mb-0 font-size-14">Manik Yudistira (PPIC) - Tiara Cipta Nirwana</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="badge bg-primary mb-2 p-2">Status : On Proccess</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title"> List Pengajuan</h4>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-sm-12 col-md-12">
                                <div class="user-list-files d-flex">
                                    <a class="bg-primary" href="javascript:void();">
                                        Print
                                    </a>
                                    <a class="bg-primary" href="javascript:void();">
                                        Excel
                                    </a>
                                    <a class="bg-primary" href="javascript:void();">
                                        Pdf
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-2">
                            <table class="data-tables table table-striped" role="grid" aria-describedby="user-list-page-info">
                                <thead>
                                    <tr class="ligth">
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Divisi</th>
                                        <th>Company</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><img class="rounded img-fluid avatar-40" src="template/assets/images/user/01.jpg" alt="profile"></td>
                                        <td>Manik Yudistira</td>
                                        <td>08214482020</td>
                                        <td>PPIC</td>
                                        <td>Tiara Cipta Nirwana</td>
                                        <td>2019/12/01</td>
                                        <td><span class="badge bg-warning">On Progress</span></td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('content_js'); ?>
<script type="text/javascript">
</script>
<?= $this->endSection(); ?>