<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--  -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>[KONFIRMASI EVENT] </title>
 <link rel="shortcut icon" href="<?php echo base_url()?>assets/user/img/logohimasi.png">
 <!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- icons  -->
<script src="https://kit.fontawesome.com/997fbe78b5.js" crossorigin="anonymous"></script>
</head>
<style>
#outlook a {
            padding: 0;
        }

        body {
            width: 100% !important;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            color: black;
            padding: 0;
            font-family: Helvetica, arial, sans-serif;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .backgroundTable {
            margin: 0;
            padding: 0;
            width: 100% !important;
            line-height: 100% !important;
        }

        .main-temp table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            font-family: Helvetica, arial, sans-serif;
        }

        .main-temp table td {
            border-collapse: collapse;
        }

        .button {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
            width: 100%;
            height: 30px;
        }

        .button:hover {
            background-color: #FFFFFF;
            color: white;
        }
</style>
<?php foreach ($mahasiswa as $m) ?>
<?php foreach ($periode as $p) ?>
<body>

<table width="100%" cellpadding="0" cellspacing="0" margin-top="50px" border="0" class="backgroundTable main-temp">
        <tbody>
            <tr>
                <td>
                    <table width="600" align="center" cellpadding="15" cellspacing="0" border="0" class="devicewidth" style="background-color:  #FFFFFF; ">
                        <tbody>
                            <!-- Start header Section -->
                            <tr style="background-color:#921111; ">
                                <td style="padding-top: 30px; border-radius: 0px 0px 30px 30px; ">
                                    <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" style=" text-align: center;">
                                        <tbody>
                                        <tr>
                                         <td style="padding-bottom: 0px; font-size: 24px; line-height: 28px; color: white;">
                                             <img src="<?php echo base_url()?>assets/user/img/logohimasi.png" title="HIMASI" style="width:100px;height:100px;text-decoration:none;">
                                             
                                             </td>
                                        </tr>
                                           <?php $date = strtotime(" +1 years"); $periode =  date("Y").' / '.date("Y",$date);?>
                                            <tr>
                                                <td style="padding-bottom: 10px; font-size: 24px; line-height: 28px; color: white;">
                                                    <strong> Terimakasih Atas Pendaftaran Pemilu HIMASI <?=$periode;?></strong>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 14px; line-height: 18px; color: white; padding-bottom: 10px">

                                                    Info detail data peserta ada dibawah ini:
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <!-- End header Section -->

                            <!-- Start address Section -->
                            <tr >
                                <td style="padding-top: 20;" border="1">
                                    <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                        <tbody>
                                             <tr>
                                                <td style="width: 100%; font-size: 14px;  color: black; padding-bottom: 5px;">
                                                   <h4 ><span class=""></span> Informasi Data Peserta</h4>
                                                </td>
                                                <td style="width: 0%; font-size: 14px; line-height: 18px; color: black;">
                                                    
                                                </td>
                                            </tr>
                                             <tr>
                                                <td style="width: 25%; font-size: 14px;  color: black; padding-bottom: 5px;">
                                                    Waktu Daftar
                                                </td>
                                                 <?php
                                                $mw = date_create($m->m_waktu);
                                                $dtmw = date_format($mw, 'd-m-y H:i:s');
                                                ?>
                                                <td style="width: 75%; font-size: 14px; line-height: 18px; color: black;">
                                                    :&nbsp;<strong><?= $dtmw?></strong> 
                                                </td>
                                            </tr>
                                             <tr>
                                                <td style="width: 25%; font-size: 14px;  color: black; padding-bottom: 5px;">
                                                    NPM (Username)
                                                </td>
                                                <td style="width: 75%; font-size: 14px; line-height: 18px; color: black;">
                                                    :&nbsp;<strong><?= $m->nomor_induk?></strong> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 25%; font-size: 14px;  color: black; padding-bottom: 5px;">
                                                    Nama Lengkap 
                                                </td>
                                                <td style="width: 75%; font-size: 14px; line-height: 18px; color: black;">
                                                    :&nbsp;<strong><?= $m->nama_mahasiswa?></strong> 
                                                </td>
                                            </tr>
                                             <tr>
                                                <td style="width: 25%; font-size: 14px;  color: black; padding-bottom: 5px;">
                                                    Password Akun
                                                </td>
                                                <td style="width: 75%; font-size: 14px; line-height: 18px; color: black;">
                                                    :&nbsp;<strong><?= base64_decode($m->password)?></strong> 
                                                </td>
                                            </tr>
                                             <tr>
                                                <td style="width: 25%; font-size: 14px;  color: black; padding-bottom: 5px;">
                                                    Email Terdaftar
                                                </td>
                                                <td style="width: 75%; font-size: 14px; line-height: 18px; color: black;">
                                                    :&nbsp;<strong><?= $m->email?></strong> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 25%; font-size: 14px;  color: black; padding-bottom: 5px;">
                                                    Status Akun
                                                </td>
                                                <td style="width: 75%; font-size: 14px; line-height: 18px; color: black;">
                                                    :&nbsp;<strong><?= $m->validasi?></strong> 
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                         <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                             <tbody>
                                              <tr>
                                                <td >
                                                    <h4 ><span class=""></span> Informasi Pemilihan dan MUSMA</h4>
                                                </td>
                                             </tr>
                                               <!-- manipulasi share kalender  -->
                                                <?php
                                                $dt1 = date_create($p->waktu_awal_acara);
                                                $dt2 = date_create($p->waktu_akhir_acara);
                                                
                                                $dt3 = date_create($p->waktu_buka_voting);
                                                $dt4 = date_create($p->waktu_tutup_voting);

                                                $d1 = date_format($dt1, 'd-m-Y H:i');
                                                $d2 = date_format($dt2, 'd-m-Y H:i');
                                                $d3 = date_format($dt3, 'd-m-Y H:i');
                                                $d4 = date_format($dt4, 'd-m-Y H:i');

                                                ?>
                                             <tr>
                                                <td style="width: 100%; font-size: 14px;  color: black; padding-bottom: 5px;">
                                                    Jadwal Musyawarah Mahasiswa <br>
                                                     <br> - Waktu : <strong><?=$d1;?> </strong> &nbsp; sampai  <strong><?=$d2;?>  </strong> &nbsp; 
                                                        <br><br>
                                                    Jadwal Pemilihan <br>
                                                     <br> - Waktu  : <strong><?=$d3;?></strong> &nbsp; sampai  <strong><?=$d4;?> </strong> &nbsp;
                                                        <br><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                 <!-- manipulasi share kalender  -->
                                                <?php
                                                $dt1 = date_create($p->waktu_awal_acara);
                                                $dt2 = date_create($p->waktu_akhir_acara);
                                                $d1 = date_format($dt1, 'Ymd');
                                                $h1 = date_format($dt1, 'His');
                                                $ndt_awal  = $d1."T".$h1;
                                                $d2 = date_format($dt2, 'Ymd');
                                                $h2 = date_format($dt2, 'His');
                                                $ndt_akhir  = $d2."T".$h2;

                                                $date2 = strtotime("-1 years"); 
                                                ?>
                                                 <td style="width: 100%; font-size: 14px;  color: black; padding-bottom: 5px;">
                                                    Simpan Ke Kalender &nbsp;
                                                    <a target="n_blank" href='<?="https://calendar.google.com/calendar/u/0/r/eventedit?text=[MUSYAWARAH+MAHASISWA+dan+PEMILIHAN+UMUM]&dates=".$ndt_awal."a/".$ndt_akhir."a"."&location=".$p->lokasi."&details=Undangan terbuka untuk semua mahasiswa Sistem Informasi Universitas Nasional. Tidak terasa kepengurusan Himpunan Mahasiswa Sistem Informasi (HIMASI) Periode ".date('Y',$date2)." / ".date('Y')." akan berakhir,dan akan digantikan oleh kepengurusan yang baru. Mari kita ramaikan acara tahunan kita yaitu MUSMA dan PEMILU yang akan diselenggarakan pada : %0A%0ATanggal :".date_format($dt1, 'd-m-Y')."- selesai.%0ALokasi : ".$p->lokasi." via Zoom Meeting Platform%0A%0ALink : ".$p->link_streaming."%0A%0ADalam acara tersebut akan dibahas mengenai Laporan Penanggung Jawaban (LPJ) serta pengenalan Calon Ketua Himpunan Mahasiswa Sistem Informasi Periode ".$p->periode;?>'>
                                                    Klik Disini</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100%; font-size: 14px; color: black; padding-bottom: 5px;  padding-top: 25px;">
                                                  <strong> *Peserta diharapkan login tepat waktu dengan mengakses link dibawah ini.</strong>
                                                </td>
                                               
                                            </tr>
                                             <tr>
                                                <td style="width: 100%; font-size: 14px;  color: black; padding-bottom: 5px;">
                                                    - Link ZOOM Meeting&nbsp; atau&nbsp;<a href="<?= $p->link_streaming?>">Klik Disini</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100%; font-size: 14px;  color: black; ">
                                                    - Link Website Pemilihan&nbsp;<a href="https://himasi.ftki.unas.ac.id/pemilu/">Klik Disini</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                         </table>
                                         <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                             <tbody>
                                              <tr>
                                                <td >
                                                    <h4 ><span class=""></span> Panduan Pemilihan</h4>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td style="width: 100%; font-size: 14px;  color: black; padding-bottom: 25px;">
                                                    <img width="100%" height="500px" src="<?=base_url()?>assets/user/img/pemilihan.jpg" alt="Panduan Pemilihan" srcset=""> 
                                                </td>
                                            </tr>
                                            
                                            </tr>
                                            </tbody>
                                    </table>
                                </td>
                            </tr>
                            <!-- End address Section -->
                            <!-- Start payment method Section -->
                            <tr style="background-color:#921111;">
                                <td style="padding-top: 30px; border-radius: 30px 30px 0px 0px;">
                                    <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" style="text-align: center;">
                                        <tbody>
                                            <tr style="background-color:#921111; ">
                                                <td colspan="2" style="width: 100%; text-align: center; font-style: italic; font-size: 13px; font-weight: 600; color: white; padding: 15px 0;">
                                                    <small>Social Media HIMASI</small>
                                                    <br><br>
                                                    <a style="color:#921111;" target="n_blank" title="Email HIMASI" href="mailto:himasiunas@gmail.com">
                                                        <i style="font-size: 26px; padding-right:5px; color:white;">
                                                            <img widht="30px" height="30px" src="<?=base_url()?>assets/img/gmail.png" class="fas fa-envelope-square">
                                                        </i>   
                                                    </a>
                                                    <a style="color:#921111;" target="n_blank"  title="OA Line" href="https://lin.ee/S1usGrm">
                                                        <i style="font-size: 30px; padding-right:5px; color:white;">
                                                           <img widht="35px" height="35px"  src="<?=base_url()?>assets/img/line.png" class="fas fa-envelope-square">
                                                        </i>   
                                                    </a>
                                                     <a style="color:#921111;" target="n_blank"  title="Instagram" href="https://www.instagram.com/himasi.unas1949/">
                                                        <i style="font-size: 40px; padding-right:5px; color:white;">
                                                           <img widht="40px" height="40px"  src="<?=base_url()?>assets/img/youtube.png" class="fas fa-envelope-square">
                                                        </i>      
                                                          
                                                    </a>
                                                     <a style="color:#921111;" target="n_blank" title="Youtube Channel" href="https://www.youtube.com/channel/UCdJF12PYit1xneWAge1Mjlg">
                                                        <i style="font-size: 30px; padding-right:5px; color:white;">
                                                            <img widht="40px" height="40px"  src="<?=base_url()?>assets/img/instagram.png" class="fas fa-envelope-square">
                                                        </i> 
                                                    </a>
                                                    <a style="color:#921111;" target="n_blank"  title="Website" href="https://himasi.ftki.unas.ac.id">
                                                        <i style="font-size: 36px; padding-right:5px; color:white;">
                                                            <img widht="30px" height="30px"  src="<?=base_url()?>assets/img/globe1.png" class="fas fa-envelope-square">
                                                        </i>   
                                                    </a>
                                                     

                                                </td>
                                            </tr>
                                            <tr style="background-color:#921111;">
                                                <td colspan="2" style="width: 100%; text-align: center; font-style: italic; font-size: 13px; font-weight: 600; color: white; padding: 5px 0 15px 0;">
                                                   
                                                     <small>Copyright &copy; HIMASI</small> 
                                                    <small><br>Developed by Divisi Litbang <br> 2020/2021</small>
                                                    <br>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            
                            <!-- End payment method Section -->

                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    
<body>

</html>