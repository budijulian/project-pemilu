<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Himasi Pemilu</title>
    <link rel="shortcut icon" href="<?=base_url()?>assets/user/img/logohimasi.png">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Averia+Gruesa+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bad+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Doppio+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
   
  <!-- icons  -->
<script src="https://kit.fontawesome.com/997fbe78b5.js" crossorigin="anonymous"></script>
  <!-- sweet alert -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>
    <style>
        .card-img {
            margin-top: 6px;
        }

        .head-img input {
            height: 21.5px;
            width: 25px;
        }

        /* @media (min-width:767px) {
            .count-vot {}
        } */
    </style>
</head>
<body oncontextmenu="return true;" onkeydown="return true;" onmousedown="return true;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean"
        style="background-color: rgb(144,3,3);color: white;filter: blur(0px) brightness(100%) contrast(132%) grayscale(0%) hue-rotate(0deg) invert(0%);font-style: normal;font-family: 'Doppio One', sans-serif;">
        <div class="container"><img src="<?=base_url()?>assets/user/img/logohimasi.png" style="width: 58px;height: 58px;"><a
                class="navbar-brand" href="<?=base_url()?>user/home" style="margin-left: 10px;"> Pemilu HIMASI <?= date('Y');?></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span
                    class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: white;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-center" role="presentation"
                                href="#">Profil</a><a class="dropdown-item text-center" role="presentation"
                                href="<?=base_url()?>user/home">Kembali</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5 bg-info text-white"
        style="background-color: white !important;margin-top: 20px;padding-right: 10px;padding-left: 10px;">
        <div class="container text-center boxed-countdown" data-countdown="">
            <div class="row "id="count_vote">
                <!-- countdown vote  -->
            </div>
        </div>
    </section>

    <section id="pan">
        <div class="container con-pan">
            <div class="text-center">
               <p class="text-dark"><i>"Gunakan hak suaranya untuk memilih dengan hati.
                  Mari kita dukung Pemilihan Ketua Himpunan Sistem Informasi periode <?php $date = strtotime(" +1 years");
                                         echo date("Y").' / '.date("Y",$date);?> dengan jujur dan transparan.
                                    "</i></p>
            </div>
        </div>
    </section>

    <!-- <form id="form-data" action="<?php 
    // echo base_url('user/ubah_voting')?>" method="post"> -->
    <form id="form-data" action="<?php echo base_url('user/ubah_voting')?>" method="post">
        <section style="margin-top: 0;" id="kd">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row" id="load_data_kandidat">
                            <!-- load data kandidat  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pan" style="margin-top:50px ;">
            <div class="container con-pan">
                <div class="text-center">
                    <button id="submit_vote" type="submit"  name="submit" class="text-pan" >Voting Sekarang</button>
                </div>
            </div>
        </section>
    </form>

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

    <a href="#" class="ignielToTop"></a>

    <div id="time-bottom" data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="fixed-bottom" style="display :none;">
		<div class="container">
			<div class="row border-0 mt-1 ">
                <div class="col col-12 col-lg-12 col-sm-12 col-md-12 text-center">
					     <small class="font-weight-bolder"> Waktu Voting Berakhir Dalam :</small>
                        <div id="count_vote_bottom" style="border: 0px solid;" class="col col-12 text-center">
                           
                             <!-- coutdowm bottom  -->
                        </div>
				</div>
			</div>
		</div>
	</div>

    <script src="<?=base_url()?>assets/user/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/user/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/user/js/-Countdown-BS4-.js"></script>
</body>

<script type="text/javascript">

