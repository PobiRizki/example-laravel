<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<title>List Mahasiswa</title>
</head>

<div class="container" style="margin-top: 10px; margin-bottom: 10px;">
		<div class="card" style="padding-left: 100px; padding-right: 100px;">
			<div class="row">
				<div class="col-md-12">
					<div class="jumbotron" style="background-color: #ffffff;">
						<center>
							<h1 style="font-weight: 100;">Layanan List Mahasiswa
								Mahasiswa</h1>
						</center>
					</div>
				</div>
			</div>

			<nav aria-label="Page navigation example">
			  <ul class="pagination justify-content-center">
          <table class="table table-bordered">
  <thead>
      <tr>
          <th>NO</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>jurusan</th>
					<th>Action</th>
      </tr>
  </thead>
	<?php $i=1; foreach ($mahasiswa as $user): ?>
  <tbody>
			<tr>
					<td>{{$i++}}</td>
					<td>{{$user->nama}}</td>
					<td>{{$user->nim}}</td>
					<td>{{$user->jurusan}}</td>
					<th>
								<a class="btn btn-outline-primary" href="EditMahasiswa/{{$user->id}}/edit" role="button">Edit</a>
								<a class="btn btn-outline-danger" href="HapusMahasiswa/{{$user->id}}" role="button">Hapus</a>
							</th>
			</tr>
  </tbody>
		<?php endforeach; ?>
</table>
			  </ul>
			</nav>
			<a class="btn btn-outline-secondary btn-lg btn-block" href="/" role="button">Back To Home</a>
			<hr>
		</div>
	</div>

</html>
