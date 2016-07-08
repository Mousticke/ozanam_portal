<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 23/06/2016
 * Time: 13:37
 */
?>
@extends('admin.layouts.adminLayout')

@section('contentAdmin')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Panel Administration
                <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Accéder au site</a></li>
                <li><a href="{{route('pl_admin')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li class="active">Gestion des Utilisateurs</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <section class="content">
                    @include('includes.message-block')
                    @include('admin.gestion.includes.AdminClasse')
                    @include('admin.gestion.includes.ListeClasse')
                </section>
            </div>
        </section>
    </div>

@endsection
