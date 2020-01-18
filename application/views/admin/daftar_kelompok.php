<div class="container bg-white my-3">
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-success">
            <?php echo $_SESSION['success']; ?>
        </div>
    <?php endif; ?>
    <h4>Kelompok <?php echo $no; ?></h4>
    <h6>Jumlah Mahasiswa: <?php echo $jml_mhs; ?></h6>
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">NIM</th>
            <th scope="col">NAMA</th>
            <th scope="col">JURUSAN</th>
            <th scope="col">Hapus</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data_kelompok as $kelompok) : ?>
            <tr>
                <th><?php echo $kelompok->nim; ?></th>
                <td><?php echo $kelompok->nama; ?></td>
                <td><?php echo $kelompok->jurusan; ?></td>
                <td>
                    <a href="" class="dropdown-item" data-toggle="modal" data-target="#deleteModal">Hapus</a>

                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title" id="deleteModalLabel">Hapus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            Are you sure wanna delete?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                            <a href="<?php
                            echo base_url('admin/hapus_data/'); 
                            echo $kelompok->nim;
                            ?>" class="btn btn-outline-danger">Hapus</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>
