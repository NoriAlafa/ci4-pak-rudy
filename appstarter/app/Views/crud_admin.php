<?=$this->extend('template/layout');?>

<?=$this->section('content');?>
    <div class="content">      
        <h2 align="center">
            <?=$judul;?>
            <br>
            <a href="/tambahdata/admin">Tambah Data</a>
        </h2>     
        <table border="1" align="center" class="yes-tbl">         
            <tr>             
                <th>Username</th> 
                <th>Password</th>                      
            </tr> 
            <?php foreach($admin as $row): ?>         
                <tr class="tr-oke">             
                    <td><?= $row['username'];?></td>             
                    <td><?= $row['password'];?></td>                         
                    <td><a href="/admin/<?=$row['id_admin'];?>/edit">edit</a> | <a href="/admin/<?= $row['id_admin'];?>/delete" onclick="return confirm('Apakah Yakin?')">delete</a></td>         
                </tr> 
            <?php endforeach;?>    
        </table> 
    </div>
<?=$this->endSection();?>