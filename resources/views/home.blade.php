@extends('layouts.app')

@section('content')
    @foreach ($aziendeFerroviarie as $aziendaFerroviaria)
        <h1>{{$aziendaFerroviaria->azienda}}</h1>
        <p>This is my paragraph content.</p>
    @endforeach
@endsection