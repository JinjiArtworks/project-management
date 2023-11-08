<?= $this->extend('template/content') ?>

<?= $this->section('content') ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">

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
                                        <p class="mb-2">Total Pengajuan</p>
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
                                        <p class="mb-2">Pending</p>
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
                                        <p class="mb-2">Selesai</p>
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
                            <h4 class="card-title">Daftar Pengajuan Memo - NCK </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-2">
                            <table class="data-tables table table-striped" role="grid" aria-describedby="user-list-page-info">
                                <thead>
                                    <tr class="ligth">
                                        <th>Nama</th>
                                        <th>Divisi</th>
                                        <th>Subject</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Manik Yudistira</td>
                                        <td>PPIC</td>
                                        <td>Reschedule</td>
                                        <td>2019/12/01</td>
                                        <td><span class="badge bg-warning">On Progress</span></td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <form action="dashboard/detail-ticket/1">
                                                    <div class="flex align-items-center list-user-action">
                                                        <button type="submit" class="btn btn-sm bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Approve">
                                                            <i class="fa-solid fa-check fa-lg m-0 mb-1"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                <form action="dashboard/detail-ticket/1">
                                                    <div class="flex align-items-center list-user-action">
                                                        <button type="submit" class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
                                                            <i class="fa-regular fa-eye fa-lg m-0 mb-1"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manik Yudistira</td>
                                        <td>PPIC</td>
                                        <td>Tiara Cipta Nirwana</td>
                                        <td>2019/12/01</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <form action="/detail-ticket">
                                                    <div class="flex align-items-center list-user-action">
                                                        <button type="submit" class="btn btn-sm bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Approve">
                                                            <i class="fa-solid fa-check fa-lg m-0 mb-1"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                <form action="/detail-ticket">
                                                    <div class="flex align-items-center list-user-action">
                                                        <button type="submit" class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
                                                            <i class="fa-regular fa-eye fa-lg m-0 mb-1"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manik Yudistira</td>
                                        <td>PPIC</td>
                                        <td>Tiara Cipta Nirwana</td>
                                        <td>2019/12/01</td>
                                        <td><span class="badge bg-warning">On Progress</span></td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <form action="/detail-ticket">
                                                    <div class="flex align-items-center list-user-action">
                                                        <button type="submit" class="btn btn-sm bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Approve">
                                                            <i class="fa-solid fa-check fa-lg m-0 mb-1"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                <form action="/detail-ticket">
                                                    <div class="flex align-items-center list-user-action">
                                                        <button type="submit" class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
                                                            <i class="fa-regular fa-eye fa-lg m-0 mb-1"></i>
                                                        </button>
                                                    </div>
                                                </form>
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