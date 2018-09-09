<link rel="stylesheet" type="text/css" media="screen" href="/pre/sfAdminThemejRollerPlugin/css/reset.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/pre/css/main.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/pre/sfAdminThemejRollerPlugin/css/jquery/redmond/jquery-ui.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/pre/sfAdminThemejRollerPlugin/css/jroller.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/pre/sfAdminThemejRollerPlugin/css/fg.menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/pre/sfAdminThemejRollerPlugin/css/fg.buttons.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/pre/sfAdminThemejRollerPlugin/css/ui.selectmenu.css" />
<script type="text/javascript" src="/pre/sfAdminThemejRollerPlugin/js/jquery.min.js"></script>
<script type="text/javascript" src="/pre/sfAdminThemejRollerPlugin/js/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="/pre/js/menu.js"></script>
<script type="text/javascript" src="/pre/sfAdminThemejRollerPlugin/js/fg.menu.js"></script>
<script type="text/javascript" src="/pre/sfAdminThemejRollerPlugin/js/jroller.js"></script>
<script type="text/javascript" src="/pre/sfAdminThemejRollerPlugin/js/ui.selectmenu.js"></script>
<br><br>
<style>
    .customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 50%;
    }
    .customers td, .customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }
    .customers tr:nth-child(even){background-color: #f2f2f2;}
    .customers tr:hover {background-color: #ddd;}
    .customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #6EA6D1;
        color: white;
        font-weight: bold;
    }
    #button {

        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
</style>
<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
    <div class="fg-toolbar ui-widget-header ui-corner-all">
        <h1>Seleccione el estado</h1>
    </div>
    <div class="sf_admin_flashes ui-widget">
    </div>
    <div id="sf_admin_header">
    </div>
    <div id="sf_admin_content">
        <script type="text/javascript" src="/pre/sfDependentSelectPlugin/js/SelectDependiente.min.js"></script>
        <div class="sf_admin_form">
            <form target="_blank" method="get" action="/pre/backend.php/preinscripcion_curso/mostrarListado" enctype="multipart/form-data"><input type="hidden" name="sf_method" value="put" />
                <div class="ui-helper-clearfix"></div>
                <div id="sf_admin_form_tab_menu">
                    <div id="sf_fieldset_none" class="ui-corner-all">
                        <table><tr><td>
                                    <select name="estado" id="estado">
                                        <?php
                                        foreach ($estado as $data):
                                            echo "<option value='" . $data['id'] . "' selected>" . $data['descripcion'] . "</option>";
                                        endforeach;
                                        ?>
                                    </select></td></tr>
                            <tr><td>
                                    <br><br><br><br>
                                    <input class=" ui-state-default fg-button-icon-left"  type="submit" value="Generar Reporte" id='enviar' name='enviar'>
                                </td></tr></table>
                    </div>
                    <br><br><br><br><br><br><br><br>
                </div>
            </form>
        </div>
        <div id="sf_admin_footer">
        </div>
    </div>
</div>
