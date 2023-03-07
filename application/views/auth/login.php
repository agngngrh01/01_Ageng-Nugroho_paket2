<!DOCTYPE html>
<html>

<head>
	<title>Aplikasi Pengaduan Masyarakat | Login Page</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/bootstrap/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/bootstrap/'); ?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('asset/sbadmin/vendor/fontawesome-free/css/all.min.css'); ?>">
	<style>
		form {
			text-align: center;
		}
	</style>
</head>

<body style="background-image:url(images/alam2.jpg); background-size:cover;">

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

	<div class="col-lg-7">

		<div>
			<div >
				<!-- Nested Row within Card Body -->
				
					<div class="col-lg">
						<div class="p-5">
							<div class="text-center">
								<body>
								<h3 style="color:#F6FBFC";>Aplikasi Pengaduan Masyarakat</h3>
								</body>
								<h4 style="color:#F6FBFC";>Login Page</h4>
								
							</div>

							<?php if ($this->session->flashdata('true')) : ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<?= $this->session->flashdata('true'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php elseif ($this->session->flashdata('false')) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<?= $this->session->flashdata('false'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php endif; ?>

						<form action="<?= base_url('auth'); ?>" method="post">
							<div class="form-group">
								<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
								<input type="text" name="username" class="form-control" placeholder="Username" id="form" autocomplete="off">
							</div>

							<div class="form-group">
								<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
								<input type="password" name="password" class="form-control" placeholder="Password" id="form">
							</div>
							<button type="submit" id="btn" class="btn bg-success">Login</button>
							<p style="color:#F6FBFC"; class="text-center">Belum punya akun, <a style="color:#03691D;"href="<?= base_url('auth/register'); ?>">Daftar</a> di sini</p>
						</form>
						</div>
					</div>
			</div>
		</div>

	</div>

</div>

</div>

	<script src="<?= base_url('asset/bootstrap/'); ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('asset/bootstrap/'); ?>js/jquery.js"></script>
</body>

</html>