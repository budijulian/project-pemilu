<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Data Admin
                    <small>Profile</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Admin</li>
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
                    <small class="text-dark">Data Admin</small>
                        <div class="table-responsive">  
                        <table id="dataadmin" class="table table-bordered table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Admin</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                            <tfoot>
                                <tr>
                                   <th>No</th>
                                    <th>Nama Admin</th>
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
                                <div class="col col-md-4">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="t_user" id="t_user" class="form-control " value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="t_pass" id="t_pass" class="form-control" value="">
                                    </div> 
                                   
                                </div>
                                <div class="col col-md-4">
                                     <div class="form-group">
                                        <label for="">Nama Admin</label>
                                        <input type="text" name="t_nama" id="t_nama" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="t_email" id="t_email" class="form-control " value="">
                                    </div>
                                </div> 
                                <div class="col col-md-4">
                                   <div class="form-group">
                                        <label for="">Sebagai</label>
                                        <select name="t_sebagai" id="t_sebagai" class="form-control">
                                            <option value="" >---</option>
                                            <option value="super admin" >Super Admin</option>
                                            <option value="panitia" >Panitia</option>
                                        </select>
                                        </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="t_status" id="t_status" class="form-control">
                                            <option value="" >---</option>
                                            <option value="aktif" >Aktif</option>
                                            <option value="tidak aktif" >Tidak Aktif</option>
                                        </select>
                                    </div>
                            </form>
                            </div>
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
      table = $('#dataadmin').DataTable({ 
        
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo site_url('admin/profile/showAdmin')?>",
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
            url : "<?php echo base_url('admin/profile/getData')?>/" + id,
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                for(var i=0; i < data.length; i++){
                    
                    $('[name="kd_admin"]').val(data[i].kd_admin);
                    $('[name="user"]').val(data[i].username);
                    $('[name="pass"]').val(atob(data[i].password));
                    $('[name="nama"]').val(data[i].nama_admin);
                    $('[name="email"]').val(data[i].email);
                    $('[name="sebagai"]').val(data[i].status);
                    $('[name="status"]').val(data[i].ket);
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