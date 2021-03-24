
<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Data Voting
                    <small>Suara</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Voting</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i id="count_pendaftar">00</i></span>
                             <div class="info-box-content">
                                <span class="info-box-text">Mahasiswa Terdaftar</span>
                                 <h1  class="fa fa-2x text-dark">Orang</h1>
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
                            <span class="info-box-text">Belum Memilih</span>
                             <h1  class="fa fa-2x text-dark">Orang </h1>
                            <!-- <a href="#" title="More" class="small-box-footer"> <span class="fa fa-arrow-circle-right"></span></a> -->
                        </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i id="count_suara_sah">00</i></span>
                           <div class="info-box-content">
                            <span class="info-box-text">Suara Sah</span>
                            <h1 class="fa fa-2x text-dark">Orang</h1>
                            <!-- <a href="#" title="More" class="small-box-footer"> <span class="fa fa-arrow-circle-right"></span></a> -->
                        </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i id="count_suara_tidak_sah">00</i></span>
                            <div class="info-box-content">
                            <span class="info-box-text">Suara Tidak Sah</span>
                             <h1  class="fa fa-2x text-dark">Orang </h1>
                            <!-- <a href="#" title="More" class="small-box-footer"> <span class="fa fa-arrow-circle-right"></span></a> -->
                        </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                     
                    <!-- /.col -->
                </div>
                <div class="box ">
                    <div class="box-title mt-2 mb-2 text-center">
                        <h1 class="text-primary"><strong>Data Voting Mahasiswa </strong></h1>
                        <p style="color: black; font-size:14px;">Sisa Waktu Voting :  </p>
                        <h6 id="hitungmundur" style="color: dark; font-size:26px;"></h6>
                        <p id="count_tutup_voting" style="color: black; font-size:14px;">00-00-00</p>
                    </div>
                     <div id="notifvoting" style="display: none; padding-bottom:20px;" class="bg-red text-center " >
                        <h5  class=" fa fa-2x text-white "> <span class="fa fa-ban"></span> Pemilihan Telah Berakhir</h5>
                     </div>
                                      
                     <div class="row" style="padding-top:20px;">
                        <div class=" col col-md-6"></div>
                        <div class=" col col-md-6 text-right">
                            <a type="button" class="btn btn-sm btn-transprant" data-toggle="popover"
                                 title="Informasi" data-content="*Pada tabel dibawah merupakan data voting yang valid berdasarkan indikator validasi berupa : data pendaftar, waktu pencoblosan dan pilihan kandidat.">
                                 <span class="fa fa-question"></span> Info</a>
                            <!-- <a class="btn btn-info" title="Result Metadata">
                                        Result <span class="fa fa-search"></span>
                                        </a> -->
                            <i><a class="btn btn-primary " href="<?=base_url()?>admin/voting/"><span class="fa fa-bar-chart"></span> Quick Count </a></i>
                            <i><a class="btn btn-info" title="Data Mahasiswa" data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="collapseExample">
                                       Detail <span class="fa fa-search"></span>
                                    </a></i>
                            <a class="btn btn-success" target="n_blank" href="<?=base_url()?>admin/voting/exportDataVoting" title="Export To Excel">
                                       Export <span class="fa fa-download"></span>
                                    </a>
                            <a class="btn btn-light" onclick="refreshData();">
                                        Refresh <span class="fa fa-refresh"></span> </a>
                        </div>
                     </div>
                    <div class="box-body">
                        <small class="text-left text-dark">Data Voting Mahasiswa (sudah)</small>
                        <div class="table-responsive">
                            <table id="datavoting" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Periode</th>
                                        <th>Waktu</th>
                                        <th>Nama</th>
                                        <th>Pilihan</th>
                                        <th>Validasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-left">
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Periode</th>
                                        <th>Waktu</th>
                                        <th>Nama</th>
                                        <th>Pilihan</th>
                                        <th>Validasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                            
                        </div>
                         
                    </div>
                    <!-- /.box-header -->
                    
                </div>
        </section>
         <section id="detailData" class="content collapse">
                <div class="box">
                        <div class="box-body">
                           <small class="text-left">Data Voting Mahasiswa (belum)</small>
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
                                            <!-- </div>   -->
                                    </div>
                                    <a class="btn btn-danger float-right" data-toggle="collapse" href="#detailData" role="button"
                                aria-expanded="true" aria-controls="collapseExample">
                                        Tutup <span class="fa fa-close"></span>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
            </section>
    </div>
   </div>
