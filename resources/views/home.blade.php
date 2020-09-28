@extends('layouts.main')

@section('content')

    <main>

        <h2>HOME</h2>

        <h3>
          <a href="{!! route('stanze-index') !!}">
            STANZE
          </a>
        </h3>
        <h3>
          <a href="{!! route('pagamenti.index') !!}">
            PAGAMENTI
          </a>
        </h3>

    </main>

@endsection
