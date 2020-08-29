@extends('layouts.app')

  @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                      <h3>Nome: {{ Auth::user()->name }}</h3>
                      <h3>Email: {{ Auth::user()->email }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endsection
