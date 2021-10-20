<div class="form-group row">
    <label for="nombre" class="col-sm-3 text-right control-label col-form-label requerido">Nombre</label>
    <div class="col-sm-5">
        <input id="nombre" name="nombre" value="{{old('nombre')}}" class="form-control" type="text" maxlength="50" required>
    </div>    
</div>
<div class="form-group row">
    <label for="url" class="col-sm-3 text-right control-label col-form-label requerido">Url</label>
    <div class="col-sm-5">
        <input id="url" name="url" value="{{old('url')}}" class="form-control" type="text" maxlength="50">
    </div>    
</div>
<div class="form-group row">
    <label for="icono" class="col-sm-3 text-right control-label col-form-label">Icono</label>
    <div class="col-sm-5">
        <input id="icono" name="icono" value="{{old('icono')}}" class="form-control" type="text" maxlength="50" >
    </div>  
    <div class="col-sm-1">
        <span id="mostrar-icono" class="{{old('icono')}}"></span>
    </div>  
</div>