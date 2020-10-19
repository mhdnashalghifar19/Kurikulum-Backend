$(function() {

    $('.tombolTambahData').on('click', function() {
        
        $('#formModalLabel').html('Tambah Data Artikel');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });

    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Artikel');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Kurikulum-Backend/Evaluasi-6/blog/public/admin/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/Kurikulum-Backend/Evaluasi-6/blog/public/admin/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#judul').val(data.judul);
                $('#gambarlama').val(data.gambar);
                $('#isi').val(data.isi);
                $('#penulis').val(data.penulis);
                $('#id').val(data.id);
            }
        });

    });

});