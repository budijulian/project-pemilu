

<!-- chart js dan css canvasjs  -->
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Quick Count Pemilihan 
                    <small>Suara</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Result</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i id="count_pendaftar">00</i></span>
                             <div class="info-box-content">
                                <span class="info-box-text">Mahasiswa Terdaftar</span>
                                 <h1 id="scount_pendaftar" class="fa fa-2x text-dark">Orang </h1>
                                <!-- <a href="#" title="More" class="small-box-footer"> <span class="fa fa-arrow-circle-right"></span></a> -->
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i id="count_suara_masuk">00</i></span>
                           <div class="info-box-content">
                            <span class="info-box-text">Suara Masuk</span>
                            <h1  class="fa fa-2x text-dark">Orang </h1>
                            <!-- <a href="#" title="More" class="small-box-footer"> <span class="fa fa-arrow-circle-right"></span></a> -->
                        </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    
                
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i id="count_suara_belum_pilih">00</i></span>
                            <div class="info-box-content">
                            <span class="info-box-text"> Belum Memilih</span>
                             <h1 class="fa fa-2x text-dark"> Orang </h1>
                            <!-- <a href="#" title="More" class="small-box-footer"> <span class="fa fa-arrow-circle-right"></span></a> -->
                        </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="ion-ios-timer"></i></span>
                            <div class="info-box-content">
                            <span class="info-box-text">Sisa Waktu Voting</span>
                             <h1 id="countdown_time" class="fa fa-2x text-danger">00:00:00 </h1>
                            <!-- <a href="#" title="More" class="small-box-footer"> <span class="fa fa-arrow-circle-right"></span></a> -->
                        </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <div class="box text-center">
                    <div class="box-title">
                     <h1 class="text-primary"><strong>QUICK COUNT </strong></h1>
                     <p style="font-size:20px;" class="info-box-title text-dark"> 
                       &nbsp;<?php $date2 = strtotime(" +1 years");?>
                           PEMILIHAN KETUA HIMPUNAN MAHASISWA SISTEM INFORMASI <br> PERIODE <?= date('Y').' / '.date("Y",$date2);?></strong></p>
                    </div>
                    <div class="box-body">
                        <p> <strong id="waktu_tutup_voting">--</strong> </p>
                        <div class="row">
                            <div class="col col-md-8 text-left">
                            <!-- <div class="table-responsive">   -->
                                    <div id="ChartBarSuara" style="height: 300px; width: 100%;"></div> 
                                <!-- </div>   -->
                            </div>
                            <div class="col col-md-4 text-left">
                            <!-- <div class="table-responsive">   -->
                                    <div id="ChartPieSuara" style="height: 300px; width: 100%;"></div>  
                                <!-- </div>   -->
                            </div>
                            <!-- <div class=" col col-md-6 text-right">
                                <a title="Refresh" class="btn btn-light" onclick="refreshData();">
                                    <span class="fa fa-refresh"></span> Refresh </a>
                                <a title="Print Result"  class="btn btn-info" onclick="printResult();">
                                    <span class="fa fa-print"></span> Print </a>
                                <a title="Simpan Data"  class="btn btn-primary" onclick="simpanData();">
                                    <span class="fa fa-save"></span> Simpan </a>
                            
                            </div> -->
                            
                        </div>
                    </div>
                    <!-- /.box-header -->
                  
                </div>
                 <div class="box text-center">
                      <p style="font-size:20px;" class="info-box-title text-dark">
                           <!-- <strong>RESULT QUICK COUNT </strong></p> -->
                    <div class="box-body">
                        <p> <strong id="waktu_tutup_voting">--</strong> </p>
                        <div class="row">
                            <div class="col col-md-4 text-left">
                            <!-- <div class="table-responsive">   -->
                                <div id="chartPieAngkatan" style="height: 300px; width: 100%;"></div>
                                <!-- </div>   -->
                            </div>
                            <div class="col col-md-4 text-left">
                            <!-- <div class="table-responsive">   -->
                                <div id="chartPieSudahPilih" style="height: 300px; width: 100%;"></div>
                                <!-- </div>   -->
                            </div>
                            <div class="col col-md-4 text-left">
                            <!-- <div class="table-responsive">   -->
                                <div id="chartPieBelumPilih" style="height: 300px; width: 100%;"></div>
                                <!-- </div>   -->
                            </div>
                            <div class="col col-md-4">
                            <!-- <div class="table-responsive">   -->
                            <small class="">Total Mahasiswa per Angkatan</small>
                               <table  class="table table-bordered table-striped text-left" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Angkatan</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="datapieangkatan">
                                            
                                            </tbody>
                                        </table>
                                <!-- </div>   -->
                            </div>
                            <div class="col col-md-4 ">
                            <!-- <div class="table-responsive">   -->
                            <small class="">Total Suara Masuk per Angkatan</small>
                               <table class="table table-bordered table-striped text-left" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Angkatan</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="datapiesudahpilih">
                                            
                                            </tbody>
                                        </table>
                                <!-- </div>   -->
                            </div>
                            <div class="col col-md-4 ">
                            <!-- <div class="table-responsive">   -->
                            <small class="">Total Belum Memilih per Angkatan</small>
                               <table  class="table table-bordered table-striped text-left" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Angkatan</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="datapiebelumpilih">
                                            
                                            </tbody>
                                        </table>
                                <!-- </div>   -->
                            </div>
                             <div class="col col-md-12">
                                <a class="btn btn-info text-center" title="Data Mahasiswa" data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Detail <span class="fa fa-search"></span>
                                        </a>
                                </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                  
                </div>
                 <div  id="detailData" class="box collapse text-center">
                    <div class="box-body">
                        <p> <strong id="waktu_tutup_voting">--</strong> </p>
                        <div class="row">
                            <div class="col col-md-12 text-left">
                            <!-- <div class="table-responsive">   -->
                            <small class="text-left">Data Voting Mahasiswa (sudah/belum)</small>
                                <div class="table-responsive">  
                                    <table id="datatabelVoting" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Waktu Voting</th>
                                                            <th>NPM</th>
                                                            <th>Nama Mahasiswa</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="loadDataTabelVoting">
                                                    
                                                    </tbody>
                                     </table>
                                </div>  
                            </div>
                            
                        </div>
                    </div>
                    <!-- /.box-header -->
                  
                </div>
        </section>
    </div>
   </div>
