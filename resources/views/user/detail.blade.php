@extends('layouts.template')

@section('page-title')
Detail {{$user->name}}
@endsection

@section('content')
{{-- Area Detai Pemilik Toko --}}
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>Detail User</h3>
                </div>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
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
</div>
</div>
@endsection
