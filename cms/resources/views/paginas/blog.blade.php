@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-height: 247px;">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>blog</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>

            <li class="breadcrumb-item active">blog</li>

          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">

      <div class="row">

        <div class="col-12">

          <!-- Default box -->
          <div class="card">

            <div class="card-header">
              <button class="btn btn-primary float-right">Guardar Cambios</button>
             
              </div>

            </div>

            <div class="card-body">

            @foreach ($blog as $element)
          
            @endforeach


            <div class="row">

              <div class="col-lg-7">
                <div class="card">

                  <div class="card-body">
                    {{-- dominio --}}
                    <div class="input-group mb-3">
                      <div class="input-group-append">
                        <span class="input-group-text">Dominio</span>

                      </div>
                      <input type="text" class="form-control" name="dominio" value="{{$element->dominio }}" required>


                    </div>

                     {{-- servidor --}}
                     <div class="input-group mb-3">
                      <div class="input-group-append">
                        <span class="input-group-text">Servidor</span>

                      </div>
                      <input type="text" class="form-control" name="servidor" value="{{$element->servidor }}" required>


                    </div>

                     {{-- Titulo --}}
                     <div class="input-group mb-3">
                      <div class="input-group-append">
                        <span class="input-group-text">Titulo</span>

                      </div>
                      <input type="text" class="form-control" name="titulo" value="{{$element->titulo }}" required>


                    </div>

                      {{-- Descripcion --}}
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text">Descripcion</span>
  
                        </div>
                        <textarea name="descripcion" class="form-control" row="5" required>{{$element->descripcion }}</textarea>
                        
  
  
                      </div>

                      <hr class="pb-2">
                      {{-- palabras claves --}}
                      <div class="form-group mb-3">
                        <label>Palabras Claves</label>
                        @php
                          $tags= json_decode($element->palabras_claves,true);
                         $palabras_claves="";
                         foreach ($tags as $key => $value) {
                           $palabras_claves.=$value.",";
                         }
                        
                        @endphp
                        <input type="text" name="palabras_claves"  class="form-control" value="{{$palabras_claves }}" required>
                       

                      </div>
                      {{-- redes sociales --}}
                      <label>Redes Sociales</label>
                      <div class="row">
                        <div class="col-5">

                          <div class="input-group mb-3">

                            <div class="input-group-append">
                              <span class="input-group-text">Icono</span>

                            </div>
                            <select class="form-control" id="icono_red">
                              <option value="fab fa-facebook-f,#1475E0">
                                Facebook
                              </option>

                              <option value="fab fa-instagram-f,#B18768">
                               Instagram
                              </option>
                            </select>
                          </div>
                        </div>
                        {{-- din 5 col --}}
                        <div class="col-5">
                          <div class="input-group mb-3">
                            <div class="input-group-append">
                              <span class="input-group-text">Url</span>
      
                            </div>
                            <input type="text" class="form-control" name="titulo" id="url_red">
      
      
                          </div>

                        </div>
                        {{-- fin 5 col --}}

                        <div class="col-2">
                          <button type="button" class="btn btn-primary w-100 agregarRed">Agregar</button>
                        </div>

                          {{-- fin 2 col --}}
                      </div>

                      <div class="row">

                        <div class="col-lg-6">
    
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <div class="input-group-text text-white" style="background:#1475E0">
    
                                <i class="fab fa-facebook-f"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" value="https:/www.facebook.com">
                            <div class="input-group-prepend">
                              <div class="input-group-text" style="cursor:pointer">
                              <span class="bg-danger px-2 rounded-circle">&times;</span>  
    
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>

                 
                </div>


              </div>

              
              <div class="col-lg-5">
                <div class="card">

                  <div class="card-body">
                    hola
                    
                  </div>
                </div>


              </div>

            </div>
            

           
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
              <button class="btn btn-primary float-right">Guardar Cambios</button>

            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>

      </div>

    </div>

  </section>
  <!-- /.content -->
</div>

@endsection