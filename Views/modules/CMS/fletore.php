<section id="fletore">
	<div class="container-fluid">
		<nav>
			<div class="nav nav-pills border-0 nav nav-tabs nav-justified" id="nav-tab" role="tablist">
				<a class="custom-btn-post mr-md-3 mr-lg-3 col-sm-6  col-lg-3 col-md-5" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
					<span class="float-left mt-1">Post</span>
					<i class="fas fa-mail-bulk mt-2 ml-3"></i>
					<span class="custom-pagesa float-right">222</span>
				</a>
				<a class=" custom-btn-borgj mr-md-0 mr-lg-3 col-lg-3 col-md-5" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
					<span class="float-left mt-1">Borgj</span>
					<i class="fas fa-money-check mt-2 ml-3"></i>
					<span class="custom-pagesa float-right">4440$</span>
				</a>
				<a class=" custom-btn-cash mr-md-1 col-lg-3 col-md-5" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
					<span class="float-left mt-1">Cash</span>
					<i class="fas fa-hand-holding-usd mt-2 ml-3"></i>
					<span class="custom-pagesa float-right">4440$</span>
				</a>
			</div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<div class="col-md-12">
					<div class="row">
						<div class="card custom-card">
							<div class="card-body">
								<div class="float-right">
									<button class="btn custom-btn">Te pa paguara</button>
								</div>
								<div class="col-md-12">
									<div class="card mt-5 custom-card border-0">
										<div class="card-body">
											<div class="custom-table-scroll1">
												<table class="table">
													<thead>
														<tr>
															<th>ID</th>
															<th>Emri & Mbiemri</th>
															<th>Adresa</th>
															<th>Nr.Telefoni</th>
															<th>Shuma</th>
															<th>Koment</th>
															<th colspan="2">Opcione</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Filan Hasani</td>
															<td>Prishtine mati 1 </td>
															<td>04411234</td>
															<td>332</td>
															<td>Thirre dy her </td>
															<td class="">
																<a href="" data-toggle="modal" data-target="#post-furnizimi">
																	<i class="far fa-edit ml-2 text-primary" ></i>
																</a>
																<a href="" >
																	<i class="far fa-times-circle ml-2"></i>
																</a>
															</td>
															<td class="custom-td">
																<button class="complete btn btn-sm " data-complete="showTick-1" onclick="posta()">
																<span class="pagesa" id="pagesa">Pages</span>
																<div class="complete-tick" id="trick">
																	<img src="Views/assets/images/icon-check2.png" class="" alt="">
																</div>
																</button>
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
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				<div class="col-md-12">
					<div class="row">
						<div class="custom-card cos-borgj">
							<div class="card-body">
								<div class="float-right">
									<button class="btn custom-btn">Te pa paguara</button>
								</div>
								<div class="col-md-12">
									<div class="card mt-5 custom-card border-0 cos-borgj">
										<div class="card-body">
											<div class="custom-table-scroll1">
												<table class="table table-borgj">
													<thead>
														<tr>
															<th>ID</th>
															<th>Emri & Mbiemri</th>
															<th>Adresa</th>
															<th>Nr.Telefoni</th>
															<th>Shuma</th>
															<th>Koment</th>
															<th colspan="2">Opcione</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Filan Hasani</td>
															<td>Prishtine mati 1 </td>
															<td>04411234</td>
															<td>332</td>
															<td>Thirre dy her </td>
															<td>
																<a href="" data-toggle="modal" data-target="#borgj-furnizimi">
																	<i class="far fa-edit ml-2 text-primary"></i>
																</a>
																<a href="" >
																	<i class="far fa-times-circle ml-2"></i>
																</a>
															</td>
															<td class="custom-td">
																<button class="complete btn btn-sm " data-complete="showTick-1" onclick="borgji()">
																<span class="pagesa" id="borgj">Pages</span>
																<div class="complete-tick" id="trick1">
																	<img src="Views/assets/images/icon-check2.png" class="" alt="">
																</div>
																</button>
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
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
				<div class="col-md-12">
					<div class="row">
						<div class="card custom-card cos-cash">
							<div class="card-body">
								<div class="float-right">
									<button class="btn custom-btn">Te pa paguara</button>
								</div>
								<div class="col-md-12">
									<div class="card mt-5 custom-card border-0 cos-cash">
										<div class="card-body">
											<div class="custom-table-scroll1">
												<table class="table table-cash">
													<thead>
														<tr>
															<th>ID</th>
															<th>Emri & Mbiemri</th>
															<th>Adresa</th>
															<th>Nr.Telefoni</th>
															<th>Shuma</th>
															<th>Koment</th>
															<th colspan="2">Opcione</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Filan Hasani</td>
															<td>Prishtine mati 1 </td>
															<td>04411234</td>
															<td>332</td>
															<td>Thirre dy her </td>
															<td>
																<a href="" data-toggle="modal" data-target="#cash-furnizimi">
																	<i class="far fa-edit ml-2 text-primary"></i>
																</a>
																<a href="" >
																	<i class="far fa-times-circle ml-2"></i>
																</a>
																<td class="custom-td">
																	<button class="complete btn btn-sm " data-complete="showTick-1" onclick="keshi()">
																	<span class="pagesa" id="keshi">Pages</span>
																	<div class="complete-tick" id="trick2">
																		<img src="Views/assets/images/icon-check2.png" class="" alt="">
																	</div>
																	</button>
																</td>
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
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Edit -->
	<div class="modal fade custom-modal-edit" id="post-furnizimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
									<label for="">Emri & Mbiemri</label>
									<input type="text" class="form-control" name="" id="">
								</div>
								<div class="form-group mt-3">
									<label for="">Adresa</label>
									<input type="text" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Nr.Telefoni</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
								<div class="form-group mt-3">
									<label for="">Shuma</label>
									<input type="number" min="1" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Koment</label>
									<input type="text" class="form-control" name="" id="">
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
	<!-- Modal Edit -->
	<div class="modal fade custom-modal-edit" id="borgj-furnizimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
									<label for="">Adresa</label>
									<input type="text" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Nr.Telefoni</label>
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
				<div class="modal-footer border-0 mt-3">
					<button type="button" class="btn btn-close" data-dismiss="modal">Mbyll</button>
					<button type="button" class="btn btn-save-edit pt-lg-1 pt-md-0">Perditso Ndryshimet</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Edit -->
	<div class="modal fade custom-modal-edit" id="cash-furnizimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
									<label for="">Adresa</label>
									<input type="text" class="form-control" name="" id="">
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mt-md-0 mt-lg-5">
								<div class="form-group">
									<label for="">Nr.Telefoni</label>
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
				<div class="modal-footer border-0 mt-3">
					<button type="button" class="btn btn-close" data-dismiss="modal">Mbyll</button>
					<button type="button" class="btn btn-save-edit pt-lg-1 pt-md-0">Perditso Ndryshimet</button>
				</div>
			</div>
		</div>
	</div>
</section>