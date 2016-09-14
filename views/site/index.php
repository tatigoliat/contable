<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Bienvenido al Sistema contable!</h1>
        <p class="lead">Pinche la opción de su preferencia</p>
    </div>

    <div class="jumbotron">
      <h3>Zona de Configuración</h3>
    </div>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Naturalezas</h2>
                <p>Administre la naturaleza de la cuenta, considere los estandares universales</p>
                <p><a class="btn btn-lg btn-success" href="?r=naturaleza">Naturaleza</a></p>
            </div>

            <div class="col-lg-4">
                <h2>Empresas</h2>
                <p>Registre y consulte empresas afiliadas</p>
                <p><a class="btn btn-lg btn-success" href="?r=empresa">Empresas</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Plan de cuenta</h2>
                <p>Registre y consulte su plan de cuenta</p>
                <p><a class="btn btn-lg btn-success" href="?r=plancuenta">Plan de Cuentas</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Cuentas contables</h2>
                <p>Registre y consulte sus Cuentas contables</p>
                <p><a class="btn btn-lg btn-success" href="?r=cuentacontable">Plan de Cuentas</a></p>
            </div>
        </div>

    </div>

    <div class="jumbotron">
      <h3>Zona de Reportes</h3>
    </div>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Libro Diario</h2>
                <p><a class="btn btn-lg btn-success" href="?r=reportes/librodiario">IR</a></p>
            </div>
        </div>

    </div>




</div>
