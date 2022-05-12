@include('components.reusables.siteheader')

@if(session('status'))
   <div class="alert alert-success">
    {{session('status')}}
   </div>
@endif 

<div class="listes">
    <div class="proprietaires">
        <div class="cardHeader">
            <h2 class="list-form">Liste Proprietes</h2>
        </div>
        <div class="cardProprietaire">
            <!-- Don't forget to use a for loop and grid display -->

                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Adresse</th>
                            <th>Superficie</th>
                            <th>Nombre D'etages</th>
                            <th>Proprietaire</th>
                            <th>Quartier</th>
                            <th>Parametres</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proprietes as $propriete)
                            <tr>
                                <td>{{$propriete->Adresse_propriete}}</td>
                                <td>{{$propriete->Superficie}}</td>
                                <td>{{$propriete->Nbre_etage}}</td>
                                <td>{{$propriete->proprietaire->Prenom_proprietaire . " ". $propriete->proprietaire->Nom_proprietaire}}</td>
                                <td>{{$propriete->quartier->Libelle_quartier}}</td>
                                <td>{{$propriete->type->Libelle}}</td>
                                <td class = "options">
                                    <a class="table-link-padding" href="#">
                                        <span>
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </span>
                                    </a>
                                    <!-- Some test -->
                                    
                                        <a class="table-link-padding" href="{{'/propriete/edit/'.$propriete->id}}">
                                            <span>
                                                <ion-icon name="refresh-outline"></ion-icon>
                                            </span>
                                        </a>
                                        <!-- <form action="" method="POST"> -->
                                            <!-- <input type="submit" value="Supprimer"> -->

                                            <a class="table-link-padding" href="{{'/propriete/delete/'.$propriete->id}}">
                                                <span>
                                                    <ion-icon name="trash-outline"></ion-icon>
                                                </span>
                                            </a>
                                        <!-- </form> -->
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

        </div>
    </div>
</div>   

@include('components.reusables.icons')