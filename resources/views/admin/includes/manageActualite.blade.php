@extends('admin.layouts.adminLayout')

@section('contentAdmin')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Panel Administration
                <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li class="active">Gestion des actualites</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <section class="content">
                    @include('includes.message-block')
                    @include('admin.gestion.addActualite')
                    @include('admin.gestion.gestionActualite')
                </section>
            </div>
        </section>
    </div>
    <script>
        var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit.admin') }}';
    </script>

@endsection

