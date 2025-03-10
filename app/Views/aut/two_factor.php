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

        <img src="<?= $qrCodeUrl ?>" alt="Escanea este código QR con Google Authenticator">
        <p>Después de escanear, introduce el código generado para verificar.</p>
        <form method="post" action="<?= site_url('verify2FA') ?>">
            <input type="text" name="otp" placeholder="Código de 6 dígitos" required>
            <button type="submit">Verificar</button>
        </form>

      
    </div>

<?= $this->endSection()?>