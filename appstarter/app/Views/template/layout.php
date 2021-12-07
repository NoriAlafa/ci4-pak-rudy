<div class="container">
    <?= $this->include('template/header');?>
    <div class="isi">
        <?= $this->include('template/sidebar');?>
        <?= $this->renderSection('content');?>
    </div>
    <?= $this->include('template/footer');?>
</div>