@extends('layout')

@section('title', 'Editar Servicio')

@section('content')

    <h2>Servicios</h2>
    <table cellpadding="3" cellspacing="5">
        <tr>
            @auth
                @if($servicio->image)
                    <img src="/storage/{{ $servicio->image}}" alt="{{ $servicio->titulo }}" width="300" >
                @endif
                <th colspan="4">Edita los campos que necesites: </th>
            @endauth
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('servicios.update', $servicio) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @include('partials.form', ['btnText' => 'Actualizar'])
        </form>
    </table>
        
@endsection