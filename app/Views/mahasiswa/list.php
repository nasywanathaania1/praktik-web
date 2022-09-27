<?= $this->extend('template') ?>
<?= $this->Section('content') ?>
<div class="p-4">
    <a href="/create" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Npm</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">created_at</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $mhs['npm'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['alamat'] ?></td>
                    <td><?= $mhs['deskripsi'] ?></td>
                    <td><?= $mhs['created_at'] ?></td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning mr-3" href="/edit/<?= $mhs['id']; ?>">Edit</a>
                            <form action="/delete/<?= $mhs['id'] ?>" method="post">
                                <input name="_method" value="DELETE" type="hidden">
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php $no++;
            endforeach ?>

        </tbody>
    </table>
</div>
<?= $this->endSection() ?>