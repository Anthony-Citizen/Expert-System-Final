<!DOCTYPE html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Expert Auto Care - Home</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


	<link rel="stylesheet" href="{{asset('user_template')}}/assets/css/bootstrap-5.0.0-alpha-2.min.css" />
	<link rel="stylesheet" href="{{asset('user_template')}}/assets/css/LineIcons.2.0.css" />
	<link rel="stylesheet" href="{{asset('user_template')}}/assets/css/animate.css" />
	<link rel="stylesheet" href="{{asset('user_template')}}/assets/css/main.css" />
	<link rel="stylesheet" href="{{asset('user_template')}}/assets/css/input.css" />
</head>

<body>
	<!-- ========================= Header ========================= -->
	<header class="header">
		<div class="navbar-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="index.html">
								<img src="{{asset('user_template')}}/assets/img/logo/logo.png" alt="Logo" />
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
								<ul id="nav" class="navbar-nav ml-auto">
									<li class="nav-item">
										<a href="/">Home</a>
									</li>
									<li class="nav-item">
										<a href="/about">About Us</a>
									</li>
									<li class="nav-item">
										<a href="/tutorial">How it Works</a>
									</li>
									<li class="nav-item">
										<a href="/history">History</a>
									</li>
								</ul>
							</div>
							<!-- navbar collapse -->
						</nav>
						<!-- navbar -->
					</div>
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- navbar area -->
	</header>
	<!-- ========================= header end ========================= -->


	<section class="hero-section">
		<div class="container">
            <div class="row">
                <ul class="breadcrumb">
                    <li class="completed"><a href="javascript:void(0);">Data 1</a></li>
                    <li class="active"><a href="javascript:void(0);">Data 2</a></li>
                    <li><a href="javascript:void(0);">Data 3</a></li>
                    <li><a href="javascript:void(0);">Data 4</a></li>
                </ul>
            </div>
            <div class="card login-card">
                <div class="row no-gutters">
                        <div class="card-body">
                            <p class="login-card-description">Bagian mobil mana yang dirasa mengalami masalah?</p>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="min-height: 45px; font-size: 13px;">
                                        <option selected>Component</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <!--<input type="text" name="email" id="email" class="form-control" value="" placeholder="Email">
                                    <span class="help-block"></span>-->
                                </div>

                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Next">
                            </form>
                            <nav class="login-card-footer-nav">
                                <a href="#!">Terms of use.</a>
                                <a href="#!">Privacy policy</a>
                            </nav>
                        </div>
                    </div>
            </div>
        </div>
	</section>


	<!-- ========================= footer start ========================= -->
	<footer id="footer" class="footer">
		<div class="copy-right-wrapper">
			<p>Expert System Project Development</p>
		</div>
	</footer>

	<!-- ========================= footer end ========================= -->

	<!-- ========================= JS here ========================= -->
	<script src="{{asset('user_template')}}/assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
	<script src="{{asset('user_template')}}/assets/js/count-up.min.js"></script>
	<script src="{{asset('user_template')}}/assets/js/wow.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
