<x-app-layout>
    <x-slot name="header" class="w-1/4 bg-gray-200 p-6 fixed h-full">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de Bord') }} <br> {{ __('Administrateur') }}
        </h2>
    </x-slot>

    <!-- Styles de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    
    <!-- Navbar fixe -->
    <div class="w-1/7 bg-gray-200 p-4 fixed top-40 h-5/6">
        <div class="mb-6">
            <div class="rounded-lg bg-blue-200 hover:bg-blue-300 transition-colors duration-300">
                <a href="{{route('schools_list')}}" class="block p-3 text-gray-700 hover:text-gray-900">Universite</a>
            </div>
            <div class="rounded-lg bg-green-200 hover:bg-green-300 transition-colors duration-300 mt-2">
                <a href="{{route('users_list')}}" class="block p-3 text-gray-700 hover:text-gray-900">Utilisateurs</a>
            </div>
            <div class="rounded-lg bg-yellow-200 hover:bg-yellow-300 transition-colors duration-300 mt-2">
                <a href="{{route('university.create')}}" class="block p-3 text-gray-700 hover:text-gray-900">Ajouter</a>
            </div>
        </div> 
    </div>
    <div class="w-4/5 mx-auto">
            @yield('admin')
    </div>
</x-app-layout>
