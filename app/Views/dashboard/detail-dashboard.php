<?= $this->extend('template/content') ?>

<?= $this->section('content') ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height print rounded">
                    <div class="card-header d-flex justify-content-between bg-primary header-invoice">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Invoice#1234567</h4>
                        </div>
                        <div class="invoice-btn">
                            <button type="button" class="btn btn-primary-dark mr-2"><i class="las la-print"></i> Print
                                Print</button>
                            <button type="button" class="btn btn-primary-dark"><i class="las la-file-download"></i>PDF</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Nama : Manik (PPIC)
                                    <span class="float-right">
                                        Tanggal Pengajuan : Sabtu, 13 Oktober 2023
                                    </span>
                                </h6>
                                <hr>
                                <p>Keterangan Pengajuan : It is a long established fact that a reader will be distracted by the readable content of a page when looking at
                                    its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                    opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive-sm">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Order Status</th>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Billing Address</th>
                                                <th scope="col">Shipping Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jan 17, 2016</td>
                                                <td><span class="badge badge-danger">Unpaid</span></td>
                                                <td>250028</td>
                                                <td>
                                                    <p class="mb-0">PO Box 16122 Collins Street West<br>Victoria 8007 Australia<br>
                                                        Phone: +123 456 7890<br>
                                                        Email: demo@example.com<br>
                                                        Web: www.example.com
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="mb-0">PO Box 16122 Collins Street West<br>Victoria 8007 Australia<br>
                                                        Phone: +123 456 7890<br>
                                                        Email: demo@example.com<br>
                                                        Web: www.example.com
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <b class="text-danger">Notes:</b>
                                <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page
                                    when looking
                                    at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                        </div>
                        <div class="row mt-4 mb-3">
                            <div class="offset-lg-8 col-lg-4">
                                <div class="or-detail rounded">
                                    <div class="p-3">
                                        <h5 class="mb-3">Order Details</h5>
                                        <div class="mb-2">
                                            <h6>Bank</h6>
                                            <p>Threadneedle St</p>
                                        </div>
                                        <div class="mb-2">
                                            <h6>Acc. No</h6>
                                            <p>12333456789</p>
                                        </div>
                                        <div class="mb-2">
                                            <h6>Due Date</h6>
                                            <p>12 August 2020</p>
                                        </div>
                                        <div class="mb-2">
                                            <h6>Sub Total</h6>
                                            <p>$4597.50</p>
                                        </div>
                                        <div>
                                            <h6>Discount</h6>
                                            <p>10%</p>
                                        </div>
                                    </div>
                                    <div class="ttl-amt py-2 px-3 d-flex justify-content-between align-items-center">
                                        <h6>Total</h6>
                                        <h3 class="text-primary font-weight-700">$4137.75</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
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
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('content_js'); ?>
<script type="text/javascript">
</script>
<?= $this->endSection(); ?>