@extends('layouts.master')

@section('title', 'Título da página')

@section('sidebar')

   @parent

   <p>Este é um apêndice da master sidebar</p>

@endsection

@section('content')

  <p>E aqui esta o conteúdo do meu site</p>
  <p>{{date('l jS \of F Y h:i:s A')}}</p>

@endsection
