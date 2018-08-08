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
    
</style>
<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
    <!--    <div class="fg-toolbar ui-widget-header ui-corner-all">
            <h1>Formulario de Búsqueda</h1>
        </div>-->
    <div class="modal-body"><p><br>

        <table class="customers">
            <tr><th>ESTADO</th><th>PROGRAMA NACIONAL DE FORMACIÓN (PNF)</th><th>TOTAL</th></tr> 
            <?php
            foreach ($pnf as $data):
                echo '<tr><td>'.$data['estado'] . '</td><td>'.$data['pnf'] . '</td><td>' . $data['total'].'</td></tr>';
            endforeach;
            ?>
        </table>
        </p>
    </div></div>