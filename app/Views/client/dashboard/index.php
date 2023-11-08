<?= $this->extend('template/content') ?>

<?= $this->section('content') ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-transparent card-block card-stretch card-height border-none">
                    <div class="card-body p-0 mt-lg-2 mt-0">
                        <h3 class="mb-3">Hello, Client! <span class="float-right">Tiara Cipta Nirwana</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-info-light">
                                        <img src="template/assets/images/product/1.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Total Request</p>
                                        <h4>3</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-info iq-progress progress-1" data-percent="85">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-info-light">
                                        <img src="template/assets/images/product/1.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Request Pending</p>
                                        <h4>3</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-info iq-progress progress-1" data-percent="85">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-danger-light">
                                        <img src="template/assets/images/product/2.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">On Progress</p>
                                        <h4>3</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-danger iq-progress progress-1" data-percent="70">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-success-light">
                                        <img src="template/assets/images/product/3.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Request Complete</p>
                                        <h4>13</h4>
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
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">List Request </h4> 
                        </div>
                        <!-- <div class="card-header-toolbar d-flex align-items-center">
                            <a href="" class="btn btn-md btn-primary ml-2 " data-toggle="modal" data-target="#new-ticket">
                                <i class="fa-solid fa-ticket mb-1 mr-2" style="color: #ffffff;"></i>Buat Tiket
                            </a>
                        </div> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-2">
                            <table class="data-tables table table-striped" role="grid" aria-describedby="user-list-page-info">
                                <thead>
                                    <tr class="ligth">
                                        <th>Name</th>
                                        <th>Division</th>
                                        <th>Date Request</th>
                                        <th>Subject</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Manik Yudistira</td>
                                        <td>PPIC</td>
                                        <td>2019/12/01</td>
                                        <td>Reschedule</td>
                                        <td><span class="badge bg-red">Urgent</span></td>
                                        <td><span class="badge bg-warning">On Progress</span></td>
                                        <!-- <td>
                                            <form action="dashboard/detail-ticket/1">
                                                <div class="flex align-items-center list-user-action">
                                                    <button type="submit" class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="fa-regular fa-eye m-0 mb-1"></i></button>
                                                </div>
                                            </form>
                                        </td> -->
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
    image.onchange = evt => {
        const [file] = image.files
        if (file) {
            imgPreview.src = URL.createObjectURL(file)
        }
    }
</script>
<?= $this->endSection(); ?>