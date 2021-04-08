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
                        <input type="text" name="palabras_claves"  class="form-control" value="{{$palabras_claves }}" data-role="tagsinput" required>
                       

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

                        @php
                        $redes= json_decode($element->redes_sociales,true);
                       
                      foreach ($redes as $key => $value) {
                       echo  '<div class="col-lg-12">
                              <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <div class="input-group-text text-white" style="background:'.$value["background"].'">
                            <i class="'.$value["icono"].'"></i>
                              </div>
                             </div>
                            <input type="text" class="form-control" value="'.$value["url"].'">
                            <div class="input-group-prepend">
                             <div class="input-group-text" style="cursor:pointer">
                             <span class="bg-danger px-2 rounded-circle">&times;</span>  
                             </div>
                            </div>
                           </div>
                          </div>';
                       
                       }
                      
                      @endphp

                       
                      </div>
                  </div>

                 
                </div>


              </div>

              
              <div class="col-lg-5">
                <div class="card">

                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12">

                        {{-- cambiar logo --}}

                        <div class="form-group my-2 text-center">
                          <div class="btn btn-default btn-file mb-3">

                            <i class="fas fa-paperclip"></i>Adjuntar imagen de logo
                            <input type="file" name="logo">
                            </div>
                            <img src="{{url('/')}}/{{$element->logo}}" class="img-fluid py-2 bg-secondary">
                            <p class="help-block small mt-3">Dimensiones 700px * 200px| Peso maximo 2MB|Formato JPG o PNG</p>
                         
                        </div>
                        <hr class="pb-2">

                          {{-- CAMBIAR PORTADA --}}

                          <div class="form-group my-2 text-center">
                            <div class="btn btn-default btn-file mb-3">
  
                              <i class="fas fa-paperclip"></i>Adjuntar imagen de portada
                              <input type="file" name="portada">
                              </div>
                              <img src="{{url('/')}}/{{$element->portada}}" class="img-fluid py-2 bg-secondary">
                              <p class="help-block small mt-3">Dimensiones 700px * 420px| Peso maximo 2MB|Formato JPG o PNG</p>
                           
                          </div>
                          <hr class="pb-2">

                          {{-- CAMBIAR ICONO --}}

                          <div class="form-group my-2 text-center">
                            <div class="btn btn-default btn-file mb-3">
  
                              <i class="fas fa-paperclip"></i>Adjuntar imagen de icono
                              <input type="file" name="icono">
                              </div>
                              <br>
                              <img src="{{url('/')}}/{{$element->icono}}" class="img-fluid py-2  rounded-circle">
                              <p class="help-block small mt-3">Dimensiones 150px * 150px| Peso maximo 2MB|Formato JPG o PNG</p>
                           
                          </div>
                      </div>


                    </div>
                    
                  </div>
                </div>


              </div>

              <div class="col-lg-6">
                  <div class="card">

                     <div class="card-body">
                       <label >Sobre Mi <span class="small">(Intro)</span></label>
                      <textarea class="form-control" name="sobre_mi"">{{ $element->sobre_mi}} }}</textarea>
                    </div>
                </div>
              </div>

              <div class="col-lg-6">
                 <div class="card">

                    <div class="card-body">
                      <label >Sobre Mi <span class="small">(Completo)</span></label>
                      <textarea class="form-control" name="sobre_mi_completo"">{{ $element->sobre_mi_completo}} }}</textarea>
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