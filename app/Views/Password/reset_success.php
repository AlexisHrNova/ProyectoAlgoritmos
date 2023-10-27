<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('Password.title_reset') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Password.title_reset') ?></h1>

<p class="has-text-weight-bold"><?=lang('Password.reset_success') ?></p>

<div class="control mt-4">
<p><a class="button is-success is-light is-focused " href="<?= site_url("/$locale/login") ?>"><?=lang('Login.title') ?></a></p>
</div>
<?= $this->endSection() ?>