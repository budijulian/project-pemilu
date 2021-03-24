<div class="content-wrapper">
    <div class="content-header">
        <h1> Data Pendaftar <small>Data</small></h1>
         <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Pendaftar</li>
         </ol>
    </div>
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                 <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i id="count_pendaftar" >00</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Mahasiswa Terdaftar</span>
                                <h1 class="fa fa-2x text-primary">Orang </h1>
                                <!-- <a  type="button" title="Info" class="small-box-footer"  data-toggle="popover" data-content="Total mahasiswa yang terdaftar di database berdasarkan periode pemilihan."> 
                                <span class="fa fa-arrow-circle-right"></span></a> -->
                            </div>
                            
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i id="count_terverifikasi">00</i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Terverifikasi</span>
                                <h1  class="fa fa-2x text-success">Orang </h1>
                                <!-- <a href="#" title="More" class="small-box-footer"> <span class="fa fa-arrow-circle-right"></span></a> -->
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i id="count_belum_terverifikasi">00</i></span>

                        <div class="info-box-content">
                                <span class="info-box-text">Belum Terverifikasi</span>
                                 <h1  class="fa fa-2x text-danger">Orang </h1>
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
                                <span class="info-box-text"> Waktu Pendaftaran</span> 
                                <h6 id="buka_pendaftaran" style="font-size:14px"  class="text-pendaftar">00-00-00</h6>
                                <h6 id="tutup_pendaftaran" style="font-size:14px"  class="text-pendaftar">00-00-00</h6>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <section class="content">
                <div class="box">
                    <form action="#" id="formdetail">
                     <div class="box-body">
                        <small class="text-dark">Form Control</small>
                        <div class="box-header ">
                                    <i><a class="btn btn-secondary " data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <span class="fa fa-arrow-right"></span> Lihat
                                    </a></i>
                                     <i><a class="btn btn-success" target="n_blank" href="<?=base_url()?>admin/pendaftar/exportDataPendaftar" title="Export To Excel">
                                       Export <span class="fa fa-download"></span>
                                    </a></i>
                                    <i><a class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">
                                        Tambah <span class="fa fa-plus"></span>
                                    </a></i>
                                    <i><button class="btn btn-info" type="submit" >
                                        Edit <span class="fa fa-pencil"></span>
                                    </button></i>
                                    <i><a class="btn btn-light" href="javascript:void(0);" onclick="refreshData();">
                                        Refresh <span class="fa fa-refresh"></span>
                                    </a></i>
                        </div>
                        <div class="collapse" id="detailData">
                            <div class="box-body">
                            <small class="text-dark">Detail Data</small>
                                <div class="row">
                                     <div class="col col-md-12 text-center">
                                       </div>
                                        <div class="col col-md-4">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="" >---</option>
                                                    <option value="aktif" >Aktif</option>
                                                    <option value="tidak aktif" >Tidak Aktif</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nomor Induk</label>
                                                <input type="hidden" name="kd_mahasiswa" value="">
                                                <input type="text" name="nomor" id="nomor" class="form-control " value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Mahasiswa</label>
                                                <input type="text" name="nama" id="nama" class="form-control" value="">
                                            </div> 
                                        
                                        </div>
                                        <div class="col col-md-4">
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="text" name="pass" id="pass" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" name="email" id="email" class="form-control " value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Bukti KTM</label><a data-toggle="modal" data-target="#modalfoto"><u> Lihat</u></a>
                                                <input type="file" class="form-control" value="" name="foto_ktm" id="foto_ktm"> 
                                            </div> 
                                        </div> 
                                        <div class="col col-md-4">
                                            <div class="form-group">
                                                        <label for="">Angkatan</label>
                                                        <select name="angkatan" id="angkatan" class="form-control">
                                                        <option value="" >---</option>
                                                        <?php for ($i=2014; $i <=2025 ; $i++) { ?>
                                                        <option value="<?=$i;?>" ><?=$i;?></option>
                                                        <?php }?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jalur</label>
                                                <select name="jalur" id="jalur" class="form-control">
                                                    <option value="" >---</option>
                                                    <option value="reguler" >Reguler</option>
                                                    <option value="karyawan" >Karyawan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Lokasi Pemilihan</label><br>
                                                <input type="radio" class="" value="Online" name="jenis_voting" id="jenis_voting1"> Online 
                                                
                                                <input type="radio" class="" value="Onsite" name="jenis_voting" id="jenis_voting2"> Onsite
                                            </div>
                                        </div>
                                    
                                </div>
                                <a class="btn btn-danger float-right" data-toggle="collapse" href="#detailData" role="button"
                                aria-expanded="true" aria-controls="collapseExample">
                                        Tutup <span class="fa fa-close"></span>
                                    </a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                         <small class="text-dark">Data Pendaftar Aktif</small>
                        <div class="table-responsive">  
                        <table id="datapendaftar" class="table table-bordered table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Periode</th>
                                    <th>Waktu Daftar</th>
                                    <th>Nomor Induk</th>
                                    <th>Nama Mahasiwa</th>
                                    <th>Lokasi</th>
                                    <th>Validasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                            <tfoot>
                                <tr>
                                   <th>No</th>
                                   <th>Periode</th>
                                    <th>Waktu Daftar</th>
                                    <th>Nomor Induk</th>
                                    <th>Nama Mahasiwa</th>
                                    <th>Lokasi</th>
                                    <th>Validasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
             <section class="content">
                <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <small class="text-dark">Data Pendaftar Tidak Aktif</small>
                            <div class="table-responsive">  
                            <table id="datapendaftar2" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Periode</th>
                                        <th>Waktu Daftar</th>
                                        <th>Nomor Induk</th>
                                        <th>Nama Mahasiwa</th>
                                        <th>Lokasi</th>
                                        <th>Validasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>No</th>
                                    <th>Periode</th>
                                        <th>Waktu Daftar</th>
                                        <th>Nomor Induk</th>
                                        <th>Nama Mahasiwa</th>
                                        <th>Lokasi</th>
                                        <th>Validasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
            </section>
        </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Modal tambah -->
    <div class=" modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form  id="tambahDataForm">
                <div class="modal-body">
                        <div class="row">
                                <div class="col col-md-4">
                                                <div class="form-group">
                                                    <label for="">Nomor Induk</label>
                                                    <input required type="text" name="t_nomor" id="t_nomor" class="form-control " value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama Mahasiswa</label>
                                                    <input required type="text" name="t_nama" id="t_nama" class="form-control" value="">
                                                </div> 
                                            
                                            </div>
                                            <div class="col col-md-4">
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input required type="text" name="t_pass" id="t_pass" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input required type="text" name="t_email" id="t_email" class="form-control " value="">
                                                </div>
                                            </div> 
                                            <div class="col col-md-4">
                                                <div class="form-group">
                                                    <label for="">Jalur</label>
                                                    <select required name="t_jalur" id="t_jalur" class="form-control">
                                                        <option value="" >---</option>
                                                        <option value="reguler" >Reguler</option>
                                                        <option value="karyawan" >Karyawan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                            <label for="">Angkatan</label>
                                                            <select required name="t_angkatan" id="t_angkatan" class="form-control">
                                                            <option value="" >---</option>
                                                            <?php for ($i=2014; $i <=2025 ; $i++) { ?>
                                                            <option value="<?=$i;?>" ><?=$i;?></option>
                                                            <?php }?>
                                                        </select>
                                                </div>
                                            </div> 
                                            <div class="col col-md-4">
                                            <div class="form-group">
                                                    <label for="">Bukti KTM</label>
                                                    <input required type="file" class="form-control" value="" name="t_foto_ktm" id="t_foto_ktm"> 
                                                </div>     
                                            </div>
                                            <div class="col col-md-4">
                                                <div class="form-group">
                                                    <label for="">Lokasi Pemilihan</label><br>
                                                    <input required type="radio" class="" value="Online" name="t_jenis_voting" id="t_jenis_voting1"> Online 
                                                    
                                                    <input required type="radio" class="" value="Onsite" name="t_jenis_voting" id="t_jenis_voting2"> Onsite
                                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                 </form>
            </div>
        </div>
    </div>
    <!-- Modal tambah -->
    <div class=" modal fade" id="modalfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Bukti Foto KTM/KHS/KRS</strong> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <form action="#" id="form">
                                <div class="col col-md-12 text-center">
                                    <div class="form-group">
                                        <img id="zoom_foto"  class="img-thumbnail" witdh="200px" height="400px" alt="bukti foto identitas">
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
    <!-- modal verifikasi data mahasiswa valid /or not -->
    <!-- Button trigger modal -->

