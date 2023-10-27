<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('Profileimage.delete_title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Profileimage.delete_title') ?></h1>

<p><?=lang('Profileimage.are_you_sure') ?></p>

<?= form_open("/profileimage/delete") ?>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-success is-light is-focused "><?=lang('Profileimage.yes') ?></button>
         </div>
        <div class="control">
            <a class="button is-warning is-light is-focused " href="<?= site_url("/profile/show") ?>"><?=lang('Profileimage.cancel') ?></a>
        </div>
    </div>
    
</form>

<?= $this->endSection() ?>