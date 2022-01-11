<?=$this->extend('template/layout')?>

<?=$this->section('content')?>
    <div class="content">
        <h2 align="center"><?=$judul?></h2>
        <form method="post" action="/admin/update">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="put">
            <?php foreach($admin as $row):?>
                <table align="center">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="id" value="<?= $row['username'];?>" >
                        </td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="nama" value="<?= $row['password'];?>"></td>
                    </tr>
                </table>
            <?php endforeach; ?>
        </form>
    </div>
<?=$this->endSection()?>