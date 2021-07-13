<script src="<?= base_url('assets/js/jquery.js');  ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.dataTables.js'); ?>"></script>

<script>
    $(document).ready(function() {
        dataPengguna(); //pemanggilan fungsi tampil pengguna.

        $('#myData').dataTable({
            "columnDefs": [{
                "width": "20%",
                "targets": 0
            }]
        });

        //fungsi tampil pengguna
        function dataPengguna() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('/pengguna/dataPengguna') ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var z = 1;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + z++ + '</td>' +
                            '<td>' + data[i].nama + '</td>' +
                            '<td>' + data[i].no_telefon + '</td>' +
                            '<td style="text-align:center;"><a href="javascript:;" class="btn btn-success btn-xs itemEdit" data="' + data[i].id + '"><i class="fa fa-edit"></i></a>' + ' ' +
                            '<a href="javascript:;" class="btn btn-danger btn-xs itemDelete" data="' + data[i].id + '"><i class="fa fa-trash-alt"></i></a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#showData').html(html);
                }
            });
        }

        //GET UPDATE
        $('#showData').on('click', '.itemEdit', function() {
            var id = $(this).attr('data');
            $.ajax({
                type: "GET",
                url: "<?= base_url('pengguna/getPengguna') ?>",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(data) {
                    $.each(data, function(id, nama, no_telefon) {
                        $('#ModalEdit').modal('show');
                        $('[name="editId"]').val(data.id);
                        $('[name="editNama"]').val(data.nama);
                        $('[name="editTelefon"]').val(data.no_telefon);
                    });
                }
            });
            return false;
        });


        //GET DELETE
        $('#showData').on('click', '.itemDelete', function() {
            var id = $(this).attr('data');
            $('#ModalDelete').modal('show');
            $('[name="id"]').val(id);
        });

        //Simpan Pengguna
        $('#btnSave').on('click', function() {
            var id = $('#id').val();
            var nama = $('#nama').val();
            var no_telefon = $('#no_telefon').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('pengguna/simpanPengguna') ?>",
                dataType: "JSON",
                data: {
                    id: id,
                    nama: nama,
                    no_telefon: no_telefon
                },
                success: function(data) {
                    $('[name="id"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="no_telefon"]').val("");
                    $('#ModalAdd').modal('hide');
                    dataPengguna();
                    location.reload();
                }
            });
            return false;
        });

        //Update Pengguna
        $('#btnUpdate').on('click', function() {
            var id = $('#id2').val();
            var nama = $('#nama2').val();
            var no_telefon = $('#no_telefon2').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('pengguna/updatePengguna') ?>",
                dataType: "JSON",
                data: {
                    id: id,
                    nama: nama,
                    no_telefon: no_telefon
                },
                success: function(data) {
                    $('[name="editId"]').val("");
                    $('[name="editNama"]').val("");
                    $('[name="editTelefon"]').val("");
                    $('#ModalEdit').modal('hide');
                    dataPengguna();
                    location.reload();
                }
            });
            return false;
        });

        //Delete Pengguna
        $('#btnDelete').on('click', function() {
            var id = $('#textid').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('pengguna/hapusPengguna') ?>",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#ModalDelete').modal('hide');
                    dataPengguna();
                    location.reload();
                }
            });
            return false;
        });

    });
</script>
</body>

</html>