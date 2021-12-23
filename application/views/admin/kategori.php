<div class="row">
    <div class="col-lg-6 ">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1; ?>
                <?php foreach ($kategori as $k) : ?>
                    <tr>
                        <th scope="row"><?= $a; ?></th>
                        <td><?= $k ?></td>
                        <td>
                            <a href="<?= base_url('admin/fillwisata/') . $k; ?>" class="badge badge-warning text-decoration-none">Telusuri</a>
                        </td>
                    </tr>
                    <?php $a++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>



</div>