@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>History Records</h2>

        @if(count($histories) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Quantity</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($histories as $history)
                        <tr>
                            <td>{{ $history->id }}</td>
                            <td>{{ $history->product->name }}</td>
                            <td>{{ $history->quantity }}</td>
                            <td>{{ $history->total_price }}</td>
                            <td>{{ $history->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No history records found.</p>
        @endif
    </div>
@endsection
