@extends('layouts.lyt_main')
@section('metodosjs')
    @include('jsViews.js_Home')
@endsection
@section('content')
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    @include('layouts.lyt_nav')
    <div class="page-heading">
        
        <div class="container">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Articulos</h3>
                        <p class="text-subtitle text-muted">Consulta Utilizando Eloquent & SqlSrv con Laravel</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Articulos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">SQLServer</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        Usando Eloquent
                                    </div>
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <table class="table table-striped" id="tbl_articulo_with_eloquent">
                                                <thead>
                                                    <tr>
                                                        <th>Articulo</th>
                                                        <th>Descripcion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Articulos as $articulo)
                                                        <tr>
                                                            <td>{{$articulo['ARTICULO']}}</td>
                                                            <td>{{$articulo['DESCRIPCION']}}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                <div class="card-header">
                                        Usando SqlSrvLib Custom
                                    </div>
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <table class="table table-striped" id="tbl_articulo_with_sqlsrv">
                                                <thead>
                                                    <tr>
                                                        <th>Articulo</th>
                                                        <th>Descripcion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($ArticulosDos as $articulodos)
                                                        <tr>
                                                            <td>{{$articulodos['ARTICULO']}}</td>
                                                            <td>{{$articulodos['DESCRIPCION']}}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
    </div>

    


    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
@endsection