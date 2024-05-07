@extends('layouts.template')

@section('page-title')
Detail {{$user->name}}
@endsection

@section('content')
{{-- Area Detai Pemilik Toko --}}
<div class="row">
    <div class="col-md-12 col-sm-12">
        {{-- show data card --}}
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h5>Detail User</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Lengkap</th>
                            <td width="5%"> : </td>
                            <td width="70%">{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td width="5%"> : </td>
                            <td width="70%">{{$user->email}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        {{-- card-edit --}}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('penjual.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nama Lengkap Penjual</label>
                        <input type="text" name="name" value="{{$user->name}}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" name="email" value="{{$user->email}}" required class="form-control">
                        <input type="text" name="level" hidden value="penjual">
                    </div>
                    <div class="form-group">
                        <label>Katasandi</label>
                        <input type="password" name="password" required class="form-control"
                            placeholder="Minimal 8 karakter, A-Z, a-z dan simbol">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
