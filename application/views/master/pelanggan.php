<?php 
    $this->load->view("header");
?>
<link href="<?php echo base_url(); ?>/assets/template/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/assets/template/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Pelanggan</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?php echo base_url(); ?>master/pelanggan" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Pelanggan</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Master</a></li>
                            <li class="active">Pelanggan</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <button class="btn btn-md btn-primary" data-toggle="modal" data-target="#modal-pelanggan" onclick="tambah()"><i class="fa fa-plus">Tambah Data Pelanggan</i></button>
                            <p>&nbsp;</p>
                            <p class="text-muted m-b-30">Tabel Pelanggan</p>

                            <button id="reload-tabel" class="btn btn-md btn-default"><i class="fa fa-refresh"></i></button>
                            <div class="table-responsive">
                                <table id="tabel-pelanggan" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telpon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telpon</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>/assets/template/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>/assets/template/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>/assets/template/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>/assets/template/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>/assets/template/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>/assets/template/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>/assets/template/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>/assets/template/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->

            <div id="modal-pelanggan" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title judul-modal" id="myLargeModalLabel"> </h4> </div>
                        <div class="modal-body">
                            <form id="form-pelanggan" name="form_pelanggan">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama" class="control-label">Nama</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <input type="text" name="nama" id="nama" class="form-control" value="">    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="alamat" class="control-label">Alamat</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-flag"></i></div>
                                            <input type="text" name="alamat" id="alamat" class="form-control" value="">    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="no_telpon" class="control-label">No. Telpon</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-mobile"></i></div>
                                            <input type="text" name="no_telpon" id="no_telpon" class="form-control" value="">    
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-md" id="btn-simpan"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

<?php 
    $this->load->view("footer");
?>

    <script src="<?php echo base_url(); ?>/assets/template/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/template/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->

    <script type="text/javascript">
    var global_id;
    var global_method;

        $(document).ready(function(){
            table = $('#tabel-pelanggan').DataTable({
                "columnDfs": [{

                }],
                "ajax": {
                    "url": "<?php echo base_url();?>master/pelanggan/ajaxTable",
                    "type": "POST"
                },
                "serverSide": true,
                "processing": true,
                "scrollCollapse": true,
            });
        });

        $("#reload-tabel").click(function(){
            table.ajax.reload();
        });

        function tambah(){
            $(".judul-modal").text("Tambah Pelanggan");
            $("#form-pelanggan")[0].reset();
            global_method = "tambah";
        }

        function ubah(id){
            global_method = "ubah";
            global_id = id;
            $(".judul-modal").text("Ubah Pelanggan");
            $.ajax({
                url : "<?php echo base_url(); ?>master/Pelanggan/get_data/"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    $("#nama").val(data.nama);
                    $("#alamat").val(data.alamat);
                    $("#no_telpon").val(data.no_telpon);
                }
            });
        }

        $("#btn-simpan").click(function(e){

            if (global_method=="tambah") {
                url = "<?php echo base_url(); ?>master/Pelanggan/simpan/";
            }
            else{
                url = "<?php echo base_url(); ?>master/Pelanggan/edit/"+global_id;
            }

            $.ajax({
                url : url,
                type: "POST",
                data: $("#form-pelanggan").serialize(),
                dataType: "JSON",
                success: function(data){
                    $("#modal-pelanggan").modal("hide");
                    table.ajax.reload();
                    swal("Success!", "Data berhasil disimpan", "success");
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });   
        });

        function hapus(id)
        {
            swal({
                title: "Anda Yakin?",
                text: "Data akan terhapus secara permanen!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, saya yakin!",
                cancelButtonText: "Tidak, batalkan",
                closeOnConfirm: true,
                closeOnCancel: true
            }, function(isConfirm){
                if (isConfirm) {

                    $.ajax({
                        url: "<?php echo base_url(); ?>master/Pelanggan/hapus/"+id,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data)
                        {
                            table.ajax.reload();
                            swal("Success!", "Data berhasil dihapus!", "success");
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error get data from ajax');
                        }
                    });
                }
            });
        }
    </script>