<div class="card">
    <div class="card-body">
        <h1 class="text-center">Agregar Categorias</h1>
        <h2 class="text-center">Areas</h2>
        <form action="">
            <div class="row">
                <div class="form-group col-md-10">
                    <label for="area">Area</label>
                    <input type="text" class='form-control' id='area'>
                </div>
                <div class="col-md-2">
                    <button type='button' class='btn btn-danger' id="btnGuardarAreas" style="margin-top: 25px;"><i class="fa fa-save"></i> Guardar</button>
                </div>
            </div>
        </form>
        <div style="width: 100%; height:300px; display:block;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Area</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tablaAreas">

            </tbody>
        </table>
        </div>
        <h2 class="text-center">Carreras</h2>
        <form action="">
            <div class="row">
                <div class="form-group col-md-5">
                    <label for="carrera">Carrera</label>
                    <input type="text" class="form-control" id="carrera">
                </div>
                <div class="form-group col-md-5">
                    <label for="codigo">Codigo</label>
                    <input type="text" class="form-control" id="codigo">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger" id="agregarCarrera" style="margin-top: 25px;"><i class="fa fa-save"></i> Guardar</button>
                </div>
            </div>
        </form>
        <div style="width: 100%; height:300px; display:block;">
            <table class="table table-striped" >
               <thead>
               <tr>
                    <th>#</th>
                    <th>Carrera</th>
                    <th>Codigo</th>
                    <th></th>
                </tr>
               </thead>
               <tbody id="tablaCarreras">

               </tbody>
            </table>
        </div>
        <h2 class="text-center">Temas Generales</h2>
        <form action="">
            <div class="row">
                <div class="form-group col-md-10">
                    <label for="tema">Tema</label>
                    <input type="text" class="form-control" id="tema">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger" id="agregarTema" style="margin-top: 25px;"><i class="fa fa-save"></i> Guardar</button>
                </div>
            </div>
        </form>
        <div style="width: 100%; height:300px; display:block;">
        <table class="table table-striped" >
               <thead>
               <tr>
                    <th>#</th>
                    <th>Tema</th>
                    <th></th>
                </tr>
               </thead>
               <tbody id="tablaTemas">

               </tbody>
            </table>
        </div>
        <h2 class="text-center">Ubicacion</h2>
        <form action="">
                <div class="row">
                    <div class="form-group col-md-5">
                    <label for="area">Area</label>
                    <select name="" id="area" class="form-control">
                        <option value="seleccion">Seleccione...</option>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="ubicacion">Ubicacion</label>
                    <input type="text" class="form-control" id="ubicacion">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger" id="agregarUbicacion" style="margin-top: 25px;"><i class="fa fa-save"></i> Guardar</button>
            </div>
                </div>
        </form>
        <div style="width: 100%; height:300px; display:block;">
        <table class="table table-striped" >
               <thead>
               <tr>
                    <th>#</th>
                    <th>Area</th>
                    <th>Ubicacion</th>
                </tr>
               </thead>
               <tbody id="tablaUbicacion">

               </tbody>
            </table>
        </div>
    </div>
</div>