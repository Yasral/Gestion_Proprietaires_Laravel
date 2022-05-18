<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proprietaire') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="border-collapse w-full text-sm text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-4">NOM</th>
                            <th scope="col" class="px-6 py-4">PRENOM</th>
                            <th scope="col" class="px-6 py-4">Numero Identité</th>
                            <th scope="col" class="px-6 py-4">Civilité</th>
                            <th scope="col" class="px-6 py-4">Genre</th>
                            <th scope="col" class="px-6 py-4">Parametres</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proprietaires as $proprietaire)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 text-center">{{$proprietaire->Nom_proprietaire}}</td>
                                <td class="px-6 py-4 text-center">{{$proprietaire->Prenom_proprietaire}}</td>
                                <td class="px-6 py-4 text-center">{{$proprietaire->Numero_piece_identite}}</td>
                                <td class="px-6 py-4 text-center">{{$proprietaire->civilite}}</td>
                                <td class="px-6 py-4 text-center">{{$proprietaire->genre}}</td>
                                <td class="px-6 py-4 text-center flex justify-between">
                                    <!-- <a class="table-link-padding" href="#">
                                        <span>
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </span>
                                    </a> -->
                                    <!-- Some test -->
                                    
                                        <a class="table-link-padding" href="{{'/proprietaire/edit/'.$proprietaire->id}}">
                                            <span>
                                                <ion-icon name="refresh-outline"></ion-icon>
                                            </span>
                                        </a>

                                        <a class="table-link-padding" href="{{'/proprietaire/delete/'.$proprietaire->id}}">
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
