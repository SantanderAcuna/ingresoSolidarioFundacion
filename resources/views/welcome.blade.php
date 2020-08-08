@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">Ingresar numero de cedula</div>

                <div class="card-body ml-5">
                    <form action="{{route('selecion.store')}}" method="post">
                        @csrf
                        <input type="text" name="ced" id="ced">
                        <button type="submit" class="btn btn-primary">Enviar</button>

                    </form>
                </div>
                @include('partial.msg')
            </div>
        </div>
    </div>
</div>

@endsection