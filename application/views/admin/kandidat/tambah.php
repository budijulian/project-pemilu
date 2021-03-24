 <div class="content-wrapper">
     <div class="row">
         <div class="col col-sm-12 col-xs-12">
             <section class="content-header">
                 <h1>
                     Data Kandidat
                     <small>Tambah Data</small>
                 </h1>
                 <ol class="breadcrumb">
                     <li><a href="<?php echo base_url().'admin/kandidat/'?>"><i class="fa fa-dashboard"></i>
                             Kandidat</a>
                     </li>
                     <li class="active">Tambah Data</li>
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
                                <i><a class="btn btn-light" href="#" onclick="resetData();">
                                    Refresh <span class="fa fa-refresh"></span>
                                </a></i>
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
                                 <a class="btn btn-success "  href="#" onclick="tambahData1();" >
                                    <span class="fa fa-plus"></span> Simpan
                                </a>
                               <a id="notif1" class="invisible"><div class="bg-success rounded rounded-circle fa fa-2x  "> <span class="fa fa-1x fa-check"></span></div>Tersimpan</a> 
                         </div>
                 </div>
                 
             </section>
         </div>
     </div>
 </div>

 <script>
 $(function () {
  $('[data-toggle="popover"]').popover()
});
  
   
</script>

<script type="text/javascript">
    var table;
    $(document).ready(function() {

    });
    function resetData(){
        $("#formtambah")[0].reset();
    }
    function tambahData3(){
        var element = document.getElementById("notif1");
        element.setAttribute("class", "invisible");
    }
    function tambahData1(){

        $.ajax({
        url : "<?php echo site_url('admin/kandidat/tambahData')?>",
        type: "POST",
        data: $('#formtambah').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            // output alert notif1 
               var element = document.getElementById("notif1");
                element.setAttribute("class", "visible");
             },
           error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / edit data');
            } 
          });
    }
</script>