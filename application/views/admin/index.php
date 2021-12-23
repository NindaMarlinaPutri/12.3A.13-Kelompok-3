<!-- Begin Page Content -->



<div class="container-fluid">
  <!-- row ux-->
  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2 bg-primary">
        <div class="card-body m-auto">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2 text-center">
              <a href="<?= base_url('admin/profile/'); ?>" class="text-decoration-none text-white">
                <div class="h1 mb-0 text-white m-auto"><i class="fas fa-fw fa-user-alt"></i></div>
                <div class="text-md font-weight-bold text-white textuppercase mb-1">
                  MY PROFILE
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2 bg-primary">
        <div class="card-body m-auto">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2 text-center">
              <a href="<?= base_url('admin/kontak/'); ?>" class="text-decoration-none text-white">
                <div class="h1 mb-0 text-white m-auto"><i class="fas fa-fw fa-phone"></i></div>
                <div class="text-md font-weight-bold text-white textuppercase mb-1">KONTAK ADMIN</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2 bg-primary">
        <div class="card-body m-auto">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2 text-center">
              <a href="<?= base_url('admin/wisata/'); ?>" class="text-decoration-none text-white">

                <div class="h1 mb-0 text-white m-auto"><i class="fas fa-fw fa-plane-departure"></i></div>
                <div class="text-md font-weight-bold text-white textuppercase mb-1">MANAGE WISATA</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2 bg-primary">
        <div class="card-body m-auto">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2 text-center">
              <a href="<?= base_url('admin/kategori/'); ?>" class="text-decoration-none text-white">
                <div class="h1 mb-0 text-white m-auto"><i class="fas fa-fw fa-map"></i></div>
                <div class="text-md font-weight-bold text-white textuppercase mb-1">DATA KATEGORI</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2 bg-danger">
        <div class="card-body m-auto">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2 text-center">
              <a href="<?= base_url('admin/kategori/'); ?>" data-toggle="modal" data-target="#logoutModal" class="text-decoration-none text-white">
                <div class="h1 mb-0 text-white m-auto"><i class="fas fa-fw fa-sign-out-alt"></i></div>
                <div class="text-md font-weight-bold text-white textuppercase mb-1">LOGOUT</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- end row ux-->
  <!-- Divider -->
  <hr class="sidebar-divider">

  <div class="container">

    <div class="heading_container heading_center">
      <h2>
        Wisata Surakarta
      </h2>
    </div>
    <div class="row d-flex align-items-center">

      <?php $delay = 100; ?>
      <?php foreach ($wisata as $w) : ?>

        <div href="<?= base_url('admin/detail/') . $w->id ?>" class="col-lg-4 col-md-6 col-sm-12 mb-3 p-2">

          <div class="kotak shadow kotak d-flex justify-content-between m-auto" data-aos="zoom-in" data-aos-once="true" data-aos-delay="<?= $delay; ?>">

            <a href="<?= base_url('admin/detail/' . $w->id); ?>" class="col-md-5 col-sm-4 gambar position-relative  m-auto  text-decoration-none text-white">

              <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-danger">
                <i class="fas fa-star"></i>
              </span>

              <img src="<?= base_url('assets/list_item/') . $w->image; ?>" class="img-fluid rounded-start gambar ">

            </a>


            <div class="col-md-7 col-sm-6 text-start m-auto">
              <div class="det ">
                <a href="<?= base_url('admin/detail/') . $w->id; ?>" class="nama text-decoration-none"><?= $w->nama_wisata; ?></a>
              </div>
              <div class="row">
                <div class="row ">
                  <div class="harga col"> Rp.<?= number_format($w->tiket);  ?></div>
                  <div class="col badge badge-danger fw-bold m-auto"><?= $w->kategori;  ?></div>
                </div>
                <div class="text-dark fw-bold mt-2"> <?= $w->waktu;  ?></div>


              </div>
            </div>

          </div>

        </div>

        <?php $delay = $delay + $delay; ?>
      <?php endforeach; ?>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->