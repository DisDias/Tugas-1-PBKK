<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: darkslategray;
        }
        footer {
            color: aliceblue;   
        }
    </style>
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <br>
                <div class="alert alert-success">
                    <button type="button" class="close close-alert" data-dismiss="alert">x</button>
                    {{ session()->get('success') }}
                </div>

                <div class="card mt-5">
                    <div class="card-body">
                        <h3>Selamat Datang</h3>
                        <h3 class="my-4">Data Yang Anda Input Sebagai Berikut : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama Lengkap</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{ $data->usia }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $data->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Foto Diri</td>
                                <td><img src="{{ asset('post-images/'.$data->image) }}" alt="responsive-image" style="width: 50%"></td>
                            </tr>
                            <tr>
                                <td>Nilai Akhir</td>
                                <td>{{ $data->nilai }}</td>
                            </tr>
                        </table>

                        <a href="/dashboard" class="btn btn-danger">Home</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
    <footer><center>
        Created by Dias Tri Kurniasari 
        </center>   
    </footer> 
    <br>   
</html> 