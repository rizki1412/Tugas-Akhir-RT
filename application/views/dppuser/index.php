<div class="col-lg-12"> 
        
<table class="table table-hover">   
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">KD Pernikahan</th>
            <th scope="col">ID Pernikahan</th>
            <th scope="col">Nama Calon</th>
            <th scope="col">Tempat Lahir Calon</th>
            <th scope="col">Tanggal Lahir Calon</th>
            <th scope="col">Nik</th>
            <th scope="col">Agama Calon</th>
            <th scope="col">Jenis Kelamin Calon</th>
            <th scope="col">Status Perkawinan Calon</th>
            <th scope="col">Alamat Calon</th>
            
        </tr>
    </thead>
    <tbody> <?php $a = 1;
            foreach ($dpp as $row) { ?> <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $row['kd_pernikahan']; ?></td>
                <td><?= $row['id_pernikahan']; ?></td>
                <td><?= $row['nama_calon']; ?></td>
                <td><?= $row['tempat_lahir_calon']; ?></td>
                <td><?= $row['tanggal_lahir_calon']; ?></td>
                <td><?= $row['nik']; ?></td>
                <td><?= $row['agama_calon']; ?></td>
                <td><?= $row['jenis_kelamin_calon']; ?></td>
                <td><?= $row['status_perkawinan_calon']; ?></td>
                <td><?= $row['alamat_calon']; ?></td>
                

            </tr> <?php } ?> </tbody>
    </table>
</div>