</div>
<!-- Modal tambah -->
    <div class=" modal fade" id="detaildata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Detail Data</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form  id="detailDataForm">
                <div class="modal-body">
                        <div class="row">
                            <div class="col col-md-6" style="background-color:">
                                <div class="form-group">
                                    <small class="col-6 text-left" for="">Waktu Daftar</small>
                                    <input style="background-color:rgba(0,0,0,0) !important;border:none !important;"
                                     class="form-control text-left" value="" type="text" name="m_waktu" id="m_waktu">
                                </div>
                                 <div class="form-group">
                                    <label class="col-6 text-left" for="">Nama Mahasiswa</label>
                                    <input style="background-color:rgba(0,0,0,0) !important;border:none !important;"
                                     class="form-control text-left" value="" type="text" name="nama_mahasiswa" id="nama_mahasiswa">
                                </div>
                                <div class="form-group">
                                    <label class="col-6 text-left" for="">NPM Mahasiswa</label>
                                    <input style="background-color:rgba(0,0,0,0) !important;border:none !important;"
                                     class="form-control text-left" value="" type="text" name="nomor" id="nomor">
                                </div>  
                                 <div class="form-group">
                                    <label class="col-6 text-left" for="">Angkatan </label>
                                    <input style="background-color:rgba(0,0,0,0) !important;border:none !important;"
                                     class="form-control text-left" value="" type="text" name="angkatan" id="angkatan">
                                </div>  
                                 <div class="form-group">
                                    <label class="col-6 text-left" for="">Status </label>
                                    <input style="background-color:rgba(0,0,0,0) !important;border:none !important;"
                                     class="form-control text-left" value="" type="text" name="m_status" id="m_status">
                                </div> 
                            </div>
                            <div class="col col-md-6">
                                <div class="form-group">
                                    <label class="col-6 text-left" for="">Waktu Voting </label>
                                    <input style="background-color:rgba(0,0,0,0) !important;border:none !important;"
                                     class="form-control text-left" value="" type="text" name="v_waktu" id="v_waktu">
                                </div> 
                                <div class="form-group">
                                    <label class="col-6 text-left" for="">Periode </label>
                                    <input style="background-color:rgba(0,0,0,0) !important;border:none !important;"
                                     class="form-control text-left" value="" type="text" name="periode" id="periode">
                                </div> 
                                <div class="form-group">
                                    <label class="col-6 text-left" for="">Status </label>
                                    <input style="background-color:rgba(0,0,0,0) !important;border:none !important;"
                                     class="form-control text-left" value="" type="text" name="v_status" id="v_status">
                                </div> 


                            </div>
                        </div>
                    </div>
                 </form>
            </div>
        </div>
    </div>
