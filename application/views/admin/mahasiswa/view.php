 <div class="content-wrapper">
     <div class="row">
         <div class="col col-sm-12 col-xs-12">
             <section class="content-header">
                 <h1>
                     Data Kandidat
                     <small>Detail Data</small>
                 </h1>
                 <ol class="breadcrumb">
                     <li><a href="<?php echo base_url().'admin/kandidat/'?>"><i class="fa fa-dashboard"></i>
                             Kandidat</a>
                     </li>
                     <li class="active">Edit Data</li>
                 </ol>
             </section>
             <section class="content">
                <div class="box">
                    <div class="box-body">
                    <small class="text-dark">Form Control</small>
                         <div class="box-header ">
                                <i><a class="btn btn-primary " href="<?php echo base_url().'admin/kandidat/'?>">
                                    <span class="fa fa-arrow-left"></span> Kembali
                                </a></i>
                                 <!-- <i><a class="btn btn-warning " id="editData" href="#" onclick="editData();" >
                                    <span class="fa fa-pencil"></span> Edit
                                </a></i> -->
                                
                                <a type="button" class="btn btn-sm btn-transprant" data-toggle="popover"
                                 title="Informasi" data-content="Data Kandidat bersifat rahasia mohon dijaga dan jangan disebar. Terima Kasih">
                                 <span class="fa fa-question"></span> Info</a>
                        </div>
                    </div>
                </div>
                 <div class="box">
                      <div class="box-body">
                         <small class="text-dark">Detail Data</small>
                            <div class="row">
                                <form action="#" id="formtambah">
                                    <div class="col col-md-4">
                                        <div class="form-group">
                                            <label for="">Nama Kandidat</label>
                                            <input type="text" name="nama" id="nama" class="form-control " value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nomor Induk</label>
                                            <input type="text" name="npm" id="npm" class="form-control" value="">
                                        </div> 
                                         <div class="form-group">
                                            <label for="">Foto Kandidat</label>
                                            <input type="file" name="foto" id="foto" class="form-control " value="">
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group">
                                            <label for="">Tanggal Lahir</label>
                                            <input type="date" name="tglLahir" id="tglLahir" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jurusan</label>
                                            <input type="text" name="jurusan" id="jurusan" class="form-control " value="">
                                        </div>
                                    </div> 
                                    <div class="col col-md-4">
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
                                                <option value="2020/2021" >2020/2021</option>
                                                <option value="2019/2020" >2019/2020</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto Kandidat</label>
                                            <textarea name="linkVideo" id="linkVideo" class="form-control" cols="20" rows="3"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- <a class="btn btn-danger float-right" data-toggle="collapse" href="#detailData" role="button"
                              aria-expanded="true" aria-controls="collapseExample">
                                    Tutup <span class="fa fa-close"></span>
                                </a> -->
                                 <a class="btn btn-success "  href="#" onclick="tambahData1();" >
                                    <span class="fa fa-pencil"></span> Edit
                                </a>
                               <a id="notif1" class="invisible"><div class="bg-success rounded rounded-circle fa fa-2x  "> <span class="fa fa-1x fa-check"></span></div>Tersimpan</a> 
                         </div>
                 </div>
                  <div class="box">
                      <div class="box-body">
                         <small class="text-dark">Detail Data</small>
                            <div class="row">
                                <form action="#" id="formdetail2">
                                    <div class="col col-md-4">
                                        <div class="form-group">
                                            <label for="">Visi</label>
                                            <textarea class="form-control" name="visi" id="visi" cols="20" rows="5"></textarea>
                                        </div> 
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group">
                                            <label for="">Misi</label>
                                           <textarea class="form-control" name="misi" id="misi" cols="20" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group">
                                            <label for="">Motivasi</label>
                                           <textarea class="form-control" name="motivasi" id="motivasi" cols="20" rows="5"></textarea>
                                        </div>
                                    </div> 
                                    
                                </form>
                            </div>
                            <!-- <a class="btn btn-danger float-right" data-toggle="collapse" href="#detailData" role="button"
                              aria-expanded="true" aria-controls="collapseExample">
                                    Tutup <span class="fa fa-close"></span>
                                </a> -->
                                 <a class="btn btn-success " id="tambahData" href="#" onclick="TambahData2();" >
                                    <span class="fa fa-pencil"></span> Edit
                                </a>
                                 <a class="invisible"><div class="bg-success rounded rounded-circle fa fa-2x  "> <span class="fa fa-1x fa-check"></span></div>Tersimpan</a> 
                         </div>
                 </div>
             </section>
         </div>
     </div>
 </div>

 <!-- Button trigger modal -->
 <!-- Modal tambah -->
 <div class=" modal fade" id="lihatktm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body text-center">
                 <h3 class="modal-title text-info">Kartu Tanda Mahasiswa</h3>
                 <div class="form-group">
                     <div class="form-group text-center">
                         <img src="<?php echo base_url().'assets/img/mahasiswa/'.$i->foto?>" alt="foto" witdh="800px"
                             height="400px">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- modal verifikasi data mahasiswa valid /or not -->
 <script>
 $(function () {
  $('[data-toggle="popover"]').popover()
});
CKEDITOR.replace( 'visi' , {
       
      uiColor: '#CCEAEE',
      width: '100%',
      height: 300
    }); 
     CKEDITOR.replace( 'misi' , {
       
      uiColor: '#CCEAEE',
      width: '100%',
      height: 300
    });
    CKEDITOR.replace( 'motivasi' , {
       
      uiColor: '#CCEAEE',
      width: '100%',
      height: 300
    });
</script>

<script type="text/javascript">
    var table;
    $(document).ready(function() {
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
        function detailData(){
         $.ajax({
            url : "<?php echo base_url('admin/kandidat/getData')?>",
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                for(var i=0; i < data.length; i++){
                    
                    $('[name="kd_admin"]').val(data[i].kd_admin);
                    $('[name="user"]').val(data[i].username);
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    }
    });
</script>