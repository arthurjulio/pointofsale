<?php 
    $this->load->view("header");
?>
<link href="<?php echo base_url(); ?>/assets/template/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">User</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?php echo base_url() ?>master/user" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">User</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Master</a></li>
                            <li class="active">User</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <button class="btn btn-md btn-primary" data-toggle="modal" data-target="#modaltambahuser"> <i class="fa fa-plus" onclick="tambah()">Tambah data user</i></button>
                            <p>&nbsp;</p>
                            <h3 class="box-title m-b-0">Data Table</h3>
                            <p class="text-muted m-b-30">Data table example</p>
                            <button class="btn btn-md btn-default" id="reload-tabel"><i class="fa fa-refresh"></i></button>
                            <div class="table-responsive">
                                <table id="tabel-user" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No_telpon</th>
                                            <th>Jabatan</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No_telpon</th>
                                            <th>Jabatan</th>
                                            <th>Username</th>
                                            <th>Password</th>
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
            <div id="modaltambahuser" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title judul-modal" id="myLargeModalLabel">Large modal</h4> 
                                        </div>
                                        <div class="modal-body">
                                            <form id="form-satuan" name="form_satuan">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Nama">Nama</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"> <i class="ti-drupal"></i></div>
                                                            <input type="text" name="nama" id="nama" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Alamat">Alamat</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"> <i class="ti-home"></i></div>
                                                            <input type="text" name="alamat" id="alamat" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="No_telpon">Nomor Telepon</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"> <i class="ti-mobile"></i></div>
                                                            <input type="text" name="no_telpon" id="no_telpon" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Jabatan">Jabatan</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"> <i class="ti-id-badge"></i></div>
                                                            <input type="text" name="abatan" id="jabatan" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Username">Username</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"> <i class="ti-medall"></i></div>
                                                            <input type="text" name="username" id="username" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Password">Password</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"> <i class="ti-lock"></i></div>
                                                            <input type="text" name="password" id="password" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
            </div>

<?php 
    $this->load->view("footer");
?>

    <script src="<?php echo base_url(); ?>/assets/template/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
    var global_id;
    var global_method;

        $(document).ready(function(){
            table = $('#tabel-user').DataTable({
                "columnDefs": [{

                }],
                "ajax": {
                    "url": "<?php echo base_url();?>master/user/ajaxTable",
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

        function tambah()
        {
            $(".judul-modal").text("Tambah User");
            $("#form-satuan")[0].reset();
        }
        function ubah(id)
        {
            $(".judul-modal").text("Ubah Satuan");
            $.ajax({
                url : "<?php echo base_url(); ?>master/User/get_data/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    $("#nama").val(data.nama);
                    $("#alamat").val(data.alamat);
                    $("#no_telpon").val(data.no_telpon);
                    $("#jabatan").val(data.jabatan);
                    $("#username").val(data.username);
                },
                error: function (jqXHR, textStatus, erorThrown)
                {
                    alert('Error adding / update data')
                }
            });
            
        }
    </script>
    <!-- start - This is for export functionality only -->