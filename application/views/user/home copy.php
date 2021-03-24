<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pemilu HIMASI</title>
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/calendar.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    
  <!-- sweet alert -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- barchart :: canvajs -->
    <script>
    window.onload = function() {

    var dataPoints = [];
    var dataPoints2 = [];    
    var chart = new CanvasJS.Chart("ChartBarSuara", {
        animationEnabled: true,
        theme: "light2",
        exportEnabled: true,
        title: {
            text: "Suara Pemilih"
        },
        axisY: {
            title: "Suara",
            titleFontSize: 24,
            includeZero: true
        },
        data: [{
            type: "column",
            yValueFormatString: "#,### Units",
            dataPoints: dataPoints
        }]
    });

    function addData(data) {
        for (var i = 0; i < data.length; i++) {
            dataPoints.push({
                x: new Date(data[i].date),
                y: data[i].units
            });
        }
    chart.render();   
    }
    var chart2 = new CanvasJS.Chart("ChartPieSuara", {
        animationEnabled: true,
        exportEnabled: true,
        title: {
            text: "Persentase Suara "
        },
        data: [{
            type: "pie",
            startAngle: 240,
            yValueFormatString: "##0.00\"%\"",
            indexLabel: "{label} {y}",
            dataPoints: dataPoints2
        }]
    });
     function addData2(data2) {
        for (var i = 0; i < data2.length; i++) {
            dataPoints2.push({
                label: "abc",
                y: data2[i].units
            });
        }
    chart2.render();   
    }
    //  data pemilih to kandidat 
    $.getJSON("https://canvasjs.com/data/gallery/javascript/daily-sales-data.json", addData);
    
    $.getJSON("https://canvasjs.com/data/gallery/javascript/daily-sales-data.json", addData2);

    }
    </script>
</head>

