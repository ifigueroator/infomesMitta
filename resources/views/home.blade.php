@extends('layouts.app')

@section('content')


<style type="text/css">
    
#titulo{

    color: white;
    background-color: black;
    font-size: 120%
}

</style>



<div class="container">
    <div class="row justify-content-center">



<div class="container">
  <div class="row">
    <div class="col-sm">

    <div class="card">
  <div class="card-header" id="titulo">
    Ingreso de devoluciones
  </div>
  <div class="card-body">
   
    <li>Devoluciones x Termino de contrato</li>
     
    <li>Devoluciones anticipadas</li>
    <br>
    <a href="{{route('devoluciones')}}" class="btn btn-primary">Ir</a>
  </div>
</div>
    </div>



    <div class="col-sm">



     <div class="card">
  <div class="card-header" id="titulo">
   Entrega de unidades nuevas
  </div>
  <div class="card-body">
    <li>Registro de unidades nuevas</li>
    
     <li>Registro de unidades entregadas</li>
     <br>
    <a href="{{route('entregas')}}" class="btn btn-primary">Ir</a>
  </div>
</div>


    </div>




    <div class="col-sm">




    <div class="card">
  <div class="card-header" id="titulo">
    Cotizaciones
  </div>
  <div class="card-body">
   <li>Creacion de Cotizaciones</li>
   <li>Modificacion de Cotizaciones</li>
   <br>
   <br>

  <!--  <a href="#" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>







    </div>
  </div>
</div>


       
        </div>
    </div>
</div>
@endsection
