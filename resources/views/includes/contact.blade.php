<div class="box-body" id="signform" ng-controller="EmailCtrl"> <!--ng-controller="EmailCtrl"-->

    <div class="col-lg-6 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
        @include('includes.message-block')

        <h5>Formulaire de contact</h5>
        <div class="adviceMail">
            <em>
                <button class="btn icon-btn btn-info" ng-click="slideToggle3=! slideToggle3">
                    <i class="glyphicon btn-glyphicon glyphicon-console img-circle text-info" aria-hidden="true"></i>
                    Prérequis
                </button>
            </em>
            <div class="row slide-toggle" ng-show="slideToggle3">
                <em>Votre email doit être validé avant de contacter le Lycée
                    <select ng-model="selection" ng-options="item for item in items" class="btn icon-btn btn-success">
                        <i class="glyphicon btn-glyphicon glyphicon-console img-circle text-success"
                           aria-hidden="true"></i>
                    </select>
                </em>
            </div>
        </div>

        <div class="animate-switch-container" ng-switch on="selection">
            <div class="animate-switch" ng-switch-when="contact">
                <form class="form-horizontal" action="{{route('contact')}}" method="POST" enctype="multipart/form-data">
                    <div class="input-group {{ $errors->has('email') ? 'has-error ' : '' }}">
                        <!-- <label class="col-sm-2 control-label" for="email">Votre Mail</label>-->
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"
                                                                             aria-hidden="true"></i></span>
                        <input aria-describedby="basic-addon1" placeholder="adresse" class="form-control" type="email"
                               name="email" id="email" value="{{ Request::old('email') }}">
                    </div>
                    <div class="input-group {{ $errors->has('name') ? 'has-error ' : '' }}">
                        <!-- <label for="email">Votre Nom </label>-->
                        <span class="input-group-addon" id="basic-addon2"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input aria-describedby="basic-addon2" placeholder="Mr ou Mme :" class="form-control"
                               type="text" name="name" id="name" value="{{ Request::old('name') }}">
                    </div>
                    <div class="input-group {{ $errors->has('bodyMessage') ? 'has-error ' : '' }}">
                        <!--<label for="email">Votre Mail : </label>-->
                        <span class="input-group-addon" id="basic-addon3"><i class="fa fa-commenting"
                                                                             aria-hidden="true"></i></span>
                        <textarea aria-describedby="basic-addon3" placeholder="Votre message..." class="form-control"
                                  name="bodyMessage" id="bodyMessage"
                                  value="{{ Request::old('bodyMessage') }}"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"
                               value="{{ Request::old('fileToUpload') }}">
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
                        <!--<label for="email">Votre Mail</label>-->
                        <span class="input-group-addon" id="basic-addon4"><i class="fa fa-envelope"
                                                                             aria-hidden="true"></i></span>
                        <input aria-describedby="basic-addon4" placeholder="adresse@exemple.fr" class="form-control"
                               type="email" name="email" id="email" value="{{ Request::old('email') }}">
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
<!--TODO : validation d'email-->