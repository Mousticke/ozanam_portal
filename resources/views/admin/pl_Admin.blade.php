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
                <li class="active">Panel Admin</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-blue"><i class="fa fa-facebook"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Likes</span>
                            <span class="info-box-number">0</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
            </div>

            <div class="row">
                <section class="content">
                @include('includes.message-block')
                @include('admin.includes.timeline')

                    <!--DES EXMPLES DE TAB ET ACCORDION-->
                    <div class="col-md-12">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Mode d'accordion</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="box-group" id="accordion">
                                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                    <div class="panel box box-primary">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <button data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne" aria-expanded="false" class="collapsed">
                                                    Collapse 1
                                                </button>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0;">
                                            <div class="box-body">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen book.
                                                It has survived not only five centuries, but also the leap into
                                                electronic typesetting,
                                                remaining essentially unchanged. It was popularised in the 1960s with
                                                the release of Letraset
                                                sheets containing Lorem Ipsum passages, and more recently with desktop
                                                publishing software
                                                like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel box box-danger">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                                   class="collapsed" aria-expanded="false">
                                                    Collapase 2
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0;">
                                            <div class="box-body">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen book.
                                                It has survived not only five centuries, but also the leap into
                                                electronic typesetting,
                                                remaining essentially unchanged. It was popularised in the 1960s with
                                                the release of Letraset
                                                sheets containing Lorem Ipsum passages, and more recently with desktop
                                                publishing software
                                                like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel box box-success">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                                   class="collapsed" aria-expanded="false">
                                                    Collapse 3
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0;">
                                            <div class="box-body">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen book.
                                                It has survived not only five centuries, but also the leap into
                                                electronic typesetting,
                                                remaining essentially unchanged. It was popularised in the 1960s with
                                                the release of Letraset
                                                sheets containing Lorem Ipsum passages, and more recently with desktop
                                                publishing software
                                                like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->

                    </div>
                    <div class=" col-md-6">

                        <!-- Custom Tabs (Pulled to the right) -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs pull-right">
                                <li class="active"><a href="#tab_1-1" data-toggle="tab" aria-expanded="true">Tab 1</a>
                                </li>
                                <li class=""><a href="#tab_2-2" data-toggle="tab" aria-expanded="false">Tab 2</a></li>
                                <li class=""><a href="#tab_3-2" data-toggle="tab" aria-expanded="false">Tab 3</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        Dropdown <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Autre</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Séparation</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pull-left header"><i class="fa fa-th"></i> Modèle de table pour actu</li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1-1">
                                    <b>Comment faire : </b>
                                    <p><code>Akim va s'en charger</code> pour le faire </p>
                                    C'est une machine de guerrre
                                </div><!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2-2">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset
                                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                    software
                                    like Aldus PageMaker including versions of Lorem Ipsum.
                                </div><!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_3-2">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset
                                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                    software
                                    like Aldus PageMaker including versions of Lorem Ipsum.
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div><!-- nav-tabs-custom -->
                    </div>


                </section>


            </div>
        </section>

    </div>
@endsection