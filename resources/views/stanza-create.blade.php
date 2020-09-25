@extends('layouts.main')

@section('content')

    <main>

        <h2>
            Aggiungi una stanza
        </h2>

        <form action="{{ route('stanza-store') }}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="room_number">Numero stanza:</label>
                <input type="text" name="room_number" value="">
            </div>
            <div class="form-group">
                <label for="floor">Piano:</label>
                <input type="text" name="floor" value="">
            </div>
            <div class="form-group">
                <label for="beds">Numero letti:</label>
                <input type="text" name="beds" value="">
            </div>
            <br>
            <button type="submit">SALVA</button>

        </form>

    </main>

@endsection
