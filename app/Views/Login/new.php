<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('Login.title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class = "title"><?=lang('Login.title') ?></h1>

<div class="container is-fluid">

<?= form_open("/$locale/login/create") ?>

    <div class="field">
        <label class="label" for="email"><?=lang('Login.email') ?></label>
        <div class="control">
        <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>     
    </div>
    
    <div class="field">
        <label class="label" for="password"><?=lang('Login.password') ?></label>
        <div class="control">
        <input class="input" type="password" name="password">
        </div>
    </div>
    
    <div class="field">
        <label class="checkbox" for="remember_me">
            <input type="checkbox" id="remember_me" name="remember_me"
            <?php if(old('remember_me')): ?> checked <?php endif; ?> ><?=lang('Login.remember_me') ?>
        </label>
    </div>

    <div class="field is-grouped">
        <div class="control">
          <button class ="button is-success is-light is-focused"><?=lang('Login.log_in') ?></button>
        </div>

        <div class="control">
         <a href="<?= site_url("/$locale/password/forgot") ?>"><?=lang('Login.forgot_password') ?>?</a>
        </div>
    </div>
</form>
</div>
<?= $this->endSection() ?>