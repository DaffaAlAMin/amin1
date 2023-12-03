<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="asset/css/style.css">



</head>

<body style="background-color: #4e73df">

    <!-- header akhir -->

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            <div class="text-center text-muted mb-4">
                <h1 class="my-5" style="font-family: 'Bungee Shade';font-size:40px;">LOG-IN</h1>
              </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4"></h3>

                            </div>

                        </div>
                        <!-- <?= $this->session->flashdata('pesan'); ?>
		      			<?= $this->session->flashdata('gagal'); ?> -->

                        <form action="<?= base_url('index.php/user/aksi_login'); ?>" class="login-form" method="post">

                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                <input type="text" class="form-control rounded-left" placeholder="Username" required id="username" name="Username">
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input type="password" class="form-control rounded-left" placeholder="Password" required id="password" name="Password">
                            </div>
                            <div class="form-group d-flex align-items-center">

                                <div class="w-100 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary rounded submit">Login</button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->

   
    <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/popper.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/main.js"></script>
</body>