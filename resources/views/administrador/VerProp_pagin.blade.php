<table class="table zero-configuration">
  <thead>
      <tr>
        <th>Propiedades</th>
      </tr>
  </thead>
  <tbody id="sortable">
    @foreach ($propiedades as $item)
    <tr>
        <td> 
            <div class="row ">
                    <div class="col-md-3" >
                    <img class="card-img-top border" style="width:200px; height:150px;"  src="{{asset(Storage::url($item->PROPIEDADES_IMAGEN))}}" alt="">
                    </div>
                    <div class="col-md-6">
                      <h4><p>{{$item->PROPIEDADES_PRECIO.' MXN'}}</p></h4>  
                      <h4><p>{{$item->PROPIEDADES_TIPO.' en '.$item->PROPIEDADES_OPERACION}}</p></h4>
                      <p>{{$item->ESTADOS_NOMBRE.', '.$item->MUNICIPIOS_NOMBRE}}</p>
                      <p>{{$item->PROPIEDADES_COLONIA}}</p>
                      <p>{{$item->PROPIEDADES_ZONA}}</p> 

                    </div>
                    <div class="row">
                        {{-- <div class=" col-md-3"> --}}
                          <form action="Editar" method="get">
                            <input type="hidden" name="id_propiedad" value="<?=base64_encode($item->PROPIEDADES_ID)?>">
                            <button  type="submit" class="btn bg-default btn-flat nav-link" data-toggle="tooltip" data-placement="top" title="Editar" ><i class="fas fa-pencil-alt"> </i></button>

                          </form>
                        {{-- </div> --}}
                        
                    
                        {{-- <div class=" col-md-3"> --}}
                          <form action="VerImagenes" method="get">
                          <input type="hidden" name="id_propiedade" value="<?=base64_encode($item->PROPIEDADES_ID)?>">
                          <button  type="submit" class="btn bg-default btn-flat nav-link" data-toggle="tooltip" data-placement="top" title="Ver imagenes" ><i class="fas fa-image"> </i></button>
                          </form>
                        {{-- </div> --}}

                        {{-- <div class=" col-md-3"> --}}
                          <form>
                          <a href="AgregarImagenes/<?=base64_encode($item->PROPIEDADES_ID)?>" data-id="" data-toggle="tooltip" data-placement="top" title="Agregar imagenes" class="btn bg-default btn-flat  "> 
                            <i  class="fas fa-plus-circle"></i>
                          </a>
                        </form>
                        {{-- </div> --}}
                        {{-- <div class=" col-md-3"> --}}
                          <form>
                              {{-- <a class="nav-link" href="Eliminar_propiedade/{{base64_encode($item->PROPIEDADES_ID)}}" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="ficon bx bx-edit"></i></a> --}}

                              <a href="Eliminar_propiedade/{{base64_encode($item->PROPIEDADES_ID)}}"  data-toggle="tooltip" data-placement="top" title="Eliminar" class="nav-link btn bg-default btn-flat  " >
                                <i  class="fa fa-trash-o"></i>
                              </a>
                            </form>
                        {{-- </div> --}}
                      

                    </div>
                
            </div>
               
        </td>
    </tr>

    
@endforeach
    
   
  </tbody>
  
</table>
<div align="center">
{{$propiedades->links()}}
</div>