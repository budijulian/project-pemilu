<?php #endregion
foreach ($waktu as $i) 
?>


<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Waktu Pemilihan
                    <small>Waktu</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Waktu Pemilihan</li>
                </ol>
            </section>
            <section class="content">
                <div class="col-md-8">
                    <!-- Calendar -->
                    <div class="box box-solid bg-green-gradient ">
                        <div class="box-header">
                            <i class="fa fa-calendar"></i>
                            <h3 class="box-title">Calendar</h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%"></div>
                        </div>
                    </div>
                    <!-- /.box -->

                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Countdown</span>
                            <span class="info-box-number" id="hitungmundur"> </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-12">
                    <div class="box box-primary">
                        <form method="post" action="<?= base_url().'admin/waktu/ubah'?>">
                            <div class="box-body">
                                <div class="form-group col-md-6">
                                    <label for="">Waktu Buka</label>
                                    <h5 class="text-info" disabled>yyyy-mm-dd hh-mm-ss</h5>
                                    <input type="text" name="waktubuka" class="form-control"
                                        placeholder="ex: 2020:04:20 12:20:00" required value="<?= $i->waktu_buka?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Waktu Tutup</label>
                                    <h5 class="text-info" disabled>yyyy-mm-dd hh-mm-ss</h5>
                                    <input type="text" name="waktututup" class="form-control"
                                        placeholder="ex: 2020:04:20 12:20:00" required value="<?= $i->waktu_tutup?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" class=" form-control btn btn-primary" value="Atur">
                                </div>
                            </div>
                        </form>
                    </div>
            </section>
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </div>
</div>
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
<link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
</body>
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
            " " + days +
            " Hari " + hours +
            " Jam " + minutes +
            " Menit " + seconds +
            " Detik ";
    }, 1000);
</script>