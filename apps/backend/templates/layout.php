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
        <div id="navigator">
	<ul id="nav" class="testnav">
		<li><a class="clk fg-button ui-state-default fg-button-icon-left" href="/pre/backend.php/preinscripcion_curso"><span class="ui-icon  ui-icon-home ui-corner-all"></span>Inicio</a></li>
		<li><a class="clk fg-button ui-state-default fg-button-icon-left" href="/pre/backend.php/preinscripcion_curso/generalPnf"><span class="ui-icon ui-icon-contact ui-corner-all"></span>Inscritos por PNF</a></li>
                <li><a class="clk fg-button ui-state-default fg-button-icon-left" href="/pre/backend.php/preinscripcion_curso/pnfEstado"><span class="ui-icon ui-icon-contact ui-corner-all"></span>Inscritos por Estado y PNF</a></li>
		<li><a class="clk fg-button ui-state-default fg-button-icon-left" href="/pre/index.php/preinscripcion_curso/salir"><span class="ui-icon ui-icon-circle-arrow-e ui-corner-all"></span>Salir</a></li>
	</ul>
</div>
    <?php echo $sf_content ?>
  </body>
</html>
