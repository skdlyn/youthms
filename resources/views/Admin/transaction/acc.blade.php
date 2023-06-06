@extends('layout.admin')
@section('content')
@section('judul', 'Status Pembayaran')

<div class="container">

    <div class="row">

        <!-- table status -->
        <div class="col">
            <div class="card">
                <table class="table table-borderless">
                    <thead class="yms-blue">
                        <tr>
                            <th>No</th>
                            <th>Tanggal Dibuat</th>
                            <th>Pembeli</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($request_user as $r)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $r->tanggal_mulai }}</td>
                                <td>{{ $r->nama_pemesan }}</td>
                                <td>
                                    @if ($r->status == 'accept')
                                        {{-- <p class="text-uppercase text-success">{{ $r->status }}</p> --}}
                                        <button disabled="disabled" class="btn btn-sm btn-success"></button><span
                                            class="badge">Accepted</span>
                                    @elseif($r->status == 'declined')
                                        {{-- <p class="text-uppercase text-danger">{{ $r->status }}</p> --}}
                                        <button disabled="disabled" class="btn btn-sm btn-danger"></button><span
                                            class="badge">Declined</span>
                                    @else
                                        <button disabled="disabled" class="btn btn-sm btn-warning"></button><span
                                            class="badge">Pending</span>
                                    @endif
                                    {{-- <p class="text-uppercase text-warning">{{ $r->status }}</p> --}}
                                </td>
                                <td>
                                    <a href="{{ route('requestuser.show', $r->id) }}" class="btn yms-blue">detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection
