<?= $this->extend('aut/layout')?>

<?=$this->section('contenido');?>   
    
    <div class="layout-login-centered-boxed__form card">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
            <a href="index.html"
                class="navbar-brand flex-column mb-2 align-items-center mr-0"
                style="min-width: 0">

                <span class="avatar avatar-sm navbar-brand-icon mr-0">

                    <span class="avatar-title rounded bg-primary"><img src="<?=base_url('images/illustration/student/128/white.svg')?>"
                                alt="logo"
                                class="img-fluid" /></span>

                </span>

                SAE
            </a>
            <p class="m-0">Inicie sesión para acceder a su cuenta SAE </p>
        </div>

        <!--<div class="alert alert-soft-success d-flex"
                role="alert">
            <i class="material-icons mr-12pt">check_circle</i>
            <div class="text-body">An email with password reset instructions has been sent to your email address, if it exists on our system.</div>
        </div>-->

        <form action="index.html"
                novalidate>
            <div class="form-group">
                <label class="text-label"
                        for="user">Usuario:</label>
                <div class="input-group input-group-merge">
                    <input id="user"
                            type="text"
                            required=""
                            class="form-control form-control-prepended"
                            placeholder="000000">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-user"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="text-label"
                        for="password_2">Contraseña:</label>
                <div class="input-group input-group-merge">
                    <input id="password_2"
                            type="password"
                            required=""
                            class="form-control form-control-prepended"
                            placeholder="Enter your password">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-key"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary"
                        type="submit">Login</button>
            </div>
            <div class="form-group text-center">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox"
                            class="custom-control-input"
                            checked=""
                            id="remember">
                    <label class="custom-control-label"
                            for="remember">Recordarme</label>
                </div>
            </div>
            <div class="form-group text-center">
                <a href="<?=base_url('recuperar_pass')?>">Has olvidado tu contraseña?</a> <br>
              <!--  ¿No tienes una cuenta?  <a class="text-body text-underline"
                    href="signup.html">Regístrate!</a>-->
            </div>
        </form>
    </div>

<?= $this->endSection()?>