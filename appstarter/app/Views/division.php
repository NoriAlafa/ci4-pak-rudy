<?=$this->extend('template/layout');?>

<?=$this->section('content');?>
    <div class="content">      
        <h2 align="center">
            CRUD Division
            <br>
            <a href="/tambahdata/division">Tambah Data</a>
        </h2>     
        <table border="1" align="center" class="yes-tbl">         
            <tr>
                <th>ID</th>             
                <th>Division</th> 
                <th>Aktif</th>             
                <th>Created at</th>             
                <th>Updated at</th>             
                <th>Aksi</th>             
                        
            </tr> 
            <?php foreach($division as $row): ?>         
                <tr class="tr-oke">             
                    <td><?= $row['div_id'];?></td>             
                    <td><?= $row['division'];?></td>             
                    <td><?= $row['is_aktif'];?></td>             
                    <td><?= $row['created_at'];?></td>             
                    <td><?= $row['updated_at'];?></td>                          
                    <td><a href="/division/<?=$row['div_id'];?>/edit">edit</a> | <a href="/division/<?= $row['div_id'];?>/delete" onclick="return confirm('Apakah Yakin?')">delete</a></td>         
                </tr> 
            <?php endforeach;?>    
        </table> 
    </div>
<?=$this->endSection();?>