<body oncontextmenu="return true;" onkeydown="return false;" onmousedown="return false;">
<div  style="background-image: linear-gradient(to bottom, #890808, #920808, #9b0807, #a40806, #ad0804, #b61206, #c01a09, #c9210c, #d52e15, #e2391c, #ee4424, #fb4e2c);border:0px;filter: blur(0px) brightness(100%) contrast(132%) grayscale(0%) hue-rotate(0deg) invert(0%);font-style: normal;font-family: 'Doppio One', sans-serif">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean"
        style="background-color: rgb(144,3,3);color: white; border:0px;filter: blur(0px) brightness(100%) contrast(132%) grayscale(0%) hue-rotate(0deg) invert(0%);font-style: normal;font-family: 'Doppio One', sans-serif;">
        <div class="container"><img src="<?=base_url()?>assets/user/img/logohimasi.png" style="width: 58px;height: 58px;"><a
                class="navbar-brand" href="<?=base_url()?>home" style="margin-left: 10px;"> Pemilu HIMASI <?= date('Y');?></a><button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: white;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation" style="border:1px; border-color:white; border-style: solid;"><a
                            class="nav-link text-center rubberBand animated infinite" href="#live"
                            style="color: white; ">Quick Count</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="#kd"
                            style="color: white;">Kandidat</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="#vm"
                            style="color: white;">Visi &amp; Misi</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="#vid"
                            style="color: white;">Video</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="#pan"
                            style="color: white;">Panduan</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-center" data-toggle="dropdown"
                            aria-expanded="false" href="#" style="color: white;">Akun</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-center" role="presentation"
                                href="<?=base_url()?>user/akun">Akun Saya</a><a class="dropdown-item text-center" role="presentation"
                                href="<?=base_url()?>user/logout">Keluar</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header  >
        <div style="margin-top: 5px;">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-6" style="padding-left: 35px;padding-top: 10px;">
                        <div class="card">
                            <div class="card-body" style="box-shadow: 10px 12px 5px rgba(2, 2, 2, 0.16);">
                            <?php $string = $this->session->userdata('nama_mahasiswa');
                                    $string = base64_decode($string);
                                    $PecahStr = explode(" ", $string); ?>
                                <div class="row">
                                    <div class="col col-12 col-md-12"> 
                                        <h4 data-aos="zoom-out-up" class="card-title float-left" style="font-size: 50px;">HALLO, <?=$PecahStr[0];?></h4></div>
                                    <div class="col col-12 col-md-8">
                                        <p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"
                                        class="card-text float-left"
                                        style="font-size: 25px;font-family: 'Source Sans Pro', sans-serif;padding-top: 10px;">
                                        Selamat Datang Di Pemilihan Ketua Himasi <?php $date = strtotime(" +1 years");
                                            echo date("Y").' / '.date("Y",$date);?></p>
                                    </div>
                                    <div class="col col-12 col-md-4">
                                        <img  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="float-right text-center" style="padding-left: 120px;" widht="80px" height="80px" src="<?=base_url()?>assets/img/vote.png">
                                    </div>
                                    
                                    <div class="col col-12 col-md-12">
                                    <!-- notif  -->
                                    <a data-aos="fade-up" id="btn_voting" href="javascript:void(0);" onclick=""
                                        data-aos-duration="3000" class="btn btn-primary float-left" type="button" 
                                        style="height: 50px;width: 175px; padding-top: 10px; font-size: 20px;background-color: rgb(144,3,3);">
                                        <span class="fa fa-lock text-left"></span> Voting</a>
                                        <?php
                                        //  if($this->session->flashdata('btn_voting')){echo $this->session->flashdata('btn_voting');}
                                        ?>
                                        <?php
                                        //  if($this->session->flashdata('btn_alert_voting')){echo $this->session->flashdata('btn_alert_voting');}
                                        ?>
                                        <!-- <label data-aos="fade-up" 
                                        data-aos-duration="3000" class="btn btn-light float-left" type="text"
                                        style="height: 50px;width: 250px;color:#780303; padding-top: 10px; font-size: 20px;"><span class="fa fa-times-rectangle-o text-left"></span> Belum Terverifikasi</label> -->
                                        <label data-aos="fade-up" id="st_text_V"
                                        data-aos-duration="3000" class="btn btn-light float-left" type="text"
                                        style=""> <span class="fa fa-user text-left"></span> no label</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="3000" class="calendar col col-12 col-md-6" id="calendar-app" style="box-shadow: 10px 12px 5px rgba(2, 2, 2, 0.16); border : 1px white;">
                        <div class="calendar--day-view" id="day-view">
                            <span class="day-view-exit" id="day-view-exit">&times;</span>
                            <span class="day-view-date" id="day-view-date">MAY 29 2016</span>
                            <div class="day-view-content">
                                <div class="day-highlight">
                                    You <span class="day-events" id="day-events">had no events for today</span>.
                                    &nbsp; <span tabindex="0" onkeyup="if(event.keyCode != 13) return; this.click();"
                                        class="day-events-link" id="add-event" data-date>Add a new event?</span>
                                </div>
                                <div class="day-add-event" id="add-day-event-box" data-active="false">
                                    <div class="row">
                                        <div class="half">
                                            <label class="add-event-label">
                                                Name of event
                                                <input type="text" class="add-event-edit add-event-edit--long"
                                                    placeholder="New event" id="input-add-event-name">

                                            </label>
                                        </div>
                                        <div class="qtr">
                                            <label class="add-event-label">
                                                Start Time
                                                <input type="text" class="add-event-edit" placeholder="8:15"
                                                    id="input-add-event-start-time"
                                                    data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
                                                <input type="text" class="add-event-edit" placeholder="am"
                                                    id="input-add-event-start-ampm" data-options="a,p,am,pm">
                                            </label>
                                        </div>
                                        <div class="qtr">
                                            <label class="add-event-label">
                                                End Time
                                                <input type="text" class="add-event-edit" placeholder="9"
                                                    id="input-add-event-end-time"
                                                    data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
                                                <input type="text" class="add-event-edit" placeholder="am"
                                                    id="input-add-event-end-ampm" data-options="a,p,am,pm">
                                            </label>
                                        </div>
                                        <div class="half">
                                            <a onkeyup="if(event.keyCode != 13) return; this.click();" tabindex="0"
                                                id="add-event-save" class="event-btn--save event-btn">save</a>
                                            <a tabindex="0" id="add-event-cancel"
                                                class="event-btn--cancel event-btn">cancel</a>
                                        </div>
                                    </div>

                                </div>
                                <div id="day-events-list" class="day-events-list">

                                </div>
                                <div class="day-inspiration-quote" id="inspirational-quote">
                                    Every child is an artist. The problem is how to remain an artist once he grows
                                    up. –Pablo Picasso
                                </div>
                            </div>
                        </div>
                        <div class="calendar--view" id="calendar-view">
                            <div class="cview__month">
                                <span class="cview__month-last" id="calendar-month-last">Apr</span>
                                <span class="cview__month-current" id="calendar-month">May</span>
                                <span class="cview__month-next" id="calendar-month-next">Jun</span>
                            </div>
                            <div class="cview__header">Sun</div>
                            <div class="cview__header">Mon</div>
                            <div class="cview__header">Tue</div>
                            <div class="cview__header">Wed</div>
                            <div class="cview__header">Thu</div>
                            <div class="cview__header">Fri</div>
                            <div class="cview__header">Sat</div>
                            <div class="calendar--view" id="dates">
                            </div>
                        </div>
                        <div class="footer">
                            <span><span id="footer-date" class="footer__link">Today is May 30</span></span>
                        </div>
                    </div>
                    
                    <script src="<?=base_url()?>assets/user/js/index.js"></script>
                </div>
            </div>
        </div>
    </header>
