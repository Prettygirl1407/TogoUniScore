@extends('layouts.base')
<x-guest-layout>
    <form method="POST" action="{{ route('university.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom de l\'universite')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Address -->
        <div>
            <x-input-label for="address" :value="__('Adresse')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Headmaster -->
        <div>
            <x-input-label for="headmaster" :value="__('Directeur')" />
            <x-text-input id="headmaster" class="block mt-1 w-full" type="text" name="headmaster" :value="old('headmaster')" required autofocus autocomplete="headmaster" />
            <x-input-error :messages="$errors->get('headmaster')" class="mt-2" />
        </div>

        <!-- Tuition -->
        <div>
            <x-input-label for="tuition" :value="__('Scolarite')" />
            <x-text-input id="tuition" class="block mt-1 w-full" type="number" name="tuition" :value="old('tuition')" required autofocus autocomplete="tuition" />
            <x-input-error :messages="$errors->get('tuition')" class="mt-2" />
        </div>
        
        <!-- Create_date -->
        <div>
            <x-input-label for="create_date" :value="__('Date de creaion')" />
            <x-text-input id="create_date" class="block mt-1 w-full" type="date" name="create_date" :value="old('create_date')" required autofocus autocomplete="create_date" />
            <x-input-error :messages="$errors->get('create_date')" class="mt-2" />
        </div>

        <!-- Marks -->
        <div>
            <x-input-label for="marks" :value="__('Points')" />
            <x-text-input id="marks" class="block mt-1 w-full" type="number" name="marks" :value="old('marks')" max="8" required autofocus autocomplete="marks" />
            <x-input-error :messages="$errors->get('marks')" class="mt-2" />
        </div>

        <!-- Population -->
        <div>
            <x-input-label for="population" :value="__('Nombre d\'etudiants')" />
            <x-text-input id="population" class="block mt-1 w-full" type="number" name="population" :value="old('population')" required autofocus autocomplete="population" />
            <x-input-error :messages="$errors->get('population')" class="mt-2" />
        </div>

        <!-- Label -->
        <div>
            <x-input-label for="label" :value="__('Description')" />
            <x-text-input id="label" class="block mt-1 w-full" type="text" name="label" :value="old('label')" required autofocus autocomplete="label" />
            <x-input-error :messages="$errors->get('label')" class="mt-2" />
        </div>
        
        <!-- Category -->
        <div>
            <x-input-label for="category_id" :value="__('Catégorie')" />
                <select id="category_id" name="category_id" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="">Sélectionner une catégorie</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
        </div>


        <!-- Image -->
        <div>
            <x-input-label for="image" :value="__('Image')" />
            <input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autocomplete="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Ajouter') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
