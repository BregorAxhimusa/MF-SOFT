<section id="dashboard">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card " id="hdhsa">
					<div class="card-body">
						<div class="row">
							<div class="col-12-8 col-lg-8">
								<div class="card-body">
									<p class="font-weight-bold">Barkod ose artikull
										<button class="btn" id="zoom-in" onclick="openFullscreen();">
											<i class="fas fa-expand"></i>
										</button>
									</p>
									<div class="input-group">
										<input type="text" class="form-control"
											placeholder="Skano barkodin, ose sheno me fjale">
										<div class="input-group-append">
											<input type="number" min="1" class="form-control span" placeholder="Sasia">
											<button class="btn" type="button" id="button-addon2">Shto</button>
										</div>
									</div>
									<div class="custom-table-scroll col-lg-11 col-md-12 pr-3">
										<table class="table bg-white">
											<tbody>
												<tr>
													<td>102315 54879</td>
													<td>Pantolla me vija</td>
													<td>29.99$</td>
													<td>112copa</td>
													<td width="50px">
														<a href="">
															<i class="far fa-check-circle ml-2"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>102315 54879</td>
													<td>Pantolla me vija </td>
													<td>29.99$</td>
													<td>2copa</td>
													<td>
														<a href="">
															<i class="far fa-check-circle ml-2"></i>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card custom-card-js">
									<p class="font-weight-bold p-3">Totali:</p>
									<div class="d-flex mb-4 mt-2 custom-total">
										<div class="form-group">
											<input type="number" min="1"
												class="form-control input-total-dashboard text-center ml-0"
												placeholder="288.99$" name="" disabled>
										</div>
									</div>
								</div>
								<button class="btn w-100 custom-btn-pages text-white" data-toggle="modal"
									data-target="#pages">Pages</button>
								<div class="d-flex mt-4">
									<button class="btn btn-primary btn-printo">Printo faturen</button>
									<button class="btn btn-primary btn-lexok ml-auto" data-toggle="modal"
										data-target="#lexokuponat">Lexo kuponat</button>
								</div>
								<div class="d-flex mt-4">
									<button class="btn btn-primary btn-post" data-toggle="modal"
										data-target="#Post">Post</button>
									<button class="btn btn-primary btn-borgj ml-auto" data-toggle="modal"
										data-target="#Borgj">Borgj</button>
									<button class="btn btn-primary btn-cash ml-auto" data-toggle="modal"
										data-target="#Cash">Cash</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card mt-5">
					<div class="card-body">
						<p class="font-weight-bold mt-2 ml-1">Në Faturë</p>
						<div class="custom-table-scroll">
							<table class="table bg-white">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nr.Serik</th>
										<th>Emri i produkti</th>
										<th>Qmimi</th>
										<th>Sasia</th>
										<th>Vlera</th>
										<th>Opcione</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>A000000001</td>
										<td>Pantolla me vija</td>
										<td>29.99$</td>
										<td>2copa</td>
										<td>49.99</td>
										<td>
											<a href="" data-toggle="modal" data-target="#exampleModal">
												<i class="far fa-edit ml-2 text-primary"></i>
											</a>
											<a href="">
												<i class="far fa-times-circle custom-delete ml-2"></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal POST-->
	<div class="modal fade right custom-modal-post" id="Post" tabindex="-1" role="dialog"
		aria-labelledby="custom-modal-post" aria-hidden="true">
		<div class="modal-dialog modal-side modal-bottom-right modal-lg border-0" role="document">
			<div class="modal-content border-0">
				<div class="modal-header border-0">
					<p class="modal-title" id="custom-modal-post">Sheno detajet e klienti</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<img src="Views/assets/images/Icon feather-x-circle.png" alt="">
					</button>
				</div>
				<div class="modal-body border-0">
					<form action="">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Emri Mbiemri</label>
									<input type="text" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group">
									<label for="">Adresa</label>
									<input type="text" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nr Telefonit</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group">
									<label for="">Qmimi</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="">Koment</label>
									<div class="input-group w-100">
										<textarea class="form-control border-0" id="" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer border-0">
					<button type="button" class="btn w-50">Dergo</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Borgj-->
	<div class="modal fade custom-modal-post" id="Borgj" tabindex="-1" role="dialog"
		aria-labelledby="custom-modal-Borgj" aria-hidden="true">
		<div class="modal-dialog modal-lg border-0" role="document">
			<div class="modal-content border-0 borgj-custom">
				<div class="modal-header border-0">
					<p class="modal-title" id="custom-modal-Borgj">Borgj</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<img src="Views/assets/images/Icon feather-x-circle.png" alt="">
					</button>
				</div>
				<div class="modal-body border-0">
					<form action="">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Emri Mbiemri</label>
									<input type="text" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group">
									<label for="">Adresa</label>
									<input type="text" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nr Telefonit</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group">
									<label for="">Qmimi</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="">Koment</label>
									<div class="input-group w-100">
										<textarea class="form-control border-0 borgj-custom" id="" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer border-0">
					<button type="button" class="btn w-50">Regjistro</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Cash-->
	<div class="modal fade custom-modal-post" id="Cash" tabindex="-1" role="dialog" aria-labelledby="custom-modal-Cash"
		aria-hidden="true">
		<div class="modal-dialog modal-xl border-0" role="document">
			<div class="modal-content border-0 cash-custom">
				<div class="modal-header border-0">
					<p class="modal-title" id="custom-modal-Cash">Dalje cash</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<img src="Views/assets/images/Icon feather-x-circle.png" alt="">
					</button>
				</div>
				<div class="modal-body border-0">
					<form action="">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Emri Mbiemri</label>
									<input type="text" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group">
									<label for="">Adresa</label>
									<input type="text" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nr Telefonit</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group">
									<label for="">Qmimi</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="">Koment</label>
									<div class="input-group w-100">
										<textarea class="form-control border-0 cash-custom" id="" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer border-0">
					<button type="button" class="btn w-50">Dergo </button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Pages -->
	<div class="modal fade custom-modal-pages" id="pages" tabindex="-1" role="dialog" data-backdrop="static"
		data-keyboard="false" aria-labelledby="custompages" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content border-0">
				<div class="modal-body border-0">
					<div class="col-md-12">
						<form action="">
							<div class="d-flex mb-4 mt-2 custom-total">
								<div class="form-group d-flex">
									<label class="font-weight-bold ml-2 p-3 mt-4 pt-3">Kusuri</label>
									<input type="number" min="1"
										class="form-control custom-input-kursori w-75 ml-auto mt-4 mr-4" name=""
										id="kusuri" placeholder="0.0000" disabled>
									<div class="input-group-append custom-input-kusuri-euro">
										<span class="input-group-text text-left">&euro;</span>
									</div>
								</div>
							</div>
							<div class="form-group d-flex">
								<label for="" class="font-weight-bold ml-4 pr-2 mt-3">Totali</label>
								<input type="number" min="1" class="form-control w-75 ml-auto mt-0 mr-4 input-print"
									name="" id="total">
							</div>
							<div class="form-group d-flex">
								<label for="" class="font-weight-bold ml-4 mt-3 mr-1"
									style="margin-left: 28px!important;">Pagoi</label>
								<input type="number" min="1" class="form-control w-75 ml-auto mt-0 mr-4" name=""
									id="pagesa" oninput="llogaritkusurin();">
							</div>
						</form>
					</div>
					<div class="col-md-12 mb-3">
						<div class="d-flex">
							<div class="custom-control custom-checkbox">
								<label for="" class="font-weight-bold mt-0 ml-1 mr-5 mt-2">Printo</label>
								<input type="checkbox" class="checkit custom-control-input" name="smoking" id="smoking"
									value="1" onclick="yesno(this, 'yesnos');" />
								<label class="custom-control-label c-check" for="smoking" name="yesnos"
									id="yesnos"></label>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="btn w-100" data-dismiss="modal" onclick="getData()">Mbyll faturen</button>
			</div>
		</div>
	</div>
	<!-- Lexo Kuponat -->
	<div class="modal fade custom-modal-lexokuponat" id="lexokuponat" tabindex="-1" role="dialog"
		aria-labelledby="custom-lexo-kuponat" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content border-0">
				<div class="modal-header border-0">
					<p class="modal-title" id="custom-modal-Cash">Lexo kuponat ditore</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<img src="Views/assets/images/Icon-black-x-circle.png" alt="">
					</button>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<form action="">
									<div class="form-group d-flex">
										<input type="text" class="form-control w-md-100 custom-search" placeholder="Search"
											name="search">
										<i class="fa fa-search icon-search"></i>
									</div>
								</form>
								<div class="custom-table-scroll">
									<table class="table bg-white">
										<thead>
											<tr>
												<th>Emri i produkti</th>
												<th>Qmimi</th>
												<th>Sasia</th>
												<th>Vlera</th>
												<th>Opcione</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Pantolla me vija</td>
												<td>29.99$</td>
												<td>2copa</td>
												<td>49.99</td>
												<td width="20px">
													<a href="">
														<i class="far fa-times-circle custom-delete ml-4 mr-3"></i>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row ml-4 mt-5 custom-sell">
						<div class="col-lg-6 col-md-12">
							<p>Shitja Totale:
								<label for="">300.99$</label>
							</p>
							<p class="mt-lg-4 mt-md-0">Shitja PaTVSH:
								<label for="">380.99$</label>
							</p>
						</div>
						<div class="col-lg-6 col-md-12">
							<p>Shitja MeTVSH:
								<label for="">3000.99$</label>
							</p>
							<p class="mt-lg-4 mt-md-0">Fitimi:
								<label for="">59999.99$</label>
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer border-0">
					<button type="button" class="btn btn-close" data-dismiss="modal">Mbyll</button>
					<button type="button" class="btn btn-save-edit">
						<img src="Views/assets/images/Icon feather-printer.png" alt=""><label
							class="ml-2">Printo</label></button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Edit -->
	<div class="modal fade custom-modal-edit" id="exampleModal" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header border-0">
					<p class="modal-title" id="custom-modal-Cash">Perditso te dhenat</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<img src="Views/assets/images/Icon-black-x-circle.png" alt="">
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Emri Produktit</label>
									<input type="text" class="form-control" name="" id="">
								</div>
								<div class="form-group mt-3">
									<label for="">Qmimi</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Sasia</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group mt-3">
									<label for="">Vlera</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Numri Serik</label>
									<input type="number" min="1" class="form-control" name="" id=""
										placeholder="A000000001" disabled>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer border-0 mt-3">
					<button type="button" class="btn btn-close" data-dismiss="modal">Mbyll</button>
					<button type="button" class="btn btn-save-edit pt-lg-1 pt-md-0">Perditso Ndryshimet</button>
				</div>
			</div>
		</div>
	</div>
</section>
<style>
	:fullscreen {
		padding-top: 150px;
		padding-bottom: 1000px;
	}
</style>
<script>
	function llogaritkusurin() {
		var X500 = document.getElementById("total").value;
		var X200 = document.getElementById("pagesa").value;
		var X500Total = X500;
		var X200Total = X200;

		var totalArka = X200Total - X500Total;
		totalArka = Number(totalArka.toFixed(2));
		document.getElementById('kusuri').value = totalArka;
	}


	function openFullscreen() {
		var elem = document.getElementById("hdhsa");
		if (elem.requestFullscreen) {
			elem.requestFullscreen();
		} else if (elem.mozRequestFullScreen) {
			/* Firefox */
			elem.mozRequestFullScreen();
		} else if (elem.webkitRequestFullscreen) {
			/* Chrome, Safari & Opera */
			elem.webkitRequestFullscreen();
		} else if (elem.msRequestFullscreen) {
			/* IE/Edge */
			elem.msRequestFullscreen();
		}

	}
</script>