</div>
    <section class="py-5 bg-info  text-white"
        style="background-color: white !important; border:0;margin-top: -90px;padding-right: 10px;padding-left: 10px;">
        <div class="container text-center boxed-countdown" data-countdown="">
            <div id="data_countdown" class="row rounded" data-aos="fade-up"   style="box-shadow: 10px 12px 5px rgba(2, 2, 2, 0.16); background-image: linear-gradient(to right top, #ffffff, #ffffff, #ffffff, #ffffff, #ffffff);">
                <!-- coutdown pemilihan  -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col" id="live">
                    <h1 class="text-center text-white"
                        style="margin-top: 55px;margin-bottom: 5px; background-color: rgb(144,3,3);">QUICK COUNT</h1>
                    </div>
                </div>
            </div>
    </section>

    <section style="margin-top: 15px;margin-bottom: 45px; background-image: linear-gradient(to right bottom, #a30212, #a90411, #b00610, #b6090e, #bc0c0c, #c4150b, #cb1d0a, #d32409, #de3008, #e93a07, #f44505, #ff4f02); !important;">
        <div class="container">
                            <div class="row" style="height:100%;">
                                <div class="col-md-6 mt-5 mb-5" data-aos="fade-up" data-aos-duration="3000">
                                    <h1 class="text-white">Akses Join ZOOM Meeting</h1>
                                    <p class="text-white-50">Ayo, bergabung musyawarah mahasiswa dan pantau pemilihan secara live dengan mengakses link zoom metting dibawah ini.</p>
                                    <br>
                                    <a data-aos="fade-down" target="n_blank" title="Link Akses ZOOM" data-aos-easing="linear" data-aos-duration="1500" class="text-pan "
                                        href="https://zoom.us/meetings">Link ZOOM</a>
                                
                                
                                    <!-- <div data-aos="fade-up-right" class="vplayer">
                                        <iframe src="https://www.youtube.com/embed/CyQ6oKY17JQ" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div> -->
                                </div>
                                <div data-aos="fade-up" data-aos-duration="3000" class="col-md-6 mt-5 mb-5">
                                    <h1 class="text-white">Quick Count Pemilihan</h1>
                                    <p class="text-white-50"><br>Data suara pemilihan akan ditampilkan secara realtime selama proses pemilihan berlangsung.<br><br></p>
                                    <h1 class="text-white">Suara Masuk</h1>
                                    <p class="text-white-50">Waktu : <span id="tanggal"></span></p>
                                    <p class="text-white-50">Total : <strong id="count_voting" style="color:black;" class="fa fa-2x"> 0 </strong> dari 
                                    <strong id="count_pendaftar" style="color:black;" class="fa fa-2x text-black"> 0 </strong> Pendaftar</p>
                                    <br>
                                    <a id="btnChart" data-aos="fade-down" title="Result Pemilihan"  data-aos-easing="linear" data-aos-duration="1500" class="text-pan "
                                     style="display: none;" data-toggle="modal" data-target="#chartresult"  href=""> <span class="fa fa-bar-chart"></span> Result</a>         
                            </div>
                        </div>
                    
        </div>
    </section>

    <section style="margin-top: 0; background-color: white !important;" id="kd" >
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white"
                        style="margin-top: 55px;margin-bottom: 45px; background-color: rgb(144,3,3);">Kandidat</h1>
                    <div>
                        <div class="container">
                            <div class="row" id="load_data_kandidat">
                                <!-- load data kandidat  -->
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vm"style="">
        <div class="col">
            <h1 class="text-center" style="margin-top: 55px;margin-bottom: 45px;">Visi / Misi</h1>
            <div class="container">
                <div id="load_DataVS" class="row">
                   <!-- load data visi misi  -->

                    
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 0;" id="vid" >
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center"
                        style="margin-top: 55px; margin-bottom: 45px; ">Video</h1>
                    <section>
                        <div class="container">
                            <div class="row" id="load_datavideo">
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section id="pan">
      
        <div class="container con-pan" style="height: 800px;" >
            <h1 class="text-center text-white" style="margin-top: 100px;margin-bottom: 50px; background-color: rgb(144,3,3);">Panduan</h1>
            <div class="text-center" id="img-panid" data-aos="fade-up">
                <img src="<?=base_url()?>assets/user/img/pemilihan.jpg">
                <div class="text-center">
                    <a href="#img-panid" class="lightbox" id="img1">
                        <span style="background-image: url('<?=base_url()?>assets/user/img/pemilihan.jpg')"></span>
                    </a>
                    <a data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="text-pan"
                        href="#img1">Lihat Detail</a>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: linear-gradient(to bottom, #890808, #920808, #9b0807, #a40806, #ad0804, #b61206, #c01a09, #c9210c, #d52e15, #e2391c, #ee4424, #fb4e2c);">
        <div class="container">
            <h1 class="text-center text-white" style="margin-top: -50px; background-color: rgb(144,3,3);">Kata Mereka</h1>
            <div></div>
            <div class="carousel slide" data-ride="carousel" data-interval="10000" id="carousel-t">
                <div id="load_data_pesan" class="carousel-inner" role="listbox">
                   <!-- load data pesan   -->
                  
                                         
                </div>
                 <div><a class="carousel-control-prev" href="#carousel-t" role="button" data-slide="prev"><i
                            class="icon ion-android-arrow-dropleft-circle d-flex d-lg-flex justify-content-center align-items-center"></i><span
                            class="sr-only">Previous</span></a>
                    <a class="carousel-control-next" href="#carousel-t" role="button" data-slide="next"><i
                            class="icon ion-android-arrow-dropright-circle d-flex d-lg-flex justify-content-center align-items-center"></i><span
                            class="sr-only">Next</span></a>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-t" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-t" data-slide-to="1"></li>
                    <li data-target="#carousel-t" data-slide-to="2"></li>
                    <!-- <li data-target="#carousel-t" data-slide-to="3"></li> -->
                </ol>
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
                        <div class="col-lg-12">
                            <h4 class="white-text ">Informasi</h4>
                            <hr class="border bg-white col-lg-4">                    
                        </div>
                        <div class="col-lg-12">
                            <h6>
                                <ul class="list-unstyled">
                                    <li><span class="fa fa-envelope"> </span> himasiunas@gmail.com </li><br>
                                    <li><span class="fa fa-instagram"></span> Himasi.unas1949</li><br>
                                    <li><span class="fa fa-university"></span> Sistem Informasi</li><br>
                                    <li><span class="fa fa-university"></span> Fakultas Teknologi Komunikasi dan
                                        Informatika</li><br>
                                    <li><span class="fa fa-university"></span> Universitas Nasional</li><br>
                                </ul>
                            </h6>                    
                        </div>                        
                    </div>
                </div>
                <div class="col col-12 col-lg-4 text-left">
                    <div class="row">
                            <div class="col-lg-12">
                                <h4 class="white-text ">Layanan</h4>
                                <hr class="border bg-white col-lg-4">                    
                            </div>
                            <div class="col-lg-12">
                                <h6>
                                   <ul class="list-unstyled">
                                        <li><a class="text-white" href="https://himasi.ftki.unas.ac.id/events/"> <span
                                                    class="fa fa-globe"></span> Website Event HIMASI</a></li><br>
                                        <li><a class="text-white" href="https://himasi.ftki.unas.ac.id/"> <span
                                                    class="fa fa-globe"></span> Website Portal HIMASI</a></li><br>
                                        <li><a class="text-white" href="http://ftki.unas.ac.id/"> <span
                                                    class="fa fa-globe"></span>
                                                Website FTKI</a></li><br>
                                        <li><a class="text-white" href="https://www.unas.ac.id/"> <span
                                                    class="fa fa-globe"></span>
                                                Website UNAS</a></li>
                                    </ul>
                                </h6><br><br><br>
                            </div>                        
                    </div>
                   
                </div>
                <div class=" col col-12 col-lg-4 text-left">
                    <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-white" style="margin-bottom: 25px;">Himpunan Mahasiswa Sistem Informasi</h4>
                                </div>
                                <div class="col-lg-12">
                                   <img src="https://himasi.ftki.unas.ac.id/events/assets/img/logohimasi.png"
                                        class=" position-sticky embed-responsive text-center"
                                        style="width:200px; height:180px; padding-left:25px;" alt="Logo Himasi">
                                    <p class="mt-3">Website ini dikelola oleh Himpunan Mahasiswa Sistem Informasi
                                        untuk menunjang penyelenggaraan pemilihan umum ketua himasi sebagai penerus periode berikutnya.
                                    </p>
                                </div>                        
                        </div>
                    
                </div>
            </div>
            <p class="m-0 mt-5 text-center text-white">Copyright &copy; HIMASI</p>
            <p class="m-0 mb-3 text-center text-white" style="font-size: 13px;">Developed by <a href="#"><span
                    class="text-white" >Divisi Litbang <br> 2020/2021</span></a>
            </p>
        </div>
        <!-- /.container -->
    </footer>
     <!-- Modal chart vote -->
     <div class="modal fade bd-example-modal-lg" id="chartresult" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
                <form  id="form-chart">
                    <div class="modal-header ">
                        <h3 class="text-title text-center">QUICK COUNT PEMILIHAN</h3>                    
                    </div>                        
                    <div class="modal-body">
                        <div class="row">
                           <div class="col col-12 col-lg-6 col-sm-12 col-xm-12 ">
                                  <p for=" ">Data Suara Pemilih</p> 
                                  <div id="ChartBarSuara" style="height: 300px; width: 100%;"></div>            
                            </div>
                             <div class="col col-12 col-lg-6 col-sm-12 col-xm-12">
                                  <p for=" ">Persentase Suara Masuk</p>   
                                  <div id="ChartPieSuara" style="height: 300px; width: 100%;"></div>          
                            </div>
                             <div class="col col-12 col-lg-12 col-sm-6 col-xm-12 mt-2 ">
                                <div class="row text-center">
                                    <p class="text-left col col-12 col-md-12" for=" ">Data Kandidat</p>
                                    <div class="img-responsive col col-md-3 text-center">
                                            <img height="50px" width="50px" src="<?=base_url()?>assets/user/img/logohimasi.png" alt="">
                                            <p style="font-size:12px;">Intan (NO Urut 1)</p>
                                    </div>  
                                    <div class="img-responsive col col-md-3 text-center ">
                                            <img height="50px" width="50px" src="<?=base_url()?>assets/user/img/logohimasi.png" alt="">
                                            <p style="font-size:12px;">Ajo (NO Urut 2)</p>
                                    </div>  
                                    <div class="img-responsive col col-md-3 text-center">
                                            <img height="50px" width="50px" src="<?=base_url()?>assets/user/img/logohimasi.png" alt="">
                                            <p style="font-size:12px;">Indah (NO Urut 3)</p>
                                    </div> 
                                  </div>            
                            </div>
                            
                            <div class="col col-12 col-lg-12 col-sm-6 col-xm-12">
                                  <p for=" ">7 Data Masuk Terbaru</p>  
                                  <table class="table table-sm">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Waktu Masuk</th>
                                            <th scope="col">Pilihan</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>1</td>
                                                <td>Otto</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>1</td>
                                                <td>Thornton</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                           
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" >Tutup</button>
                </div>
                </form>
            </div>
        </div>
    </div>                                       
                                        
    <a href="#" class="ignielToTop"></a>

    <script>
        AOS.init();
    </script>

    <script src="<?=base_url()?>assets/user/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/user/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/user/js/-Countdown-BS4-.js"></script>
    <!-- chart js dan css canvasjs  -->
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>
<!--  notifikasi status voting  -->
<?php if($this->session->flashdata('notifikasi_voting')){echo $this->session->flashdata('notifikasi_voting'); }?>  
<!-- notifikasi success_voting -->
<?php if($this->session->flashdata('success_voting')){echo $this->session->flashdata('success_voting'); }?>  

<script type="text/javascript">
$(document).ready(function() {
    load_data_kandidat();
    load_data_quotes();
    $.ajax({
            url : "<?php echo base_url('user/getDateMulaiPemilihan')?>",
            type: "POST", 
            dataType : "json",
            success: function(data)
            {   
                for(var i=0; i < data.length; i++){
                    var waktuMulaiVote = data[i].waktu_buka_voting;
                    var waktuTutupVote = data[i].waktu_tutup_voting;
                    var target_date = new Date(waktuMulaiVote).getTime();
                    // variables for time units
                    var days, hours, minutes, seconds;
                    // get tag element
                    var countdown = document.getElementById("data_countdown");
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
                        if(seconds_left < 0 ){
                            ///////////////// waktu countdown buka voting ////////////////////////
                           countdown.innerHTML =
                           ' <div class="col-12 mb-3"> ' +
                             '   <h1 style="color: black;">Pemilihan Dimulai Dalam :</h1> ' +
                           ' </div> ' +
                           ' <div class="col-6 col-md-3 mt-3">  ' +
                           ' <p id="c_hari" class="number-days m-0 rounded-top" style="color: rgb(144,3,3);">0</p> ' +
                           ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Hari</p></u> ' +
                           ' </div> ' +
                           ' <div class="col-6 col-md-3 mt-3"> ' +
                           ' <p id="c_jam" class="number-hours m-0 rounded-top" style="color: rgb(144,3,3);">0</p> ' +
                           ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Jam</p></u> ' +
                           ' </div> ' +
                           ' <div class="col-6 col-md-3 mt-3"> ' +
                           ' <p id="c_menit" class="number-minutes m-0 rounded-top" style="color: rgb(144,3,3);">0</p> ' +
                           ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Menit</p></u> ' +
                           ' </div> ' +
                           ' <div class="col-6 col-md-3 mt-3"> ' +
                           ' <p id="c_detik" class="number-seconds m-0 rounded-top" style="color: rgb(144,3,3);">0</p> ' +
                           ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Detik</p></u> ' +
                           ' </div>';

                               /////////////////////// // countdown tutup pemilihan ///////////////////////
                                
                                var target_date2 = new Date(waktuTutupVote).getTime();
                                // update the tag with id "countdown" every 1 second
                                setInterval(function () {
                                    // find the amount of "seconds" between now and target
                                    var current_date = new Date().getTime();
                                    var seconds_left = (target_date2 - current_date) / 1000;
                                    // do some time calculations
                                    days = parseInt(seconds_left / 86400);
                                    seconds_left = seconds_left % 86400;
                                    hours = parseInt(seconds_left / 3600);
                                    seconds_left = seconds_left % 3600;
                                    minutes = parseInt(seconds_left / 60);
                                    seconds = parseInt(seconds_left % 60);
                                    // format countdown string + set tag value
                                    if(seconds_left < 0 ){
                                        // waktu countdown buka voting 
                                    countdown.innerHTML =
                                    ' <div class="col-12 mb-3"> ' +
                                        '   <h1 style="color: black;">Pemilihan Ditutup Dalam :</h1> ' +
                                    ' </div> ' +
                                    ' <div class="col-6 col-md-3 mt-3">  ' +
                                    ' <p id="c_hari" class="number-days m-0 rounded-top" style="color: rgb(144,3,3);">0</p> ' +
                                    ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Hari</p></u> ' +
                                    ' </div> ' +
                                    ' <div class="col-6 col-md-3 mt-3"> ' +
                                    ' <p id="c_jam" class="number-hours m-0 rounded-top" style="color: rgb(144,3,3);">0</p> ' +
                                    ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Jam</p></u> ' +
                                    ' </div> ' +
                                    ' <div class="col-6 col-md-3 mt-3"> ' +
                                    ' <p id="c_menit" class="number-minutes m-0 rounded-top" style="color: rgb(144,3,3);">0</p> ' +
                                    ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Menit</p></u> ' +
                                    ' </div> ' +
                                    ' <div class="col-6 col-md-3 mt-3"> ' +
                                    ' <p id="c_detik" class="number-seconds m-0 rounded-top" style="color: rgb(144,3,3);">0</p> ' +
                                    ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Detik</p></u> ' +
                                    ' </div>';
                                        
                                        //    modifikasi btn voting
                                            var element = document.getElementById("btn_voting");
                                            element.setAttribute("onclick", "votingsekarang('tutup');");
                                            
                                    }else{
                                        countdown.innerHTML =
                                    ' <div class="col-12 mb-3"> ' +
                                        '   <h1 style="color: black;">Pemilihan Ditutup Dalam :</h1> ' +
                                    ' </div> ' +
                                    ' <div class="col-6 col-md-3 mt-3">  ' +
                                    ' <p id="c_hari" class="number-days m-0 rounded-top" style="color: rgb(144,3,3);">'+ days +'</p> ' +
                                    ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Hari</p></u> ' +
                                    ' </div> ' +
                                    ' <div class="col-6 col-md-3 mt-3"> ' +
                                    ' <p id="c_jam" class="number-hours m-0 rounded-top" style="color: rgb(144,3,3);">'+ hours +'</p> ' +
                                    ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Jam</p></u> ' +
                                    ' </div> ' +
                                    ' <div class="col-6 col-md-3 mt-3"> ' +
                                    ' <p id="c_menit" class="number-minutes m-0 rounded-top" style="color: rgb(144,3,3);">'+ minutes +'</p> ' +
                                    ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Menit</p></u> ' +
                                    ' </div> ' +
                                    ' <div class="col-6 col-md-3 mt-3"> ' +
                                    ' <p id="c_detik" class="number-seconds m-0 rounded-top" style="color: rgb(144,3,3);">'+ seconds +'</p> ' +
                                    ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Detik</p></u> ' +
                                    ' </div>';
                                    //    modifikasi btn voting
                                            var element = document.getElementById("btn_voting");
                                            element.setAttribute("onclick", "votingsekarang('buka');");
                                        
                                    }
                    
                        }, 1000);
                            //    modifikasi btn voting
                                var element = document.getElementById("btn_voting");
                                element.setAttribute("onclick", "votingsekarang('buka');");
                                
                        }else{
                             countdown.innerHTML =
                           ' <div class="col-12 mb-3"> ' +
                             '   <h1 style="color: black;">Pemilihan Dimulai Dalam :</h1> ' +
                           ' </div> ' +
                           ' <div class="col-6 col-md-3 mt-3">  ' +
                           ' <p id="c_hari" class="number-days m-0 rounded-top" style="color: rgb(144,3,3);">'+ days +'</p> ' +
                           ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Hari</p></u> ' +
                           ' </div> ' +
                           ' <div class="col-6 col-md-3 mt-3"> ' +
                           ' <p id="c_jam" class="number-hours m-0 rounded-top" style="color: rgb(144,3,3);">'+ hours +'</p> ' +
                           ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Jam</p></u> ' +
                           ' </div> ' +
                           ' <div class="col-6 col-md-3 mt-3"> ' +
                           ' <p id="c_menit" class="number-minutes m-0 rounded-top" style="color: rgb(144,3,3);">'+ minutes +'</p> ' +
                           ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Menit</p></u> ' +
                           ' </div> ' +
                           ' <div class="col-6 col-md-3 mt-3"> ' +
                           ' <p id="c_detik" class="number-seconds m-0 rounded-top" style="color: rgb(144,3,3);">'+ seconds +'</p> ' +
                           ' <u style="color: black;"> <p class="text-countdown rounded-bottom" style="color: black;">Detik</p></u> ' +
                           ' </div>';
                            //    modifikasi btn voting
                                var element = document.getElementById("btn_voting");
                                element.setAttribute("onclick", "votingsekarang('belum');");
                            
                        }
        
            }, 1000);


                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {}
            
        });
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
                     html += "<div class='col col-12  col-sm-12 col-md-12 col-lg-4 col-xl-5 offset-0 offset-lg-2 offset-xl-1' style='padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;'>"+
                                    "<div class='card-img bg-light border rounded shadow card' data-aos='fade-up'> "+
                                        "<div class='img bg-light border rounded shadow card'> "+
                                            "<h2 class='head-img text-center'> NO Urut "+data[i].nomor_urut+"</h2> "+
                                            "<img widht='100%' height='400px' src='<?=base_url()?>assets/img/kandidat/"+data[i].foto+"' alt=''></div>"+
                                            " <div class='content'>"+
                                            "<h3 data-aos='zoom-out' class='text-center'>"+data[i].nama_kandidat+"</h3>"+
                                             "<ul><li><p>Periode : "+data[i].periode+"</p></li>"+
                                            "<li><p>Nama : "+data[i].nama_kandidat+"</p></li>"+
                                            "<li><p>NPM : "+data[i].nomor_induk+"</p></li>"+
                                            "<li><p>Jurusan : "+data[i].jurusan+"</p></li></ul>"+
                                            "</div>"+
                                             "</div>"+
                                            " </div>";
                }
                $("#load_data_kandidat").html(html); 
                 var html2 = " ";
                 var j;
                 for(j=0; j < data.length; j++){
                     html2 += '<div class="col col-12  col-sm-12 col-md-12 col-lg-4 col-xl-5 offset-0 offset-lg-2 offset-xl-1"'+
                     'style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;">'+
                        '<h2 class="text-center">NO Urut '+data[j].nomor_urut+'</h2>'+
                        '<div class="container con-vm">'+
                            '<div class="card-vm"> <div data-aos="fade-up" data-aos-duration="3000" class="img" data-text=""> <h1>Visi/Misi</h1></div>'+
                                 '<div class="content">'+
                                    ' <h3>Visi</h3>'+
                                    ' <p>'+data[j].visi+'.</p>'+
                                    ' <h3>Misi</h3>'+
                                    ' <p>'+data[j].misi+'. </p>'+
                                    '</div> </div></div></div>';
                 }
                $("#load_DataVS").html(html2); 
                 var html3 = " ";
                 var z;
                 for(z=0; z < data.length; z++){
                    html3 += '<div data-aos="fade-up" class="col col-12  col-sm-12 col-md-12 col-lg-4 col-xl-5 offset-0 offset-lg-2 offset-xl-1" style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;border: 2px solid black;">'+
                                   ' <h2 class="text-center">No Urut '+data[z].nomor_urut+'</h2>'+
                                   ' <div class="bg-light border rounded shadow card">'+
                                       '<div class="vplayer">'+
                                       '<iframe src="'+data[z].link_video+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'+
                                    '</div>'+
                                    ' </div> '+
                                    '</div>';
                     
                 }
                $("#load_datavideo").html(html3); 

            }
        });
     }  
        function load_data_quotes(){    
            $.ajax({
            url : "<?php echo base_url('user/showDataPesan')?>",
            type: "POST", 
            async : false,
            dataType : "json",
            success: function(data)
            {   
                var html = " ";
                var i;
                var ac;
                for(i=0; i < data.length; i++){
                    if(i == 0){
                       ac ="active"; 
                    }else{ac="";}
                    html+= ' <div class="carousel-item '+ac+'">'+
                       ' <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content">'+
                        ' <img class="rounded-circle h-img" src="<?=base_url()?>assets/img/kandidat/'+data[i].p_foto+'" width="200">'+
                           ' <p class="signature">"'+data[i].nama_lengkap+'"</p>'+
                            '<p class="text-center"><em>"'+data[i].pesan+'."</em><br></p>'+
                       ' </div>'+
                   ' </div>';
                }
                $("#load_data_pesan").html(html); 
            }
            });
        }

});

