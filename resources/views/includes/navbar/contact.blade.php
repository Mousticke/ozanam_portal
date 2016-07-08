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
                                    <em>03.26.69.32.70</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h5 style="border-bottom: 4.0px solid rgb(1,88,157);background-image: none;padding-bottom: 0;">
                        <span style="width: 90.0%;max-width: 210.0px;padding: 10.0px 0 6.0px 15.0px;display: block;color: white;
                        background-color: rgb(1,88,157);">Le Lycée
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
                                    <p>Contacter le Lycée</p>
                                    <a href="http://www.ozanam-lycee.fr/index.php/homepage/pour-nous-contacter">Formulaire de contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>