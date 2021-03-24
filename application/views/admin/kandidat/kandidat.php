<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Data Kandidat
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Kandidat</li>
                </ol>
            </section>
            <section class="content">
                <!-- menepatkan session pesan dari controler -->
                <div class="box">
                    <div class="box-body">
                        <small class="text-dark">Form Control</small>
                        <div class="box-header ">
                                    <!-- <i><a class="btn btn-secondary " data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <span class="fa fa-arrow-right"></span> Lihat
                                    </a></i> -->
                                    <i><a class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">
                                        Tambah <span class="fa fa-plus"></span></a></i>
                                    <i><a class="btn btn-light" href="#" onclick="refreshData();">
                                        Refresh <span class="fa fa-refresh"></span>
                                    </a></i>
                                     <a type="button" class="btn btn-sm btn-transprant" data-toggle="popover"
                                 title="Informasi" data-content="Kandidat yang ditampilkan pada website pemilihan adalah kandidat yang berstatus aktif.">
                                 <span class="fa fa-question"></span> Info</a>
                        </div>
                        <div class="collapse" id="detailData">
                            <div class="box-body">
                            <small class="text-dark">Detail Data</small>
                                <div class="row">
                                    <form action="#" id="formdetail">
                                        <div class="col col-md-4">
                                            <div class="form-group">
                                                <label for="">Username</label>
                                                <input type="hidden" name="kd_admin" value="">
                                                <input type="text" name="user" id="user" class="form-control " value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="pass" id="pass" class="form-control" value="">
                                            </div> 
                                        
                                        </div>
                                        <div class="col col-md-4">
                                            <div class="form-group">
                                                <label for="">Nama Admin</label>
                                                <input type="text" name="nama" id="nama" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" name="email" id="email" class="form-control " value="">
                                            </div>
                                        </div> 
                                        <div class="col col-md-4">
                                            <div class="form-group">
                                                        <label for="">Sebagai</label>
                                                        <select name="sebagai" id="sebagai" class="form-control">
                                                        <option value="" >---</option>
                                                        <option value="super admin" >Super Admin</option>
                                                        <option value="panitia" >Panitia</option>
                                                    </select>
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
                    <small class="text-dark">Data Kandidat</small>
                        <div class="table-responsive">  
                            <table id="datakandidat" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Periode Pemilu</th>
                                        <th>Nomor Urut</th>
                                        <th>Nama Kandidat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!-- load data  -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>No</th>
                                        <th>Periode Pemilu</th>
                                        <th>Nomor Urut</th>
                                        <th>Nama Kandidat</th>
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
<script>
 $(function () {
  $('[data-toggle="popover"]').popover()
});
</script>
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
                            <form action="#" id="formtambah">
                                    <div class="col col-md-6">
                                        <div class="form-group">
                                            <label for="">Nama Kandidat</label>
                                              <input type="text" name="nama_kandidat" id="nama_kandidat" class="form-control " value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">NPM</label>
                                            <input type="text" name="npm" id="npm" class="form-control" value="">
                                        </div>
                                          <div class="form-group">
                                            <label for="">Jurusan</label>
                                            <select name="jurusan" id="jurusan" class="form-control">
                                                <option value="" >---</option>
                                                <option value="Sistem Informasi" >Sistem Informasi</option>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="col col-md-6">
                                        <div class="form-group">
                                            <label for="">Angkatan</label>
                                            <select name="angkatan" id="angkatan" class="form-control">
                                                <option value="" >---</option>
                                                <?php for ($i=2014; $i <= 2025; $i++) { ?>
                                                <option value="<?=$i;?>" ><?=$i;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nomor Urut</label>
                                            <select name="no_urut" id="no_urut" class="form-control">
                                                <option value="" >---</option>
                                                <?php for ($i=1; $i <= 5; $i++) { ?>
                                                <option value="<?=$i;?>" >No Urut <?=$i;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Periode</label>
                                            <select name="periode" id="periode" class="form-control">
                                                <option value="" >---</option>
                                                <?php foreach($periode as $row){?>
                                                    <option value="<?=$row->kd_periode?>" ><?=$row->periode?></option>
                                                <?php  }?>
                                            </select>
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
<script type="text/javascript">
    var table;
    $(document).ready(function() {
      table = $('#datakandidat').DataTable({ 
        
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo site_url('admin/kandidat/showKandidat')?>",
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
      url : "<?php echo base_url('admin/kandidat/hapusData')?>/"+id,
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
        var url = "<?php echo base_url('admin/kandidat/editData')?>";
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
            //    document.getElementsByClassName("btndetailData")[0].setAttribute("data-toggle", "collapse in");
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
        url : "<?php echo site_url('admin/kandidat/tambahData')?>",
        type: "POST",
        data: $('#formtambah').serialize(),
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
    function resetData(){
        $("#form")[0].reset();
    }
    function refreshData()
    {
      table.ajax.reload(null,false); //reload datatable ajax 
    }

</script>