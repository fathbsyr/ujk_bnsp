@extends('layout.main')

@section('content')
    <h1 class="mt-4">Layanan Webdev Kami</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashutama">Dashboard</a></li>
            <li class="breadcrumb-item active">Webdev</li>
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
            <h6>Kami menyediakan layanan untuk membuat website yang kami sediakan dengan paparan table di bawah ini</h6>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Framework</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Framework</th>
                        <th>Deskripsi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($webdev as $web)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $web->framework }}</td>
                            <td>{{ $web->deskripsi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
