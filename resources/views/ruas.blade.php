<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Ela Nadila</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{!! asset('img/icon.ico') !!}" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="{!! asset('js/plugin/webfont/webfont.min.js') !!}"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ["{!! asset('css/fonts.min.css') !!}"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/atlantis.min.css') !!}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{!! asset('css/demo.css') !!}">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<h3 style="color:#fff;"> Ela Nadila</h3>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">

				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">

			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="{{route('home')}}">
								<i class="fas fa-home"></i>
								<p>Home</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('ruas')}}">
								<i class="fas fa-table"></i>
								<p>Master Ruas</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Daftar Ruas</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="align-items-center">
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Tambah Data
										</button>
										@if ($message = Session::get('success'))
										<div class="alert alert-success mt-4" role="alert">
											{{ $message }}
										</div>
										@endif
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
															Tambah</span>
														<span class="fw-light">
															Ruas
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>

												</div>
												<div class="modal-body">
													<!-- <p class="small">Create a new row using this form, make sure you fill them all</p> -->
													<form action="{{ route('add-ruas')}}" method="POST">
														@csrf
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Unit Kerja</label>
																	<select class="form-control" name="unit" id="formGroupDefaultSelect">
																		<option>Pilih Unit Kerja</option>
																		<option>Supervisor</option>
																		<option>Designer</option>
																		<option>Technician</option>
																		<option>Strategist</option>
																		<option>Producer</option>
																		<option>Orchestrator</option>
																		<option>Administrator</option>
																	</select>
																</div>
															</div>
															<div class="col-md-12">
																<div class="form-group form-group-default">
																	<label>Ruas</label>
																	<input type="text" name="ruas" class="form-control" placeholder="Masukkan Nama Ruas">
																</div>
															</div>
															<div class="col-md-12">
																<div class="form-group form-group-default">
																	<label for="exampleFormControlFile1">Gambar</label>
																	<input type="file" class="form-control-file" name="gambar">
																</div>
															</div>
															<div class="col-md-12">
																<div class="form-group form-group-default">
																	<label>Tanggal</label>
																	<input name="date_create" type="date" class="form-control" placeholder="fill office">
																</div>
															</div>
															<!-- <div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Status</label>
																	<select class="form-control" id="formGroupDefaultSelect">
																		<option>Aktif</option>
																		<option>Tidak Aktif</option>
																	</select>
																</div>
															</div> -->
														</div>
														<div class="modal-footer no-bd">
															<button type="submit" class="btn btn-primary">Simpan</button>
															<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
														</div>
													</form>
												</div>

											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Ruas</th>
													<th>Unit Kerja</th>
													<th>Gambar</th>
													<th>Tanggal</th>
													<th style="width: 10%">Aksi</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													<th>Ruas</th>
													<th>Unit Kerja</th>
													<th>Gambar</th>
													<th>Tanggal</th>
													<th style="width: 10%">Aksi</th>
												</tr>
											</tfoot>
											<tbody>
												@php $no = 1; @endphp
												@foreach($data as $item)
												<tr>
													<td>{{ $no++ }}</td>
													<td>{{ $item['ruas']}}</td>
													<td>{{ $item['unit']}}</td>
													<td><button class="btn btn-primary btn-sm">Preview Gambar</button></td>
													<td>{{ $item['date_create']}}</td>
													<td>
														<div class="form-button-action">
															<a href="{{ route('get.edit', $item['id'])}}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Ruas">
																<i class="fa fa-edit"></i>
															</a>
															<a href="{{ route('get.ruas', $item['id'])}}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail Ruas">
																<i class="fa fa-eye"></i>
															</a>
															<button data-id="{{ $item['id']}}" data-ruas="{{ $item['ruas']}}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger delete"  data-original-title="Hapus">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2022, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita - Ela Nadila</a>
					</div>
				</div>
			</footer>
		</div>

	</div>
	<!--   Core JS Files   -->
	<script src="{!! asset('js/core/jquery.3.2.1.min.js') !!}"></script>
	<script src="{!! asset('js/core/popper.min.js') !!}"></script>
	<script src="{!! asset('js/core/bootstrap.min.js') !!}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{!! asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') !!}"></script>

	<script src="{!! asset('js/plugin/sweetalert/sweetalert.min.js') !!}"></script>

	<!-- Datatables -->
	<script src="{!! asset('js/plugin/datatables/datatables.min.js') !!}"></script>
	<!-- Atlantis JS -->
	<script src="{!! asset('js/atlantis.min.js') !!}"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<!-- <script src="../../assets/js/setting-demo2.js"></script> -->
	<script>
		$(document).ready(function() {
			$('#basic-datatables').DataTable({});

			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});

						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
	<script>
		$('.delete').click(function() {
			var ruasid = $(this).attr('data-id');
			var ruas = $(this).attr('data-ruas');

			swal({
				title: 'Apakah Anda Yakin Ingin Menghapus Ruas Ini?',
				text: "Kamu akan Menghapus Data Ruas dengan Nama Ruas "+ruas+" ",
				type: 'warning',
				buttons: {
					cancel: {
						visible: true,
						text: 'Tidak',
						className: 'btn btn-danger'
					},
					confirm: {
						text: 'Ya',
						className: 'btn btn-success'
					}
				}
			}).then((willDelete) => {
				if (willDelete) {
					window.location = "delete/"+ruasid+""
					swal("Data berhasil dihapus!", {
						icon: "success",
						buttons: {
							confirm: {
								className: 'btn btn-success'
							}
						}
					});
				} else {
					swal("Data tidak jadi dihapus", {
						buttons: {
							confirm: {
								className: 'btn btn-success'
							}
						}
					});
				}
			});

		})
		//== Class definition

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	</script>
</body>

</html>