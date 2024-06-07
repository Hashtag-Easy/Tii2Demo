<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Login';
?>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <form id="login-form" action="<?= Url::to(['site/login']) ?>" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" class="form-control" name="LoginForm[username]" required autofocus>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="LoginForm[password]" required>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="LoginForm[rememberMe]"> Remember Me
                </label>
            </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </form>
</div>
