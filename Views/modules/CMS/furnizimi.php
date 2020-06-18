<section id="furnizimi">
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="card">
					<div class="card-body">
						<p class="font-weight-bold mb-5">Furnizim i ri</p>
						<form action="">
							<div class="d-lg-flex mb-4 mt-4">
								<div class="col-lg-4 col-md-12">
									<div class="form-group">
										<label for="">Emertimi i mallit</label>
										<select class="form-control">
											<option>Small select</option>
											<option>Small select</option>
											<option>Small </option>
											<option>Small </option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Qmimi i blerjes</label>
										<input type="number" min="1" class="form-control" name="" id=""
											placeholder="Qmimi i blerjes">
									</div>
									<div class="form-group">
										<label for="">Qmimi i shitjes</label>
										<input type="number" class="form-control" name="" id=""
											placeholder="Qmimi i shitjes">
									</div>

								</div>
								<div class="col-lg-4 mt-lg-0 mt-md-4 col-md-12">
									<div class="form-group">
										<label for="">Sasia</label>
										<input type="number" min="1" class="form-control" name="" id=""
											placeholder="Sasia">
									</div>
									<div class="form-group">
										<label for="">Shifra fatures</label>
										<input type="number" min="1" class="form-control" name="" id=""
											placeholder="Shifra fatures">
									</div>
									<div class="form-group">
										<label for="">Emri i furnitorit</label>
										<input type="text" min="1" class="form-control" name="" id=""
											placeholder="Emri i furnitorit">
									</div>
								</div>
								<div class="col-lg-4 col-md-12 mt-lg-0 mt-md-4">
									<div class="form-group">
										<label for="">Data</label>
										<input type="text" class="form-control wu-input border-gray" date="datepicker"
											id="date" placeholder="Filtro me date">
									</div>
									<button class="btn custom-btn mt-3 w-100">Shto ne fature</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-2 mt-1">
				<div class="">
					<a href="veshtrimi-faturave" class="btn">
						<p class="mt-3">Veshtrimi i faturave</p>
					</a>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 mt-5">
				<div class="card custom-card">
					<div class="card-body">
						<p class="font-weight-bold">Furnzim i ri </p>
						<div class="row">
							<div class="col-lg-4 col-md-8 col-12">
								<div class="form-group d-flex">
									<input type="text" class="form-control custom-search" placeholder="Search"
										name="search">
									<i class="fa fa-search icon-search"></i>
								</div>
							</div>
							<div class="col-lg-8 col-md-4">
								<div class="cus-btn-furnizimi float-right">
									<button class="btn mb-sm-0 mb-3">Mbyll faturen</button>
								</div>
							</div>
						</div>
						<div class="custom-table-scroll">
							<table class="table col-md-table-responsive">
								<thead>
									<tr>
										<th>ID</th>
										<th>Emri i produkti</th>
										<th>Qmimi blerjes </th>
										<th>Qmimi i shitjes</th>
										<th>Sasia</th>
										<th>Vlera Blerse</th>
										<th>Vlera shitese</th>
										<th>Opcione</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Pantolla me vija</td>
										<td>223242</td>
										<td>29.99$</td>
										<td>2copa</td>
										<td>222</td>
										<td>3333</td>
										<td>
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
									<label for="">Qmimi blerjes</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Qmimi i shitjes</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group mt-3">
									<label for="">Sasia</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Vlera Blerse</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group">
									<label for="">Vlera shitese</label>
									<input type="text" class="form-control" name="" id="">
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