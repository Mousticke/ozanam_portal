<div ng-controller="EmailCtrl"> <!--ng-controller="EmailCtrl"-->
    <div ng-cloak>
        <div layout="row" layout-wrap>
            <div  flex="100" class="info-box right-sign" style="padding: 20px;">
                @include('includes.message-block')
                <h3 class="title-sign">Formulaire de contact</h3>
                <div>
                    <h5 style="border-bottom: 4.0px solid rgb(1,88,157);background-image: none;padding-bottom: 0;">
                        <span style="width: 90.0%;max-width: 210.0px;padding: 10.0px 0 6.0px 15.0px;display: block;color: white;
                        background-color: rgb(1,88,157);">Informations
                        </span>
                    </h5>
                </div>
                <div class="blocInformation">
                    <div class="span6">
                        <div class="">
                            <div class="bloc-contact" style="margin-right: 15px;">
                                <figure style="float: left; margin: 0; width: 60px;">
                                    <img src="{{URL::to('src/css/images/headphone.png')}}">
                                </figure>
                                <div class="bloc-contact-content" style="padding-left: 80px; padding-bottom: 25px;">
                                    <p>Appeler le Lycée</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="adviceMail">
                    <em>
                        <button class="btn icon-btn btn-info" ng-click="slideToggle3=! slideToggle3">
                            <i class="glyphicon btn-glyphicon glyphicon-console img-circle text-info" aria-hidden="true"></i>
                            Prérequis
                        </button>
                    </em>
                    <div class="row slide-toggle" ng-show="slideToggle3">
                        <em>Votre email doit être validé avant de contacter le Lycée
                            <select ng-model="selection" ng-options="item for item in items" class="btn icon-btn btn-success" title="selectMode">
                            </select>
                        </em>
                    </div>
                </div>
                <div class="animate-switch-container" ng-switch on="selection">
                    <div class="animate-switch" ng-switch-when="contact">
                        <form class="form-horizontal" action="{{route('contact')}}" method="POST" enctype="multipart/form-data">
                            <div class="input-group {{ $errors->has('email') ? 'has-error ' : '' }}">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <input aria-describedby="basic-addon1" placeholder="adresse" class="form-control" type="email" name="email" id="email" value="{{ Request::old('email') }}">
                            </div>
                            <div class="input-group {{ $errors->has('name') ? 'has-error ' : '' }}">
                                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input aria-describedby="basic-addon2" placeholder="Mr ou Mme :" class="form-control" type="text" name="name" id="name" value="{{ Request::old('name') }}">
                            </div>
                            <div class="input-group {{ $errors->has('bodyMessage') ? 'has-error ' : '' }}">
                                <span class="input-group-addon" id="basic-addon3"><i class="fa fa-commenting" aria-hidden="true"></i></span>
                                <textarea aria-describedby="basic-addon3" placeholder="Votre message..." class="form-control"
                                          name="bodyMessage" id="bodyMessage"
                                          value="{{ Request::old('bodyMessage') }}">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" value="{{ Request::old('fileToUpload') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </form>
                    </div>
                    <div class="animate-switch" ng-switch-when="validation">
                        <form action="#" method="POST">
                            <div class="input-group {{ $errors->has('email') ? 'has-error ' : '' }}">
                                <span class="input-group-addon" id="basic-addon4"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <input aria-describedby="basic-addon4" placeholder="adresse@exemple.fr" class="form-control" type="email" name="email" id="email" value="{{ Request::old('email') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>