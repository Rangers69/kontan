@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="card mt-3">
        <div class="card-header">
            <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ url('detail')}}" class="btn btn-light {{ Route::is('detail') ? 'active' : '' }}">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    Detail Aplikasi</a>

                <a href="{{ url('informasi')}}" class="btn btn-light {{ Route::is('informasi') ? 'active' : '' }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Informasi Borrower</a>

                <a href="{{ url('debt')}}" class="btn btn-light {{ Route::is('debt') ? 'active' : '' }}">
                    <i class="fas fa-dollar-sign"></i>
                    Debt Service Ratio</a>

                <a href="{{ url('kredit')}}" class="btn btn-light {{ Route::is('kredit') ? 'active' : '' }}">
                    <i class="fa fa-fire" aria-hidden="true"></i>
                    Credit Risk Rating</a>

                <a href="{{ url('fdc')}}" class="btn btn-light {{ Route::is('fdc') ? 'active' : '' }}">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    FDC</a>

                <a href="{{ url('pefindo')}}" class="btn btn-light {{ Route::is('pefindo') ? 'active' : '' }}">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    Pefindo</a>

                <a href="{{ url('nak')}}" class="btn btn-light {{ Route::is('nak') ? 'active' : '' }}">
                    <i class="far fa-file"></i>
                    NAK</a>

                <a href="{{ url('bunga')}}" class="btn btn-light {{ Route::is('bunga') ? 'active' : '' }}">
                    <i class="fa fa-percent" aria-hidden="true"></i>
                    Bunga</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-success">

                        <div class="card-header">

                            <h3 class="card-title">
                                <i class="fa fa-angle-up" aria-hidden="true"></i> &nbsp;
                                Debt Service Ratio</h3>
                        </div>
                        <div class="card-body">
                         Informasi
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