</div>
<!-- !--jQuery library-- > -->
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
<link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
</body>
<script>
    jQuery.ajax({
            url : "<?php echo base_url('admin/periode/getDateMulaiPemilihan')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {   var waktuTutup;
                for(var i=0; i < data.length; i++){ 
                //  waktu mulai date time pemilihan 
                waktuTutup =  data[i].waktu_tutup_voting;
                 //  result data chart home
                var dt = new Date(waktuTutup);
                var wpt = document.getElementById("waktu_tutup_voting");
                var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "Desember"];
                wpt.innerHTML ="( Voting Ditutup : " + dt.getDate()+ " "+months[dt.getMonth()]+ " "+dt.getFullYear()+" "+ dt.getHours()+ ":"+ dt.getMinutes()+" )";
                
                // countdown waktu voting
                //  waktuTutup =  data[i].waktu_tutup_voting;
                // set the date we're counting down to
                var target_date = new Date(waktuTutup).getTime();
                // variables for time units
                var days, hours, minutes, seconds;
                // get tag element
                var countdown = document.getElementById("countdown_time");
                // update the tag with id "countdown" every 1 second
                setInterval(function () {
                    // find the amount of "seconds" between now and target
                    var current_date = new Date().getTime();
                    var seconds_left = (target_date - current_date) / 1000;
                    // kondisi start countdown jika sudah memasuki waktunya 
                    // do some time calculations
                    days = parseInt(seconds_left / 86400);
                    seconds_left = seconds_left % 86400;
                    hours = parseInt(seconds_left / 3600);
                    seconds_left = seconds_left % 3600;
                    minutes = parseInt(seconds_left / 60);
                    seconds = parseInt(seconds_left % 60);

                    // format countdown string + set tag value
                    if(seconds_left < 0 ){
                        countdown.innerHTML =
                         " " + 00 +
                        ":" + 00 +
                        ":" + 00 +
                        " ";
                    }else{
                        countdown.innerHTML =
                         " " + hours +
                        ":" + minutes +
                        ":" + seconds +
                        " ";
                    }
                    }, 1000);
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {}
    });

 // quick count data  
    function quickCountVoting(){
         jQuery.ajax({
            url : "<?php echo base_url('admin/voting/getQuickVoting')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                var obj = data.pendaftar;
                var obj2 = data.suara_sudah_pilih;
                var obj3 = data.suara_belum_pilih;
                for(var i=0; i < obj.length; i++){
                //  result data chart home
                 var d1 = document.getElementById("count_pendaftar");
                 d1.innerHTML = obj[i].total_pendaftar;
                }
                for(var i=0; i < obj2.length; i++){
                //  result data chart home
                 var d2 = document.getElementById("count_suara_masuk");
                 d2.innerHTML = obj2[i].total_suara_masuk;
                }
                for(var j=0; j < obj3.length; j++){
                //  result data chart home
                  var d3 = document.getElementById("count_suara_belum_pilih");
                 d3.innerHTML = obj3[j].t_suara_belum_pilih;
                }
                
            }
         })
    }
    // time now 
    window.setTimeout("waktu()", 1000);      
	function waktu() {
		setTimeout("waktu()", 1000);
         // update data realtime one second 
        quickCountVoting();
	}
