<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Akun | Himasi Pemilu </title>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/user/img/logohimasi.png">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Averia+Gruesa+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bad+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Doppio+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/calendar.css">
   <style>
      .wafixed {
            position: fixed;
            right: 15px;
            bottom: 110px;
            z-index: 999;
        }       
    </style>
    <!-- css icon animation  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.8/font-awesome-animation.min.css">
  <!-- icons  -->
<script src="https://kit.fontawesome.com/997fbe78b5.js" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    
    
  <!-- sweet alert -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body oncontextmenu="return true;" onkeydown="return true;" onmousedown="return true;">
<div  style="background-image: linear-gradient(to bottom, #890808, #920808, #9b0807, #a40806, #ad0804, #b61206, #c01a09, #c9210c, #d52e15, #e2391c, #ee4424, #fb4e2c);border:0px;filter: blur(0px) brightness(100%) contrast(132%) grayscale(0%) hue-rotate(0deg) invert(0%);font-style: normal;font-family: 'Doppio One', sans-serif">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean"
        style="background-color: rgb(144,3,3);color: white; border:0px;filter: blur(0px) brightness(100%) contrast(132%) grayscale(0%) hue-rotate(0deg) invert(0%);font-style: normal;font-family: 'Doppio One', sans-serif;">
        <div class="container"><img src="<?=base_url()?>assets/user/img/logohimasi.png" style="width: 58px;height: 58px;"><a
                class="navbar-brand" href="<?=base_url()?>user/home" style="margin-left: 10px;"> Pemilu HIMASI <?= date('Y');?></a><button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: white;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="<?=base_url()?>user/home"
                            style="color: white;">Kembali</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
   
    <section style="margin-top: 0;" id="vid" >
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center text-white"
                        style="margin-top: 55px;margin-bottom: 45px; background-color: rgb(144,3,3);">DATA AKUN PESERTA </h2>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div data-aos="fade-up" class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"
                                    style="padding-top: 15px; ">
                                    <form id="form" action="" method="post">
                                        <div class="col col-md-12">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <input type="text" disabled name="status" id="status" required class="form-control " value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nomor Induk</label>
                                                <input type="hidden" name="kd_mahasiswa" id="kd_mahasiswa">
                                                <input type="text" disabled name="nomor_induk" id="nomor_induk" required class="form-control " value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Mahasiswa</label>
                                                <input type="text" name="nama" id="nama" required class="form-control" value="">
                                            </div> 
                                        
                                        </div>
                                        <div class="col col-md-12">
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="pass" id="pass" required class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" name="email" id="email" required class="form-control " value="">
                                            </div>
                                        </div> 
                                        <div class="col col-md-12">
                                            <div class="form-group">
                                                        <label for="">Angkatan</label>
                                                        <select name="angkatan" id="angkatan" required class="form-control">
                                                        <option value="" >---</option>
                                                        <?php for ($i=2014; $i <=2025 ; $i++) { ?>
                                                        <option value="<?=$i;?>" ><?=$i;?></option>
                                                        <?php }?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jalur</label>
                                                <select name="jalur" id="jalur" required class="form-control">
                                                    <option value="" >---</option>
                                                    <option value="reguler" >Reguler</option>
                                                    <option value="karyawan" >Karyawan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Bukti KTM/Akademik Online</label> <a class="text-primary" data-toggle="modal" data-target="#modalfoto"><u> Lihat</u></a>
                                                <input type="file" class="form-control" value="" name="foto_ktm" id="foto_ktm"> 
                                            </div> 
                                        </div>
                                        <div class="col col-md-12">
                                            
                                            <!-- <div class="form-group">
                                                <label for="">Lokasi Pemilihan</label><br>
                                                <input type="radio" class="" required value="Online" name="t_jenis_voting" id="jenis_voting1"> Online 
                                                
                                                <input type="radio" class="" required value="Onsite" name="t_jenis_voting" id="jenis_voting2"> Onsite
                                            </div> -->
                                            <div class="form-group">
                                                <button class="btn btn-primary float-left" type="submit" href="<?=base_url()?>login"
                                    style="height: 50px;width: 175px;font-size: 20px;background-color: rgb(144,3,3);"><span class="fa fa-save text-left">                                        
                                    </span> Ubah</button>
                                            </div>
                                        </div>
                                     </form>                           
                                </div>
                                 <div data-aos="fade-up" class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"
                                    style=" padding-top: 15px;  padding-buttom: 50px;">
                                    <img class="" 
                                     widht="180px" height="180px" src="<?=base_url()?>assets/img/vote.png">
                                    <p class="text-dark"><i>
                                        "Gunakan hak suaranya untuk memilih dengan hati.
                                         Mari kita dukung pemilihan ketua himpunan sistem informasi periode <?php $date = strtotime(" +1 years");
                                         echo date("Y").' / '.date("Y",$date);?> dengan Jujur dan Transparan.
                                    "</i></p>
                                 </div>                           
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>


   <!-- Footer -->
    <footer class="py-5"
        style="background: rgb(128,0,0); margin-top: 120px;
        background: linear-gradient(128deg, rgba(128,0,0,1) 0%, rgba(205,26,7,0.9836309523809523) 50%, rgba(128,0,0,1) 100%);">
        <div class="container">
            <div class="row text-white">
                <div class="col col-12 col-lg-4 text-left">
                    <div class="row">
                        <div class="col-lg-12 text-left">
                            <h4 class="white-text">Informasi</h4>
                            <hr class="border bg-white col-6 text-left mb-4">      
                        </div>
                        <div class="col-lg-12">
                            <h6>
                                <ul class="list-unstyled">
                                    <li><span class="fa fa-envelope mt-2"> </span> himasiunas@gmail.com </li><br>
                                    <li><span class="fa fa-instagram mt-2 "></span> Himasi.unas1949</li><br>
                                    <li><span class="fa fa-university mt-2"></span> Sistem Informasi</li><br>
                                    <li><span class="fa fa-university mt-2"></span> Fakultas Teknologi Komunikasi dan
                                        Informatika</li><br>
                                    <li><span class="fa fa-university mt-2"></span> Universitas Nasional</li><br>
                                </ul>
                            </h6>                    
                        </div>                        
                    </div>
                </div>
                <div class="col col-12 col-lg-4 text-left">
                    <div class="row">
                            <div class="col-lg-12">
                                <h4 class="white-text ">Layanan</h4>
                                <hr class="border bg-white col-6 text-left mb-4">                    
                            </div>
                            <div class="col-lg-12">
                                <h6>
                                   <ul class="list-unstyled">
                                        <li><a class="text-white mt-2" href="https://himasi.ftki.unas.ac.id/events/"> <span
                                                    class="fa fa-globe"></span> Website Event HIMASI</a></li><br>
                                        <li><a class="text-white mt-2" href="https://himasi.ftki.unas.ac.id/"> <span
                                                    class="fa fa-globe"></span> Website Portal HIMASI</a></li><br>
                                        <li><a class="text-white mt-2" href="http://ftki.unas.ac.id/"> <span
                                                    class="fa fa-globe"></span>
                                                Website FTKI</a></li><br>
                                        <li><a class="text-white mt-2" href="https://www.unas.ac.id/"> <span
                                                    class="fa fa-globe"></span>
                                                Website UNAS</a></li>
                                    </ul>
                                </h6><br><br><br><br>
                            </div>                        
                    </div>
                   
                </div>
                <div class=" col col-12 col-lg-4 text-left">
                    <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <h4 class="text-white" style="margin-bottom: 25px;">Himpunan Mahasiswa Sistem Informasi</h4>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                   <img src="<?=base_url()?>assets/user/img/logohimasi.png"
                                        class=" position-sticky embed-responsive text-center"
                                        style="width:200px; height:180px; padding-left:25px;" alt="Logo Himasi">
                                    <p class="mt-3">Website ini dikelola oleh Himpunan Mahasiswa Sistem Informasi
                                        untuk menunjang penyelenggaraan pemilihan umum ketua himasi sebagai penerus periode berikutnya.
                                    </p>
                                    <a href="mailto:himasiunas@gmail.com" target="n_blank" title="Email"><div class="border-white"><span class=" fa-2x fa fa-envelope-o text-white float-left mr-3"></span></div></a> 
                                    <a href="https://lin.ee/S1usGrm" target="n_blank" title="OA Line"><div class="border-white"><span class=" fa-2x fab fa-line text-white float-left mr-3"></span></div></a> 
                                    <a href="https://www.youtube.com/channel/UCdJF12PYit1xneWAge1Mjlg" target="n_blank"  title="Youtube Channel"><div class="border-white"><span class="fa fa-2x fa-youtube text-white float-left mr-3"></span> </div></a> 
                                    <a href="https://www.instagram.com/himasi.unas1949/" target="n_blank"  title="Instagram"><div class="border-white"><span class="fa fa-2x fa-instagram text-white float-left mr-3"></span></div></a> 
                                </div>                        
                        </div>
                    
                </div>
            </div>
            <p class="m-0 mt-4 text-center text-white">Copyright &copy; HIMASI</p>
            <p class="m-0 mb-2 text-center text-white" style="font-size: 13px;">Developed by <a href="#"><span
                    class="text-white" >Divisi Litbang <br> 2020/2021</span></a>
            </p>
        </div>
        <!-- /.container -->
    </footer>
 <!-- Modal tambah -->
    <div class=" modal fade" id="modalfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Bukti KTM/Akademik Online</strong> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <form action="#" id="">
                                <div class="col col-md-12 ">
                                    <div class="form-group ">
                                        <img id="zoom_foto"  class="img-thumbnail text-center" height="250px" width="250px"  alt="bukti foto identitas">
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" >Tutup</button>
                </div>
            </div>
        </div>
    </div>
                                      
    <a class="wafixed faa-bounce animated" title="Kontak HIMASI" href="https://wa.me/6288210829521" target="_blank">
        <span class="fa-stack fa-lg fa fa-2x">
        <i class="fa fa-circle fa-stack-2x text-success"></i>
        <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
        </span>
    </a>  
    <a href="#" class="ignielToTop"></a>

    <script>
        AOS.init();
    </script>

    <script src="<?=base_url()?>assets/user/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/user/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<script type="text/javascript">
    
     detailData();
     $('#form').submit(function(e){
            e.preventDefault();
                $.ajax({
                url : "<?php echo base_url('user/ubahData')?>",
                type:"POST",
                data:new FormData(this),
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                success: function(data)
                {
                    swal(
                        'Berhasil.',
                        'Data berhasil diubah!',
                        'success'
                        )
                    detailData();
                }
             })
                
     });
     function detailData(){
         $.ajax({
            url : "<?php echo base_url('user/getData')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                for(var i=0; i < data.length; i++){
                    
                    $('[name="kd_mahasiswa"]').val(data[i].kd_mahasiswa);
                    $('[name="status"]').val(data[i].validasi);
                    $('[name="nomor_induk"]').val(data[i].nomor_induk);
                    $('[name="pass"]').val(atob(data[i].password));
                    $('[name="nama"]').val(data[i].nama_mahasiswa);
                    $('[name="email"]').val(data[i].email);
                    $('[name="jalur"]').val(data[i].jalur);
                    $('[name="angkatan"]').val(data[i].angkatan);
                    // $('input:radio[name=jenis_voting][value='+data[i].jenis_voting+']')[0].checked = true;
                    var foto = document.getElementById("zoom_foto");
                    foto.setAttribute('src','<?=base_url()?>assets/img/datapendukung/'+data[i].foto_ktm);
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    }


</script>
