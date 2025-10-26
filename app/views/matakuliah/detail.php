<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $data['mat']['nama_mk']; ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">KODE MATAKULIAH : <?php echo $data['mat']['kode_mk'] ?></h6>
        <p class="card-text">JENIS MATAKULIAH : <?php echo $data['mat']['jns_mk'] ?></p>
        <p class="card-text">SKS : <?php echo $data['mat']['sks'] ?></p>
        <a href="<?php echo BASEURL;?>/matakuliah" class="card-link">Kembali ke halaman sebelumnya</a>
    </div>
    </div>
</div>