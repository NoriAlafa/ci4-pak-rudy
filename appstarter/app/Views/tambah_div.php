<?= $this->extend('template/layout') ?>  
<?= $this->section('content'); ?> 
<div class="content">      
    <h2 align="center">Tambah Data Division</h2>     
    <form action="/division/save" method="post">     
        <?= csrf_field(); ?> 
        <table align="center">             
            <tr>                 
                <td>Division</td>                 
                <td><input type="text" name="division" ></td>             
            </tr>             
            <tr>                 
                <td>is_aktif</td>                 
                <td>                     
                    <select name="is_aktif" >                         
                        <option value="yes">yes</option>                         
                        <option value="no">no</option>                     
                    </select>                 
                </td>             
            </tr>    
            <tr>                 
                <td></td>                 
                <td>                     
                    <button type="submit">Save</button>                     
                    <a href="/division">                         
                    <button type="button">Cancel</button>                     
                    </a>                 
                </td>             
            </tr>                  
        </table>     
    </form> 
</div>  
<?= $this->endSection(); ?>
