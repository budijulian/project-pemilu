<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pemilu Online Himasi | 2020</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/himasi.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>

<body>
    <nav class="navbar fixed-bottom bg-light">
        <div class="text-center">
            <h5 id="hitungmundur" class=" text-center text-primary text-justify font-size:12vw"> </h5>

        </div>
         <div style="position:fixed;right:10px;bottom:70px; " class="embed-responsive-21by9">
            <a href="https://api.whatsapp.com/send?phone=+6288210829521&text=Halo Panitia Himasi,Saya ingin bertanya..">
                <button class="text-white"
                    style="background:#32C03C;vertical-align:center;height:60px;border-radius:5px">
                    <img height="40px" witdh="40px" src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Panitia
                </button></a>
        </div>
    </nav>
    <br>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url()?>"> <img
                    src="<?php echo base_url()?>assets/img/himasi.png" width="30" height="30"
                    class="d-inline-block align-top" alt=""><strong> PEMILU HIMASI 2020</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" style="padding-left:65%;" id="navbarTogglerDemo02">
                <!-- Button trigger modal -->
                <button class=" btn btn-outline-light mr-auto mt-2 my-2 my-sm-0" data-toggle="modal"
                    data-target="#masuk" type="submit">Masuk</button>
                <a class=" btn btn-primary my-2 my-sm-0" href="<?php echo base_url().'daftar/'?>"
                    type=""><strong>Daftar</strong></a>
            </div>
        </div>
    </nav>
    <!-- awal modal login-->
    <!-- Modal1 -->
    <div class="modal fade" id="masuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" class="text-primary" id="exampleModalLongTitle">SISTEM LOGIN PEMILU HIMASI
                        2020</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form action="<?= base_url().'home/signin'?>" method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-4">NPM</label>
                            </div>
                            <div class="form-group ">
                                <input class="form-control col-sm-8" type="text" name="npm" value="" required />
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Password</label>
                            </div>
                            <div class="form-group">
                                <input class="form-control col-sm-8" type="password" name="pass" value="" required />
                                *Masukan NPM dan Password dengan benar.
                            </div>
                            <div class="form-group ">
                                <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat col-sm-8"
                                    value="Masuk">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir modal -->

    <div class="container" style="padding-top: 20px;">
        <div class="row">
            <div class="card col-lg-6 mt-5">
                <div class="card-header text-center">
                    <h3 class="text-primary"> FORM PENDAFTARAN PEMILU HIMASI</h3>
                    <h5 class="text-info">Silakan mengisi form terlebih dahulu sebelum menyoblos..</h5>
                    <h6 class="text-info">Mohon tunggu untuk validasi data, sebelum menyoblos.Terimakasih</h5>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('user/tambah/') ?>
                    <div class="form-group">
                        <label for="">NPM</label>
                        <input type="text" name="npm" class="form-control" required value="">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" required value="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="pass" class="form-control" required value="">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" required value="">
                    </div>
                    <div class="form-group">
                        <label for="">Jalur</label>
                        <br>
                        <input type="radio" name="jalur" id="" checked required value="Reguler">Reguler
                        <input type="radio" name="jalur" id="" required value="Karyawan">Karyawan
                    </div>
                    <div class="form-group">
                        <label for="">Angkatan</label>
                        <select class="form-control" name="angkatan" required id="">
                            <?php for ($i=2016; $i <= 2019; $i++) { ?>
                            <option value="<?= $i?>"><?= $i?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">TGL Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" required value="">
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" required value="">
                    </div>
                    <div class="form-group">
                        <label for="">Fakultas</label>
                        <input type="text" name="fakultas" class="form-control" required value="">
                    </div>
                    *Masukan Foto KTM/AkademikOnline/KRS/KHS/
                    
                    <div class="form-group">
                        <label for="">Foto KTM</label>
                        Size : Max 1 Mb
                        <input type="file" name="ktm" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Foto Wajah Terbaru</label>
                        Size : Max 1 Mb
                        <input type="file" name="foto" required class="form-control">
                    </div>
                    <input class="form-control btn btn-outline-success" type="submit" value="DAFTAR VOTING"
                        name="submit" value="" />
                    <?= form_close();?>

                </div>
            </div>
            <div class="col-lg-6 mt-5">
                <img src="<?php echo base_url()?>assets/img/voting.png" class="img-responsive"
                    style="width: 100%;height: 500px;" alt="...">
                <br>
                <h5 class="text-secondary text-center">ONE VOTE ONE ACCOUNT!!!</h5>
            </div>
        </div>
        <div class="footer" style="padding-bottom: 50px;padding-top:50px;">
            <div class="rows">
                <div class="col col-lg-6">
                    <i><strong>Kontak:</strong></i><br>
                    <i class="fa fa-instagram"></span> himasi.unas1949</span></i><br>
                    <i class="fa fa-envelope"> </span> himasiunas@gmail.com</span></i>
                </div>
                <div class="col col-lg-6">
                    <i class="fa fa-users"><span>Himpunan Sistem Informasi</span></i><br>
                    <i class="fa fa-university"> <span>FTKI - Universitas Nasional</span></i><br>
                </div>
               <div class="copyright text-center">
                        <i class="text-gray text-center">Copyright@2020</i>
                        <i class="text-gray text-center">Budi Julian</i>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- !--jQuery library-- > -->
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
<link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
<script src="https://use.fontawesome.com/93a490a2cc.js"></script>

</html>
<!-- memberi nilai ke countdown -->
<script type="text/javascript">
    // set the date we're counting down to
    var target_date = new Date("<?php foreach($waktu as $t) echo $t->waktu_buka; ?>").getTime();
    // variables for time units
    var days, hours, minutes, seconds;
    // get tag element
    var countdown = document.getElementById("hitungmundur");
    // update the tag with id "countdown" every 1 second
    setInterval(function () {
        // find the amount of "seconds" between now and target
        var current_date = new Date().getTime();
        var seconds_left = (target_date - current_date) / 1000;
        // do some time calculations
        days = parseInt(seconds_left / 86400);
        seconds_left = seconds_left % 86400;
        hours = parseInt(seconds_left / 3600);
        seconds_left = seconds_left % 3600;
        minutes = parseInt(seconds_left / 60);
        seconds = parseInt(seconds_left % 60);
        // format countdown string + set tag value
        countdown.innerHTML =
            "<i class='fa fa-clock-o'></i> Waktu Pemilihan: <span class='badge badge-info'> " + days +
            "</span> Hari <span class='badge badge-info'> " + hours +
            " </span> Jam <span class='badge badge-info'> " + minutes +
            "</span>Menit <span class='badge badge-info'> " + seconds +
            " </span> Detik ";
    }, 1000);
</script>