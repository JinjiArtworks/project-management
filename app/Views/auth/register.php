<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IT Support System</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="template/assets/images/favicon.ico" />
    <link rel="stylesheet" href="template/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="template/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="template/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="template/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="template/assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-lg-8">
                        <div class="card auth-card">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center auth-content">
                                    <div class="col-lg-7 align-self-center">
                                        <div class="p-3">
                                            <h2 class="mb-2">Sign Up</h2>
                                            <p>Create your POSDash account.</p>
                                            <form id="register-form">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label> Nama</label>
                                                            <input class="form-control" name="username" type="text" placeholder="Nama">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control" name="email" type="email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input class="form-control" name="password" type="password" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Divisi</label>
                                                            <input class="form-control" name="divisi" type="text" placeholder="Divisi">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Perusahaan</label>
                                                            <select name="company" class="selectpicker form-control" data-style="py-0">
                                                                <option value="" selected disabled>- Pilih Perusahaan -</option>
                                                                <?php foreach ($company as $value) : ?>
                                                                    <option value="1"><?= $value->company_name ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <!-- <div class="col-lg-12">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">I agree with the terms of use</label>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <button type="button" onclick="submitFormRegister()" class="btn btn-primary">Sign Up</button>
                                                <p class="mt-3">
                                                    Already have an Account <a href="/login" class="text-primary">Sign In</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 content-right">
                                        <img src="template/assets/images/login/01.png" class="img-fluid image-right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script type="text/javascript">
        const registerAction = async () => {
            var response = null
            try {
                var form = {};
                var formInput = $('#register-form').serializeArray();
                $.each(formInput, function(i, field) {
                    form[field.name] = field.value;
                });

                console.log(JSON.stringify(form))
                var url = "<?= url_to('register.registerAction') ?>";
                response = await axios.post(url, form);
                console.log(response);
                if (response.data.status) {
                    toastr.success(response.data.message, "Notification");
                    $('#register-form').trigger("reset");
                    // location.replace('/login');
                }
            } catch (error) {
                if (typeof error.response !== 'undefined' && typeof error.response.data.validations !== 'undefined') {
                    let validations = error.response.data.validations
                    Object.keys(validations).forEach(key => {
                        var idKey = key
                        $('#' + idKey).addClass('is-invalid');
                        $('#' + idKey).closest('.form-group').append('<span id="' + key + '-error" class="error invalid-feedback">' + validations[key] + '</span>');
                    });
                }
            }
        }
        const validationRegister = () => {
            $.confirm({
                closeIcon: true,
                title: 'Confirmation',
                type: 'info',
                content: 'Save this user?',
                typeAnimated: true,
                buttons: {
                    cancel: {
                        text: 'No',
                        action: function() {}
                    },
                    confirm: {
                        text: 'Yes',
                        btnClass: 'btn-primary',
                        action: function() {
                            registerAction()
                        }
                    },
                }
            });
        }

        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    validationRegister();
                }
            });
            $('#register-form').validate({
                rules: {
                    namaUser: {
                        required: true,
                    },
                    emailUser: {
                        required: true,
                    },
                    passwordUser: {
                        required: true,
                    },
                    statusUser: {
                        required: true,
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });

        function submitFormRegister() {
            validationRegister();
        }
    </script>

    <!-- Backend Bundle JavaScript -->
    <script src="template/assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="template/assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="template/assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="template/assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="template/assets/js/app.js"></script>
</body>

</html>