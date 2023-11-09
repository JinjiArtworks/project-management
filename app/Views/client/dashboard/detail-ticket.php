<?= $this->extend('template/content') ?>
<?= $this->section('content') ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height print rounded">
                    <div class="card-header d-flex justify-content-between bg-green rounded-top header-invoice">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Kode Tiket #323123 (tb_tiket)</h4>
                        </div>
                        <!-- <div class="invoice-btn">
                            <button type="button" class="btn btn-primary-dark mr-2">Urgent </button>
                            <button type="button" class="btn btn-primary-dark"><i class="las la-file-download"></i>PDF</button>
                        </div> -->
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Nama : Manik (PPIC)
                                    <span class="float-right">
                                        Tanggal Pengajuan : Sabtu, 13 Oktober 2023
                                    </span>
                                </h6>
                                <!-- <h6 class="mt-3">Company:</h6> <p>Tiara Cipta Nirwana</p> -->
                                <hr>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class=" col-lg-12">
                                <div class="or-detail rounded">
                                    <div class="p-3">
                                        <h5 class="mb-3">Detail Request
                                            <span class="badge bg-danger float-right">
                                                Urgent
                                            </span>
                                            <!-- Kalau status pengajuan belom di approve, bisa melakukan editing. -->
                                            <a href="" class="btn btn-sm bg-green ml-2 " data-toggle="modal" data-target="#edit-request-client">
                                                <i class="fa fa-pencil m-0 mb-1"></i>
                                                <!-- untuk mengubah staus menjadi done, ganti pencil jadi mark complete -->
                                            </a>
                                        </h5>
                                        <hr>
                                        <div class="mb-2 mt-4">
                                            <h6 class="text-green">Subject</h6>
                                            <p>Reschedule PPP</p>
                                        </div>
                                        <div>
                                            <h6 class="text-green mt-4">Deskripsi </h6>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page
                                                when looking
                                                at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                                as opposed to using 'Content here, content here', making it look like readable English</p>
                                        </div>
                                        <div>
                                            <h6 class="text-green mt-4">Lampiran File </h6>
                                            <img src="template/assets/images/logo.png" height="100px" width="100px" alt="">
                                            <p>MEMO.jpg</p>
                                            <a href="">Download File</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <b class="text-green">Remarks/Catatan dari ADMIN : </b>
                                <p class="mb-0">asdasdasdasdasd</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between bg-blue rounded-top header-invoice">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Proses Pengajuan </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Status :
                                    <span class="badge bg-yellow">On Progress 40%</span>
                                    <span class="float-right">
                                        Tanggal Pengajuan : Senin, 15 Oktober 2023
                                    </span>
                                </h6>
                                <h6 class="mb-0 mt-4">Priority :
                                    <span class="badge bg-red">Urgent</span>
                                    <span class="float-right">
                                        Deadline : Senin, 17 Oktober 2023
                                        <!-- BAGIAN ADMIN÷ -->
                                        <!-- <a href="" class="btn btn-sm bg-red ml-2 " data-toggle="modal" data-target="#add-dl-pengajuan">
                                            <i class="fa-regular fa-calendar m-0 mb-1"></i>
                                        </a>
                                        <a href="" class="btn btn-sm bg-green ml-2 " data-toggle="modal" data-target="#edit-pengajuan">
                                            <i class="fa fa-pencil m-0 mb-1"></i>
                                        </a> -->
                                    </span>
                                </h6>
                                <hr>
                                <!-- <h6 class="mt-3">Company:</h6> <p>Tiara Cipta Nirwana</p> -->
                            </div>
                        </div>
                        <div class="mt-4">
                            <ul class="list-inline p-0 m-0 w-100">
                                <li>
                                    <div class="row align-items-top">
                                        <div class="col-md-4">
                                            <h6 class="mb-2">Kamis, 11 October 2023</h6>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="media profile-media align-items-top">
                                                <div class="profile-dots border-primary mt-1"></div>
                                                <div class="ml-4">
                                                    <h6 class=" mb-1 text-primary"> Diajukan </h6>
                                                    <p class="mb-0 font-size-14"> Menunggu Approval </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row align-items-top">
                                        <div class="col-md-4">
                                            <h6 class="mb-2">Sabtu, 13 October 2023</h6>
                                            <small>Admin A (IT)</small>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="media profile-media align-items-top">
                                                <div class="profile-dots border-primary mt-1"></div>
                                                <div class="ml-4">
                                                    <h6 class=" mb-1 text-primary"> Diterima</h6>
                                                    <p class="mb-0 font-size-14"> Approvals </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row align-items-top">
                                        <div class="col-md-4">
                                            <h6 class="mb-2">Senin, 15 October 2023</h6>
                                            <small>Admin B (IT)</small>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="media profile-media align-items-top">
                                                <div class=" profile-dots border-primary mt-1"></div>
                                                <div class="ml-4">
                                                    <h6 class=" mb-1 text-primary"> On Progress 40% </h6>
                                                    <p class="mb-0 font-size-14">Proses input type </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kalao stautsnya sudah done, tidak usah ditampilkan -->
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between rounded-top bg-red">
                        <div class="header-title">
                            <h4 class="card-title">Update Progress Pengajuan </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="page-list-customers.html" >
                            <div class="row">
                                <!-- <input type="hidden" value="-"> ini jika client ingin menambahkan progress, status di defaultkan jadi - -->
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status *</label>
                                        <input type="text" class="form-control" placeholder="Status" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Insert File *</label>
                                        <br>
                                        <img src="template/assets/images/icon-file.png" width="100px" alt="">
                                        <br>
                                        <input type="file" placeholder="Enter Email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Remarks</label>
                                        <textarea class="form-control" rows="4" required></textarea>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-request-client" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <h4 class="mb-3">Edit your ticket
                        <div class="float-right">
                            <span data-dismiss="modal"><a href=""><i class="fa-solid fa-xmark"></i></a></span>
                        </div>
                    </h4>
                    <!-- <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div> -->
                    <hr>
                    <div class="content create-workform bg-body">
                        <div class="pb-3">
                            <label class="mb-2">Subject </label>
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="pb-3">
                            <label class="mb-2">Priority</label>
                            <select name="company" class="selectpicker form-control" data-style="py-0">
                                <option value="Urgent">Urgent</option>
                                <option value="Medium">Medium</option>
                                <option value="High Priority">High Priority</option>
                            </select>
                        </div>
                        <div class="pb-3">
                            <label class="mb-2">Description</label>
                            <textarea type="text" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="pb-3">
                            <label class="mb-2">Attach File</label>
                            <br>
                            <img src="template/assets/images/icon-file.png" id="imgPreview" width="150px" height="150px" class="mb-3">
                            <input type="file" id="file" name="files" required>
                        </div>
                        <hr>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap  justify-content-end">
                                <div class="btn btn-primary" data-dismiss="modal">Confirm</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- for admin side -->
