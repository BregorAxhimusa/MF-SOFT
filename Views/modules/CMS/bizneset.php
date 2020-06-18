<section id="administrata">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-11 col-md-12">
				<div class="card mt-sm-5 mt-0 biznesi-ri-res">
					<div class="card-body">
						<p>Te dhenat e Biznesit</p>
						<div class="custom-table-scroll">
							<table class="table bg-white mb-5">
								<thead>
									<tr>
										<th>ID</th>
										<th>Emri i biznesit</th>
										<th>Qyteti</th>
										<th>Adresa</th>
										<th>Banka</th>
										<th>Nr.Fiskal</th>
										<th>Nr.TVSH</th>
										<th>Nr.Telefonit</th>
										<th>Njesia</th>
										<th>Opcione</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>MFSOFT</td>
										<td>Ferizaj</td>
										<td>Ferizaj</td>
										<td>BKT</td>
										<td>3000</td>
										<td>321546</td>
										<td>044555005</td>
										<td>Njesia 1</td>
										<td width="105px">
											<a href="" data-toggle="modal" data-target="#custom-modal-b">
												<i class="far fa-edit ml-1 text-primary"></i>
											</a>
											<a href="">
												<i class="far fa-times-circle custom-delete ml-0"></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-1 col-md-12 ml-lg-0 ml-md-3 mt-md-1 mt-lg-5">
				<div class="form-group">
					<a type="button" class="btn is" data-toggle="modal" data-target="#shtonjesi">Shto Njesi</a>
				</div>
			</div>
			<div class="col-lg-11 col-md-12">
				<div class="card mt-sm-5 mt-0 biznesi-ri-res">
					<div class="card-body">
						<p>Te dhenat e Njesise</p>
						<div class="custom-table-scroll">
							<table class="table bg-white">
								<thead>
									<tr>
										<th>ID</th>
										<th>Emri Njesise</th>
										<th>Adresa</th>
										<th>Opcione</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Pika 1</td>
										<td>Ferizaj</td>
										<td>
											<a href="">
												<i class="far fa-times-circle custom-delete"></i>
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
	<!-- Modal -->
	<div class="modal fade custom-modal-edit" id="shtonjesi" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header border-0">
					<p class="modal-title" id="custom-modal-Cash">Shto te dhena per Njesite</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<img src="Views/assets/images/Icon-black-x-circle.png" alt="">
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="form-group">
							<label for="">Emri i Njesise</label>
							<input type="text" class="form-control" name="" id="">
						</div>
						<div class="form-group">
							<label for="">Adresa</label>
							<input type="text" class="form-control" name="" id="">
						</div>
					</div>
				</div>
				<div class="modal-footer border-0">
					<button type="button" class="btn btn-close" data-dismiss="modal">Mbyll</button>
					<button type="button" class="btn btn-save-edit pt-lg-1 pt-md-0">Shto Njesi</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade custom-modal-edit" id="custom-modal-b" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header border-0">
					<p class="modal-title" id="custom-modal-Cash">Perditeso te Dhenat</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<img src="Views/assets/images/Icon-black-x-circle.png" alt="">
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group w-75">
									<label for="">Emri i Biznesit*</label>
									<input type="text" class="form-control" name="" id="">
								</div>
								<div class="form-group w-75">
									<label for="">Qyteti</label>
									<select class="form-control">
										<option>Small select</option>
										<option>Small select</option>
										<option>Small </option>
										<option>Small </option>
									</select>
								</div>
								<div class="form-group w-75">
									<label for="">Adresa</label>
									<input type="text" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group w-75">
									<label for="">Banka</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group w-75">
									<label for="">Nr.Fiskal</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group w-75">
									<label for="">Nr.TVSH</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group w-75">
									<label for="">Nr.Telefonit</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group w-75">
									<label for="">Njesia e Pikave</label>
									<select class="form-control">
										<option>Zgjedh Njesin</option>
										<option>Njesia 1</option>
										<option>Njesia 2</option>
										<option>Njesia 3</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer border-0">
					<button type="button" class="btn btn-close" data-dismiss="modal">Mbyll</button>
					<button type="button" class="btn btn-save-edit pt-lg-1 pt-md-0">Perditso Ndryshimet</button>
				</div>
			</div>
		</div>
</section>