<head>

</head>

<section class="jumbotron bg-white">
  <div class="container">
  </div>
  <?php foreach ($detail as $d) : ?>
    <div class="container">
      <!-- form Pesan -->
      <section class="layyout-padding mb-5">
        <div class="container">
          <div class="heading_container mt-4">
            <h2>
              Pesan Dari <?= $d['nama']; ?>
            </h2>
          </div>



          <div class="filters-content mt-4">
            <div class="row d-flex justify-content-between ">

              <div class="col-12 col-lg-5 col-md-5 col-sm-12 pb-2 ">
                <div class="mb-2">
                  <label class=" form-label fw-bold">Nama :</label>
                  <br>
                  <?= $d['nama']; ?>
                </div>
                <div class="mb-2">
                  <label class="form-label fw-bold">Email :</label>
                  <br>
                  <?= $d['email']; ?>
                </div>
                <div class="mb-4">
                  <label class="form-label fw-bold">Tanggal :</label>
                  <br>
                  <?= date('d F Y', $d['date_created']); ?>
                </div>
                <div class="mb-4">
                  <label class="form-label fw-bold">Pesan :</label>
                  <br>
                  <?= $d['pesan']; ?>
                </div>


              </div>

            <?php endforeach; ?>



            </div>

          </div>

        </div>
    </div>


</section>

</div>