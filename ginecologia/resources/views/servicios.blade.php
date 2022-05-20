@extends('layouts.plantilla')

@section('content')
    <div class="border-bottom" style="text-align: center">


        <ul class="menu">
            <a href="#" class="btn btn-outline-primary">Pacientes</a>
            <a href="#" class="btn btn-outline-primary">Consultas</a>
            <a href="#" class="btn btn-outline-primary">Servicios</a>
            <a href="#" class="btn btn-outline-primary">Suministros</a>
        </ul>
    </div>

    </br>
    </br>
    </br>

    <div class="contenedor d-grid gap-2" style="text-align: center">
        <button class="btn btn-dark" type="button">control de embarazo</button>
        <button class="btn btn-dark" type="button">Obstetricia</button>
        <button class="btn btn-dark" type="button">Ginecología</button>
        <button class="btn btn-dark" type="button">Infertilidad y esterilidad</button>
        <button class="btn btn-dark" type="button">Psicología y Sexología</button>
        <button class="btn btn-dark" type="button">Servicios</button>
    </div>
@endsection
