<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Propriete') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ url('propriete/edit/'.$propriete->id) }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="adresse_propriete" :value="__('Adresse Propriete')" />
                                    <x-input id="adresse_propriete" class="block mt-1 w-full" type="text" name="Adresse_propriete" value="{{$propriete->Adresse_propriete}}" autofocus />
                                </div>

                                <div>
                                    <x-label for="superficie" class="mt-8" :value="__('Superficie')" />
                                    <x-input id="superficie" class="block mt-1 w-full" type="text" name="Superficie" value="{{$propriete->Superficie}}" autofocus />
                                </div>

                                <div>
                                    <x-label for="nbre_etages" class="mt-8" :value="__('Nombre D etage(s)')" />
                                    <x-input id="nbre_etages" class="block mt-1 w-full" type="text" name="Nbre_etage" value="{{$propriete->Nbre_etage}}" autofocus />
                                </div>

                                <div>
                                    <x-label for="proprietaire" class="mt-8" :value="__('Proprietaire')" />
                                    <select name="proprietaire_id">
                                        <option selected value="{{$propriete->proprietaire_id}}">{{$propriete->proprietaire->Prenom_proprietaire . " " . $propriete->proprietaire->Nom_proprietaire}}</option>
                                        @foreach($owners as $owner)
                                            @if($owner->id != $propriete->proprietaire_id)
                                                <option value="{{$owner->id}}">{{$owner->Prenom_proprietaire. " " . $owner->Nom_proprietaire}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <x-label for="type_propriete" class="mt-8" :value="__('Type De Propriete')" />
                                    <select name="type_id">
                                        <option selected value ="{{$propriete->type_id}}">{{$propriete->type->Libelle}}</option>
                                        @foreach($types as $type)
                                            @if($type->id != $propriete->type_id)
                                                <option value="{{$type->id}}">{{$type->Libelle}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <x-label for="quartier" class="mt-8" :value="__('Quartier')" />
                                    <select name="quartier_id">
                                        <option selected value ="{{$propriete->quartier_id}}">{{$propriete->quartier->Libelle_quartier}}</option>
                                        @foreach($neighbourhoods as $neighbourhood)
                                            @if($neighbourhood->id != $propriete->quartier_id)
                                                <option value="{{$neighbourhood->id}}">{{$neighbourhood->Libelle_quartier}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                        </div>
                        <div class="flex items-center justify-end mt-8">
                            <x-button class="ml-3">
                                {{ __('Mettre A Jour') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
