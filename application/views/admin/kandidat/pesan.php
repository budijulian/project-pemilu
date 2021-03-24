<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Data Pesan
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-dashboard"></i> Kandidat</a></li>
                    <li class="active">Pesan</li>
                </ol>
            </section>
            <section class="content">
                <!-- menepatkan session pesan dari controler -->
                <div class="box">
                    <div class="box-body">
                        <small class="text-dark">Form Control</small>
                        <div class="box-header ">
                                    <i><a class="btn btn-secondary "  data-toggle="collapse" href="#detailData" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <span class="fa fa-arrow-right"></span> Lihat
                                    </a></i>
                                    <i><a class="btn btn-primary"  href="javascript:void(0)" data-toggle="modal" data-target="#tambahdata">
                                        Tambah <span class="fa fa-plus"></span>
                                    </a></i> 
                                    <i><a class="btn btn-info" href="javascript:void(0)" onclick="editData();">
                                        Edit <span class="fa fa-pencil"></span>
                                    </a></i>
                                    <i><a class="btn btn-light" href="javascript:void(0)" onclick="refreshData();">
                                        Refresh <span class="fa fa-refresh"></span>
                                    </a></i>
                        </div>
                        <div class="collapse" id="detailData">
                            <div class="box-body">
                            <small class="text-dark">Detail Data</small>
                                <div class="row">
                                    <form action="#" id="formdetail">
                                        <div class="col col-md-4">
                                            <div class="form-group">
                                                <label for="">Periode</label>
                                                <input type="hidden" name="kd_pesan" value="">
                                                <input type="text" disabled name="periode" id="periode" class="form-control " value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Kandidat</label>
                                                <input type="text" name="nama_kandidat" id="nama_kandidat" class="form-control" value="">
                                            </div> 
                                        </div>
                                        <div class="col col-md-4">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="" >---</option>
                                                    <option value="tampil" >Tampil</option>
                                                    <option value="tidak tampil" >Tidak Tampil</option>
                                                </select>
                                            </div>
                                             <div class="form-group">
                                                <label for="">Pesan</label>
                                                <textarea class="form-control" name="pesan" id="pesan" cols="20" rows="5">
                                                </textarea>
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
                    <small class="text-dark">Data Pesan</small>
                        <div class="table-responsive">  
                            <table id="datakandidat" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <!-- <th>Periode Pemilu</th> -->
                                        <th>Nama Lengkap</th>
                                        <th>Status</th>
                                        <th>Pesan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!-- load data  -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>No</th>
                                        <!-- <th>Periode Pemilu</th> -->
                                        <th>Nama Lengkap</th>
                                        <th>Status</th>
                                        <th>Pesan</th>
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
                                  <div class="col col-md-12">
                                            <div class="form-group">
                                                <label for="">Nama Kandidat</label>
                                                <input type="text"  name="nama_lengkap" id="nama_lengkap" class="form-control" value="">
                                                <!-- <select name="t_kd_kandidat" id="t_kd_kandidat" class="form-control">
                                                    <option value="" >---</option>
                                                    <?php  foreach ($kandidat as $key) {?>
                                                    <option value="<?$key->kd_kandidat?>" ><?$key->nama_kandidat?></option>
                                                    <?php }?>
                                                </select> -->
                                            </div> 
                                             <div class="form-group">
                                                <label for="">Pesan</label>
                                                <textarea class="form-control" name="t_pesan" id="t_pesan" cols="20" rows="5">
                                                </textarea>
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
          "url": "<?php echo site_url('admin/pesan/showPesan')?>",
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
      url : "<?php echo base_url('admin/pesan/hapusData')?>/"+id,
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
        var url = "<?php echo base_url('admin/pesan/editData')?>";
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
        url : "<?php echo site_url('admin/pesan/tambahData')?>",
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
               //if success close modal and reload ajax table
               $('#tambahdata').modal('hide');
               refreshData();
               resetData();
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
            url : "<?php echo base_url('admin/pesan/getData')?>/" + id,
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                for(var i=0; i < data.length; i++){
                    
                    $('[name="periode"]').val(data[i].periode);
                    $('[name="kd_pesan"]').val(data[i].kd_pesan);
                    $('[name="nama_kandidat"]').val(data[i].nama_kandidat);
                    $('[name="status"]').val(data[i].ps_status);
                    $('[name="pesan"]').val(data[i].pesan);
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

</script>