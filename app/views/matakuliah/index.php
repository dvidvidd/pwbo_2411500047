<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Matakuliah</h3>
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Matakuliah
            </button>
            <?php foreach($data['mat'] as $mat) : ?>
                <ul class="list-group">
                    <li class ="list-group-item d-flex justify-content-between align-items-center">
                        <?php echo $mat['nama_mk'] ?>
                        <a href="<?php echo BASEURL;?>/matakuliah/detail/<?php echo $mat['id']; ?>" class="badge bg-primary" style="text-decoration:none;">
                            detail
                        </a>
                    </li>
                </ul>
            <?php endforeach;?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
       <form action="<?php echo BASEURL; ?>/matakuliah/tambah" method="post"> 
        <div class="form-group">
            <label for="kode_mk">Kode Matakuliah</label>
            <input type="text" class="form-control" id="kode_mk" name="kode_mk" placeholder="Kode Matakuliah">
        </div>
        <div class="form-group">
            <label for="nama_mk">Nama Matakuliah</label>
            <input type="text" class="form-control" id="nama_mk" name="nama_mk" placeholder="Nama Matakuliah">
        </div>
        <div class="form-group">
            <label for="jns_mk">Jenis Matakuliah</label>
            <input type="text" class="form-control" id="jns_mk" name="jns_mk" placeholder="Jenis Matakuliah">
        </div>
        <div class="form-group">
            <label for="sks">Jumlah SKS</label>
            <input type="number" class="form-control" id="sks" name="sks" placeholder="SKS">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
    </form>
    </div>
  </div>
</div>