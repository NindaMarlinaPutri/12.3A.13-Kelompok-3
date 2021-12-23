<section class="jumbotron bg-white">
  <div class="container">
  </div>

  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col" width="200px">Email</th>
          <th scope="col-4" width="250px">Pesan</th>
          <th scope="col" width="200px">Tanggal</th>
          <th scope="col">Aksi</th>

        </tr>
      </thead>
      <tbody>

        <?php $no = 1; ?>
        <?php foreach ($pesan as $p) : ?>
          <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $p['nama']; ?></td>
            <td><?= $p['email']; ?></td>
            <td><?= mb_strimwidth($p['pesan'], 0, 25, "..."); ?></td>
            <td>
              <?= date('d F Y', $p['date_created']); ?>
            </td>
            <td>
              <a href="<?= base_url('admin/detailpesan/' . $p['id']); ?>" class="btn btn-primary"> <i class="fas fa-eye"></i>
              </a>
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $p['id'] ?>">
                <i class="fas fa-trash"></i>

              </button>

            </td>
            <div class="modal fade" id="deleteModal<?= $p['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Hapus Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-zen" href="<?= base_url('admin/deletePesan/' . $p['id']); ?>">Hapus</a>
                  </div>
                </div>
              </div>
            </div>

          </tr>
          <?php $no++; ?>
        <?php endforeach; ?>

      </tbody>
    </table>




  </div>




</section>
</div>