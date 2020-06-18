<section id="shfrytezuesit">
	<div class="container-fluid">
		<div class="card w-100">
			<div class="card-body">
				<p>Shfrytezues i ri</p>
				<div class="row">
					<div class="col-lg-4 col-md-6 pl-sm-5 pl-3 mt-5">
						<div class="form-group w-75">
							<label for="">Emri & Mbiemri</label>
							<input type="text" class="form-control" name="" id="">
						</div>
						<div class="form-group w-75">
							<label for="">Emri i Userit</label>
							<input type="text" class="form-control" name="" id="">
						</div>
						<div class="form-group w-75">
							<label for="">Njesia</label>
							<div class="form-group">
								<select class="form-control">
									<option>Zgjedh Njesin</option>
									<option>Njesia 1</option>
									<option>Njesia 2</option>
									<option>Njesia 3</option>
								</select>
							</div>
						</div>
						<div class="form-group w-75">
							<label for="">Fjalekalimi</label>
							<input type="password" class="form-control" name="" id="">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt-sm-5 mt-2">
						<div class="form-group w-75">
							<label for="" class="d-block">Fotografi</label>
							<input type="file" class="form-control custom-img" name="" id="images">
							<label for="images" class="label-img">
								<p class="float-right">Choose</p>
							</label>
							<label for="">Autorizimi</label>
							<div class="custom-control custom-checkbox mt-1">
								<input type="checkbox" class="custom-control-input" id="shtije-sh">
								<label class="custom-control-label " for="shtije-sh">Shitje</label>
							</div>
							<div class="custom-control custom-checkbox mt-3">
								<input type="checkbox" class="custom-control-input" id="furnizimi-sh">
								<label class="custom-control-label " for="furnizimi-sh">Furnizimi</label>
							</div>
							<div class="custom-control custom-checkbox mt-3">
								<input type="checkbox" class="custom-control-input" id="statistika-sh">
								<label class="custom-control-label " for="statistika-sh">Statistika</label>
							</div>
							<div class="custom-control custom-checkbox mt-3">
								<input type="checkbox" class="custom-control-input" id="shfrytezues-sh">
								<label class="custom-control-label " for="shfrytezues-sh">Shfrytezues</label>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 ml-lg-0 ml-md-4 mt-sm-5 mt-2">
						<div class="form-group">
							<img src="Views/assets/images/user123.png" class="custom-images-sh" alt="">
						</div>
						<div class="form-group">
							<button class="btn">Ruaje</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt-5 custom-card-shfrytezuesit">
			<div class="card-body">
				<p class="font-weight-bold mt-2 ml-1 custom-p-shfrytezuesit">Shfrytezuesit</p>
				<div class="custom-table-scroll">
					<table class="table bg-white">
						<thead>
							<tr>
								<th>ID</th>
								<th>Emri & Mbiemri</th>
								<th>Username</th>
								<th>Njesia</th>
								<th>Password</th>
								<th>Autorizimet</th>
								<th>Foto</th>
								<th>Opcione</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="pt-4">1</td>
								<td class="pt-4">Monika mugerini</td>
								<td class="pt-4">monika22</td>
								<td class="pt-4">Njesia 1</td>
								<td class="pt-4">2322323</td>
								<td class="pt-4">Shitje</td>
								<td>
									<img src="Views/assets/images/user123.png" class="img-circle ml-2" width="60%"
										height="50px" alt="">
								</td>
								<td class="pt-4">
									<a href="" data-toggle="modal" data-target="#custom-modal-sh">
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
	<!-- Modal -->
	<div class="modal fade custom-modal-edit" id="custom-modal-sh" tabindex="-1" role="dialog"
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
							<div class="col-lg-4 col-md-12 ml-md-0 mt-lg-5">
								<div class="form-group w-75">
									<label for="">Emri & Mbiemri</label>
									<input type="text" class="form-control" name="" id="">
								</div>
								<div class="form-group w-75">
									<label for="">Username</label>
									<input type="text" class="form-control" name="" id="">
								</div>
								<div class="form-group w-75">
									<label for="">Njesia</label>
									<div class="form-group">
										<select class="form-control">
											<option>Zgjedh Njesin</option>
											<option>Njesia 1</option>
											<option>Njesia 2</option>
											<option>Njesia 3</option>
										</select>
									</div>
								</div>
								<div class="form-group w-75">
									<label for="">Password</label>
									<input type="password" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 ml-md-0 mt-lg-5">
								<div class="form-group w-75">
									<label for="" class="d-block mb-3">Fotografi</label>
									<input type="file" class="form-control custom-img" name="" id="images">
									<label for="images" class="label-img">
										<p class="float-right">Choose</p>
									</label>
									<label for="">Autorizimi</label>
									<div class="custom-control custom-checkbox mt-1">
										<input type="checkbox" class="custom-control-input" id="shtije-sh-modal">
										<label class="custom-control-label" for="shtije-sh-modal">Shitje</label>
									</div>
									<div class="custom-control custom-checkbox mt-3">
										<input type="checkbox" class="custom-control-input" id="furnizimi-sh-modal">
										<label class="custom-control-label" for="furnizimi-sh-modal">Furnizimi</label>
									</div>
									<div class="custom-control custom-checkbox mt-3">
										<input type="checkbox" class="custom-control-input" id="statistika-sh-modal">
										<label class="custom-control-label" for="statistika-sh-modal">Statistika</label>
									</div>
									<div class="custom-control custom-checkbox mt-3">
										<input type="checkbox" class="custom-control-input" id="shfrytezues-sh-modal">
										<label class="custom-control-label"
											for="shfrytezues-sh-modal">Shfrytezues</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 ml-md-0 mt-lg-5">
								<div class="form-group">
									<img src="Views/assets/images/user123.png" width="75%" height="50%"
										class="custom-images-sh ml-4" alt="">
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