<body class="sub_page">


  <div class="hero_area">
    <div class="bg-box">
    </div>
    <!-- header section strats -->
    <header class="header_section about_section ">
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
              <li class="nav-item ">
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

  <!-- form Pesan -->
  <section class="layyout-padding mt-5 mb-5">
    <div class="container">
      <div class="heading_container mt-4">
        <h2>
          Kontak Kami
        </h2>
        <small class="text-secondary">Tinggal kan pertanyaan disini</small>
      </div>

      <div class="filters-content mt-4">
        <div class="row d-flex justify-content-between ">

          <div class="col-12 col-lg-5 col-md-5 col-sm-12 pb-2 ">
            <div class="mb-2">
              <label class=" form-label fw-bold">Nama :</label>
              <br>
              <?= $nama; ?>
            </div>
            <div class="mb-2">
              <label class="form-label fw-bold">Email :</label>
              <br>
              <?= $email; ?>
            </div>
            <div class="mb-4">
              <label class="form-label fw-bold">Pesan :</label>
              <br>
              <?= $pesan; ?>
            </div>
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Sukses!</h4>
              <p>Pesan Anda Sudah Terkirim</p>
            </div>
            <div class="mb-4">
              <a href="<?= base_url('home/kontak') ?>">Kembali</a>
            </div>
          </div>

          <div class="col-12 col-lg-5 col-md-5 col-sm-12 pb-2  ">
            <h4 class="mb-4">Atau Hubumgi</h4>
            <div class="email mb-4">
              <a href="https://wa.me/6281295570745" target="_blank">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                  </svg>
                </span> +6285773732580
              </a>
            </div>
            <div class="wa mb-4">
              <a href="mailto:stiyono200@gmail.com">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                  </svg>
                </span> kelompok3@gmail.com
              </a>
            </div>
          </div>


        </div>

      </div>

    </div>
    </div>


  </section>