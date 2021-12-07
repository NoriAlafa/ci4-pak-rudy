<?=$this->extend('template/layout');?>

<?=$this->section('content');?>
    <div class="content">      
        <h2 align="center">
            CRUD Employe
            <br>
            <a href="/tambahdata">Tambah Data</a>
        </h2>     
        <table border="1" align="center" class="yes-tbl">         
            <tr>             
                <th>ID</th> 
                <th>Nama</th>             
                <th>Alamat</th>             
                <th>Gender</th>             
                <th>Gaji</th>             
                <th>Aksi</th>         
            </tr> 
            <?php foreach($employe as $row): ?>         
                <tr class="tr-oke">             
                    <td><?= $row['id'];?></td>             
                    <td><?= $row['nama'];?></td>             
                    <td><?= $row['alamat'];?></td>             
                    <td><?= $row['gender'];?></td>             
                    <td><?= $row['gaji'];?></td>             
                    <td>edit | delete</td>         
                </tr> 
            <?php endforeach;?>    
        </table> 
    </div>
<?=$this->endSection();?>