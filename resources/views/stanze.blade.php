@extends('layouts.main')

@section('content')

    <main>

        <h2>Stanze</h2>
        <ul>
            @foreach ($stanze as $stanza)
                <li>
                    <a href="{{ route('stanza-show', $stanza -> id) }}">
                        {{ $stanza -> room_number }}
                    </a>
                </li>
            @endforeach
        </ul>

        <br>
        <br>

        <h3>
            <a href="{{ route('stanza-create') }}">
                Aggiungi una nuova stanza
            </a>
        </h3>
        <h3>
            <a href="{{ route('index') }}">
                Torna alla Home
            </a>
        </h3>
    </main>

@endsection
