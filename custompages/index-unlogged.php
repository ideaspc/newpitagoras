<?php
/* For licensing terms, see /license.txt */
/**
 * Redirect script.
 *
 * @package chamilo.custompages
 */
require_once api_get_path(SYS_PATH).'main/inc/global.inc.php';
require_once __DIR__.'/language.php';

/**
 * Homemade micro-controller.
 */
if (isset($_GET['loginFailed'])) {
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case 'account_expired':
                $error_message = custompages_get_lang('AccountExpired');
                break;
            case 'account_inactive':
                $error_message = custompages_get_lang('AccountInactive');
                break;
            case 'user_password_incorrect':
                $error_message = custompages_get_lang('InvalidId');
                break;
            case 'access_url_inactive':
                $error_message = custompages_get_lang('AccountURLInactive');
                break;
            default:
                $error_message = custompages_get_lang('InvalidId');
        }
    } else {
        $error_message = get_lang('InvalidId');
    }
}

$rootWeb = api_get_path('WEB_PATH');

/**
 * HTML output.
 */
?>
<html>
<head>
	<title>AULA VIRTUAL I.E.P. NUEVO PITAGORAS</title>
    <meta name="description" content="CENTRO EDUCATIVO PARTICULAR - NUEVO PITAGORAS S.J.L. - AULA VIRTUAL">
   	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" type="text/css" href="<?php echo $rootWeb; ?>web/assets/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $rootWeb; ?>web/assets/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" type="text/css" href="custompages/stylos-ideas.css" />
   

    <script type="text/javascript" src="<?php echo $rootWeb; ?>web/assets/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $rootWeb; ?>web/assets/bootstrap/dist/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			if (top.location != location) {
                top.location.href = document.location.href;
            }

			// Handler pour la touche retour
			$('input').keyup(function(e) {
				if (e.keyCode == 13) {
					$('#login-form').submit();
				}
			});
		});
	</script>
</head>
<body>
	
    
	
    <div id="wrapper">
         <div id="header">
            
            <a href="/index.php"><img src="custompages/images/logo.png" width="380" height="109" alt="Logo" /></a>
        </div> <!-- #header -->

<div id="container">

    <h2>AULA VIRTUAL</h2>


        <div id="login-form-box" class="form-box">
            <div id="login-form-info" class="form-info">
            <?php if (isset($content['info']) && !empty($content['info'])) {
    echo $content['info'];
}
            ?>
            </div>
            <?php if (isset($error_message)) {
                echo '<div id="login-form-info" class="form-error">'.$error_message.'</div>';
            }
            ?>
            <form id="login-form" class="form" action="<?php echo api_get_path(WEB_PATH); ?>index.php" method="post">
                <div>
                    <label for="login">*<?php echo custompages_get_lang('User'); ?></label>
                    <input name="login" placeholder="(DNI)" type="text" /><br />
                    <label for="password">*<?php echo custompages_get_lang('Password'); ?></label>
                    <input name="password" type="password" /><br />
                </div>
            </form>
            
            

            <div id="login-form-submit">
      <button onclick="document.forms['login-form'].submit();">Entrar</button>
    </div> <!-- #form-submit -->
			
            <div id="links">

                <?php if (api_get_setting('allow_registration') === 'true') {
                ?>
                <a href="<?php echo api_get_path(WEB_CODE_PATH); ?>auth/inscription.php?language=<?php echo api_get_interface_language(); ?>">
                    <?php echo custompages_get_lang('Registration'); ?>
                </a><br />
                <?php
            } ?>

                <a href="<?php echo api_get_path(WEB_CODE_PATH); ?>auth/lostPassword.php?language=<?php echo api_get_interface_language(); ?>">
                    <?php echo custompages_get_lang('LostPassword'); ?>
                </a>
			</div>

         		</div> <!-- #form -->




                <div>
        <ul class="button_orange">
        <li><a title="Quienes Somos" target="_self" href="">Quienes Somos</a></li>
              

        
        <li><a class="icon" title="facebook" href="" target="_blank"><img src="custompages/images/facebook.png" /></a></li>
        <li><a class="icon" title="whatsap" href="" target="_blank"><img src="custompages/images/whatsap.png" /></a></li>

    </ul>
    </div>

    <div id="nuestros_clientes">
        <h3>Dirección: Jr. Las turmalinas N° 518, San Juan de Lurigancho - Lima,    Teléfono: 01-3892527</h3>
       
            
    </div>

</div> <!-- #container -->


		<div id="footer">
			            <p>Desarrollado por: <a href="https://ideas-pc.com/" alt="">Ideas Pc</a> © 2020</p>
		</div> <!-- #footer -->
	</div> <!-- #wrapper -->
</body>
</html>