</script>
<!-- session chart pertama   -->
<script>
    
 window.onload = setInterval(function() {
var dataPoints = [];
var dataPoints2 = [];   
    // chart bar 
    var chart = new CanvasJS.Chart("ChartBarSuara", {
        animationEnabled: true,
        theme: "light2",
        exportEnabled: true,
        title: {
            text: "Suara Pemilih",
             fontSize: 16
        },
        axisY: {
            title: "Suara",
            titleFontSize: 18,
            includeZero: true
        },
        data: [{
            type: "column",
            yValueFormatString: "#,### Suara",
            dataPoints: dataPoints
        }]
    });

    function addData(data) {
       for (var i = 0; i < data.length; i++) {
                dataPoints.push({
                    label: data[i].nama,
                    y: parseInt(data[i].t_suara)
                });
            }
    chart.render();   
    }

    var chart2 = new CanvasJS.Chart("ChartPieSuara", {
            animationEnabled: true,
            theme: "light2",
            exportEnabled: true,
            title: {
                text: "Persentase Suara ",
                 fontSize: 16
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
            // get data total suara vote 
            var total = 1;
             total = "<?= $this->session->userdata('t_allvote')?>";
             total = parseInt(total);
            for (var j = 0; j < data2.length; j++) {
                dataPoints2.push({
                    label: data2[j].nama,
                    y: parseFloat((data2[j].t_suara/total)*100)
                });
            }
        chart2.render();   
        }
    
    //  data pemilih to kandidat 
    $.getJSON("<?=base_url()?>admin/voting/getchartBarVoting", addData2);
    //  data pemilih to kandidat 
    $.getJSON("<?=base_url()?>admin/voting/getchartBarVoting", addData);
    
      }, 5500);
</script>
<!-- session chart kedua   -->
<script>

// mentampilkan data voting seluruh data mahasiswa berdasarkan suda pilih atau belom 
// $('#dataperiode').DataTable({});
function getDataTabelVoting(){
         jQuery.ajax({
            url : "<?php echo base_url('admin/voting/getDataTabelVoting')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                var html = "";
                    for(var i=0; i < data.length; i++){
                        var getstatus = data[i].v_status;
                        var status;
                    
                        if(getstatus =="null"){
                            status ="<span class='badge' style='background-color:red;color:white;'>Belum Memilih<span>";
                        }else if(getstatus !="null"){
                            status ="<span class='badge' style='background-color:green;color:white;'>Sudah Memilih<span>";
                        }
                        html += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+data[i].v_waktu+'</td>'+
                                    '<td>'+data[i].nomor_induk+'</td>'+
                                    '<td>'+data[i].nama_mahasiswa+'</td>'+
                                    '<td>'+status+'</td>'+
                                '</tr>';
                    }
                     
                    $('#loadDataTabelVoting').html(html);
            }
         })
    }
function getCountAngkatan(){
         jQuery.ajax({
            url : "<?php echo base_url('admin/voting/getDataAngkatan')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                var html = "";
                    for(var i=0; i < data.length; i++){
                        html += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+data[i].angkatan+'</td>'+
                                    '<td>'+data[i].t_pendaftar+'</td>'+
                                '</tr>';
                    }
                     
                    $('#datapieangkatan').html(html);
            }
         })
    }
    
