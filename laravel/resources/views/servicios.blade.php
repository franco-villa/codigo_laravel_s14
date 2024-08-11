@extends('layout')

@section('content')
    
    @isset($category)
        <div>
            <h1 style="margin-left: 1%"  class="display-4 mb-0">{{ $category->name }}</h1>
            <a style="margin-left: 1%"  href="{{ route('servicios.index') }}">Regresar a Servicios</a>
        </div>
    @else
        <h1 style="margin-left: 1%" class="display-4 mb-0">Servicios</h1>
    @endisset

    <div class="row">
        <tr>
            @auth
                <a style="margin-left: 1%"  href=" {{ route('servicios.create') }} ">Nuevo Servicio</a>
            @endauth
        </tr>
    </div>
    <br>
    <br>
    <table class="table table-bordered" style="width: 40%; margin-left: 1%">  
        <tr>
            <th>N°</th>
            <th>Servicio</th>
            <th>Categoria</th>
        </tr>  
        @if($servicios)
            @php 
                $currentPage = $servicios->currentPage();
                $perPage = $servicios->perPage();
                $contador = ($currentPage - 1) * $perPage + 1;
            @endphp
            
            @foreach($servicios as $servicio)
            
            <tr>
                <td style="width:20px" >{{ $contador }}</td>
                <td>
                    @if($servicio->image!=null)
                        <img src="/storage/{{ $servicio->image }}" alt ="{{ $servicio->titulo }} width="50" height="50">
                    @endif
                    <a href="{{ route('servicios.show', $servicio) }}">{{ $servicio->titulo }} </a>                         
                </td>
                <td >
                    @if($servicio->category_id)
                       <a href="{{ route('categories.show', $servicio->category) }}" > {{ $servicio->category->name }} </a>
                    @endif
                </td>
            </tr>
            @php $contador++; @endphp
            @endforeach
        @else
            <p>No existe ningun servicio que mostar</p>
        @endif        
    </table>
    <br>
    <tr >
        <td colspan="1" >
            <div style="margin-left: 1%" class="pagination pagination-sm pagination-custom .page-link">
            {{$servicios->links()}}
            </div>
        </td>
    </tr>
@endsection