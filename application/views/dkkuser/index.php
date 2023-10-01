<div class="col-lg-12"> 
        
<table class="table table-hover">   
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode kk</th>
            <th scope="col">ID KK</th>
            <th scope="col">Nama</th>
            <th scope="col">Status Perkawinan</th>
            <th scope="col">Status Hubungan Dalam Keluarga</th>
            <th scope="col">Kewarganegaraan</th>
            <th scope="col">Ayah</th>
            <th scope="col">Ibu</th>
            
        </tr>
    </thead>
    <tbody> <?php $a = 1;
            foreach ($dkk as $row) { ?> <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $row['kode_kk']; ?></td>    
                <td><?= $row['id_kk']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['status_perkawinan']; ?></td>
                <td><?= $row['status_hubungan_dalam_keluarga']; ?></td>
                <td><?= $row['kewarganegaraan']; ?></td>
                <td><?= $row['ayah']; ?></td>
                <td><?= $row['ibu']; ?></td>
                

            </tr> <?php } ?> </tbody>
    </table>
</div>
