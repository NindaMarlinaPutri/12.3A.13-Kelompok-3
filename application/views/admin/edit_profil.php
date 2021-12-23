<div class="container">
  <div class="row">
    <div class="col-lg-6">
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8">

      <?= form_open_multipart('admin/editprofile'); ?>
      <input type="text" class="form-control" name="id" id="id" value="<?= $user['id']; ?>" hidden>

      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="email" id="email" value="<?= $user['email']; ?>" readonly>
        </div>
      </div>

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
          <input type="text" required class="form-control" name="name" id="name" value="<?= $user['name']; ?>">
          <?= form_error('name', '<small class="text-danger ">', '</small> '); ?>
        </div>
      </div>

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" required class="form-control" name="alamat" id="alamat" value="<?= $user['alamat']; ?>">
          <?= form_error('name', '<small class="text-danger ">', '</small> '); ?>
        </div>
      </div>

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Picture</label>
        <div class="col-sm-10">
          <div class="row">
            <div class="col-sm-3">
              <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" class="img-thumbnail">
            </div>
            <div class="col-sm-9">
              <input class="form-control" type="file" id="image" name="image" value="<?= $user['image']; ?>">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group row justify-content-end">
        <div class="col-sm-10 ">
          <button type="submit" class="btn btn-zen">Edit</button>
        </div>
      </div>

      </form>

    </div>
  </div>

</div>
</div>