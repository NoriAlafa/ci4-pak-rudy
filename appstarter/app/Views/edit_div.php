<?=$this->extend('template/layout')?>

<?=$this->section('content')?>
    <div class="content">
        <h2 align="center"><?=$judul?></h2>
        <form method="post" action="/division/update">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="put">
            <?php foreach($division as $row):?>
                <table align="center">
                    <tr>
                        <td>ID</td>
                        <td><input type="text" name="div_id" value="<?= $row['div_id'];?>" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td>Division</td>
                        <td><input type="text" name="division" value="<?= $row['division'];?>" ></td>
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
                        <button type="submit">Update</button>
                        <a href="/division">
                        <button type="button">Cancel</button>
                        </a>
                        </td>
                    </tr>
                </table>
            <?php endforeach; ?>
        </form>
    </div>
<?=$this->endSection()?>