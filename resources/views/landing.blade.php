<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dynamic Online Bounding</title>
	
	<!-- Bootstrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700;800;900&display=swap" rel="stylesheet">
	<style>
		html, body {
			padding: 0;
			margin: 0;
			font-family: 'Nunito', sans-serif;
			font-size: 16px;
			color: white;
		}

		#landing-page {
			background-image: url(<?= asset('assets/bg.png')?>);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.logo-wrapper {
			background-color: white;
			width: 300px;
			height: 300px;
			border-radius: 50%;
			padding: 2rem;
		}

		.title {
			font-size: 2.5rem;
			background-color: transparent;
			border: 7px solid white;
			border-radius: 100px;
			padding-left: 6rem;
			padding-right: 6rem;
		}

		.mini-text {
			font-size: 1.2rem;
		}

		.btn-rounded {
			border-radius: 30px;
			font-size: 1.5rem;
			letter-spacing: .1rem;
			background-color: #083FC4;
			border-color: #083FC4;
		}

		.made-wrapper {
			background-color: white;
			max-width: 600px;
			max-height: 200px;
			border-radius: 100px;
		}
		
		.mini-logo {
			height: 100px;
		}

		@media screen and (max-width: 425px) {
			html, body {
				font-size: 12px;
			}

			.logo-wrapper {
				width: 200px;
				height: 200px;
				padding: 1.5rem;
			}

			.title {
				border: none;
				padding-left: 1rem;
				padding-right: 1rem;
			}
			
			.btn-rounded {
				font-size: 1.7rem;
				padding: .8rem 7rem !important;
			}

			.made-wrapper {
				max-width: 400px;
				max-height: 100px;
			}

			.mini-logo {
				height: 80px;
			}

			.mini-text {
				font-size: 1.3rem;
				margin-bottom: 1.5rem;
			}
		}
	</style>
</head>
<body>
	<section id="landing-page" class="w-100 h-100">
		<div class="container">
			<div class="vh-100 d-flex align-items-center justify-content-center flex-column">
				<div class="logo-wrapper d-flex justify-content-center align-items-center">
					<!-- <img class="img-fluid" id="main-logo" src="asset/logo/dynamic.png" alt="dynamic"> -->
					<img class="img-fluid" id="main-logo" src="{{ asset('assets/logo/dynamic.png') }}" alt="dynamic">
				</div>
				<div class="text-center my-5 title fw-bolder py-3">
					Selamat Datang di <br>
					Dynamic Online Bounding 2021
				</div>
				<div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
					<button class="btn btn-rounded btn-primary py-2 px-5 fw-bolder me-sm-3 mb-5 mb-sm-0">Masuk</button>
					<button class="btn btn-rounded btn-primary py-2 px-5 fw-bolder ms-sm-3 mb-5 mb-sm-0">Daftar</button>
				</div>
				<div class="text-center mt-3">
					<p class="mini-text fw-bolder">Made By :</p>
					<div class="made-wrapper px-5 py-2">
						<div class="row">
							<div class="col-6">
								<img class="img-fluid mini-logo" src="{{ asset('assets/logo/pens.png') }}" alt="pens">
							</div>
							<div class="col-6">
								<img class="img-fluid mini-logo" src="{{ asset('assets/logo/himit.png') }}" alt="himit">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>