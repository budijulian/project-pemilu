<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Daftar Akun | Himasi Pemilu </title>
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
                class="navbar-brand" href="<?=base_url()?>" style="margin-left: 10px;"> Pemilu HIMASI <?= date('Y');?></a><button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: white;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="<?=base_url()?>"
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
                        style="margin-top: 55px;margin-bottom: 45px; background-color: rgb(144,3,3);">FORM PENDAFTARAN PESERTA PEMILU</h2>
                    
                    <section>
                        <div class="container">
                            <div class="row" >
                                   <div class="col-12 col-sm-12 text-center" id="countdowndaftar">
                                            <!-- countdown time daftar  -->
                                   </div>
                            </div>  
                        </div>
                        <div class="container">
                            <div class="row">
                                <div data-aos="fade-up" class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"
                                    style="padding-top: 15px; ">
                                    <form id="form" action="" method="post">
                                        <div class="col col-md-12">
                                            <div class="form-group">
                                                <label for="">NPM <span class="text-danger">*</span></label>
                                                <input type="text" name="t_nomor" id="t_nomor" required class="form-control " value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Mahasiswa</label>
                                                <input type="text" name="t_nama" id="t_nama" required class="form-control" value="">
                                            </div> 
                                        
                                        </div>
                                        <div class="col col-md-12">
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="t_pass" id="t_pass" required class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" name="t_email" id="t_email" required class="form-control " value="">
                                            </div>
                                        </div> 
                                        <div class="col col-md-12">
                                            <div class="form-group">
                                                        <label for="">Angkatan</label>
                                                        <select name="t_angkatan" id="t_angkatan" required class="form-control">
                                                        <option value="" >---</option>
                                                        <?php for ($i=2014; $i <=2025 ; $i++) { ?>
                                                        <option value="<?=$i;?>" ><?=$i;?></option>
                                                        <?php }?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jalur</label>
                                                <select name="t_jalur" id="t_jalur" required class="form-control">
                                                    <option value="" >---</option>
                                                    <option value="reguler" >Reguler</option>
                                                    <option value="karyawan" >Karyawan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Bukti Screenshot KTM/Akademik Online</label>
                                                 <input type="file" class="form-control" required value="" name="t_foto_ktm" id="t_foto_ktm"> 
                                                  <small>format: .jpg |.png |.jpeg </small>          
                                            </div> 
                                        </div>
                                        <div class="col col-md-12">
                                            
                                            <!-- <div class="form-group">
                                                <label for="">Lokasi Pemilihan</label><br>
                                                <input type="radio" class="" required value="Online" name="t_jenis_voting" id="jenis_voting1"> Online 
                                                
                                                <input type="radio" class="" required value="Onsite" name="t_jenis_voting" id="jenis_voting2"> Onsite
                                            </div> -->
                                            <div class="form-group">
                                                <button id="btn_daftar" class="btn btn-primary float-left " type="submit" 
                                                  style="height: 50px;width: 175px;font-size: 20px;background-color: rgb(144,3,3);"><span class="fa fa-save text-left">                                        
                                                        </span> Daftar</button>
                                            </div>
                                        </div>
                                     </form>                           
                                </div>
                                 <div data-aos="fade-up" class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"
                                    style=" padding-top: 15px;  padding-buttom: 50px;">
                                    <img class="" 
                                     widht="180px" height="180px" src="<?=base_url()?>assets/img/vote.png">
                                    <p class="text-dark"><i>"Gunakan hak suaranya untuk memilih dengan hati.Mari kita dukung Pemilihan Ketua Himpunan Sistem Informasi periode <?php $date = strtotime(" +1 years");
                                         echo date("Y").' / '.date("Y",$date);?> dengan jujur dan transparan."</i></p>
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
    <script src="<?=base_url()?>assets/user/js/-Countdown-BS4-.js"></script>
</body>

</html>

<script type="text/javascript">
     $('#form').submit(function(e){
            e.preventDefault();
                $.ajax({
                url : "<?php echo site_url('user/tambahData')?>",
                type:"POST",
                data:new FormData(this),
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                beforeSend: function() {
                    // setting a timeout loading data
                  swal({
                    title: 'Loading...',
                    text: 'Data sedang dikirim',
                    timer: 1500,
                    type :'warning'
                    })
                },
                success: function(data)
                {
                    var st = JSON.parse(data);
                    if(st.status == true){
                        $("#form")[0].reset();
                        swal({
                                title: 'Berhasil',
                                text: "Pendaftaran berhasil.Kirim email konfirmasi?",
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Tentu Saja, Iya',
                                closeOnConfirm: false
                            }).then(function(isConfirm) {
                                if (isConfirm) {
                                        $.ajax({
                                        url : "<?=base_url()?>user/kirim_konfirmasi/" + st.kd_mahasiswa,
                                        type: "POST",
                                        dataType: "JSON",
                                        success: function(response)
                                        {
                                        }
                                    });
                                    // redirect form login
                                   window.location.href = "<?=base_url()?>login"; 
                                }
                        })
                        
                    }else if(st.status == false){
                        swal(
                        'Oops!',
                        'Akun Anda sudah terdaftar.',
                        'error'
                        )
                    }else{}
                    
                }
             })
                
     });

</script>
<script type="text/javascript">