<!-- memberi nilai ke countdown -->
<script type="text/javascript">
var waktuTutup, waktuBuka;
        jQuery.ajax({
            url : "<?php echo base_url('admin/periode/getDateMulaiPemilihan')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                for(var i=0; i < data.length; i++){
                 waktuTutup =  data[i].waktu_tutup_voting;
                 waktuBuka =  data[i].waktu_buka_voting;
                }
                
                var dt = document.getElementById("count_tutup_voting");
                dt.innerHTML = "( Voting Ditutup : " + waktuTutup + " )";
                // console.log(waktuTutup);
                // set the date we're counting down to
                var target_date = new Date(waktuTutup).getTime();
                // variables for time units
                var days, hours, minutes, seconds;
                // get tag element
                var countdown = document.getElementById("hitungmundur");
                // update the tag with id "countdown" every 1 second
                setInterval(function () {
                    // find the amount of "seconds" between now and target
                    var current_date = new Date().getTime();
                    var seconds_left = (target_date - current_date) / 1000;
                    // kondisi start countdown jika sudah memasuki waktunya 
                    var target_mulai = new Date(waktuBuka).getTime();
                    var seconds_left2 = (target_mulai - current_date) / 1000;
                    if(seconds_left2 > 0){
                        seconds_left = 0;
                    }else{}
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
                        "" + 0 +
                        " <small> Hari</small> " + 0 +
                        "<small> Jam</small>  " + 0 +
                        " <small> Menit</small> " + 0 +
                        "<small> Detik</small>  ";
                            // modifikasi notif voting 
                            // var element2 = document.getElementById("btn-result");
                            // element2.setAttribute("style", "display: block;");
                            var element2 = document.getElementById("notifvoting");
                            element2.setAttribute("style", "display: block;");
                    }else{
                        countdown.innerHTML =
                        "" + days +
                        " <small> Hari</small> " + hours +
                        "<small> Jam</small>  " + minutes +
                        " <small> Menit</small> " + seconds +
                        "<small> Detik</small>  ";
                        // modifikasi notif voting 
                            // var element2 = document.getElementById("btn-result");
                            // element2.setAttribute("style", "display: none;");
                            var element2 = document.getElementById("notifvoting");
                            element2.setAttribute("style", "display: none;");
                    }
                
                    
                }, 1000);
        },
            error: function (jqXHR, textStatus, errorThrown)
            {}
        });
    
</script>
<script type="text/javascript">
    var table,table2;
