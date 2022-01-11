<?= $this->extend('template/layout') ?>  
<?= $this->section('content'); ?> 
<div class="content">      
    <h2 align="center"><?= $judul; ?></h2>     
    <form action="/employe" method="post">     
        <?= csrf_field(); ?> 
        <table align="center">             
            <tr>                 
                <td>ID</td>                 
                <td><input type="text" name="id"></td>             
            </tr>             
            <tr>                 
                <td>Nama</td>                 
                <td><input type="text" name="nama"></td>            
            </tr>                    
        </table>     
    </form> 
</div>  
<?= $this->endSection(); ?>
