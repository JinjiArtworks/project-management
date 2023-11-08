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
                                            <h2 class="mb-2">Masuk</h2>
                                            <p>Masuk dulu, yuk!</p>
                                            <form id="login-form">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" type="email" placeholder=" ">
                                                            <label>Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" type="password" placeholder=" ">
                                                            <label>Password</label>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-6">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label control-label-1" for="customCheck1">Remember Me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a>
                                                    </div> -->
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sign In</button>
                                                <p class="mt-3">
                                                    Create an Account <a href="/register" class="text-primary">Sign Up</a>
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
    <script>
        const loginSubmit = async () => {
            $('#alert-login').hide();
            var url = "<?= url_to('login.loginAction') ?>"
            try {
                var params = $('#login-form').serialize()
                //console.log(params)
                var response = await axios.post(url, params)
                if (response.data) {
                    location.replace("/dashboard")
                }
            } catch (error) {
                console.log(error)
                if (typeof error.response !== 'undefined' && typeof error.response.data.validations !== 'undefined') {
                    let validations = error.response.data.validations
                    Object.keys(validations).forEach(key => {
                        var idKey = key
                        $('#' + idKey).addClass('is-invalid');
                        $('#' + idKey).closest('.form-group').append('<span id="' + key + '-error" class="error invalid-feedback">' + validations[key] + '</span>');
                    });
                } else if (typeof error.response !== 'undefined' && typeof error.response.data.message !== 'undefined') {
                    $('#alert-login').show();
                    $('#error-login-msg').html(error.response.data.message)
                }
            }
        }

        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    loginSubmit();
                }
            });
            $('#login-form').validate({
                rules: {
                    email: {
                        required: true,
                    },
                    password: {
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
    </script>
</body>

</html>