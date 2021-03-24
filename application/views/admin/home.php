
<div class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i id="count_pendaftar">00</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Mahasiswa Terdaftar</span>
                        <h1  class="fa fa-2x text-primary">Orang </h1>
                    </div>
                     
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i id="count_voting"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Suara Masuk</span>
                        <h1  class="fa fa-2x text-success">Orang</h1>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
             <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion-ios-calendar-outline"></i></span>

                  <div class="info-box-content">
                        <span class="info-box-text">Waktu Pemilihan</span>
                         <h6 id="wp_jam" style="font-size:20px"  class="text-primary">00:00</h6>
                         <span style="font-size:12px;" id="wp_tgl" class="text-dark">00-00-00</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion-ios-time-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Waktu Sekarang</span> 
                         <h6 id="jam_now" style="font-size:20px"  class="text-primary">00:00</h6>
                         <span style="font-size:12px;" id="tgl_now" class="text-dark">00-00-00</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row" style="padding-top:40px;padding-bottom:40px;">
            <div class=" col-md-1 "></div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="info-box text-center">
                        <div class="mt-2 mb-2">
                            <div class="bg-info mb-3"> <h2  class=" fa fa-3x text-primary"><span class="fa fa-hourglass-start"></span> COUNTDOWN TIME</h2> </div>
                                <h2 class="info-box-title  text-danger "><strong> &nbsp;<?php $date2 = strtotime(" +1 years");?>
                                PEMILIHAN KETUA HIMPUNAN MAHASISWA SISTEM INFORMASI <br> PERIODE <?= date('Y').' / '.date("Y",$date2);?></strong></h2>
                                <br>
                            <div style="display:none;" id="btn-vote" > <a class="btn btn-success " href="voting/data/">Data Voting </a></div><br>
                                <div class="bg-info mb-3"> 
                                 <h2 style="font-size:16px; color:grey;padding-top:5px; font-weight:bold;" class=" text-dark"> <span class="fa fa-clock-o"></span> Hitung Mundur Dalam</h2>
                                <h2 id="hitungmundur" style="font-size:34px; " class="text-primary"></h2> </div>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                
            <div class="  col-md-1 "></div>
        </div>
</section>
</div>

<!-- !--jQuery library-- > -->
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
<link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
</body>
<!-- memberi nilai ke countdown -->
<script type="text/javascript">
    // set the date we're counting down to
    var waktuMulai;
        jQuery.ajax({
            url : "<?php echo base_url('admin/periode/getDateMulaiPemilihan')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                for(var i=0; i < data.length; i++){ 
                //  waktu mulai date time pemilihan 
                waktuMulai =  data[i].waktu_buka_voting;
                 //  result data chart home
                var dt = new Date(waktuMulai);
                var wpt = document.getElementById("wp_tgl");
                var wpj = document.getElementById("wp_jam");
                var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "Desember"];
                wpt.innerHTML = dt.getDate()+ " "+months[dt.getMonth()]+ " "+dt.getFullYear();
                wpj.innerHTML = dt.getHours()+ ":"+ dt.getMinutes();
                }
                // console.log(waktuMulai);
            var target_date = new Date(waktuMulai).getTime();
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
                if(seconds_left < 0 ){
                    countdown.innerHTML =
                    " " + 0 +
                    " <small> Hari</small> " + 0 +
                    "<small> Jam</small>  " + 0 +
                    " <small> Menit</small> " + 0 +
                    "<small> Detik</small>  ";
                    //    modifikasi comsplase
                        var element = document.getElementById("btn-vote");
                        element.setAttribute("style", "display: block;");
                }else{
                    countdown.innerHTML =
                    " " + days +
                    " <small> Hari</small> " + hours +
                    "<small> Jam</small>  " + minutes +
                    " <small> Menit</small> " + seconds +
                    "<small> Detik</small>  ";
                    //    modifikasi comsplase
                        var element = document.getElementById("btn-vote");
                        element.setAttribute("style", "display: none;");
                    
                }
        
            }, 1000);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {}
    });

    quickCount();
    // quick count data  
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
                //  result data chart home
                 var pendaftar = document.getElementById("count_pendaftar");
                 pendaftar.innerHTML = obj[i].total_pendaftar;
                }
                for(var i=0; i < obj2.length; i++){
                //  result data chart home
                 var voting = document.getElementById("count_voting");
                 voting.innerHTML = obj2[i].total_suara_masuk;
                }
                
            }
         })
    }
    // time now 
    window.setTimeout("waktu()", 1000);      
	function waktu() {
         //setting quickCount berupa waktu dan total suara masuk 
		var waktu = new Date();
		setTimeout("waktu()", 1000);
        var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "Desember"];
        document.getElementById("tgl_now").innerHTML = waktu.getDate()+ " "+months[waktu.getMonth()]+ " "+
        waktu.getFullYear();
        document.getElementById("jam_now").innerHTML = waktu.getHours()+ ":"+ waktu.getMinutes()+ ":"+ waktu.getSeconds();
        // update data realtime one second 
        quickCount();
	}
</script>
