<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('Profile.title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Profile.title') ?></h1>

<?php if($user->profile_image): ?>

    <img src="<?= site_url('/profile/image') ?>" width="200" height="200" alt="<?=lang('Profile.profile_image') ?>">
    <div>
    <a class ="button is-danger is-light is-focused" href="<?= site_url("/profileimage/delete") ?>"><?=lang('Profile.delete_profile_image') ?></a>
    </div>
<?php else: ?>

<img src="<?= site_url('images/blank.jpg') ?>" width="200" height="200" alt="profile image">

<?php endif; ?>

<div class="content">

<dl>
    <dt class="has-text-weight-bold"><?=lang('Profile.name') ?></dt>
    <dd> <?= esc($user->name) ?> </dd>

    <dt  class="has-text-weight-bold"><?=lang('Profile.email') ?></dt>
    <dd> <?= esc($user->email) ?> </dd>
</dl>
</div>

<div class="field mt-4">
    <a class ="button is-link is-light is-focused" href="<?= site_url("/profile/edit") ?>"><?=lang('Profile.edit') ?></a>
</div>

<div class="field mt-4">
    <a class ="button is-link is-light is-focused" href="<?= site_url("/profile/editpassword") ?>"><?=lang('Profile.change_password') ?></a>
</div>

<div class="field mt-4">
    <a class ="button is-link is-light is-focused" href="<?= site_url("/profileimage/edit") ?>"><?=lang('Profile.change_profile_image') ?></a>
</div>





<?= $this->endSection() ?>