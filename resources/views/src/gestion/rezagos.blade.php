@extends('layouts.navbar')

@section('title', 'Reporte de Rezagos')

@section('content')
<div class="card" style="max-width: 500px; height: 700px;margin: auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; font-size: 30px"><strong>Reporte de Rezagos</strong></h2>
    
        <div class="form-group" style="display: flex; align-items: center; margin-top: 20px;margin-bottom: 20px;">
            <input type="checkbox" id="actualizarAdeudos" class="form-control" style="width: 25px; height: 20px;">
            <label for="actualizarAdeudos" style="margin-right: 10px;">Actualizar Adeudos de Predial:</label>
        </div>
    
    <div class="avance" style="margin-top: 20px;margin-bottom: 20px;">
        <h1 style="margin-bottom: 20px;"><strong>Avance</strong></h1>
        <div class="form-group" style="margin-bottom: 20px;">
            <div class="form-group">
                <label style="margin-bottom: 20px;"><strong>Tipo de Reporte</strong></label><br>
                <div style="margin-top: 20px">
                    <input type="radio" id="reporteDetalle" name="tipoReporte" value="detalle">
                    <label for="reporteDetalle">Reporte a Detalle</label>
                </div>
                <div>
                    <input type="radio" id="agrupadoLocalidad" name="tipoReporte" value="agrupado_localidad">
                    <label for="agrupadoLocalidad">Agrupado por Localidad</label>
                </div>
                <div>
                    <input type="radio" id="agrupadoColonia" name="tipoReporte" value="agrupado_colonia">
                    <label for="agrupadoColonia">Agrupado por Colonia</label>
                </div>
                <div>
                    <input type="radio" id="agrupadoZonaCatastral" name="tipoReporte" value="agrupado_zona_catastral">
                    <label for="agrupadoZonaCatastral">Agrupado por Zona Catastral</label>
                </div>
                <div>
                    <input type="radio" id="detalleColonia" name="tipoReporte" value="detalle_colonia">
                    <label for="detalleColonia">Detalle de Colonia</label>
                </div>
                <div>
                    <input type="radio" id="detalleZona" name="tipoReporte" value="detalle_zona">
                    <label for="detalleZona">Detalle de Zona Catastral</label>
                </div>
            </div>
            
        </div>
        
        <div class="form-group">
            <label for="colonia">Colonia:</label>
            <input type="text" id="colonia" class="form-control" placeholder="Ingrese la colonia">
        </div>
        
        <div class="form-group">
            <label for="zona">Zona:</label>
            <input type="text" id="zona" class="form-control" placeholder="Ingrese la zona">
        </div>
    </div>
    
    <div class="buttons" style="margin-top: 20px;  justify-content: space-between;">
        <button class="btn" style="background-color: green; color: white; padding: 10px 15px; border: none; border-radius: 5px;">Imprimir</button>
        <button class="btn" style="background-color: red; color: white; padding: 10px 15px; border: none; border-radius: 5px;">Exportar</button>
        <button class="btn" style="background-color: yellow; color: black; padding: 10px 15px; border: none; border-radius: 5px;">Terminar</button>
    </div>
</div>
@endsection
