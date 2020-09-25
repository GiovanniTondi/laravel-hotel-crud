@extends('layouts.main')

@section('content')

    <main>

        <h2>
            Stanza
            {{ $stanza -> room_number }}
        </h2>
        <h3>
            Piano:
            {{ $stanza -> floor }}
        </h3>
        <h3>
            N. letti:
            {{ $stanza -> beds }}
        </h3>

        <br>
        <br>

        <h3>
            <a href="{{ route('stanze-index') }}">
                Torna alle stanze
            </a>
        </h3>
    </main>

@endsection
