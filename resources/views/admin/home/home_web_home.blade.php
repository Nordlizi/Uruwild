@extends('layouts.admin_layout.admin_layout')

@section('content')

<div class="admin-contnedor-navegacion-miga">
  {{-- home --}}
  <a href="{{route('get_admin_home')}}"><span class="icon-home"></span></a>

  {{-- separador --}}
  <span class="spam-separador">|</span> 

  {{-- lugar donde esta --}}
  <span>La Home de Mi Web</span>
</div>

<div class="contenedor-admin-entidad">

 {{-- titulo --}}
 <div class="admin-entidad-titulo">Mi Home</div>

  {{-- formulario --}}
  {!! Form::open(['route' => 'set_img_home',
                            'method'=> 'post',
                            'files' =>  true,
                            'id'    => 'form-admin-img-home-subir'
                          ])               !!}
   <div class="formulario-contenedor">

   <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Subir Imagen</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.home.formularios_partes.datos_imagenes')
        </div>
   </div>
   
      @foreach($Home->imageneshome as $Imagen)
        @include('admin.home.ImagenesLista')
      @endforeach
      
  </div>

   <div class="admin-boton-editar">
     Subir Imagen
   </div>
  {!! Form::close() !!}



  {{-- formulario --}}
  {!! Form::model($Home,['route' => 'set_datos_home_web',
                            'method'=> 'PATCH',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="formulario-contenedor">

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Textos 1</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.home.formularios_partes.datos_basicos_1')
        </div>
      </div>

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Textos 2</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.home.formularios_partes.datos_basicos_2')
        </div>
      </div>
      
   </div>
   <div class="admin-boton-editar">
     Editar
   </div>


  {!! Form::close() !!}





  
</div>
  
@stop