</div>
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
      table2 = $('#datapendaftar2').DataTable({ 
        
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo site_url('admin/pendaftar/showPendaftar2')?>",
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
     function hapusData(id)
     {

      swal({
        title: 'Hapus Data',
        text: "Apakah kamu yakin menghapus data ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya, hapus itu!',
        closeOnConfirm: false
      }).then(function(isConfirm) {
        if (isConfirm) {

     // ajax delete data to database
     $.ajax({
      url : "<?php echo base_url('admin/pendaftar/hapusData')?>/"+id,
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
    $('#formdetail').submit(function(e){
            e.preventDefault();
       var nama = $('[name="nama"]').val();
        if(nama == ""){
             swal(
                'Oops!',
                'Anda harus memilih data!',
                'error'
                )
        }else{
       // ajax adding data to database
       $.ajax({
        url : "<?php echo base_url('admin/pendaftar/editData')?>",
        type:"POST",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:false,
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
     
    });
     $('#tambahDataForm').submit(function(e){
            e.preventDefault();
                $.ajax({
                url : "<?php echo site_url('admin/pendaftar/tambahData')?>",
                type:"POST",
                data:new FormData(this),
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                success: function(data)
                {
                    //if success close modal and reload ajax table
                    $('#tambahdata').modal('hide');
                    refreshData();
                    $("#tambahDataForm")[0].reset();
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
                })
     });
    function detailData(id){
         $.ajax({
            url : "<?php echo base_url('admin/pendaftar/getData')?>/" + id,
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                console.log(data);
                for(var i=0; i < data.length; i++){
                    
                    $('[name="kd_mahasiswa"]').val(data[i].kd_mahasiswa);
                    $('[name="status"]').val(data[i].status);
                    $('[name="nomor"]').val(data[i].nomor_induk);
                    $('[name="pass"]').val(atob(data[i].password));
                    $('[name="nama"]').val(data[i].nama_mahasiswa);
                    $('[name="email"]').val(data[i].email);
                    $('[name="jalur"]').val(data[i].jalur);
                    $('[name="angkatan"]').val(data[i].angkatan);
                    $('input:radio[name=jenis_voting][value='+data[i].jenis_voting+']')[0].checked = true;
                    var foto = document.getElementById("zoom_foto");
                    foto.setAttribute('src','<?=base_url()?>assets/img/datapendukung/'+data[i].foto_ktm);
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
      table2.ajax.reload(null,false);
      table.ajax.reload(null,false); //reload datatable ajax 
    }
    function btnVerifikasi(id,status){
        // verifikasi data buttton 
        let ubahstatus;
        if( status == "belum terverifikasi"){
            ubahstatus = "terverifikasi";
        }else if(status == "terverifikasi"){
             ubahstatus = "belum terverifikasi";
        }else{ ubahstatus = "";}
         // ajax update data to database
        $.ajax({
        url : "<?php echo base_url('admin/pendaftar/verifikasiData')?>/"+id,
        type: "POST",
        dataType: "JSON",
        data     : {validasi : ubahstatus},
        success: function(data)
        {   
            // kirim email konfirmasi ke email peserta 
            if(ubahstatus == "terverifikasi"){
                 // ajax kirim email konfirmasi ke user
                    $.ajax({
                    url : "<?php echo base_url('admin/pendaftar/kirim_konfirmasi')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        //if success reload ajax table
                    }
                });
            }
                refreshData();
                        swal({
                            title: 'Berhasil!',
                            text: 'Data Terverifikasi.',
                            timer: 1200,
                            type :'success'
                            })
        },
        error: function (jqXHR, textStatus, errorThrown)
                {
                alert('Error adding / verifikasi data');
                }
            });
    }
</script>
<script>
// time per 1 second
window.setTimeout("pendaftar()", 1000);      
	function pendaftar() {
        // update data realtime one second 
        setTimeout("pendaftar()", 1000);
        getQuickPendaftar();
    }
    getQuickPendaftar();
    function getQuickPendaftar(){
         jQuery.ajax({
            url : "<?php echo base_url('admin/pendaftar/getQuickPendaftar')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                var obj = data.pendaftar;
                var obj2 =data.terverifikasi;
                var obj3 =data.belum_terverifikasi;
                var obj4 =data.data_periode;

                for(var i=0; i < obj.length; i++){
                //  result data chart home
                 var d1 = document.getElementById("count_pendaftar");
                 d1.innerHTML = obj[i].total_pendaftar;
                }
                for(var i=0; i < obj2.length; i++){
                //  result data  terverifikasi
                 var d2 = document.getElementById("count_terverifikasi");
                 d2.innerHTML = obj2[i].t_terverifikasi;
                }
                for(var i=0; i < obj3.length; i++){
                //  result data chart home
                 var d3 = document.getElementById("count_belum_terverifikasi");
                 d3.innerHTML = obj3[i].t_belum_terverifikasi;
                }
                for(var i=0; i < obj4.length; i++){
                 //  result data  buka pendaftaran 
                 var d4 = document.getElementById("buka_pendaftaran");
                 d4.innerHTML = obj4[i].waktu_buka_pendaftar;
                  //  result data tutup pendaftaran 
                 var d5 = document.getElementById("tutup_pendaftaran");
                 d5.innerHTML = obj4[i].waktu_tutup_pendaftar;
                }
                
            }
         })
    }
</script>