<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Propriete') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="border-collapse w-full text-sm text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-4">ADRESSE</th>
                            <th scope="col" class="px-6 py-4">SUPERFICIE</th>
                            <th scope="col" class="px-6 py-4">NOMBRE ETAGES</th>
                            <th scope="col" class="px-6 py-4">PROPRIETAIRE</th>
                            <th scope="col" class="px-6 py-4">TYPE PROPRIETE</th>
                            <th scope="col" class="px-6 py-4">QUARTIER</th>
                            <th scope="col" class="px-6 py-4">PARAMETRES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proprietes as $propriete)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 text-center">{{$propriete->Adresse_propriete}}</td>
                                <td class="px-6 py-4 text-center">{{$propriete->Superficie}}</td>
                                <td class="px-6 py-4 text-center">{{$propriete->Nbre_etage}}</td>
                                <td class="px-6 py-4 text-center">{{$propriete->proprietaire->Prenom_proprietaire . " ". $propriete->proprietaire->Nom_proprietaire}}</td>
                                <td class="px-6 py-4 text-center">{{$propriete->type->Libelle}}</td>
                                <td class="px-6 py-4 text-center">{{$propriete->quartier->Libelle_quartier}}</td>
                                <td class="px-6 py-4 text-center flex justify-between">
                                    
                                    <a class="table-link-padding" href="{{'/propriete/edit/'.$propriete->id}}">
                                        <span>
                                            <ion-icon name="refresh-outline"></ion-icon>
                                        </span>
                                    </a>

                                    <a class="table-link-padding" href="{{'/propriete/delete/'.$propriete->id}}">
                                        <span>
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </span>
                                    </a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

@include('components.reusables.icons')
