@extends('layouts.template')

@section('page-title')
Halaman Data User
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title">Data Pemilik Toko</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl">
                            Tambah Data
                        </button>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Pemilik Toko</th>
                            <th>Email</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-icon"
                                        data-toggle="dropdown"> Pilihan
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">Detail</a>
                                            <a class="dropdown-item" href="#">Hapus</a>
                                        </div>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama Customer</th>
                            <th>Email</th>
                            <th>Pilihan</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data User (Penjual)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
            <form action="{{route('penjual.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Lengkap Penjual</label>
                        <input type="text" name="name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" name="email" required class="form-control">
                        <input type="text" name="level" hidden value="penjual">
                    </div>
                    <div class="form-group">
                        <label>Katasandi</label>
                        <input type="password" name="password" required class="form-control" placeholder="Minimal 8 karakter, A-Z, a-z dan simbol">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection