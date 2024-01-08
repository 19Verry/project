<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-5">
			<div class="card shadow-lg border-0 py-4 rounded-lg mt-5">
				<div class="card-header">
					<h1 class="text-center font-weight-light my-4">Login</h1>
				</div>
				<div class="card-body">
					<?= $this->session->flashdata('message'); ?>
					<form method="post" action="<?= base_url('auth') ?>">
						<div class="form-floating mb-3">
							<input class="form-control" value="<?= set_value('username') ?>" id="inputusername" name="username" type="text"
								placeholder="Masukkan Username anda" />
								<?= form_error('username','<small class="text-danger pl-3>','</small>') ?>
							<label for="inputusername">username </label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" value="<?= set_value('nama') ?>" id="inputPassword" name="password" type="password"
								placeholder="Password" />
								<?= form_error('password', '<small class="text-danger pl-3>', '</small>') ?>
							<label for="inputPassword">Password</label>
						</div>
						<!-- <div class="form-check mb-3">
							<input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
							<label class="form-check-label" for="inputRememberPassword">Remember
								Password</label>
						</div> -->
						<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
							<a class="small" style="text-decoration:none" href="password.html"></a>
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
