        <!DOCTYPE html>

        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Pemilu Online Himasi | Halaman Depan</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="asset/css/bootstrap.css" />
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
                    <a
                        href="https://api.whatsapp.com/send?phone=+6288210829521&text=Halo Panitia Himasi,Saya ingin bertanya..">
                        <button class="text-white"
                            style="background:#32C03C;vertical-align:center;height:60px;border-radius:5px">
                            <img height="40px" witdh="40px" src="https://web.whatsapp.com/img/favicon/1x/favicon.png">
                            
                        </button></a>
                </div>
            </nav>
            <br>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo base_url('home')?>"> <img
                            src="<?php echo base_url()?>assets/img/himasi.png" width="30" height="30"
                            class="d-inline-block align-top" alt=""><strong> PEMILU HIMASI 2020</strong></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <div class="navbar-nav my-2 my-sm-0">
                            <a class="nav-item nav-link active my-2 my-sm-0"
                                href="<?php echo base_url('home')?>"><strong> HOME</strong></a>
                            <a class="nav-item nav-link active" href="#kandidat">Kandidat</a>
                            <a class="nav-item nav-link active" href="#video">Video</a>
                            <a class="nav-item nav-link active" href="#ketentuan">Ketentuan</a>
                            <a class="nav-item nav-link active" href="#tutorial">Tutorial</a>
                            <a class="nav-item nav-link active" href="#feedback">Feedback</a>
                            <a class="nav-item nav-link active" href="#about">About</a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" style="padding-left:15%;" id="navbarTogglerDemo02">
                        <!-- Button trigger modal -->
                        <div class="col-sm-4">
                        <label class="text-white ">Hello.. <?php
                        $nama = $this->session->userdata('nama');
                        $huruf = explode(" ",$nama);
                        echo $huruf[0]; ?> </label></div>
                        <div class="dropdown">
                            <button class=" btn btn-outline-light my-2 my-sm-0" id="dropdownMenuButton"
                                data-toggle="dropdown" expanded="false">Akun</button>
                            <button class="dropdown-menu bg-gradient-info" witdh="70px" labelledby="dropdownMenuButton">
                                <div class="col-sm-10 text-center">
                                    <img class="img-responsive"
                                        src="<?php echo base_url().'assets/img/mahasiswa/'.$this->session->userdata('foto')?>"
                                        witdh="60px" height="100px" class="card-img-top" alt="...">
                                </div>
                                <br>
                                <a href="#" class="dropdown-item " data-toggle="modal" data-target="#datadiri">Data
                                    Diri</a><br>
                                <a href="<?php echo base_url().'user/logout'?>" class="dropdown-item ">Keluar</a>
                            </button>
                        </div>

                        <!-- Button trigger modal -->
                        <button class=" btn btn-success my-2 my-sm-0" data-toggle="modal" data-target="#pengumuman"
                            type="submit">Voting</button>
                    </div>
                </div>
            </nav>
            <!-- Modal1 -->
            <div class="modal fade" id="datadiri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" class="text-primary" id="exampleModalLongTitle">DATA DIRI</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <?= form_open_multipart('home/ubah') ?>
                                <label class="control-label col-sm-4">STATUS : <?php $ket= $this->session->userdata('ket');
                                if($ket==""){echo "<h5><span class=' badge badge-pill badge-danger'>Belum Verifikasi</span></h5>";}else{echo "<h5><span class=' badge badge-pill badge-success'>Sudah Verifikasi</span></h5>";}
                                ?></label>
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="npm_mhs"
                                        value="<?= $this->session->userdata('npm_mhs')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Nama</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="nama"
                                        value="<?= $this->session->userdata('nama')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Password</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="password" name="pass"
                                        value="<?= $this->session->userdata('pass')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Tanggal Lahir</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="date" name="tgl_lahir"
                                        value="<?= $this->session->userdata('tgl_lahir')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Jalur</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="jalur"
                                        value="<?= $this->session->userdata('jalur')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Angkatan</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="angkatan"
                                        value="<?= $this->session->userdata('angkatan')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Jurusan</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="jurusan"
                                        value="<?= $this->session->userdata('jurusan')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Fakultas</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="fakultas"
                                        value="<?= $this->session->userdata('fakultas')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Email</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="email" name="email"
                                        value="<?= $this->session->userdata('email')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">FOTO KTM</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <img src="<?php echo base_url().'assets/img/mahasiswa/'. $this->session->userdata('ktm')?>"
                                        alt="Foto tidak Ditemukan" witdh="200px" height="120px">
                                </div>
                            </div>
                            <input class="form-control" type="hidden" name="ktm2"
                                value="<?= $this->session->userdata('ktm')?>" />
                            <div class="form-group col-sm-12">
                                 ex: KTM/AkademikOnline/KRS/KHS/<br>
                                *max size : 1 Mb
                                <input class="form-control" value="<?= $this->session->userdata('ktm')?>" type="file"
                                    name="ktm" />

                            </div>
                            <div class="form-group col-sm-12">
                                <input class="form-control btn btn-outline-success" type="submit" value="UBAH PROFILE"
                                    name="submit" value="" />
                            </div>
                            <?= form_close();?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal1 -->
            <div class="modal fade" id="pengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" class="text-primary" id="exampleModalLongTitle">VOTING</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- <a  href="" class='text-white'> -->
                        <div class="modal-body">
                            <button type="button" id="btn-vote" class="btn btn-primary my-2 my-sm-0">
                                <a href="<?php echo base_url('home/vote')?>"
                                    class="btn btn-primary my-2 my-sm-0"><strong> VOTING SEKARANG</strong> </a></button>
                            <span><br>Mohon Voting pada waktu yang telah ditetapkan </span><br>
                            <span class="badge badge-warning"> Waktu Voting Dimulai :
                                <?php  foreach($waktu as $t) 
                                echo date('H:i d-m-Y', strtotime($t->waktu_buka)); ?>
                                Sampai <?php  foreach($waktu as $t) 
                                 echo date('H:i d-m-Y', strtotime($t->waktu_tutup)); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="padding-top: 30px;">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url()?>assets/img/della-01.jpeg" class="d-block w-100 img-responsive"
                                    style="width: 100%;height: 500px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url()?>assets/img/dima-02.jpeg" class="d-block w-100 img-responsive"
                                    style="width: 100%;height: 500px;" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
                <div id="kandidat" class="carousel-item active">
                    <div class="row mt-5">
                        <div class="col col-lg-12 text-center">
                           <div class="col-xs-12">
                                <?= "<div".$this->session->flashdata('ubahdata')."</div>";?>
                             </div>
                            <div class="card-header">
                                <h4 class="text-info font-size:8vw">Calon Ketua Himasi Periode 2020</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php foreach ($kandidat as $k) {?>
                            <div class="row">
                                <div class="col col-lg-6 col-sm-12 col-md-12 col-auto">
                                    <span class="badge badge-danger">NO URUT <?= $k->no_urut?> </span>
                                    <img src="<?php echo base_url().'assets/img/kandidat/'.$k->foto ?>" witdh="40px"
                                        height="400px" class="card-img-top img-responsive" alt="...">
                                    <div class="card-body">
                                        <h5 class="text-center text-danger"><?= $k->nama?></h5>
                                        <h6 class="text-center text-danger"><span><?= $k->npm_kd?></span></h6>

                                    </div>
                                </div>
                                <div class="col col-lg-6 col-sm-12 col-md-12 col-auto">
                                    <blockquote class="blockquote mb-0">
                                        <br>
                                        <h5 class="text-secondary font-size:3vw"> VISI</h5><br>
                                        <p><?= $k->visi?></p>
                                        <h5 class="text-secondary font-size:3vw"> MISI</h5><br>
                                        <p><?= $k->misi?></p>
                                    </blockquote>
                                </div>
                            </div>
                            <hr>
                            <?php }?>
                        </div>
                    </div>
                    <div id="video" class="row mt-5">
                        <div class="col-lg-12 text-center">
                            <div class="card-header">
                                <h4 class="text-info font-size:8vw">Video Calon Ketua Himasi Periode 2020</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php foreach ($kandidat as $k) {?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="badge badge-danger">NO URUT <?= $k->no_urut?> </span>
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" width="800px" height="300px"
                                            src="https://www.youtube.com/embed/<?= $k->link?>" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php }?>
                        </div>
                    </div>
                    <div class="row mt-5" id="ketentuan">
                        <div class="col col-lg-12 text-center">
                            <div class="card-header">
                                <h4 class="text-info font-size:8vw">KETENTUAN DALAM PEMILIHAN</h4>
                            </div>
                        </div>
                        <br>
                        <div class="card-body">
                            <div class="col col-lg-12">
                                <div class="row">
                                    <div class="accordion text-sm-left" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        1. Syarat dan Ketentuan:
                                                    </button>
                                                </h5>
                                            </div>
        
                                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Syarat :<br>
                                                    1. Mahasiswa sistem informasi FTKI Universitas Nasional berstatus Aktif
                                                    Karyawan dan Reguler.
                                                    <br><br>
                                                    Ketentuan :<br>
                                                    1. Mahasiswa wajib melakukan Registrasi pada form pendaftaran. <br>
                                                    2. Mahasiswa harus mengisi data dengan baik dan benar. <br>
                                                    3. Mahasiswa hanya bisa membuat 1 akun untuk 1 kali voting. <br>
                                                    4. Mahasiswa melakukan voting pada waktu yang telah ditentukan oleh panitia <br>
                                                    <br>
                                                   <strong> Jika melanggar syarat dan ketentuan diatas, maka hak voting mahasiswa kami nyatakan tidak sah.</strong>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        2. Bagaimana melakukan Voting?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    1. Mahasiswa melakukan registrasi dengan cara
                                                    mengklik tombol <span class="badge badge-primary">Daftar </span>
                                                    pada Menu diatas.<br>
                                                    2. Mahasiswa mengisi form registrasi dengan benar dan lengkap.<br>
                                                    3. Mahasiswa memastikan akun telah tervalidasi, jika belum mahasiswa dapat
                                                    menghubungi kontak panitia.<br>
                                                    4. Mahasiwa melakukan Sign In kembali dengan akun yang didaftarkan,
                                                    untuk melakukan voting pada waktu yang telah ditentukan. <br>
                                                    5. Mahasiswa melakukan voting dengan cara mengklik tombol <span
                                                        class="badge badge-success">Voting</span> pada halaman Home.
                                                    <br>
                                                    <strong> Mahasiswa dapat memantau hasil perhitungan suara melalui IG Himasi
                                                        @himasi.unas1949 </strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        3. Hak Suara Akan Hilang Jika?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    1. Mahasiswa tidak mengisi form registrasi dengan benar dan ada
                                                    pemalsuan berkas.<br>
                                                    2. Mahasiswa tidak melakukan pencoblosan tepat waktu dan batas waktu
                                                    yang ditentukan oleh panitia.<br>
                                                    3. Mahasiswa melanggar syarat dan ketentuan diatas. <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5" id="tutorial">
                        <div class="col-lg-12 text-center">
                            <div class="card-header">
                                <h4 class="text-info font-size:8vw">Tutorial Voting</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" width="400px" height="300px"
                                            src="https://www.youtube.com/embed/fWXsQl3gNc0" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-5" id="feedback">
                        <div class="col-lg-12 text-center">
                            <div class="card-header">
                                <h4 class="text-info font-size:8vw">Feedback</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSceRx93NKda209KqqAuVgABqHPjaO_T09myO-v1oJTzy3c5og/viewform?embedded=true" 
                                        width="640" height="780" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div id="about" class="footer" style="padding-bottom: 50px;padding-top:10px;">
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
            var target_date = new Date("<?php foreach($waktu as $t) echo $t->waktu_buka ?>").getTime();
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
                    "<i class='fa fa-clock-o'></i> Pemilihan: <span class='badge badge-info'> " + days +
                    "</span> Hari <span class='badge badge-info'> " + hours +
                    " </span> Jam <span class='badge badge-info'> " + minutes +
                    "</span>Menit <span class='badge badge-info'> " + seconds +
                    " </span> Detik ";

            }, 1000);
        </script>
        <script>
            $('.collapse').collapse()
            $('#myCollapsible').collapse({
                toggle: false
            })
            $('#myCollapsible').on('hidden.bs.collapse', function () {
                // do something…
            })
        </script>
        <script>
            $(document).ready(function () {
                // Add smooth scrolling to all links
                $("a").on('click', function (event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $jarak = 100;
                        $('html, body').animate({
                                scrollTop: $(hash).offset().top - $jarak,
                                scrollDown: $(hash).offset().top + $jarak
                            }, 800,
                            function () {
                                // Add hash (#) to URL when done scrolling (default click behavior)
                                window.location.hash = hash;
                            });
                    } // End if
                });
            });
        </script>