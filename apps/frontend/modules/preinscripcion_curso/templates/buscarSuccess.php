<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
    <div class="fg-toolbar ui-widget-header ui-corner-all">
        <h1>Formulario de Búsqueda</h1>
    </div>
    <br/>
    <div class="ui-corner-all ui-tabs-panel ui-widget-content ui-corner-bottom">
        <br/>
        <br/>
        <form method="POST" action="/preinscripcion/web/index.php/preinscripcion_curso/buscar" name="buscarForm" id="buscarForm" onSubmit="return enviar()" autocomplete="off">
            <center>
                <table>
                    <tr>
                        <td colspan="3"> &nbsp;
                            <?php if ($sf_user->hasFlash('error')): ?>
                                <div class="error" style="display: none; background-color: #ffe6e6">
                                    <span>
                                        <center>
                                            <font color="red"><?php echo $sf_user->getFlash('error') ?></font>
                                        </center>
                                    </span></div>
                            <?php endif ?>
                            <?php if ($sf_user->hasFlash('notice')): ?>
                                <div class="error" style="display: none; background-color: #79b7e7">
                                    <span>
                                        <center>
                                            <font color="blue"><?php echo $sf_user->getFlash('notice') ?></font>
                                        </center>
                                    </span></div>
                            <?php endif ?>
                        </td>
                    </tr>
                    <tr>
                        <td>TIPO DE IDENTIFICACIÓN:&nbsp;</td>
                        <td>
                            <select name="tipo_identificacion" id="tipo_identificacion"style="width:155px" required>
                                <option value="">Seleccione</option>
                                <option value="V">V</option>
                                <option value="E">E</option>
                                <option value="P">P</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="identificacion" id="identificacion" minlength="4" maxlength="12" pattern='[A-Z 0-9]{4,12}' style="width:155px" placeholder="Número de identificación" required>
                        </td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <input type="reset"  id="limpiar" name="limpiar" value="LIMPIAR" style="width:100px" class="fg-button ui-state-default fg-button-icon-left">
                        </td>
                        <td>
                            <input type="submit"  id="buscar" name="buscar" value="BUSCAR" style="width:100px" class="fg-button ui-state-default fg-button-icon-left">
                        </td>

                    </tr>
                </table>
            </center>
        </form>
        <br/>
        <br/>
    </div>
</div>
<br/>
<br/>
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/reset.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/css/main.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/jquery/redmond/jquery-ui.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/jroller.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/fg.menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/fg.buttons.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/ui.selectmenu.css" />
<script type="text/javascript" src="/preinscripcion/web/sfAdminThemejRollerPlugin/js/jquery.min.js"></script>
<script type="text/javascript" src="/preinscripcion/web/sfAdminThemejRollerPlugin/js/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="/preinscripcion/web/js/jquery1.6.js"></script>
<script type="text/javascript" src="/preinscripcion/web/js/date_es.js"></script>
<script type="text/javascript" src="/preinscripcion/web/sfAdminThemejRollerPlugin/js/fg.menu.js"></script>
<script type="text/javascript" src="/preinscripcion/web/sfAdminThemejRollerPlugin/js/jroller.js"></script>
<script type="text/javascript" src="/preinscripcion/web/sfAdminThemejRollerPlugin/js/ui.selectmenu.js"></script>
