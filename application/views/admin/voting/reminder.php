 <div class="content-wrapper">
     <div class="row">
         <div class="col col-sm-12 col-xs-12">
             <section class="content-header">
                 <h1>
                     Reminder
                     <small>Kirim Pesan</small>
                 </h1>
                 <ol class="breadcrumb">
                     <li><a href="<?php echo base_url().'admin/'?>"><i class="fa fa-dashboard"></i>
                             Home</a>
                     </li>
                     <li class="active">Reminder</li>
                 </ol>
             </section>
             <section class="content">
                <div class="box">
                    <div class="box-body">
                    <small class="text-dark">Form Control</small>
                         <div class="box-header ">
                               
                                 <i><a class="btn btn-primary " id="editData" href="#" onclick="editData();" >
                                    <span class="fa fa-send"></span> Kirim Sekarang
                                </a></i>
                                
                                <a type="button" class="btn btn-sm btn-transprant" data-toggle="popover"
                                 title="Informasi" data-content="Data Kandidat bersifat rahasia mohon dijaga dan jangan disebar. Terima Kasih">
                                 <span class="fa fa-question"></span> Info</a>
                        </div>
                    </div>
                </div>
                 <div class="box">
                      <div class="box-body">
                         <small class="text-dark">Kirim Reminder</small>
                            <div class="row">
                                <form action="#" id="formtambah">
                                    <div class="col col-md-8">
                                        <div class="form-group">
                                            <label for="">Email Mahasiswa</label>
                                            <input type="text" name="nama" id="nama" class="form-control " value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Subjek</label>
                                            <input type="text" name="npm" id="npm" class="form-control" value="">
                                        </div> 
                                        <div class="form-group">
                                            <label for="">Pesan Body</label>
                                            <textarea class="form-control" name="visi" id="visi" cols="20" rows="5"></textarea>
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
                                       
                                    </div>
                                </form>
                            </div>
                            <!-- <a class="btn btn-danger float-right" data-toggle="collapse" href="#detailData" role="button"
                              aria-expanded="true" aria-controls="collapseExample">
                                    Tutup <span class="fa fa-close"></span>
                                </a> -->
                                 <!-- <a class="btn btn-success "  href="#" onclick="tambahData1();" >
                                    <span class="fa fa-pencil"></span> Edit
                                </a> -->
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