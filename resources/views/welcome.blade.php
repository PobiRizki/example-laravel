  <!doctype html>
  <html lang="{{ app()->getLocale() }}">

          <!-- Fonts -->
          <head>
          <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
          <link rel="stylesheet"	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
          <meta http-equiv="content-type"content="application/xhtml+xml; charset=UTF-8" />
          <title>Hello Laravel</title>
          </head>

          <body>
  	<div class="container" style="margin-top: 10px; margin-bottom: 10px;">
  		<!--Row with two equal columns-->
  		<div class="card" style="padding-left: 100px; padding-right: 100px;">
  			<div class="row">
  				<div class="col-md-12">
  					<div class="jumbotron" style="background-color: #ffffff;">
  						<center>
  							<img
  								src="https://www.codeforest.net/wp-content/uploads/2013/04/laravel-logo-big-570x398.png"
  								class="img-rounded" alt="Rounded Image"
  								style="heighet: 40%; width: 40%;">
  						</center>
  					</div>
  				</div>
  			</div>
  			<hr>
  			<div class="row">
  				<div class="col-md-12">
  					<center>
  						<p style="font-weight: 500;">Servis Mahasiswa</p>
  						<center>
  				</div>
  			</div>
  			<hr>
  			<div class="row">
  				<table class="table">
  					<thead>
  						<tr>
  							<th>NO</th>
  							<th>Tambah Mahasiswa</th>
  							<th>link</th>
  						</tr>
  					</thead>
  					<tbody>
  						<tr>
  							<td>2</td>
  							<td>Tambah Mahasiswa</td>
  							<td><a href="\TambahMahasiswa">Tambah Mahasiswa</a></td>
  						</tr>
  					</tbody>
  					<tbody>
  						<tr>
  							<td>3</td>
  							<td>List Mahasiswa</td>
  							<td><a href="\ListMahasiswa">List Mahasiswa</a></td>
  						</tr>
  					</tbody>
  					<!-- <tbody>
  						<tr>
  							<td>4</td>
  							<td>Hapus Mahasiswa</td>
  							<td><a href="\ListMahasiswa">Hapus Mahasiswa</a></td>
  						</tr>
  					</tbody> -->
  				</table>
  			</div>
  			<hr>
  		</div>
  	</div>
  </body>

          <!-- Styles -->
          <!-- <style>
              html, body {
                  background-color: #fff;
                  color: #636b6f;
                  font-family: 'Raleway', sans-serif;
                  font-weight: 100;
                  height: 100vh;
                  margin: 0;
              }

              .full-height {
                  height: 100vh;
              }

              .flex-center {
                  align-items: center;
                  display: flex;
                  justify-content: center;
              }

              .position-ref {
                  position: relative;
              }

              .top-right {
                  position: absolute;
                  right: 10px;
                  top: 18px;
              }

              .content {
                  text-align: center;
              }

              .title {
                  font-size: 84px;
              }

              .links > a {
                  color: #636b6f;
                  padding: 0 25px;
                  font-size: 12px;
                  font-weight: 600;
                  letter-spacing: .1rem;
                  text-decoration: none;
                  text-transform: uppercase;
              }

              .m-b-md {
                  margin-bottom: 30px;
              }
          </style>
      </head>
      <body>
          <div class="flex-center position-ref full-height">
              @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                          <a href="{{ url('/home') }}">Home</a>
                      @else
                          <a href="{{ route('login') }}">Login</a>
                          <a href="{{ route('register') }}">Register</a>
                      @endauth
                  </div>
              @endif

              <div class="content">
                  <div class="title m-b-md">
                      Laravel
                  </div>

                  <div class="links">
                      <a href="https://laravel.com/docs">Documentation</a>
                      <a href="https://laracasts.com">Laracasts</a>
                      <a href="https://laravel-news.com">News</a>
                      <a href="https://forge.laravel.com">Forge</a>
                      <a href="https://github.com/laravel/laravel">GitHub</a>
                  </div>
              </div>
          </div>
      </body> -->
  </html>