function votingsekarang(status){
    // kondisi jika telah validasi
    if(status == "buka"){
        
        var st_text;
        st_text = document.getElementById("st_text_V").innerText;
        if(st_text =="terverifikasi"){
            // notif untuk join ke halaman vote 
            swal({
            title: 'Vote',
            text: "Voting sekarang?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya',
            closeOnConfirm: false
        }).then(function(isConfirm) {
            if (isConfirm) {
                 // redirect kirim data voting  default ke tabel voting  
                window.location.href = "<?=base_url()?>user/set_voting"; 
               
                }
            })
        }else{
             swal({
                title: 'Oops maaf.',
                text: 'Data Anda belum terverifikasi!',
                timer: 1500,
                type :'error'
                })
        }
            
                                                
    }else if(status == "belum"){
            swal({
                title: 'Oops maaf.',
                text: 'Voting belum dibuka!',
                timer: 1200,
                type :'error'
                })
    }
    else{
            swal({
                title: 'Oops maaf.',
                text: 'Voting ditutup!',
                timer: 1200,
                type :'error'
                })
    }
}
</script>
<script>
//session quick count 
     quickCount();
     verifikasiStatus();
     checkVotingUser();
    function quickCount(){
         jQuery.ajax({
            url : "<?php echo base_url('user/getQuickCount')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                
                var obj = data.pendaftar;
                var obj2 =data.suara;
                for(var i=0; i < obj.length; i++){
                 var pendaftar = document.getElementById("count_pendaftar");
                 pendaftar.innerHTML = obj[i].total_pendaftar;
                }
                for(var i=0; i < obj2.length; i++){
                 var voting = document.getElementById("count_voting");
                 voting.innerHTML = obj2[i].total_suara_masuk;
                }
                
            }
         })
    }
    function checkVotingUser(){
         jQuery.ajax({
            url : "<?php echo base_url('user/checkVotingUser')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                var btnChart = document.getElementById("btnChart");
                if(data.length > 0){
                  btnChart.setAttribute('style', 'display: linear;');
                }else{
                    btnChart.setAttribute('style', 'display: none;');
                }
                // var obj = data.pendaftar;
                // var obj2 =data.suara;
                // for(var i=0; i < obj.length; i++){
                //  var pendaftar = document.getElementById("count_pendaftar");
                //  pendaftar.innerHTML = obj[i].total_pendaftar;
                // }
                // for(var i=0; i < obj2.length; i++){
                //  var voting = document.getElementById("count_voting");
                //  voting.innerHTML = obj2[i].total_suara_masuk;
                // }
                
            }
         })
    }
    function verifikasiStatus(){
         jQuery.ajax({
            url : "<?php echo base_url('user/getverifStatus')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                for(var i=0; i < data.length; i++){
                    var status = data[i].validasi;
                    var st_text;
                    st_text = document.getElementById("st_text_V");
                    if(status =="terverifikasi"){
                        //  attribut status
                        st_text.setAttribute('style', 'height: 50px;width: 250px; padding-top: 10px; font-size: 20px; color:#144F04;');
                    }else{
                        //  attribut status
                        st_text.setAttribute('style', 'height: 50px;width: 250px;color:#780303; padding-top: 10px; font-size: 20px;');
                    }
                //    text status 
                 st_text = document.getElementById("st_text_V");
                 st_text.innerHTML = data[i].validasi;
                           
                }
            }
         })
    }
	window.setTimeout("waktu()", 1000);
	function waktu() {
        
        //setting quickCount berupa waktu dan total suara masuk 
		var waktu = new Date();
		setTimeout("waktu()", 1000);
        var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "Desember"];
        document.getElementById("tanggal").innerHTML = waktu.getDate()+ " "+months[waktu.getMonth()]+ " "+
        waktu.getFullYear()+ " " +waktu.getHours()+ ":"+ waktu.getMinutes()+ ":"+ waktu.getSeconds();
        //check status user 
        verifikasiStatus();
        // total suara masuk 
        // .... function hitung suara masuk
        quickCount();
        
	}
 </script>
 