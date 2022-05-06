@include('components.reusables.siteheader')

@if(session('status'))
   <div class="alert alert-success">
    {{session('status')}}
   </div>
@endif 

<div class="listes">
    <div class="proprietaires">
        <div class="cardHeader">
            <h2 class="list-form">Liste Proprietaires</h2>
        </div>
        <div class="cardProprietaire">
            <!-- Don't forget to use a for loop and grid display -->

                <table class="content-table">
                    <thead>
                        <tr>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <!-- <th>DATE NAISSANCE</th> -->
                            <!-- <th>LIEU NAISSANCE</th> -->
                            <!-- <th>Code Identité</th> -->
                            <th>Numero Identité</th>
                            <th>Civilité</th>
                            <th>Genre</th>
                            <th>Parametres</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proprietaires as $proprietaire)
                            <tr>
                                <td>{{$proprietaire->Nom_proprietaire}}</td>
                                <td>{{$proprietaire->Prenom_proprietaire}}</td>
                                <!-- <td>{{$proprietaire->Date_naissance}}</td>
                                <td>{{$proprietaire->Lieu_naissance}}</td> -->
                                <!-- <td>{{$proprietaire->code_piece_identite}}</td> -->
                                <td>{{$proprietaire->Numero_piece_identite}}</td>
                                <!-- <td>{{$proprietaire->Adresse}}</td> -->
                                <!-- <td>{{$proprietaire->Email}}</td> -->
                                <td>{{$proprietaire->civilite}}</td>
                                <td>{{$proprietaire->genre}}</td>
                                <td class = "options">
                                    <a class="table-link-padding" href="#">
                                        <span>
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </span>
                                    </a>
                                    <!-- Some test -->
                                    
                                        <a class="table-link-padding" href="{{'/proprietaire/edit/'.$proprietaire->id}}">
                                            <span>
                                                <ion-icon name="refresh-outline"></ion-icon>
                                            </span>
                                        </a>
                                        <!-- <form action="" method="POST"> -->
                                            <!-- <input type="submit" value="Supprimer"> -->

                                            <a class="table-link-padding" href="{{'/proprietaire/delete/'.$proprietaire->id}}">
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