<!-- <div class="modal fade" id="edit-pengajuan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <h4 class="mb-3">Update Data Pengajuan
                        <div class="float-right">
                            <span data-dismiss="modal"><a href=""><i class="fa-solid fa-xmark"></i></a></span>
                        </div>
                    </h4>
                    <hr>
                    <div class="content create-workform bg-body">
                        <div class="pb-3">
                            <label class="mb-2">Confirmation</label>
                            <select name="company" class="selectpicker form-control" data-style="py-0">
                                <option value="Diterima">Diterima</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                        </div>
                        <div class="pb-3">
                            <label class="mb-2">Status</label>
                            <select name="company" class="selectpicker form-control" data-style="py-0">
                                <option value="Done">Done</option>
                            </select>
                        </div>
                        <div class="pb-3">
                            <label class="mb-2">Remarks</label>
                            <textarea type="text" class="form-control" maxlength="100" placeholder="Masukkan Deskripsi"></textarea>
                        </div>
                        <hr>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap  justify-content-end">
                                <div class="btn btn-primary" data-dismiss="modal">Konfirmasi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- <div class="modal fade" id="add-dl-pengajuan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <h4 class="mb-3">Tambah Deadline Pengajuan
                        <div class="float-right">
                            <span data-dismiss="modal"><a href=""><i class="fa-solid fa-xmark"></i></a></span>
                        </div>
                    </h4>
                    <hr>
                    <div class="content create-workform bg-body">
                        <div class="pb-3">
                            <label class="mb-2">Estimation Deadline</label>
                            <input type="date" name="deadline" class="form-control">
                        </div>
                        <hr>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap  justify-content-end">
                                <div class="btn btn-primary" data-dismiss="modal">Konfirmasi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?= $this->endSection() ?>
<?= $this->section('content_js'); ?>
<script type="text/javascript">

</script>
<?= $this->endSection(); ?>