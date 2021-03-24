<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Developer
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Developer</li>
                </ol>
            </section>
            <section class="content">
                <!-- menepatkan session pesan dari controler -->
                <div class="box">
                     <div class="box-body">
                        <small class="text-dark">Form Control</small>
                        <div class="box-header ">
                                   <a type="button" class="btn btn-sm btn-transprant" data-toggle="popover"
                                 title="Informasi" data-content="Website ini bersifat hak cipta dan data pengembang disesuaikan berdasarkan nomor versi pada website ini.">
                                 <span class="fa fa-question"></span> Info</a>
                        </div>
                        
                    </div>
                </div>
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <small class="text-dark">Data Developer</small>
                            <div class="table-responsive"> 
                                 <table class="table table-bordered">
                                 <thead>
                                    <tr><th><a class="text-primary " data-toggle="collapse" href="#versi1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <span class="fa fa-arrow-right"></span> Versi 1.1.0</a></th>
                                    </tr>
                                    <tr><th><a class="text-primary " data-toggle="collapse" href="#versi2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <span class="fa fa-arrow-right"></span> Versi 1.2.0</a></th>
                                    </tr>
                                 </thead>
                                 </table>
                                 <div class="collapse in" id="versi1">
                                    <div class="box-body">
                                    <small>Data Pengembang</small>
                                        <table class="table table-bordered">
                                        <thead>
                                            <th> NO</th>
                                            <th> Nama Lengkap</th>
                                            <th> Nomor Induk</th>
                                            <th> Developer</th>
                                            <th> Status</th>
                                        </thead>
                                            <tbody>
                                            <td>1</td>
                                            <td>Budi Julian</td>
                                            <td>173112700650047</td>
                                            <td>Full Stack</td>
                                            <td>Anggota Litbang</td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                 <div class="collapse in" id="versi2">
                                    <div class="box-body">
                                    <small>Data Pengembang</small>
                                        <table class="table table-bordered">
                                        <thead>
                                            <th> NO</th>
                                            <th> Nama Lengkap</th>
                                            <th> Nomor Induk</th>
                                            <th> Developer</th>
                                            <th> Status</th>
                                        </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Budi Julian</td>
                                                    <td>173112700650047</td>
                                                    <td>Full Stack</td>
                                                    <td>Ketua Divisi Litbang</td>
                                                </tr>
                                                 <tr>
                                                    <td>2</td>
                                                    <td>Muhamad Iqbal Wasta P</td>
                                                    <td>183112700650181</td>
                                                    <td>Designer</td>
                                                    <td>Anggota Litbang</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Nabilah Ananda Pratiwi</td>
                                                    <td>183112700650146</td>
                                                    <td>Testing (A/B)</td>
                                                    <td>Anggota Litbang</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Ade Muhammad Nur Fauzi</td>
                                                    <td>183112700650075</td>
                                                    <td>Database</td>
                                                    <td>Anggota Litbang</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
            </section>
        </div>
    </div>
   
</div>
<script>
 $(function () {
  $('[data-toggle="popover"]').popover()
});
$('.collapse').collapse()
</script>