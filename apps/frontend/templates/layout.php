<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
       <?php echo image_tag('logo_inass_gimp.png') ?>
       <?php if($sf_user->getGuardUser()):?>
          <p style="display: inline; color: #FFFFFF; font-size: 10pt; font-family: verdana; float: right; margin: 2px 40px 1px 1px;">Bienvenido(a) | <a href="<?php echo url_for('@sf_guard_signout')?>" class="link-blanco">Salir</a></p>
       <p style="display: inline; color: #FFFFFF; font-size: 8pt; font-family: verdana; float: right; margin: 25px 1px 1px 1px;"> <?php echo $sf_user->getGuardUser()->getFirstName() ?> <?php echo $sf_user->getGuardUser()->getLastName() ?> | <?php echo $sf_user->getGuardUser()->getLastLogin() ?></p>
       <?php endif;?>
       </div>
<div id="menu_nav">
    <ul id="HDropdown-orange-classic">
    <li><a href="#" title="Principal">Principal</a>
    <ul>
    <li><a href="<?php echo url_for('homepage')?>">Pagina Principal</a></li>
    <li><a href="#">Cambiar Password</a></li>
    <li><a href="<?php echo url_for('@sf_guard_signout')?>">Salir</a></li>
    </ul>
    </li>
    <li><a href="#" title="Administración de Usuarios">Usuarios</a>
    <ul>
    <li><a href="<?php echo sfProjectConfiguration::getActive()->generateBackendUrl('usuario') ?>">Administrar Usuarios</a></li>
    <li><a href="<?php echo sfProjectConfiguration::getActive()->generateBackendUrl('grupo') ?>">Administrar Grupos</a></li>
    <li><a href="<?php echo sfProjectConfiguration::getActive()->generateBackendUrl('permiso') ?>">Administrar Permisos</a></li>
    </ul>
    </li>
    <li><a href="#" title="Administración de Centros Residenciales">Centros Residenciales</a>
    <ul>
    <li><a href="<?php echo url_for('residenciales/new')?>">Agregar</a></li>
    <li><a href="<?php echo url_for('residenciales/index')?>">Ver</a></li>
    <li><a href="<?php echo url_for('residenciales/ResIndex')?>">Estadística</a></li>
    </ul>
    </li>
    <li><a href="#" title="Administracion de Centros Ambulatorios">Centros Ambulatorios</a>
    <ul>
    <li><a href="<?php echo url_for('ambulatorios/new')?>">Agregar</a></li>
    <li><a href="<?php echo url_for('ambulatorios/index')?>">Ver</a></li>
    <li><a href="<?php echo url_for('ambulatorios/AmbIndex')?>">Estadística</a></li>
    </ul>
    </li>
    <li><a href="#" title="Administracion de Gerogranjas">Gerogranjas</a>
    <ul>
    <li><a href="<?php echo url_for('gerogranjas/new') ?>">Agregar</a></li>
    <li><a href="<?php echo url_for('gerogranjas/index')?>">Ver</a></li>
    <li><a href="<?php echo url_for('gerogranjas/GerIndex')?>">Estadística</a></li>
    </ul>
    </li>
    <li><a href="#" title="Administracion de Aldeas de Encuentro">Aldeas de Encuentro</a>
    <ul>
    <li><a href="<?php echo url_for('aldeas/new')?>">Agregar</a></li>
    <li><a href="<?php echo url_for('aldeas/index')?>">Ver</a></li>
    <li><a href="<?php echo url_for('aldeas/AldIndex')?>">Estadística</a></li>
    </ul>
    </li>
    <li><a href="#" title="Administracion de Refugios">Refugios</a>
    <ul>
    <li><a href="<?php echo url_for('refugios/new')?>">Agregar</a></li>
    <li><a href="<?php echo url_for('refugios/index')?>">Ver</a></li>
    <li><a href="<?php echo url_for('refugios/RefIndex')?>">Estadística</a></li>
    </ul>
    </li>
    <li><a href="#" title="Administracion de Beneficiarios">Beneficiarios</a>
    <ul>
    <li><a href="<?php echo url_for('beneficiarios/new')?>">Agregar</a></li>
    <li><a href="<?php echo url_for('beneficiarios/index')?>">Ver</a></li>
    </ul>
    </li>
    </ul>
        </div>

    <?php echo $sf_content ?>
    <div class="boton_fin">
    <a href="<?php echo url_for('@sf_guard_signout')?>" class="link-blanco">Salir</a>
     </div>
  <div id="footer">Todos los derechos reservados. &copy; 2011 INASS</div>
    </div>
  </body>
</html>