$(document).ready(function() {
         table = $('#datapendaftar').DataTable({ 
            
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            
            // Load data for the table's content from an Ajax source
            "ajax": {
            "url": "<?php echo site_url('admin/pendaftar/showPendaftar')?>",
            "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
            { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
            },
            ],
        });
      table2 = $('#datavoting').DataTable({ 
        
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo site_url('admin/voting/showVoting')?>",
          "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ -1 ], //last column
          "orderable": false, //set not orderable
        },
        ],
        
      });
});
</script>
<script type="text/javascript">
     function hapusData(id)
     {

      swal({
        title: 'Hapus Data',
        text: "Apakah kamu yakin menghapus data ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'iya, hapus itu!',
        closeOnConfirm: false
      }).then(function(isConfirm) {
        if (isConfirm) {

     // ajax delete data to database
     $.ajax({
      url : "<?php echo base_url('admin/profile/hapusData')?>/"+id,
      type: "POST",
      dataType: "JSON",
      success: function(data)
      {
               //if success reload ajax table
               refreshData();
               swal(
                'Terhapus!',
                'Data berhasil dihapus.',
                'success'
                );
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / hapus data');
            }
          });
        }
        })
    }
    function editData()
    {
       var nama = $('[name="nama"]').val();
        if(nama == ""){
             swal(
                'Oops!',
                'Anda harus memilih data!',
                'error'
                )
        }else{
        var url = "<?php echo base_url('admin/profile/editData')?>";
       // ajax adding data to database
       $.ajax({
        url : url,
        type: "POST",
        data: $('#formdetail').serialize(),
        dataType: "JSON",
        success: function(data)
        {
               //if success close modal and reload ajax table
               refreshData();
               $("#formdetail")[0].reset();
            //    modifikasi comsplase
                var element = document.getElementById("detailData");
                element.setAttribute("class", "collapse in");
               swal(
                'Berhasil!',
                'Data berhasil diubah!',
                'success'
                )
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / edit data');
            }
          });
        }
     
     }
    function tambahData(){

        $.ajax({
        url : "<?php echo site_url('admin/profile/tambahData')?>",
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
               //if success close modal and reload ajax table
               $('#tambahdata').modal('hide');
               refreshData();
               swal(
                'Berhasil!',
                'Data berhasil ditambahkan!',
                'success'
                )
             },
             error: function (jqXHR, textStatus, errorThrown) 
             {
              alert('Error adding / tambah data');
            }
          });
    }
    
    function detailData(id){
         $.ajax({
            url : "<?php echo base_url('admin/voting/getData')?>/" + id,
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                console.log(data);
                for(var i=0; i < data.length; i++){
                    
                    $('[name="m_waktu"]').val(data[i].m_waktu);
                    $('[name="nomor"]').val(data[i].nomor_induk);
                    $('[name="nama_mahasiswa"]').val(data[i].nama_mahasiswa);
                    $('[name="angkatan"]').val(data[i].angkatan);
                    $('[name="m_status"]').val(data[i].validasi);
                    $('[name="v_waktu"]').val(data[i].v_waktu);
                    $('[name="periode"]').val(data[i].periode);
                    $('[name="v_status"]').val(data[i].v_status);
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    }
    function resetData(){
        $("#form")[0].reset();
    }
    function refreshData()
    {
      table.ajax.reload(null,false); //reload datatable ajax 
      table2.ajax.reload(null,false); //reload datatable ajax 
      getDataTabelVoting();
    }
 $(function () {
  $('[data-toggle="popover"]').popover()
});
</script>
<script>
    
 // quick count data  
    function quickCountVoting(){
         jQuery.ajax({
            url : "<?php echo base_url('admin/voting/getQuickVoting')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                var obj = data.pendaftar;
                var obj2 =data.suara_sah;
                var obj3 =data.suara_tidak_sah;
                var obj4 =data.suara_belum_pilih;
                for(var i=0; i < obj.length; i++){
                //  result data chart home
                 var d1 = document.getElementById("count_pendaftar");
                 d1.innerHTML = obj[i].total_pendaftar;
                }
                for(var i=0; i < obj2.length; i++){
                //  result data chart home
                 var d2 = document.getElementById("count_suara_sah");
                 d2.innerHTML = obj2[i].t_suara_sah;
                }
                for(var i=0; i < obj3.length; i++){
                //  result data chart home
                 var d3 = document.getElementById("count_suara_tidak_sah");
                 d3.innerHTML = obj3[i].t_suara_tidak_sah;
                }
                for(var i=0; i < obj4.length; i++){
                var d4 = document.getElementById("count_suara_belum_pilih");
                 d4.innerHTML = obj4[i].t_suara_belum_pilih;
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
    // time now 
    window.setTimeout("waktu2()", 5000);      
	function waktu2() {
		setTimeout("waktu2()", 5000);
         // update data realtime one second 
        refreshData();
    }
function btnVerifikasi(id,status){
        // verifikasi data buttton 
        var ubahstatus;
        if( status == "tidak sah"){
            ubahstatus = "sah";
        }else if(status == "sah"){
             ubahstatus = "tidak sah";
        }else{ ubahstatus = "";}
         // ajax delete data to database
        $.ajax({
        url : "<?php echo base_url('admin/voting/verifikasiData')?>/"+id,
        type: "POST",
        dataType: "JSON",
        data     : {validasi : ubahstatus},
        success: function(data)
        {
                //if success reload ajax table
               
                swal({
                    title: 'Berhasil!',
                    text: 'Data validasi berubah.',
                    timer: 1200,
                    type :'success'
                    })
                refreshData();
                },
        error: function (jqXHR, textStatus, errorThrown)
                {
                alert('Error adding / verifikasi data');
                }
            });
    } 
    
// mentampilkan data voting seluruh data mahasiswa berdasarkan suda pilih atau belom 
// $('#dataperiode').DataTable({});
getDataTabelVoting();
function getDataTabelVoting(){
         jQuery.ajax({
            url : "<?php echo base_url('admin/voting/getDataTabelBelumVoting')?>",
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
</script>