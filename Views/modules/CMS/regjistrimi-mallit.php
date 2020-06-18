<section id="regjistrimi-mallit">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<p class="font-weight-bold mb-5">Regjistro mall te ri</p>
						<form action="">
							<div class="d-lg-flex mb-4 mt-4">
								<div class="col-lg-4 col-md-12">
									<div class="form-group">
										<label for="">Barkodi</label>
										<input type="number" min="1" class="form-control" name="" id=""
											placeholder="Barkodi">
									</div>
									<div class="form-group">
										<label for="">Emertimi i artikullit</label>
										<input type="text" class="form-control" name="" id=""
											placeholder="Emertimi i artikullit">
									</div>
									<div class="form-group">
										<label for="">Qmimi i shitjes</label>
										<input type="number" min="1" class="form-control" name="" id=""
											placeholder="Qmimi i shitjes">
									</div>

								</div>
								<div class="col-lg-4 col-md-12">
									<div class="form-group">
										<label for="">Njesia</label>
										<select class="form-control">
											<option>Small select</option>
											<option>Small select</option>
											<option>Small </option>
											<option>Small </option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Perqindja TVSH</label>
										<input type="number" min="1" class="form-control" name="" id=""
											placeholder="Perqindja TVSH">
									</div>
									<div class="form-group">
										<label for="">Sasia minimale</label>
										<input type="number" min="1" class="form-control" name="" id=""
											placeholder="Sasia minimale">
									</div>

								</div>
								<div class="col-lg-4 col-md-12">
									<div class="form-group">
										<label for="">Pershkrimi rreth produktit</label>
										<textarea placeholder="Pershkrimi rreth produktit" id="" name=""></textarea>
									</div>
									<button class="btn custom-btn">Ruaje</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card mt-5 custom-card">
					<div class="card-body">
						<p class="font-weight-bold mt-2">Mall i ri</p>
						<div class="row">
							<div class="col-sm-4 col-12">
								<div class="form-group d-flex ml-1">
									<input type="text" class="form-control w-100 custom-search" placeholder="Search"
										name="search">
									<i class="fa fa-search icon-search"></i>
								</div>
							</div>
							<div class="col-sm-8 col-12">
								<div class="float-right">
									<a href="" class="btn btn-printo d-flex">
										<img src="Views/assets/images/Icon feather-printer.png" class="ml-3" alt="">
										<p class="ml-3 mt-1">Printo</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="custom-table-scroll table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Emri i produkti</th>
									<th>Barkodi</th>
									<th>Qmimi i shitjes</th>
									<th>Sasia</th>
									<th>Njesia</th>
									<th>Opcione</th>
								</tr>
							</thead>
							<tbody class="bg-white">
								<tr>
									<td>1</td>
									<td>Pantolla me vija</td>
									<td>A000000001</td>
									<td>29.99$</td>
									<td>2copa</td>
									<td>Cope</td>
									<td>
										<a href="" class="ml-2" data-toggle="modal" data-target="#barkodi">
											<img src="Views/assets/images/Icon feather-bar-chart.png" alt="">
										</a>
										<a href="" data-toggle="modal" data-target="#exampleModal">
											<i class="far fa-edit ml-2 text-primary"></i>
										</a>
										<a href="">
											<i class="far fa-times-circle ml-2"></i>
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
	<!-- Modal Barkodi -->
	<div class="modal fade custom-modal-barkod" id="barkodi" tabindex="-1" role="dialog"
		aria-labelledby="custom-modal-barkodi" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header border-0">
					<p class="modal-title" id="custom-modal-post">Shtypja e barkodeve</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<img src="Views/assets/images/Icon-black-x-circle.png" alt="">
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-4 col-md-12 ml-lg-auto ml-auto">
							<div class="form-group">
								<label for="">Barkodi</label>
								<input type="number" min="1" class="form-control" name="" id="">
							</div>
							<div class="form-group mt-5">
								<label for="">Emertimi i mallit</label>
								<input type="text" class="form-control" name="" id="">
							</div>
						</div>
						<div class="col-lg-4 col-md-12 ml-lg-auto ml-auto mr-lg-auto">
							<div class="form-group">
								<label for="">Modeli dimenzionet</label>
								<select class="form-control">
									<option>Small select</option>
									<option>Small select</option>
									<option>Small </option>
									<option>Small </option>
								</select>
							</div>
							<div class="form-group mt-5">
								<label for="">Sasia</label>
								<input type="number" min="1" class="form-control" name="" id="">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer border-0">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Shtyp</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Edit Information -->
	<div class="modal fade custom-modal-edit" id="exampleModal" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header border-0">
					<p class="modal-title" id="custom-modal-Cash">Perditso te Dhenat</p>
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
									<label for="">Barkodi</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Qimi i shitjes</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group mt-3">
									<label for="">Sasia</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Njesia</label>
									<select class="form-control">
										<option>Small select</option>
										<option>Small select</option>
										<option>Small </option>
										<option>Small </option>
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
	</div>
</section>