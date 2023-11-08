<?= $this->extend('template/content') ?>

<?= $this->section('content') ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">My Request</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <a href="" class="btn btn-md btn-primary ml-2 " data-toggle="modal" data-target="#new-ticket">
                                <i class="fa-solid fa-ticket mb-1 mr-2" style="color: #ffffff;"></i>Create Ticket
                            </a>
                        </div>
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
                                        <td><span class="badge bg-warning">On Progress</span></td>
                                        <td>
                                            <form action="/detail-ticket">
                                                <div class="flex align-items-center list-user-action">
                                                    <button type="submit" class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
                                                        <i class="fa-regular fa-eye m-0"></i>

                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manik Yudistira</td>
                                        <td>PPIC</td>
                                        <td>2019/12/01</td>
                                        <td>Reschedule</td>
                                        <td><span class="badge bg-warning">On Progress</span></td>
                                        <td>
                                            <form action="/detail-ticket">
                                                <div class="flex align-items-center list-user-action">
                                                    <button type="submit" class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
                                                        <i class="fa-regular fa-eye m-0"></i>
                                                    </button>
                                                </div>
                                            </form>
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


<div class="modal fade" id="new-ticket" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <h4 class="mb-3">Create ticket
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
<?= $this->endSection() ?>
<?= $this->section('content_js'); ?>
<script type="text/javascript">
</script>
<?= $this->endSection(); ?>