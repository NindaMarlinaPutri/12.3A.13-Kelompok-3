<head>

</head>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newMenuModal"><i class="fas fa-map"></i> Wisata Baru</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Wisata</th>
                        <th scope="col">Id Kategori</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Tiket</th>
                        <th scope="col">Image</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($wisata as $b) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $b['nama_wisata']; ?></td>
                            <td><?= $b['kategori']; ?></td>
                            <td><?= $b['lokasi']; ?></td>
                            <td><?= $b['keterangan']; ?></td>
                            <td><?= $b['waktu']; ?></td>
                            <td><?= $b['tiket']; ?></td>
                            <td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/list_item/') . $b['image']; ?>" class="img-fluid img-thumbnail" alt="...">
                                </picture>
                            </td>
                            <td>
                                <a class="badge badge-primary m-auto " data-bs-toggle="modal" data-bs-target="#updateModal<?= $b['id'] ?>"><i class="fas fa-edit"></i> Edit</a>
                                <a class="badge badge-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $b['id'] ?>">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="newMenuModalLabel">Tambah Wisata Baru</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <?= form_open_multipart('admin/addWisata'); ?>

                                        <div class="modal-body">
                                            <div class="modal-body">
                                                <div class="mb-2">
                                                    <label class="form-label">Nama Wisata</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="wisata Name" value="">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">tiket</label>
                                                    <input type="text" class="form-control" id="tiket" name="tiket" placeholder="Tiket" value="">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">waktu</label>
                                                    <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Waktu" value="">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">lokasi</label>
                                                    <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi" value="">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">Kategori</label>

                                                    <select class="form-select" aria-label="Default select example" name="kategori">
                                                        <?php foreach ($kategori as $k) : ?>
                                                            <option value="<?= $k ?>"><?= $k ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class=" mb-2">
                                                    <label class="form-label">Gambar</label>
                                                    <input type="file" class="form-control" id="image" name="image" placeholder="" value="">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">Keterangan</label>
                                                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" value="" placeholder=""></textarea>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- update Modal -->
                            <div class="modal fade" id="updateModal<?= $b['id'] ?>" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="updateModalLabel">Edit wisata</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <?= form_open_multipart('admin/updateWisata'); ?>
                                        <div class="modal-body">
                                            <div class="mb-2">
                                                <input hidden type="text" class="form-control" id="id" name="id" placeholder="Prices" value="<?= $b['id']; ?>">
                                                <label class="form-label">Nama Wisata</label>
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="wisata Name" value="<?= $b['nama_wisata']; ?>">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">tiket</label>
                                                <input type="text" class="form-control" id="tiket" name="tiket" placeholder="Prices" value="<?= $b['tiket']; ?>">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">waktu</label>
                                                <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Prices" value="<?= $b['waktu']; ?>">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">lokasi</label>
                                                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Prices" value="<?= $b['lokasi']; ?>">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">Kategori</label>
                                                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" value="<?= $b['kategori']; ?>">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">Gambar</label>
                                                <input type="file" class="form-control" id="image" name="image" placeholder="<?= $b['image']; ?>" value="<?= $b['image']; ?>">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $b['keterangan']; ?>" placeholder="<?= $b['keterangan']; ?>"></input>
                                            </div>

                                        </div>
                                        <div class=" modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- delete Modal -->
                            <div class="modal fade" id="deleteModal<?= $b['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="newMenuModalLabel">Hapus</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <a class="btn btn-zen" href="<?= base_url('admin/deleteWisata/' . $b['id']); ?>">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->