$(document).ready(function() {
                                // variables for time units
                                 var days, hours, minutes, seconds;
                                 <?php 
                                //  menciptakan date + 4 menit dari waktu cookies
                                 $date = date_create($_COOKIE['waktu_login_vote']);
                                 date_add($date, date_interval_create_from_date_string('3 minutes 10 seconds'));
                                 ?>
                                 var waktuTutupVote ="<?= date_format($date, 'Y-m-d H:i:s')?>";
                                // get tag element
                                var countdown = document.getElementById("count_vote");
                                var countdown2 = document.getElementById("count_vote_bottom");
                                var target_date = new Date(waktuTutupVote).getTime();
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
                                       
                                        if((isNaN(days)) ||(isNaN(hours))||(isNaN(minutes))||(isNaN(seconds))){
                                        days = "-";
                                        hours = "-";
                                        minutes = "-";
                                        seconds = "-";
                                    }else{ }
                                        // format countdown string + set tag value
                                        if(seconds_left < 0 ){
                                            // waktu countdown voting 
                                            countdown.innerHTML =' <div class="col-12 mb-3">' +
                                                    ' <h1 style="color: black;">Waktu Voting Berakhir Dalam :</h1>' +
                                                ' </div>' +
                                                ' <div class="col-6 mt-3 count-vot">' +
                                                    '  <p class="number-minutes m-0 rounded-top" style="color:#890505">00</p>' +
                                                    ' <p class="text-countdown rounded-bottom" style="color: black;">Menit</p>' +
                                                ' </div>' +
                                                ' <div class="col-6 mt-3 count-vot">' +
                                                    '   <p class="number-seconds m-0 rounded-top" style="color: #890505">00</p>' +
                                                    '   <p class="text-countdown rounded-bottom" style="color: black;">Detik</p>' +
                                                ' </div>';
                                                countdown2.innerHTML = '<p style="font-size: 25px; color:#890505">00 &nbsp;<small style="font-size: 15px; color:#090909">' +
                                                                    '<u>Menit&nbsp;</u></small>&nbsp;: 00 &nbsp;<small style="font-size: 15px; color:#090909; ">' +
                                                                    '<u>&nbsp;Detik&nbsp;</u></small></p>';
                                                    //    alert timeout 
                                                swal({
                                                        title: 'Waktu Habis!!',
                                                        text: "Waktu voting Anda sudah habis.",
                                                        type: 'error',
                                                        showCancelButton: false,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        showLoaderOnConfirm: false,
                                                        confirmButtonText: 'Iya',
                                                        closeOnConfirm: false
                                                    }).then(function(isConfirm) {
                                                        if (isConfirm) {
                                                            // redirect form login
                                                            window.location.href = "<?=base_url()?>user/timeout";
                                                            }
                                                        })
                                                //disabled tombol radio dam button kandidat sebanyak 4 kandidat
                                                for (let a = 0; a < 3; a++) {
                                                    var no = "rd_pilihan"+a;
                                                        var st_rd = document.getElementById(no);
                                                        st_rd.setAttribute('disabled', true);
                                                }
                                                
                                                var st_btn = document.getElementById("submit_vote");
                                                        st_btn.setAttribute('disabled', "");
                                                
                                                
                                                                                                
                                                                                        
                                        }else{
                                            // waktu countdown voting 
                                            countdown.innerHTML =' <div class="col-12 mb-3">' +
                                                    ' <h1 style="color: black;">Waktu Voting Berakhir Dalam :</h1>' +
                                                ' </div>' +
                                                ' <div class="col-6 mt-3 count-vot">' +
                                                    '  <p class="number-minutes m-0 rounded-top" style="color: #890505">'+ minutes  +'</p>' +
                                                    ' <p class="text-countdown rounded-bottom" style="color: black;">Menit</p>' +
                                                ' </div>' +
                                                ' <div class="col-6 mt-3 count-vot">' +
                                                    '   <p class="number-seconds m-0 rounded-top" style="color: #890505">'+ seconds +'</p>' +
                                                    '   <p class="text-countdown rounded-bottom" style="color: black;">Detik</p>' +
                                                ' </div>';
                                            countdown2.innerHTML = '<p style="font-size: 25px; color:#890505">'+ minutes  +' &nbsp;<small style="font-size: 15px; color:#090909">' +
                                                                    '<u>Menit&nbsp;</u></small>&nbsp;: '+ seconds +' &nbsp;<small style="font-size: 15px; color:#090909; ">' +
                                                                    '<u>&nbsp;Detik&nbsp;</u></small></p>';
                                            
                                        
                                    }
                                    
                        }, 1000);
});

</script>
</html>
<script>
        AOS.init();
</script>

<script>
// scroll time bottom 
window.onscroll = function() {myFunction()};

function myFunction() {
    var tb;
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    var tb = document.getElementById("time-bottom");
    tb.setAttribute('style', "display :block;  background-color:rgb(220,220,220); z-index: 0;");
  }else{
    var tb = document.getElementById("time-bottom");
    tb.setAttribute('style', "display :none;  background-color:rgb(220,220,220); z-index: 0;");
  }
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    //  tampil data kandidat 
    load_data_kandidat();
    function load_data_kandidat(){
        $.ajax({
            url : "<?php echo base_url('user/showDataKandidat')?>",
            type: "POST", 
            async : false,
            dataType : "json",
            success: function(data)
            {   
                var html = " ";
                var i;
                for(i=0; i < data.length; i++){
                     html += "<div class='col-auto col-sm-12 col-md-12 col-lg-4 col-xl-5 offset-lg-2 offset-xl-1' style='padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;'>"+
                                    "<div class='card-img bg-light border rounded shadow card' > "+
                                        "<div class='img bg-light border rounded shadow card'> "+
                                            "<h2 class='head-img text-center'> NO Urut "+data[i].nomor_urut+"</h2> "+
                                            "<img widht='100%' height='400px' src='<?=base_url()?>assets/img/kandidat/"+data[i].foto+"' alt=''></div>"+
                                            " <div class='content'>"+
                                            "<h3  class='text-center'>"+data[i].nama_kandidat+"</h3>"+
                                             "<ul><li><p>Periode : "+data[i].periode+"</p></li>"+
                                            "<li><p>Nama : "+data[i].nama_kandidat+"</p></li>"+
                                            "<li><p>NPM : "+data[i].nomor_induk+"</p></li>"+
                                            "<li><p>Jurusan : "+data[i].jurusan+"</p></li></ul>"+
                                        "</div>"+
                                    "</div>"+
                                    "<div class='card-img bg-light border rounded shadow card'>"+
                                        "<div class='img bg-light border rounded shadow card'>"+
                                            "<h2 class='head-img text-center'>Pilih"+
                                            "<input id='rd_pilihan"+i+"'  type='radio' required name='pilihan' value='"+data[i].nomor_urut+"' />"+data[i].nomor_urut+"</h2>"+
                                        "</div>"+
                                    "</div>"+
                            " </div>";
                }
                $("#load_data_kandidat").html(html); 
            }
        });
    }
});
</script>