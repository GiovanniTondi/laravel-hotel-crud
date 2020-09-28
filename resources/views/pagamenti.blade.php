@extends('layouts.main')

@section('content')

<main>

    <h2>PAGAMENTI</h2>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>STATUS</td>
                <td>PRICE</td>
                <td>EDIT</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagamenti as $pagamento)
                <tr>
                    <td>{{ $pagamento -> id }}</td>
                    <td>{{ $pagamento -> status }}</td>
                    <td>{{ $pagamento -> price }}</td>
                    <td>
                        <a href="{{ route('pagamento.edit', $pagamento -> id) }}">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a href="{{ route('pagamento-delete', $pagamento -> id) }}">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <ul>
    </ul>

    <br>

    <h3>
        <a href="{{ route('index') }}">
            Torna alla Home
        </a>
    </h3>
</main>

@endsection
