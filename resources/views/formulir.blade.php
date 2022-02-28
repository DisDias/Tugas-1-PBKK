<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: darkslategray;
        }
        footer {
            color: aliceblue;
            font-size: 14px;
        }
    </style>

</head>
<body>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Selamat Datang, Daftarkan Diri Anda!!!</h3>
                            <h6 class="text-center">Isikan data diri Anda dengan benar!</h6>
 
                            <br/>
                             <!-- form validasi -->
                             <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                            @error('nama')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="email">Email</label>
                                               <input class="form-control" type="text" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                                                @error('email')
                                                         <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="usia">Usia</label>
                                               <input class="form-control" type="text" name="usia" value="{{ old('usia') }}" class="@error('usia') is-invalid @enderror">
                                               @error('usia')
                                                          <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                         </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}" class="@error('alamat') is-invalid @enderror">
                                            @error('alamat')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Foto Diri</label>
                                            <input class="form-control-file" type="file" name="image" value="{{ old('image') }}" class="@error('image') is-invalid @enderror">
                                            @error('image')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai">Nilai Akhir</label>
                                            <input class="form-control" type="text" name="nilai" value="{{ old('nilai') }}" class="@error('nilai') is-invalid @enderror">
                                            @error('nilai')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group" align="right">
                                            <input class="btn btn-primary" type="submit" value="Submit">
                                        </div>
                                         
                                </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <body>
        <footer><center>
            Created by Dias Tri Kurniasari 
            </center>   
        </footer> 
        <br>   
</html>