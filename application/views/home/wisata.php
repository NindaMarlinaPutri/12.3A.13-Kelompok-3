<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="<?= base_url('assets/') ?>images/bg.JPG" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">

        <nav class="navbar navbar-expand-lg custom_nav-container fw-bold">
          <a class="navbar-brand text-white fw-bold " href="<?= base_url('home/index') ?>">
            Surakarta
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
              <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('home/index') ?>">HOME <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('home/wisata') ?>">WISATA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home/kontak') ?>">KONTAK</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="<?= base_url('auth') ?>" class="order_online">
                Selengkapnya
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- food section -->

  <section class="food_section layout_padding-bottom mt-4">
    <div class="container">

      <div class="heading_container heading_center">
        <h2>
          Wisata Surakarta
        </h2>
      </div>


      <div class="filters-content mt-4">
        <div class="row grid">
          <?php foreach ($wisata as $w) : ?>

            <div class="col-sm-6 col-lg-4 all pizza">
              <div class="list-spot">
                <div class="gambar">
                  <img src="<?= base_url('assets/list_item/') . $w->image ?>">
                </div>
                <div class="desk-box text-center">
                  <div class="nama mt-4"> <?= $w->nama_wisata; ?></div>

                  <div class="options">
                    <h6>

                    </h6>
                    <a href="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- end food section -->