@extends('layouts.main')

@section('content')

    <main>

        <h2>PAGAMENTO ID: {{ $pagamento -> id }}</h2>

        <form class="form-edit" action="{{ route('pagamento-update', $pagamento -> id) }}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="status">Status:</label>
                {{-- <select name="status">
                    <option value="accepted">ACCEPTED</option>
                    <option value="rejected">REJECTED</option>
                    <option value="pending">PENDING</option>
                </select> --}}
                <input type="text" name="status" value="{{ $pagamento -> status }}">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" value="{{ $pagamento -> price }}">
            </div>
            <button type="submit">UPDATE</button>

        </form>

        <br>

        <h3>
            <a href="{{ route('pagamenti.index') }}">
                Torna ai pagamenti
            </a>
        </h3>
    </main>

@endsection
