<div class="container pb-4">
  <div class="profil mb-5">
    <div class="row d-flex justify-content-arround">
      <div class="col-md-4 m-auto text-center p-2" data-aos="fade-right" data-aos-once="true">
        <img src="<?= base_url('assets/images/profile/' . $user['image']); ?>" class="img-fluid img-prof m-auto img-bulet">
      </div>
      <div class="col-md-4 m-auto  p-2">
        <h2 class="card-title name-zen" data-aos="fade-left" data-aos-once="true"><?= $user['name']; ?></h2>
        <p class="card-text " data-aos="fade-right"><?= $user['email']; ?></p>
        <p class="card-text " data-aos="fade-left"><?= $user['alamat']; ?></p>

        </p>

        <p class="card-text" data-aos="fade-up" data-aos-delay="850"><small class="text-muted">member since <?= date('d F Y', $user['date_created']); ?></small></p>
      </div>
    </div>
  </div>

</div>
</div>