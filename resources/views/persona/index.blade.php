@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

    @include('partial.msg')
    @include('partial.validacion')

        <div class="col-6">

            <div class="card">


                <div class="card-header">Actualizar datos</div>

                <div class="card-body">


                    <form action="{{route('persona.store')}}" method="post">
                    @csrf
                    <div class="form pb-2">
                        <small class="importante" >* Selecciones su numero de cedula </small>
                            <select name="hogar" id="hogar" class="form-control" autofocus require>
                                <option>Seleccionar</option>
                                @foreach($sele as $item)
                                <option value="{{$item->hogar_final}}">{{$item->identificacion}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form pb-2">
                        <small class="importante" >* Confirme su numero de cedula </small>
                            <input type="number" class="form-control " id="cedula" name="cedula" autofocus required placeholder="Numero de cedula">
                        </div>

                        <div class="form pb-2">
                        <small class="importante" >* </small>
                            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" autocomplete="name" autofocus required placeholder="Primer nombre">
                        </div>
                        <div class="form pb-2">
                            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" autocomplete="name" autofocus required placeholder="Segundo nombre">
                        </div>

                        <div class="form pb-2">
                        <small class="importante" >* </small>
                            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" autocomplete="additional-name" autofocus required placeholder="Primer apellido">
                        </div>
                        <div class="form pb-2">
                            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" autocomplete="name" autofocus required placeholder="Segundo apellido">
                        </div>

                        <div class="form pb-2">
                        <small class="importante" >* Obligatorio </small>
                            <input type="text" class="form-control" id="telefono" name="telefono" autocomplete="tel" autofocus required placeholder="Numero de celular">
                        </div>

                        <div class="form pb-2">
                        <small class="importante" >* Obligatorio </small>
                            <select name="barrio" id="barrio" class="form-control" autofocus require>
                                <option>Seleccione barrio</option>
                                @foreach($barrio as $item)
                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form pb-2">
                        <small class="importante" >* Obligatorio </small>
                            <input type="text" class="form-control" id="direccion" autocomplete="address-level1" name="direccion" autofocus required placeholder="Direccion completa">
                        </div>

                        <div class="form pb-2">
                        <small class="importante" >* Obligatorio </small>
                            <select name="banco" id="banco" class="form-control" autofocus require>
                                <option>Seleccione banco </option>
                                @foreach($banco as $item)
                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form pb-2">
                        <small class="importante" >* Obligatorio </small>
                            <select name="tipo" id="tipo" class="form-control" autofocus require>
                                <option>Tipo de cuenta</option>
                                @foreach($tipo as $item)
                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form pb-2">
                        <small class="importante" >* Obligatorio </small>
                            <input type="text" class="form-control" id="cuenta" autocomplete="" name="cuenta" autofocus required placeholder="Numero de cuenta">
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection