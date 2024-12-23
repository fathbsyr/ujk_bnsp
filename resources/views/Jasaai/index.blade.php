@extends('layout.main')

@section('content')
    <h1 class="mt-4">Layanan Jasa AI</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashutama">Dashboard</a></li>
            <li class="breadcrumb-item active">Jasa Ai</li>
        </ol>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <h4>Table Data Jasa Webdev</h4>
            <h6>Kami menyediakan layanan untuk membantu memakai ai yang kami sediakan dengan paparan table di bawah ini</h6>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk Ai</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Produk Ai</th>
                        <th>Deskripsi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($jasaai as $ai)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $ai->produk_ai }}</td>
                            <td>{{ $ai->deskripsi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
