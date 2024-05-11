@extends('admin.base')
@section('admin')
    <div class="w-3/3 ml-10">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Toutes les universités</h6>
                </div>
                <div class="mt-4">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Frais de scolarité</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Note</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Directeur</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de création</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Population</th>
                                <th scope="col" class="relative px-6 py-3"><span class="sr-only">Action</span></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($allUniversities as $university)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $university->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $university->tuition }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $university->marks }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $university->headmaster }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $university->create_date }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $university->population }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('university.show', $university->id) }}" class="text-indigo-600 hover:text-indigo-900">Détail</a>
                                </td>

                                <!-- Action button -->
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Modifier</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Supprimer</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif


@endsection
