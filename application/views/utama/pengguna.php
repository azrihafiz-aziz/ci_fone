<body>
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Maklumat Pengguna
                <div class="pull-right"><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ModalAdd"><span class="fa fa-plus"></span> Maklumat Baru</a></div>
            </h1>
        </div>
        <div class="row">
            <div id="reload">
                <table class="table table-striped" id="myData">
                    <thead>
                        <tr>
                            <th>Bil</th>
                            <th>Nama</th>
                            <th>No Telefon</th>
                            <th style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody id="showData">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- MODAL ADD -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title" id="myModalLabel">Maklumat Baru</h3>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-9">
                                <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">No Telefon</label>
                            <div class="col-xs-9">
                                <input name="no_telefon" id="no_telefon" class="form-control" type="number" placeholder="No Telefon" required>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info" id="btnSave">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--END MODAL ADD-->

    <!-- MODAL EDIT -->
    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title" id="myModalLabel">Edit Pengguna</h3>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">

                        <input name="editId" id="id2" class="form-control" type="hidden" placeholder="" readonly>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-9">
                                <input name="editNama" id="nama2" class="form-control" type="text" placeholder="Nama" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">No Telefon</label>
                            <div class="col-xs-9">
                                <input name="editTelefon" id="no_telefon2" class="form-control" type="number" placeholder="No Telefon" required>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info" id="btnUpdate">Kemaskini</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--END MODAL EDIT-->

    <!--MODAL DELETE-->
    <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Delete Pengguna</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">

                        <input type="hidden" name="id" id="textid" value="">
                        <div class="alert alert-warning">
                            <p>Anda pasti mahu memadam data pengguna ini?</p>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn btn-danger" id="btnDelete">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--END MODAL DELETE-->