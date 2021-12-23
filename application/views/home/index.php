<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="<?= base_url('assets/') ?>images/bg.JPG" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">

        <nav class="navbar navbar-expand-lg custom_nav-container fw-bold">
          <a class="navbar-brand text-white fw-bold " href="<?= base_url('home/index') ?>">Surakarta
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('home/index') ?>">HOME <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
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

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="<?= base_url('assets/') ?>images/bg.jpeg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                ABOUT WISATA SURAKARTA
              </h2>
            </div>
            <p>
              Surakarta, salah satu kota di Jawa Tengah ini punya segalanya untuk menarik wisatawan. Tapi, keberhasilan Kota surakrta dalam dunia wisata juga seperti menjadi magnet bagi wilayah di sekitarnya yang tak kalah menarik untuk dikunjungi.
            </p>
            <p>
              Ibarat peribahasa “sekali mendayung, dua hingga tiga pulau terlampaui”. Ketika kamu sudah menginjakan kaki di Kota Solo, dengan berkendara sekitar 60 menit saja kamu sudah bisa sampai di Tretes (beda sama yang di Jawa Timur!) yang punya hamparan taman bunga yang indah. Selain itu, masih ada Wonogiri, Tawangmangu, Boyolali, Karanganyar hingga Klaten yang punya potensi wisata unik dan tak kalah hits.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- book section -->
  <section id="ourmap" class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Lokasi Kantor kami
        </h2>
      </div>
      <div class="row">
        <div class="col-md-10 m-auto">
          <div class="map_container ">
            <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.9424636301824!2d110.81950781392153!3d-7.581242276997916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a166e4de22e85%3A0x1891fb37526d9195!2sJl.%20A.M%20Sangaji%20No.21b%2C%20Gajahan%2C%20Kec.%20Ps.%20Kliwon%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah%2057155!5e0!3m2!1sid!2sid!4v1639714270026!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->