<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Data Periode
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Periode</li>
                </ol>
            </section>
            <section class="content">
                <!-- menepatkan session pesan dari controler -->
                <div class="box">
                     <div class="box-body">
                        <small class="text-dark">Form Control</small>
                        <div class="box-header ">
                                    <i><a class="btn btn-secondary " data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <span class="fa fa-arrow-right"></span> Lihat
                                    </a></i>
                                    <i><a class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">
                                        Tambah <span class="fa fa-plus"></span>
                                    </a></i>
                                    
                                    <i><a class="btn btn-info" href="#" onclick="editData();">
                                        Edit <span class="fa fa-pencil"></span>
                                    </a></i>
                                    <i><a class="btn btn-light" href="#" onclick="refreshData();">
                                        Refresh <span class="fa fa-refresh"></span>
                                    </a></i>
                                    <i><a type="button" class="btn btn-sm btn-transprant" data-toggle="popover"
                                 title="Informasi" data-content="*Pada tabel dibawah data periode hanya boleh diaktifkan sebanyak satu data berdasarkan waktu periodenya. ">
                                 <span class="fa fa-question"></span> Info</a></i>
                        </div>
                        <div class="collapse" id="detailData">
                            <div class="box-body">
                            <small class="text-dark">Detail Data</small>
                                <div class="row mb-2">
                                    <form action="#" id="formdetail">
                                        <div class="col col-md-3">
                                            <div class="form-group">
                                                <label for="">Periode</label>
                                                <input type="hidden" name="kd_periode" value=""> 
                                                <select name="periode" id="periode" class="form-control">
                                                        <option value="" >---</option>
                                                        <?php for ($i=2018; $i <= 2025; $i++) { ?>
                                                        <option value="<?= $i.'/'.($i+1);?>" ><?= $i.'/'.($i+1);?></option>
                                                        <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pelaksanaan</label>
                                                <select name="pelaksanaan" id="pelaksanaan" class="form-control">
                                                    <option value="" >---</option>
                                                    <option value="Online" >Online</option>
                                                    <option value="Onsite" >Onsite</option>
                                                    <option value="Online & Onsite" >Onsite & Online</option>
                                                </select>
                                            </div> 
                                             <div class="form-group">
                                                <label for="">Lokasi Pelaksanaan</label> 
                                               <input type="text" name="lokasi" id="lokasi" class="form-control">
                                            </div> 
                                        </div>
                                        <div style="background-color: #f5f5f5; border-radius: 10px 10px 10px 10px;"  class="col col-md-3">
                                            <div class="form-group">
                                                <label for="">Start Acara</label>
                                                <input type="datetime-local" name="waktu_awal_acara" id="waktu_awal_acara" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Selesai Acara</label>
                                                <input type="datetime-local" name="waktu_akhir_acara" id="waktu_akhir_acara" class="form-control " value="">
                                            </div>
                                           <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="" >---</option>
                                                    <option value="aktif" >Aktif</option>
                                                    <option value="tidak aktif" >Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div  class="col col-md-3">
                                            <div class="form-group">
                                                <label for="">Waktu Buka Pendaftaran</label>
                                                <input type="datetime-local" name="waktu_buka_pendaftar" id="waktu_buka_pendaftar" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Waktu Tutup Pendaftaran</label>
                                                <input type="datetime-local" name="waktu_tutup_pendaftar" id="waktu_tutup_pendaftar" class="form-control " value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Link Streaming</label>
                                                <input type="text" name="link_streaming" id="link_streaming" class="form-control " value="">
                                            </div>
                                        </div> 
                                        <div style="background-color: #f5f5f5; border-radius: 10px 10px 10px 10px;"  class="col col-md-3">
                                             <div class="form-group">
                                                <label for="">Waktu Buka Voting</label>
                                                <input type="datetime-local" name="waktu_buka_voting" id="waktu_buka_voting" class="form-control " value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Waktu Tutup Voting</label>
                                                <input type="datetime-local" name="waktu_tutup_voting" id="waktu_tutup_voting" class="form-control " value="">
                                            </div>
                                             <div class="form-group">
                                                <label for="">Waktu Pengumuman</label>
                                                <input type="datetime-local" name="waktu_pengumuman" id="waktu_pengumuman" class="form-control " value="">
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                                <a class="btn btn-danger float-right" data-toggle="collapse" href="#detailData" role="button"
                                aria-expanded="true" aria-controls="collapseExample">
                                        Tutup <span class="fa fa-close"></span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                    <small class="text-dark">Data Periode</small>
                        <div class="table-responsive">  
                        <table id="dataperiode" class="table table-bordered table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Periode</th>
                                    <th>Pelaksanaan</th>
                                    <th>Tanggal Pelaksanaan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Periode</th>
                                    <th>Pelaksanaan</th>
                                    <th>Tanggal Pelaksanaan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    </div>
                    <!-- /.box-body -->
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
                <div class="modal-body">
                        <div class="row">
                            <form action="#" id="form">
                                <div class="col col-md-6">
                                            <div class="form-group">
                                                <label for="">Periode</label>
                                                <select name="t_periode" id="t_periode" class="form-control">
                                                        <option value="" >---</option>
                                                        <?php for ($i=2018; $i <= 2025; $i++) { ?>
                                                        <option value="<?= $i.'/'.($i+1);?>" ><?= $i.'/'.($i+1);?></option>
                                                        <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pelaksanaan</label>
                                                <select name="t_pelaksanaan" id="t_pelaksanaan" class="form-control">
                                                    <option value="" >---</option>
                                                    <option value="Online" >Online</option>
                                                    <option value="Onsite" >Onsite</option>
                                                    <option value="Online & Onsite" >Onsite & Online</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col col-md-6">
                                            <div class="form-group">
                                                <label for="">Lokasi Pelaksanaan</label> 
                                               <input type="text" name="t_lokasi" id="t_lokasi" class="form-control">
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Waktu Buka Pendaftaran</label>
                                                <input type="datetime-local" name="t_waktu_buka_pendaftar" id="t_waktu_buka_pendaftar" class="form-control" value="">
                                            </div>
                                        </div>
                                         <div class="col col-md-6">
                                            <div class="form-group">
                                                <label for="">Waktu Tutup Pendaftaran</label>
                                                <input type="datetime-local" name="t_waktu_tutup_pendaftar" id="t_waktu_tutup_pendaftar" class="form-control " value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Waktu Buka Voting</label>
                                                <input type="datetime-local" name="t_waktu_buka_voting" id="t_waktu_buka_voting" class="form-control " value="">
                                            </div>
                                        </div> 
                                        <div class="col col-md-6">
                                            <div class="form-group">
                                                <label for="">Waktu Tutup Voting</label>
                                                <input type="datetime-local" name="t_waktu_tutup_voting" id="t_waktu_tutup_voting" class="form-control " value="">
                                            </div>
                                             <div class="form-group">
                                                <label for="">Waktu Pengumuman</label>
                                                <input type="datetime-local" name="t_waktu_pengumuman" id="t_waktu_pengumuman" class="form-control " value="">
                                            </div>
                                        </div>
                                </form>
                            </div>
                    </div>
                <div class="modal-footer">
                    <button type="reset" onclick="resetData();" class="btn btn-danger" >Reset</button>
                    <button type="submit" onclick="tambahData();" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal verifikasi data mahasiswa valid /or not -->
    <!-- Button trigger modal -->

</div>
<!--Moment is convert datatime library  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
<script type="text/javascript">
    var table;
    $(document).ready(function() {
      table = $('#dataperiode').DataTable({ 
        
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo site_url('admin/periode/showPeriode')?>",
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
        confirmButtonText: 'iya, hapus itu!',
        closeOnConfirm: false
      }).then(function(isConfirm) {
        if (isConfirm) {

     // ajax delete data to database
     $.ajax({
      url : "<?php echo base_url('admin/periode/hapusData')?>/"+id,
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
       var nama = $('[name="kd_periode"]').val();
        if(nama == ""){
             swal(
                'Oops!',
                'Anda harus memilih data!',
                'error'
                )
        }else{
        var url = "<?php echo base_url('admin/periode/editData')?>";
       // ajax adding data to database
       $.ajax({
        url : url,
        type: "POST",
        data: $('#formdetail').serialize(),
        dataType: "JSON",
        success: function(data)
        {   console.log(data);
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
        url : "<?php echo site_url('admin/periode/tambahData')?>",
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        { console.log(data);
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
            url : "<?php echo base_url('admin/periode/getData')?>/" + id,
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                for(var i=0; i < data.length; i++){
                    
                    $('[name="kd_periode"]').val(data[i].kd_periode);
                    $('[name="periode"]').val(data[i].periode);
                    $('[name="pelaksanaan"]').val(data[i].pelaksanaan);
                    $('[name="link_streaming"]').val(data[i].link_streaming);
                    $('[name="lokasi"]').val(data[i].lokasi);
                    
                    //  convert datime to datelocal format 
                    let wac= new Date(data[i].waktu_awal_acara);
                    let new_wac= moment(wac).format("YYYY-MM-DDTHH:mm");
                    $('[name="waktu_awal_acara"]').val(new_wac);
                    //  convert datime to datelocal format 
                    let wka= new Date(data[i].waktu_akhir_acara);
                    let new_wka= moment(wka).format("YYYY-MM-DDTHH:mm");
                    $('[name="waktu_akhir_acara"]').val(new_wka);
                    //  convert datime to datelocal format 
                    let wbp= new Date(data[i].waktu_buka_pendaftar);
                    let new_wbp= moment(wbp).format("YYYY-MM-DDTHH:mm");
                    $('[name="waktu_buka_pendaftar"]').val(new_wbp);
                    //  convert datime to datelocal format 
                    let wtp= new Date(data[i].waktu_tutup_pendaftar);
                    let new_wtp= moment(wtp).format("YYYY-MM-DDTHH:mm");
                    $('[name="waktu_tutup_pendaftar"]').val(new_wtp);
                    //  convert datime to datelocal format 
                    let wbv= new Date(data[i].waktu_buka_voting);
                    let new_wbv= moment(wbv).format("YYYY-MM-DDTHH:mm");
                    $('[name="waktu_buka_voting"]').val(new_wbv);
                    //  convert datime to datelocal format 
                    let wtv= new Date(data[i].waktu_tutup_voting);
                    let new_wtv= moment(wtv).format("YYYY-MM-DDTHH:mm");
                    $('[name="waktu_tutup_voting"]').val(new_wtv);
                    //  convert datime to datelocal format 
                    let wp= new Date(data[i].waktu_pengumuman);
                    let new_wp= moment(wp).format("YYYY-MM-DDTHH:mm");
                    $('[name="waktu_pengumuman"]').val(new_wp);
                    $('[name="status"]').val(data[i].p_status);
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
    }

 $(function () {
  $('[data-toggle="popover"]').popover()
});
</script>