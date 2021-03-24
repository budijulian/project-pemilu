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
                                <a class="btn btn-success "  href="javascript:void(0)" onclick="editData();" >
                                    <span class="fa fa-pencil"></span> Edit Data
                                </a>
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
                                            <?php foreach($kandidat as $row)?>
                                             <input type="hidden" name="kd_kandidat" id="kd_kandidat" class="form-control " value="<?php echo $row->kd_kandidat?>">
                                            <input type="text" name="nama_kandidat" id="nama_kandidat" class="form-control " value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">NPM</label>
                                            <input type="text" name="npm" id="npm" class="form-control" value="">
                                        </div> 
                                         <div class="form-group">
                                            <label for="">Foto Kandidat</label>
                                            <input type="file" name="foto_baru" id="foto_baru" class="form-control " value="">
                                            <small>format: .jpg |.png |.jpeg </small>
                                            <small id="statusfoto" class="text-primary" ><u> </u></small>  
                                            <a id="zoomgambar" href="javascript:void(0)"  class="text-primary" data-toggle="modal" data-target="#showfoto"><u> Lihat</u></a>  
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group">
                                            <label for="">Link Video</label>
                                            <input type="text" name="link_video" id="link_video" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jurusan</label>
                                            <input type="text" name="jurusan" id="jurusan" class="form-control " value="">
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
                                    <div class="col col-md-4">
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
                                    <div class="col col-md-12">
                                        <div class="form-group">
                                            <label for="">Visi</label>
                                            <textarea class="form-control" name="visi" id="visi" cols="20" rows="5">
                                                </textarea>      
                                        </div>
                                        <div class="form-group">
                                            <label for="">Misi</label>
                                            <textarea class="form-control" name="misi" id="misi" cols="20" rows="5">
                                                </textarea>      
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- <a class="btn btn-danger float-right" data-toggle="collapse" href="#detailData" role="button"
                              aria-expanded="true" aria-controls="collapseExample">
                                    Tutup <span class="fa fa-close"></span>
                                </a> -->
                                 
                         </div>
                 </div>
             </section>
         </div>
     </div>
 </div>

 <!-- Modal tambah -->
    <div class=" modal fade" id="showfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-info">Foto Kandidat</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form  id="tambahDataForm">
                <div class="modal-body">
                      <div class="form-group text-center">
                        <img id="zoom_foto"  class="img-thumbnail " height="400px" width="400px"  alt="foto kandidat">
                     </div>
                    </div>
                    <div class="modal-footer">
                       <a class="btn btn-danger float-right" data-toggle="collapse" href="#detailData" role="button"
                                aria-expanded="true" aria-controls="collapseExample">
                                        Tutup <span class="fa fa-close"></span>
                                    </a>
                    </div>
                 </form>
            </div>
        </div>
    </div>
 <!-- Button trigger modal -->
 <!-- modal verifikasi data mahasiswa valid /or not -->
 <script>
 $(function () {
  $('[data-toggle="popover"]').popover()
});
</script>

<script type="text/javascript">
    var table;
    
$(document).ready(function() {
        
        detailData();
        CKEDITOR.replace( 'visi' , {
        
        uiColor: '#CCEAEE',
        width: '100%',
        height: 300
        }); 
        CKEDITOR.replace( 'misi' , {
        
        uiColor: '#CCEAEE',
        width: '100%',
        height: 300
        });;
     
          //  upload foto otomatis 
            $(document).on('change', '#foto_baru', function(){
            var kd_kandidat =  $('[name="kd_kandidat"]').val();
            var name = document.getElementById("foto_baru").files[0].name;
            var form_data = new FormData();
            var ext = name.split('.').pop().toLowerCase();
            if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1)
            {
            alert("Invalid Image File");
            }
            
            else
            {
                form_data.append("foto_baru", document.getElementById('foto_baru').files[0]);
                $.ajax({
                    url:"<?php echo base_url('admin/kandidat/ubahdatafoto')?>/"+kd_kandidat,
                    method:"POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend:function(){
                    $('#statusfoto').html("<label class='text-success'>Sedang Mengupload Gambar...</label>");
                    },
                    success:function(data)
                    {
                    }
                });
            }
            });
});
    //  upload foto otomatis 
   
     function editData(){
            var kd_kandidat =  $('[name="kd_kandidat"]').val();
            var nama_kandidat =  $('[name="nama_kandidat"]').val();
            var angkatan =  $('[name="angkatan"]').val();
            var no_urut =  $('[name="no_urut"]').val();
            var link_video =  $('[name="link_video"]').val();
            var periode =  $('[name="periode"]').val();
            var jurusan =  $('[name="jurusan"]').val();
            var npm =  $('[name="npm"]').val();
            var visi =  CKEDITOR.instances['visi'].getData();
            var misi =  CKEDITOR.instances['misi'].getData();
            var status =  $('[name="status"]').val();
                $.ajax({
                url : "<?php echo base_url('admin/kandidat/ubahData')?>",
                type  : "ajax",
                method : "POST",
                data: {
                    kd_kandidat : kd_kandidat,
                    nama_kandidat : nama_kandidat,
                    angkatan : angkatan,
                    no_urut : no_urut,
                    link_video : link_video,
                    periode : periode,
                    jurusan : jurusan,
                    npm : npm,
                    visi : visi,
                    misi : misi,
                    status : status
                }, 
                success: function(data)
                {
                    swal(
                        'Berhasil.',
                        'Data berhasil diubah!',
                        'success'
                        )
                    detailData();
                }
             })
                
     }
        function detailData(){
            var id = $('[name="kd_kandidat"]').val();
         $.ajax({
            url : "<?php echo base_url('admin/kandidat/getData')?>/"+id,
            type: "GET", 
            dataType : "json",
            success: function(data)
            {
                // fetch data array 
                row = data.data;
                console.log(row);
                for(var i=0; i < row.length; i++){
                    
                    $('[name="nama_kandidat"]').val(row[i].nama_kandidat);
                    $('[name="npm"]').val(row[i].nomor_induk);
                    $('[name="nama_kandidat"]').val(row[i].nama_kandidat);
                    $('[name="jurusan"]').val(row[i].jurusan);
                    $('[name="no_urut"]').val(row[i].nomor_urut);
                    $('[name="link_video"]').val(row[i].link_video);
                    $('[name="angkatan"]').val(row[i].angkatan);
                    $('[name="periode"]').val(row[i].kd_periode);
                    $('[name="status"]').val(row[i].status);
                    $('[name="foto_lama"]').val(row[i].foto);
                    //  CKEDITOR.instances['visi'].getData();
                    // memasukan value pada ckeditor  
                    CKEDITOR.instances.visi.setData(row[i].visi);
                    CKEDITOR.instances.misi.setData(row[i].misi);
                    // $('input:radio[name=jenis_voting][value='+data[i].jenis_voting+']')[0].checked = true;
                    var foto = document.getElementById("zoom_foto");
                    foto.setAttribute('src','<?=base_url()?>assets/img/kandidat/'+row[i].foto);
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    }
</script>