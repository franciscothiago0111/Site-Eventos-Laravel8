


@extends('layouts.main')

@section('title', 'Produto')

@section('content')

  @if($id != null)
    <h1>TELA DE CONTATO</h1>
    <h1>ID passado na rota: {{$id}}</h1>
  @endif

@endsection