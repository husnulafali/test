@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group mb-2">
                    <a href="{{ url('master-categories') }}" class="btn btn-secondary">Kembali ke Daftar Kategori</a>
                </div>
                <div class="card">
                    <div class="card-header">Master Item</div>

                    <div class="card-body">
                        <table>
                            <tr>
                                <th>Kode</th>
                                <td>:</td>
                                <td>{{ $data->kode }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                        </table>

                        <table id="table" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Supplier</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->items as $item)
                                    <tr>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jenis }}</td>
                                        <td>{{ $item->harga_beli }}</td>
                                        <td>{{ $item->laba }}</td>
                                        <td>{{ $item->supplier }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a class="btn btn-info"
                            href="{{ url('master-categories/form/edit') }}/{{ $data->id }}">Edit</a>
                        <a class="btn btn-danger" href="{{ url('master-categories/delete') }}/{{ $data->id }}"
                            onclick="return confirm('Are you sure you want to delete this categories?');">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
