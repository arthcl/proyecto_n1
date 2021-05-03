
    <div class="card mt-3">
        <div class="card-header">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Ingresar Actividad</span>
            </h4>
        </div>
        <div class="card-body">
            <form class="form-inline" action="{{ route('actividad.store') }}" method="POST" accept-charset="utf-8">
                @csrf
                <input type="hidden" value="1" name="vigencia">

                    <div class="col-5 mb-3">
                      <label for="state">Actividad</label>
                      <select class="custom-select w-100" name="descripcion" required="">
                        <option value="0">Seleccionar...</option>
                        <option value="Descripcion y/o requerimiento">Descripcion y/o requerimiento</option>
                        <option value="Descripcion trabajos realizados">Descripcion trabajos realizados</option>
                        <option value="Observaciones y/o diagnostico">Observaciones y/o diagnostico</option>
                        <option value="Repuestos">Repuestos</option>
                        <option value="Fluidos">Fluidos</option>
                        <option value="Insumos">Insumos</option>
                      </select>
                    </div>
                
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Unidad</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Total</th>
                            <th scope="col">+/-</th>
                            </tr>
                        </thead>
                        <tbody id="tabla_dinamica1" name="tabla_dinamica1">
                            <tr>
                            <td><input class="form-control" type="text" name="item[]" id="item"></td>
                            <td><input class="form-control" type="text" name="unidad[]" id="unidad"></td>
                            <td><input class="form-control" type="text" name="cantidad[]" id="cantidad"></td>
                            <td><input class="form-control" type="text" name="valor[]" id="valor"></td>
                            <td><input class="form-control" type="text" name="total[]" id="total" sr-only></td>
                            <td>
                            <button type="button" class="form-control btn btn-success" id="clonar1">
                                <i class="fas fa-plus"></i>
                            </button>
                            </td>
                            </tr>
                        </tbody>
                    </table>
            	</div>	
                <div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit">
                        <i class="far fa-save px-2"></i>
                        Ingresar
                    </button>
                </div>
            </form>
        </div>
    </div>


    <script>

        // Categorias de OT SCRIPT
            $(document).ready(function(){
                var i = 1;
                $('#clonar1').click(function(){
                    i++;
                    $('#tabla_dinamica1').append(
                        '<tr id="row'+i+'">'
                        +'<td>'
                        +'<input class="form-control" type="text" name="item[]" id="item">'
                        +'</td>'
                        +'<td>'
                        +'<input class="form-control" type="text" name="unidad[]" id="unidad">'
                        +'</td>'
                        +'<td>'
                        +'<input class="form-control" type="text" name="cantidad[]" id="cantidad">'
                        +'</td>'
                        +'<td>'
                        +'<input class="form-control" type="text" name="valor[]" id="valor">'
                        +'</td>'
                        +'<td>'
                        +'<input class="form-control" type="text" name="total[]" id="total" sr-only>'
                        +'</td>'
                        +'<td>'
                        +'<button type="button" class="form-control btn btn-danger btn_eliminar1" name="eliminar1"  id="'+i+'">'
                        +'<i class="fas fa-minus btn_eliminar1">'
                        +'</i>'
                        +'</button>'
                        +'</td>'
                        +'</tr>')
                });
                $(document).on('click', '.btn_eliminar1', function(){
                    var button_id = $(this).attr("id");
                    $('#row'+button_id+'').remove();
                })
            });
        
        </script>