function getCountSudahPilih(){
         jQuery.ajax({
            url : "<?php echo base_url('admin/voting/getDataSudahPilih')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                var html = "";
                    for(var i=0; i < data.length; i++){
                        html += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+data[i].angkatan+'</td>'+
                                    '<td>'+data[i].t_suara_pilih+'</td>'+
                                '</tr>';
                    }
                     
                    $('#datapiesudahpilih').html(html);
            }
         })
    }

function getCountBelumPilih(){
         jQuery.ajax({
            url : "<?php echo base_url('admin/voting/getDataBelumPilih')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                var html = "";
                    for(var i=0; i < data.length; i++){
                        html += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+data[i].angkatan+'</td>'+
                                    '<td>'+data[i].t_suara_belum_pilih+'</td>'+
                                '</tr>';
                    }
                     
                    $('#datapiebelumpilih').html(html);
            }
         })
    }

window.onload = setInterval(function() {
    var dataPoints3 = []; // data pendaftar
    var dataPoints4 = []; // data sudah pilih
    var dataPoints5 = []; // data belum pilih
    var chart3 = new CanvasJS.Chart("chartPieAngkatan", {
            animationEnabled: true,
            theme: "light",
            exportEnabled: true,
            title: {
                text: "Persentase Mahasiswa ",
                fontSize: 14
            },
            data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "##0.0\"%\"",
                indexLabel: "{label} {y}",
                dataPoints: dataPoints3
            }]
        });
        function addData3(data3) {
            // get data total suara vote 
            var total = 1;
            total = "<?= $this->session->userdata('t_alldaftar')?>";
             total = parseInt(total);
            for (var j = 0; j < data3.length; j++) {
                dataPoints3.push({
                    label: "Angkatan "+ data3[j].angkatan,
                    y: parseFloat((data3[j].t_pendaftar/total)*100)
                });
            }
        chart3.render();   
        }
    //  data pendaftar per angkatan
    $.getJSON("<?=base_url()?>admin/voting/getMultichartBarAngkatan", addData3);

        var chart4 = new CanvasJS.Chart("chartPieSudahPilih", {
            animationEnabled: true,
            theme: "light",
            exportEnabled: true,
            title: {
                text: "Persentase Sudah Memilih ",
                fontSize: 14
            },
            data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "##0.0\"%\"",
                indexLabel: "{label} {y}",
                dataPoints: dataPoints4
            }]
        });
        function addData4(data4) {
            // get data total suara vote 
            var total = 1;
            total = "<?= $this->session->userdata('t_allsuara')?>";
            total = parseInt(total);
            for (var j = 0; j < data4.length; j++) {
                dataPoints4.push({
                    label: "Angkatan "+ data4[j].angkatan,
                    y: parseFloat((data4[j].t_suara_pilih/total)*100)
                });
            }
        chart4.render();   
        }
        //  data pemilih per angkatan 
    $.getJSON("<?=base_url()?>admin/voting/getChartMSudahVote", addData4);

        var chart5 = new CanvasJS.Chart("chartPieBelumPilih", {
            animationEnabled: true,
            theme: "light",
            exportEnabled: true,
            title: {
                text: "Persentase Belum Memilih",
                fontSize: 14
            },
            data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "##0.0\"%\"",
                indexLabel: "{label} {y}",
                dataPoints: dataPoints5
            }]
        });
        function addData5(data5) {
            // get data total suara vote 
            var total = 1;
            total = "<?= $this->session->userdata('t_allbelum_pilih')?>";
            total = parseInt(total);
            for (var j = 0; j < data5.length; j++) {
                dataPoints5.push({
                    label: "Angkatan "+ data5[j].angkatan,
                    y: parseFloat((data5[j].t_suara_belum_pilih/total)*100)
                });
            }
        chart5.render();   
        }
    //  data belum pemilih per angkatan
    $.getJSON("<?=base_url()?>admin/voting/getChartMBelumVote", addData5);
    // update data tabel pendukung pie chart 
    getCountAngkatan();
    getCountSudahPilih();
    getCountBelumPilih();
    getDataTabelVoting();
 }, 7500);
</script>

<script>
 $(document).ready(function(){    
      
    // $('#datatabelVoting').DataTable( {
    //             dom: 'Bfrtip',
    //             buttons: [
    //                  'csv', 'excel', 'pdf'
    //             ]
    //         } );
            getDataTabelVoting(); 
 });
</script>