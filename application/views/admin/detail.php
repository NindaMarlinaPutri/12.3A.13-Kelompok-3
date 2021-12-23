<div class="container">

  <?php foreach ($wisata as $w) : ?>

    <div div class="row shadow-sm bg-white pt-4 pb-4">
      <!-- BAGIAN DESC-->
      <div class="col-md-4">
        <div class="">
          <div class="img-box">
            <img src="<?= base_url('assets/list_item/') . $w->image;  ?>" class="img-fluid" />
          </div>
        </div>
      </div>

      <!-- BAGIAN FORM-->
      <div class="col-md-7">
        <div class=" mb-2">
          <div class="namaa ">
            <?= $w->nama_wisata; ?>
          </div>
          <div class="hargaa text-zen">
            Rp. <?= $w->tiket; ?>
          </div>
        </div>
        <div class=" row rate bg mb-2">
          <div class="col rating"> <span class="value"><?= $w->waktu; ?> </span> Waktu</div>|
          <div class="col rating">
            <a href="<?= base_url('admin/fillwisata/' . $w->kategori); ?>" class="text-decoration-none text-dark">
              <span class="value">
                <?= $w->kategori; ?>
              </span> Kategori
            </a>
          </div>
        </div>
        <div class="">
          <p>
            <?= $w->keterangan; ?> </p>
        </div>

      </div>

    </div>

  <?php endforeach; ?>
</div>
</div>