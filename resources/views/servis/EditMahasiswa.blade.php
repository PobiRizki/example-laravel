<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<title>Tambah Mahasiswa</title>
</head>
<body>
	<div class="container"style="
    margin-top: 10px; margin-bottom: 10px;
">
		<div class="card" style="padding-left: 100px; padding-right: 100px;">
			<div class="row">

				<div class="col-md-12">
					<div class="jumbotron" style="background-color: #ffffff;">
						<center>
							<h1 style="font-weight: 100;">Layanan Tambah Mahasiswa</h1>
						</center>
					</div>
				</div>
			</div>



			<form action="/EditMahasiswa/{{$mahasiswa->id}}" method="post">

				<div class="form-group">
					<label for="inputEmail">Nama</label> <input type="text"
						class="form-control" value="{{$mahasiswa->nama}}" name="nama" placeholder="Nama" required>
				</div>
				<div class="form-group">
					<label for="inputPassword">NIM</label> <input type="text"
						class="form-control" value="{{$mahasiswa->nim}}"name="nim" placeholder="NIM" required>
				</div>
				<div class="form-group">
					<label for="inputPassword">Jurusan</label> <input type="text"
						class="form-control" value="{{$mahasiswa->jurusan}}" name="jurusan" placeholder="Jurusan" required>
				</div>
				<button  class="btn btn-outline-primary btn-lg btn-block" name="name" role="submit">Edit mahasiswa</button>
          <?php //echo csrf_field(); ?>
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT"/>


			</form>
			<hr>
			<a class="btn btn-outline-secondary btn-lg btn-block" href="/" role="button">Back To Home</a>
			<hr>
		</div>
		</div>

</body>

</html>
