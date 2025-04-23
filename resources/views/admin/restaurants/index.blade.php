@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    {{-- Title & Button --}}
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-3xl font-bold text-gray-800">Restaurants</h1>
        <a href="{{ route('restaurants.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">Add Restaurant</a>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- Table --}}
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full table-auto text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-gray-700">Name</th>
                    <th class="px-6 py-3 text-gray-700">Description</th>
                    <th class="px-6 py-3 text-gray-700">Discount</th>
                    <th class="px-6 py-3 text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($restaurants as $restaurant)
            <tr class="border-t">
                <td class="px-6 py-4">{{ $restaurant->name }}</td>
                <td class="px-6 py-4">{{ $restaurant->description }}</td>
                <td class="px-6 py-4">{{ $restaurant->discount_percentage }}%</td>
                <td class="px-6 py-4">{{ $restaurant->food_type }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
