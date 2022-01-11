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
                        <td><input type="email" name="username" value="<?= $row['username'];?>" ></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="<?= $row['password'];?>"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                        <button type="submit">Update</button>
                        <a href="/admin/crud">
                        <button type="button">Cancel</button>
                        </a>
                        </td>
                    </tr>
                </table>
            <?php endforeach; ?>
        </form>
    </div>
<?=$this->endSection()?>