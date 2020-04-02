@extends('layouts.externo')
@section('title','Quadro avisos da empresa')
@section('sidebar')
    @parent
    <p>^^ Barra superior adicionada do layout pai/m&atilde;e^^</p>
@endsection
@section('content')
    <p>Quadro avisos da empresa</p>
    <br>
    <p>Ol&aacute;, {{ $nome }}! Veja abaixo os avisos de hoje:</p>

    <br>
    @if ( $mostrar )
        Mostrando aviso
    @else
        Escondendo aviso
    @endif

    <br>

    {{-- foreach usando apenas blade --}}
    @foreach ($avisos as $aviso)
        <p>Aviso {{ $aviso['id'] }}: {{ $aviso['texto'] }}</p>
    @endforeach

    <br>
    <?php

    // Utilizando com tag php
    foreach ($avisos as $aviso){

                echo "<p>Aviso {$aviso['id']}: {$aviso['texto']}</p>";
    }

    ?>

    @php
        // Utilizando com tag php, mas iniciando com comando do blade
        foreach ($avisos as $aviso){

        echo "<p>Aviso {$aviso['id']}: {$aviso['texto']}</p>";
        }
    @endphp


@endsection