$(document).ready(function() {
        $.ajax({
            url : "<?php echo base_url('user/getDateMulaiPemilihan')?>",
            type: "POST", 
            dataType : "json",
            success: function(data)
            {   
                for(var i=0; i < data.length; i++){
                    var waktuTutupDaftar = data[i].waktu_tutup_pendaftar;
                    // console.log(waktuTutupDaftar);
                    var cv_td = new Date(waktuTutupDaftar);
                    // console.log(cv_td.toString());
                    // console.log(new Date().toString());
                    var target_date = new Date(cv_td).getTime();
                    // console.log(target_date);
                    target_date = parseFloat(target_date);
                    // get tag element
                    var countdown = document.getElementById("countdowndaftar");
                    // update the tag with id "countdown" every 1 second
                   var x = setInterval(function () {
                        // find the amount of "seconds" between now and 
                        var cv_dt_now = new Date().getTime();
                        var current_date = new Date(cv_dt_now).getTime();
                        current_date = parseFloat(current_date);
                        //  console.log(current_date);
                        var distance = target_date - current_date;
                        // console.log(distance);
                        distance = parseFloat(distance);
                        // Perhitungan waktu bagi hari, jam, menit dan detik
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        days = parseFloat(days);
                        hours = parseFloat(hours);
                        minutes = parseFloat(minutes);
                        seconds = parseFloat(seconds);
                         if((isNaN(days)) ||(isNaN(hours))||(isNaN(minutes))||(isNaN(seconds))){
                            days = "-";
                            hours = "-";
                            minutes = "-";
                            seconds = "-";
                         }else{}
                        // format countdown string + set tag value
                        if (distance < 0) {
                            clearInterval(x);
  
                        // if(seconds_left < 0 ){
                            ///////////////// waktu countdown buka pendaftaran ////////////////////////
                           countdown.innerHTML ='<h5 style="color: black;">Waktu Pendaftar Berakhir Dalam :</h5> ' +
                           ' <span class="fa fa-2x">  ' +
                           ' <p id="c_hari" class="number-days m-0 rounded-top" style="color: rgb(144,3,3);font-size:25px;">0<small class="text-dark" > Hari,</small> </p> ' +
                           ' </span> ' +
                           ' <span class="fa fa-2x"> ' +
                           ' <p id="c_jam" class="number-hours m-0 rounded-top" style="color: rgb(144,3,3);font-size:25px;">0<small class="text-dark"> Jam,</small></p> ' +
                           ' </span> ' +
                           ' <span class="fa fa-2x"> ' +
                           ' <p id="c_menit" class="number-minutes m-0 rounded-top" style="color: rgb(144,3,3);font-size:25px;">0<small class="text-dark"> Menit,</small></p> ' +
                           ' </span> ' +
                           ' <span class="fa fa-2x "> ' +
                           ' <p id="c_detik" class="number-seconds m-0 rounded-top" style="color: rgb(144,3,3); font-size:25px;">0<small class="text-dark"> Detik,</small></p> ' +
                           ' </span>';
                                
                        }else{
                             countdown.innerHTML ='<h5 style="color: black;">Waktu Pendaftar Berakhir Dalam :</h5> ' +
                           ' <span class="fa fa-2x text-center" >  ' +
                           ' <p id="c_hari" class="number-days m-0 rounded-top" style="color: rgb(144,3,3); font-size:25px;">'+days+'<small class="text-dark"> Hari,</small> </p> ' +
                           ' </span> ' +
                           ' <span class="fa fa-2x text-center"> ' +
                           ' <p id="c_jam" class="number-hours m-0 rounded-top" style="color: rgb(144,3,3); font-size:25px;">'+hours+' <small class="text-dark"> Jam,</small></p> ' +
                           ' </span> ' +
                           ' <span class="fa fa-2x text-center"> ' +
                           ' <p id="c_menit" class="number-minutes m-0 rounded-top" style="color: rgb(144,3,3); font-size:25px;">'+minutes+' <small class="text-dark"> Menit,</small></p> ' +
                           ' </span> ' +
                           ' <span class="fa fa-2x text-center "> ' +
                           ' <p id="c_detik" class="number-seconds m-0 rounded-top" style="color: rgb(144,3,3); font-size:25px;">'+seconds+' <small class="text-dark"> Detik,</small></p> ' +
                           ' </span>';
                            
                        }
        
            }, 1000);

                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {}
            
        });
    });
</script>

<script type="text/javascript">
$(document).ready(function() {
     window.onload = setInterval(function() {
        //  check data waktu daftar 
	    checkWaktuPendaftar();
    }, 1000);    


    function checkWaktuPendaftar(){
        $.ajax({
                url : "<?php echo base_url('user/getcheckWaktuPendaftar')?>",
                type: "POST", 
                dataType : "json",
                success: function(data)
                {
                    // get tag element
                    // var countdown = document.getElementById("countdowndaftar");
                    // var st = JSON.parse(data);
                    for(var i=0; i < data.length; i++){
                        if(data[i].status == "true"){ }
                        else if(data[i].status == "false"){ 
                            //    modifikasi btn voting
                            var element = document.getElementById("btn_daftar");
                                element.setAttribute("disabled", true); 
                        }  
                    }                
                }
        })
    }
});
</script>

