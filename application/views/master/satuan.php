<?php 
    $this->load->view("header");
?>
<link href="<?php echo base_url(); ?>/assets/template/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/template/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Satuan</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?php echo base_url() ?>master/satuan" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Satuan</a>
                        <ol class="breadcrumb">
                            <li>Master</li>
                            <li class="active">Satuan</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <button class="btn btn-md btn-primary" data-toggle="modal" data-target="#modal-satuan" onclick="tambah()"><i class="fa fa-plus"> Tambah data satuan</i></button>
                            <p>&nbsp;</p>
                            <p class="text-muted m-b-30">Tabel satuan</p>

                            <button class="btn btn-md btn-default" id="reload-tabel"><i class="fa fa-refresh"></i></button>
                            <div class="table-responsive">
                                <table id="tabel-satuan" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Satuan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Satuan</th>
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
<div id="modal-satuan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title judul-modal" id="myModalLabel"></h4> </div>
            <div class="modal-body">
                <form id="form-satuan" name="form_satuan">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama">Nama satuan</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-id-badge"></i></div>
                                <input type="text" name="nama" id="nama" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-md btn-primary" id="btn-simpan"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php 
    $this->load->view("footer");
?>
<script src="<?php echo base_url(); ?>assets/template/plugins/bower_components/sweetalert/sweetalert.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/template/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->

<script type="text/javascript">
var global_id;
var global_method;

    $(document).ready(function(){
        table = $('#tabel-satuan').DataTable({
            "columnDefs": [{
                
            }],
             "ajax": {
                "url": "<?php echo base_url();?>master/satuan/ajaxTable",
                "type": "POST"
            },
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "processing": true,
            "scrollCollapse": true,
        });
    });

    $("#reload-tabel").click(function(){
        table.ajax.reload();
    });

    function tambah()
    {
        $(".judul-modal").text("Tambah Satuan");
        $("#form-satuan")[0].reset();
        global_method = "add";
    }

    function ubah(id)
    {
        global_method="edit";
        global_id = id;
        $(".judul-modal").text("Ubah Satuan");
        $.ajax({
            url : "<?php echo base_url(); ?>master/Satuan/get_data/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                
                $("#nama").val(data.nama);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }

        });
    }

    $("#btn-simpan").click(function(e){

        $(".judul-modal").text("Ubah Satuan");

        if (global_method=="add") {
            url = "<?php echo base_url(); ?>master/Satuan/simpan/";
        }
        else {
            url = "<?php echo base_url(); ?>master/Satuan/edit/"+global_id;
        }

        $.ajax({
            url : url,
            type: "POST",
            data: $("#form-satuan").serialize(),
            dataType: "JSON",
            success: function(data)
            {
                $("#modal-satuan").modal("hide");
                table.ajax.reload();
                swal("Success!", "Data berhasil disimpan!", "success");
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
            title: "Anda yakin?",   
            text: "Data akan terhapus secara permanen!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Ya, saya yakin!",   
            cancelButtonText: "Tidak, batalkan!",   
            closeOnConfirm: true,
            closeOnCancel: true 
        }, function(isConfirm){   
            if (isConfirm) {

                $.ajax({
                    url : "<?php echo base_url(); ?>master/Satuan/hapus/"+id,
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