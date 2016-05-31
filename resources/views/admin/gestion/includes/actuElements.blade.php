<div class="input-group {{ $errors->has('titre') ? 'has-error ' : '' }}">
    <span class="input-group-addon" id="basic-addon"><i class="fa fa-header" aria-hidden="true"></i></span>
    <div class="col-lg-8">
        <input type="text" aria-describedby="basic-addon" class="form-control"
               name="titre" id="titre" title="Titre de l'actualité" placeholder="Titre de l'actualité "/>
    </div>
</div>

<div class="input-group {{ $errors->has('img_actu') ? 'has-error ' : '' }}">
    <span class="input-group-addon" id="basic-addon5"><i class="fa fa-file-picture-o" aria-hidden="true"></i></span>
    <div class="col-lg-8">
        <input type="file" aria-describedby="basic-addon5" class="form-control"
               name="img_actu" id="img_actu" title="Image de l'actualité" placeholder="Image de l'actualité "/>
    </div>
</div>

<div id="external_links" class="input-group {{ $errors->has('external_link') ? 'has-error ' : '' }}">
    <span class="input-group-addon" id="basic-addon6"><i class="fa fa-internet-explorer" aria-hidden="true"></i></span>
    <div class="col-lg-8">
        <input type="text" aria-describedby="basic-addon6" class="form-control"
               name="external_link" id="external_link" title="Liens externes" placeholder="Liens externes "/>
    </div>
    <div class="col-xs-4">
        <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
    </div>
</div>

<div id="external_links_template" class="input-group {{ $errors->has('external_link') ? 'has-error ' : '' }} hide">
    <span class="input-group-addon" id="basic-addon6"><i class="fa fa-internet-explorer" aria-hidden="true"></i></span>
    <div class="col-lg-8">
        <input type="text" aria-describedby="basic-addon6" class="form-control"
               name="external_link" id="external_link" title="Liens externes" placeholder="Liens externes "/>
    </div>
    <div class="col-xs-4">
        <button type="button" class="btn btn-default removeButton"><i class="fa fa-minus"></i></button>
    </div>
</div>

<div id="external_files" class="input-group {{ $errors->has('external_file') ? 'has-error ' : '' }}">
    <span class="input-group-addon" id="basic-addon7"><i class="fa fa-file-picture-o" aria-hidden="true"></i></span>
    <div class="col-lg-8">
        <input type="file" aria-describedby="basic-addon7" class="form-control"
               name="external_file" id="external_file" title="Fichiers externes" placeholder="Fichiers externes "/>
    </div>
    <span><a href="#" id="addExternalFile">Ajouter un fichier externe</a></span>
</div>

<div class="input-group {{ $errors->has('color_actu') ? 'has-error ' : '' }}">
    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-paint-brush" aria-hidden="true"></i></span>
    <div class="col-lg-8">
        <select aria-describedby="basic-addon1" class="form-control"
                name="color_actu" id="color_actu" title="Choix de la couleur">
            <option disabled selected value> -- Selectionner une couleur --</option>
            @foreach($colors as $color)
                <option name="color" class="bg-{{$color->name}}" value="{{$color->name}}">
                    <p style="background: {{$color->name}};"> {{$color->name}}</p>
                </option>
            @endforeach
        </select>
    </div>
</div>