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
    
</style>
<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
    <!--    <div class="fg-toolbar ui-widget-header ui-corner-all">
            <h1>Formulario de Búsqueda</h1>
        </div>-->
    <div class="modal-body"><p><br>

        <table class="customers">
            <tr><th>PROGRAMA NACIONAL DE FORMACIÓN (PNF)</th><th>Total</th></tr> 
            <?php
            $total=0;
            foreach ($pnf as $data):
                echo '<tr><td>'.$data['descripcion'] . '</td><td>' . $data['total'].'</td></tr>';
            $total=$total+$data['total'];
            endforeach;
            ?>
            <tr><td><strong>TOTAL</strong></td><td><strong><?php echo $total;?></strong></td></tr>
        </table>
        </p>
    </div></div>