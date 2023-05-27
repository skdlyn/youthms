@extends('layout.admin')
@section('content')
@section('judul', 'Transaction')
<div class="card">
    <div class="col-lg-12">
        <table class="table table-striped mt-2">
            <thead>
                <tr style="background-color: #0EA1E2">
                    <th class="text-white">No</th>
                    <th class="text-white">Nama</th>
                    {{-- <th class="text-white">Jasa yang dipesan</th> --}}
                    <th class="text-white">Total harga</th>
                    <th class="text-white">Status</th>
                    <th class="text-white">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $t)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $t->member->name }}</td>
                        {{-- <td>skip sek males</td> --}}
                        <td>Rp {{ number_format($t->total, 0, ',', '.') }}</td>
                        @if (in_array($t->id, $uu))
                            <td>
                                <button disabled="disabled" class="btn btn-sm btn-danger"></button><span
                                    class="badge">Belum Bayar</span>
                            </td>
                        @elseif(in_array($t->id, $uk))
                            <td>
                                <button disabled="disabled" class="btn btn-sm btn-warning"></button><span
                                    class="badge">Kredit</span>
                            </td>
                        @elseif(in_array($t->id, $ul))
                            <td>
                                <button disabled="disabled" class="btn btn-sm btn-success"></button><span
                                    class="badge">Lunas</span>
                            </td>
                        @endif
                        <td>
                            <a href="{{ route('transaksi.show', $t->id) }}" class="btn-sm btn-success">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            {{ $transaksi->links() }}
        </table>
    </div>
</div>
@endsection
