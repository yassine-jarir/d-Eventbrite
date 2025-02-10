<?php

print_r($events); 

use App\Core\AuthService;

if (!AuthService::isAuthenticated()) {
	header("Location: /login");
}
if (!AuthService::hasRole('organisateur')) {
	header("Location: /login");
}
?>

<?php include __DIR__ . "/../parties/_headerOrganisateur.php" ?>

<body class="bg-theme bg-theme16">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php include __DIR__ . "/../parties/_sideBarOrganisateur.php" ?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php include __DIR__ . "/../parties/_navbarOrganisateur.php" ?>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--end row-->
				<div class="card radius-10">
					<!-- <h6 class="mb-0 text-uppercase">Input Mask</h6> -->
					<hr />
					<div class="card">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">Orders Summary</h5>
							</div>
							<div class="ms-auto dropdown">
								<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
									<i class='bx-dots-horizontal-rounded font-22 text-option bx'></i>
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="javascript:;">Action</a>
									</li>
									<li><a class="dropdown-item" href="javascript:;">Another action</a>
									</li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="javascript:;">Something else here</a>
									</li>
								</ul>
							</div>
						</div>
						<hr />
						<div class="table-responsive">
							<table class="table mb-0 align-middle">
								<thead class="table-light">
									<tr>
										<th>Ev id</th>
										<th>Evenementes</th>
										<th>location</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#897656</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/chair.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Light Blue Chair</h6>
												</div>
											</div>
										</td>
										<td>Brooklyn Zeo</td>
										<td>
											<div class="d-flex align-items-center text-white"> <i
													class='me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked'></i>
												<span>Pending</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;" class=""><i
														class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i
														class='bx-down-arrow-alt bx'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#987549</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/shoes.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Green Sport Shoes</h6>
												</div>
											</div>
										</td>
										<td>Martin Hughes</td>
										<td>
											<div class="d-flex align-items-center text-white"> <i
													class='me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked'></i>
												<span>Dispatched</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;" class=""><i
														class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4">
													<i class='bx-down-arrow-alt bx'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#685749</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/headphones.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Red Headphone 07</h6>
												</div>
											</div>
										</td>
										<td>Shoan Stephen</td>
										<td>
											<div class="d-flex align-items-center text-white"> <i
													class='me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked'></i>
												<span>Completed</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;" class=""><i
														class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i
														class='bx-down-arrow-alt bx'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#887459</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/idea.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Mini Laptop Device</h6>
												</div>
											</div>
										</td>
										<td>Alister Campel</td>
										<td>
											<div class="d-flex align-items-center text-white"> <i
													class='me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked'></i>
												<span>Completed</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;" class=""><i
														class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i
														class='bx-down-arrow-alt bx'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#335428</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/user-interface.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Purple Mobile Phone</h6>
												</div>
											</div>
										</td>
										<td>Keate Medona</td>
										<td>
											<div class="d-flex align-items-center text-white"> <i
													class='me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked'></i>
												<span>Pending</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;" class=""><i
														class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i
														class='bx-down-arrow-alt bx'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#224578</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/watch.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Smart Hand Watch</h6>
												</div>
											</div>
										</td>
										<td>Winslet Maya</td>
										<td>
											<div class="d-flex align-items-center text-white"> <i
													class='me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked'></i>
												<span>Dispatched</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;" class=""><i
														class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bxs-message-square-minus'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#447896</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/tshirt.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">T-Shirt Blue</h6>
												</div>
											</div>
										</td>
										<td>Emy Jackson</td>
										<td>
											<div class="d-flex align-items-center text-white"> <i
													class='me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked'></i>
												<span>Pending</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;" class=""><i
														class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bxs-message-square-minus'></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

						<div class="card-body">
							<form>
								<div class="mb-3">
									<label class="form-label">Date:</label>
									<input type="date" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label">Date time:</label>
									<input type="datetime-local" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label">Email:</label>
									<input type="email" class="form-control" placeholder="example@gmail.com">
								</div>
								<div class="mb-3">
									<label class="form-label">Password:</label>
									<input type="password" class="form-control" value="........">
								</div>
								<div class="mb-3">
									<label class="form-label">Input File:</label>
									<input type="file" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label">Month:</label>
									<input type="month" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label">Search:</label>
									<input type="search" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label">Tel:</label>
									<input type="tel" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label">Time:</label>
									<input type="time" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label">Url:</label>
									<input type="url" class="form-control" placeholder="https://example.com/users/">
								</div>
								<div class="mb-3">
									<label class="form-label">Week:</label>
									<input type="week" class="form-control">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
				class='bxs-up-arrow-alt bx'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="ms-auto btn-close close-switcher" aria-label="Close"></button>
			</div>
			<hr />
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			</ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src=<?= $_ENV['PATH_LINK'] . "assetsOrg/js/bootstrap.bundle.min.js" ?>></script>
	<!--plugins-->
	<script src=<?= $_ENV['PATH_LINK'] . "assetsOrg/js/jquery.min.js" ?>></script>
	<script src=<?= $_ENV['PATH_LINK'] . "assetsOrg/plugins/simplebar/js/simplebar.min.js" ?>></script>
	<script src=<?= $_ENV['PATH_LINK'] . "assetsOrg/plugins/metismenu/js/metisMenu.min.js" ?>></script>
	<script src=<?= $_ENV['PATH_LINK'] . "assetsOrg/plugins/perfect-scrollbar/js/perfect-scrollbar.js" ?>></script>
	<script src=<?= $_ENV['PATH_LINK'] . "assetsOrg/plugins/apexcharts-bundle/js/apexcharts.min.js" ?>></script>
	<script src=<?= $_ENV['PATH_LINK'] . "assetsOrg/plugins/datatable/js/jquery.dataTables.min.js" ?>></script>
	<script src=<?= $_ENV['PATH_LINK'] . "assetsOrg/plugins/datatable/js/dataTables.bootstrap5.min.js" ?>></script>
	<script>
		$(document).ready(function () {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		});
	</script>
	<script src=<?= $_ENV['PATH_LINK'] . "assetsOrg/js/index.js" ?>></script>
	<!--app JS-->
	<script src=<?= $_ENV['PATH_LINK'] . "assetsOrg/js/app.js" ?>></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>
</body>

</html>