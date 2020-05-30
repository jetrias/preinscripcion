<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/reset.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/css/main.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/jquery/redmond/jquery-ui.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/jroller.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/fg.menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/fg.buttons.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/preinscripcion/web/sfAdminThemejRollerPlugin/css/ui.selectmenu.css" />
<script type="text/javascript" src="/preinscripcion/web/sfAdminThemejRollerPlugin/js/jquery.min.js"></script>
<script type="text/javascript" src="/preinscripcion/web/sfAdminThemejRollerPlugin/js/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="/preinscripcion/web/js/menu.js"></script>
<script type="text/javascript" src="/preinscripcion/web/sfAdminThemejRollerPlugin/js/fg.menu.js"></script>
<script type="text/javascript" src="/preinscripcion/web/sfAdminThemejRollerPlugin/js/jroller.js"></script>
<script type="text/javascript" src="/preinscripcion/web/sfAdminThemejRollerPlugin/js/ui.selectmenu.js"></script>
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
        <script type="text/javascript" src="/preinscripcion/web/sfDependentSelectPlugin/js/SelectDependiente.min.js"></script>
        <div class="sf_admin_form">
            
                <div class="ui-helper-clearfix"></div>
                <div id="sf_admin_form_tab_menu">
                    <div id="sf_fieldset_none" class="ui-corner-all">
                        <form target="_blank" method="get" action="/preinscripcion/web/backend.php/preinscripcion_curso/mostrarListado" enctype="multipart/form-data"><input type="hidden" name="sf_method" value="put" />
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
                             </form>
                        <form target="_blank" method="get" action="/preinscripcion/web/backend.php/preinscripcion_curso/mostrarListado2" enctype="multipart/form-data">
                            <table>
                             <tr><td><input class=" ui-state-default fg-button-icon-left"  type="submit" value="Generar Reporte Todos los Estados" id='enviar2' name='enviar2'><input type="hidden" name="sf_method" value="put" /></td></tr>
                            </table>
                        </form>
                    </div>
                    <br><br><br><br><br><br><br><br>
                </div>
           
        </div>
        <div id="sf_admin_footer">
        </div>
    </div>
</div>


