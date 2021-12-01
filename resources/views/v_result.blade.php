<!DOCTYPE html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Expert Auto Care - Home</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('user_template')}}/assets/img/favicon.ico" />

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
							<a class="navbar-brand" href="/">
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
                    @for ($i = 1; $i < $connector->seq; $i++)
                        <li class="completed"><a href="javascript:void(0);">Data {{$i}}</a></li>
                    @endfor
                    <li class="active"><a href="javascript:void(0);">Solusi</a></li>
                </ul>
            </div>
            <div class="card login-card">
                <div class="row no-gutters">
                        <div class="card-body">
                            <p class="login-card-description">Komponen kendaraan yang rusak : {{$connector->Kerusakan}}</p>
                            <p class="login-card-description">Solusi yang direkomendasikan : {{$connector->Solusi}}</p>
                            <form method="" action="/">
                                <div class="form-group">
                                    <!--<label for="email" class="sr-only">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" value="" placeholder="Email">
                                    <span class="help-block"></span>-->

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input name="submit" id="no" class="btn login-btn btn-md" type="submit" value="Keluar" style="background-color: #FA1E0E; width:20%; margin-right:20px;">
                                    </div>
                                </div>
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
