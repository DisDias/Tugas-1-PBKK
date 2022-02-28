<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contoh</title>

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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <br>

                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="my-4" align="center">Contoh Pengisian Data Diri</h3>

                        <table width="675" border="1" cellspacing="0" cellpadding="5" align="center">
                            <tr align="center" bgcolor="#8FBC8F">
                                <th>BIODATA DIRI</th>
                            </tr>
                        </table>
                        
                        <table width="675" border="1" cellspacing="1" cellpadding="5" align="center">
                            <tr align="center" bgcolor="#8FBC8F">
                                <th width="150">DATA DIRI</th>
                                <th width="315">KETERANGAN</th>
                                <th width="210">FOTO</th>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>Dias Tri Kurniasari</td>
                                <td rowspan="10" align="center"><img src="{{ asset('post-images/dias.jpg') }}" width="175" height="175"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>diaskurniasari2@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>Jl. Nusa Indah, Desa Rembang, Kecamatan Ngadiluwih, Kabupaten Kediri</td>
                            </tr>
                            <tr>
                                <td>Nilai Akhir</td>
                                <td>95.75</td>
                            </tr>
                        </table>
                        <br><br>
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