<div class="container">
    <h1 class="title">Ajout Propriete</h1>
    <form method="POST" action="{{ url('propriete') }}">
        @csrf
        <div class="user-details">

            <!-- <div class="input-box">
                <span class="details">Proprietaire</span>
                <input type="text" id="" placeholder="Choisisser le proprietaire"  name="proprietaire_id">
            </div> -->

            <div class="input-box">
                <span class="details">Adresse De La Propriete</span>
                <input type="text" name="Adresse_propriete" id="" placeholder="Entrez l'adresse de la propriete">
            </div>

            <div class="input-box">
                <span class="details">Superficie</span>
                <input type="number" min="50" max="10000" name="Superficie" id="" placeholder="Entrez la superficie de la propriete">
            </div>

            <div class="input-box">
                <span class="details">Nombre D'etages</span>
                <input type="tel" name="Nbre_etage" id="" placeholder="Entrez le nombre d'etage">
            </div>

            <div class="input-box">
                <span class="details">Proprietaire</span>
                <select class="form-select" name="proprietaire_id" required>
                    <option value="">Choisisser Le Proprietaire</option>
                    @foreach($owners as $owner)
                        <option value="{{$owner->id}}">{{$owner->Prenom_proprietaire. " " . $owner->Nom_proprietaire}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-box">
                <span class="details">Type De Propriete</span>
                <select class="form-select" name="type_id" required>
                    <option selected value ="">Choisisser Le Type De Propriete</option>
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->Libelle}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-box">
                <span class="details">Type De Propriete</span>
                <select class="form-select" name="type_proprietes_id" required>
                    <option selected value ="">Choisisser Le Type De Propriete</option>
                    @foreach($propertiesTypes as $propertyType)
                        <option value="{{$propertyType->id}}">{{$propertyType->Libelle_type}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-box">
                <span class="details">Quartier</span>
                <select class="form-select" name="quartier_id" required>
                    <option selected value ="">Choisisser Le Quartier</option>
                    @foreach($neighbourhoods as $neighbourhood)
                        <option value="{{$neighbourhood->id}}">{{$neighbourhood->Libelle_quartier}}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="button">
            <input type="submit" value="Enregistrer">
        </div>
    </form>
</div>