<?=$this->extend('template/layout');?>
<?=$this->section('content');?>
    <form action="/hitung/proses" method="post">
        <?= csrf_field(); ?>
        <p>
            <input type="text" name="angka1" value="<?= $angka1; ?>">
            <select name="operator">
                <option value="*">*</option>
                <option value="+">+</option>
                <option value="/">/</option>
                <option value="-">-</option>
            </select>
            <input type="text" name="angka2" value="<?= $angka2; ?>">=
            <?= $hasil; ?>
        </p>
        <p><button type="submit">HITUNG</button></p>
    </form>
<?=$this->endSection();?>