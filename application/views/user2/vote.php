<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pemilu Online Himasi | 2020</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/himasi.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</head>

<body>
    <nav class="navbar fixed-bottom navbar-light bg-light ">
         <div style="position:fixed;right:10px;bottom:70px; " class="embed-responsive-21by9">
            <a href="https://api.whatsapp.com/send?phone=+6288210829521&text=Halo Panitia Himasi,Saya ingin bertanya..">
                <button class="text-white"
                    style="background:#32C03C;vertical-align:center;height:60px;border-radius:5px">
                    <img height="40px" witdh="40px" src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Panitia
                </button></a>
        </div>
    </nav>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('home')?>"> <img
                    src="<?php echo base_url()?>assets/img/himasi.png" width="30" height="30"
                    class="d-inline-block align-top" alt=""><strong> PEMILU HIMASI 2020</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" style="padding-left:60%;" id="navbarTogglerDemo02">
                <!-- Button trigger modal -->

                <a class=" btn btn-outline-light my-2 my-sm-0" href="<?php echo base_url().'home/'?>"
                    type=""><strong>Home</strong></a>
            </div>
        </div>
    </nav>
    <div class="container" style="padding-top: 20px;">
        <div class="carousel-item active">
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <div class="col-xs-12">
                        <?= "<div".$this->session->flashdata('notifvote')."</div>";?>
                    </div><br>
                    <div class="card-header">
                        <h4 class="text-info">PEMILIHAN ONLINE HIMPUNAN SISTEM INFORMASI 2020</h4>
                    </div>
                    <h4> <span class="text-white badge badge-pill badge-danger text-center" id="timervote">
                        </span></h4>
                    <span class="text-secondary text-center"><strong> SAATNYA SUARAKAN HAK KITA... </strong></span><br>
                    <span class="text-secondary text-center"><strong>Pilihlah Pemimpin sesuai hati nurani. </strong>
                    </span>
                </div>
                <div class="col-lg-12 text-center">
                    <form action="<?= base_url().'home/voting/'?>" method="post">
                        <div class="row">
                            <?php #endregio 
                            $no =1;
                            foreach ($kandidat as $i) {?>
                            <div class="col-lg-6 text-center ">
                                <img class="responsive-img"
                                    src="<?php echo base_url().'assets/img/kandidat/'.$i->foto ?>" alt="foto"
                                    witdh="100px" height="200px">
                                <div class="card-body">
                                    <h4 class="text-primary"><?= $i->nama?></h4>
                                    <div class="text-center">
                                        <input type="hidden" class="form-control"
                                            value="<?= $this->session->userdata('npm_mhs')?>" name="npm_mhs">
                                    </div>
                                    <div class="text-center">
                                        <input type="hidden" class="form-control" value="<?= $i->npm?>" name="npm_kd">
                                    </div>
                                    <div class="text-center">
                                        <input type="hidden" class="form-control" value="<?= $i->periode?>"
                                            name="tahun_pilih">
                                    </div>
                                    <div class="text-center">
                                        <input type="radio" class="form-control" value="<?= $i->no_urut?>"
                                            name="no_urut">
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <div class="col-sm-12 text-center">
                                <input type="submit" class="btn btn-outline-primary form-control" value="Vote Sekarang"
                                    name="submit">
                            </div>
                        </div>
                        <!-- /.box-header -->
                    </form>
                </div>
            </div>
            <div class="footer" style="padding-bottom: 30px;padding-top:50px;">
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
                    <div class="col col-lg-12">
                    <div class="copyright text-center">
                        <i class="text-gray text-center">Copyright@2020</i>
                        <i class="text-gray text-center">Budi Julian</i>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<!-- !--jQuery library-- > -->
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
<link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
<script src="https://use.fontawesome.com/93a490a2cc.js"></script>
</body>
<!-- memberi nilai ke countdown -->
<script type="text/javascript">
    // Countdown waktu cobloss
    $(document).ready(function () {
        var detik = 0;
        var menit = 5;

        function hitung() {
            setTimeout(hitung, 1000);
            $('#timervote').html('Vote Berakhir dalam ' + menit + ' menit ' + detik + ' detik ');
            detik--;
            if (detik < 0) {
                detik = 59;
                menit--;
                if (menit < 0) {
                    menit = 0;
                    detik = 0;
                    alert("Waktu Habis! Silakan Refresh Kembali")
                }
            }
        }
        hitung();
    });
</script>
< <!-- !--jQuery library--> -->
    <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
    <link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
    <script src="https://use.fontawesome.com/93a490a2cc.js"></script>

    </html>