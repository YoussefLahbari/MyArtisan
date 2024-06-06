<!-- resources/views/artisans.blade.php -->
@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="flex h-screen">
        <!-- Artisans List -->
        <div class="w-1/3 p-4 pt-0 h-screen overflow-y-auto">
            <h3 class="text-2xl font-semibold mb-4 bg-white p-2 border rounded-lg shadow-md">Available Artisans</h3>
            @foreach ($artisans as $artisan)
            <div class="bg-white border rounded-lg shadow-md p-4 mb-4 hover:bg-gray-50 cursor-pointer transition ease-in-out duration-200" onclick="selectArtisan({{ $artisan->id }})">
                <div class="flex items-center space-x-4">
                    <img src="{{ $artisan->image }}" alt="{{ $artisan->name }}" class="w-12 h-12 rounded-full" />
                    <div>
                        <h2 class="text-lg font-semibold">{{ $artisan->name }}</h2>
                        <p class="text-sm text-gray-600">{{ $artisan->location }}</p>
                        <p class="text-sm text-gray-800">{{ $artisan->service }}</p>
                        <div class="flex items-center mt-2">
                            @include('partials.status-badge', ['status' => $artisan->status])
                            @include('partials.rating-stars', ['rating' => $artisan->rating])
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Artisan Details -->
        <div class="w-2/3 p-4 pt-0 h-screen overflow-y-auto" id="artisan-details">
        </div>
    </div>
</div>

<script>
    function selectArtisan(artisanId) {
        // Fetch artisan details from server and populate the details section
        // For simplicity, assume we have a global artisans array in JavaScript
        const artisan = artisans.find(a => a.id === artisanId);
        document.getElementById('artisan-details').innerHTML = `
            <div class="flex justify-between items-center mb-4 bg-white p-2 border rounded-lg shadow-md">
                <h3 class="text-2xl font-semibold mb-0">Artisan Details</h3>
                <button class="bg-[#005b96] text-white px-3 py-1 rounded hover:bg-blue-600 transition" onclick="addToFavorites(${artisan.id})">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-2" viewBox="0 0 20 20" fill="currentColor"><path d="M3.172 3.172a4 4 0 015.656 0L10 4.343l1.172-1.171a4 4 0 015.656 5.656L10 16.657 3.172 9.828a4 4 0 010-5.656z" /></svg>
                    Add to Favorites
                </button>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md ">
                <div class="flex items-center space-x-6 mb-4">
                    <img src="${artisan.image}" alt="${artisan.name}" class="w-24 h-24 rounded-full" />
                    <div>
                        <h2 class="text-3xl font-semibold">${artisan.name}</h2>
                        <p class="text-lg text-gray-700">${artisan.service}</p>
                        <p class="text-sm text-gray-500">${artisan.location}</p>
                        <div class="flex items-center mt-2">
                            <span class="text-white text-xs px-2 py-1 rounded bg-${artisan.status === 'approved' ? 'green' : artisan.status === 'high-sells' ? 'orange' : 'red'}-500">
                                ${artisan.status === 'approved' ? 'Approved' : artisan.status === 'high-sells' ? 'High Sells' : 'New'}
                            </span>
                            ${Array.from({ length: 5 }, (_, i) => i < artisan.rating ? '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 ml-2" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927a1 1 0 011.902 0l1.07 3.286h3.462a1 1 0 01.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.286a1 1 0 01-1.538 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034a1 1 0 01-1.538-1.118l1.07-3.286a1 1 0 00-.364-1.118L2.56 8.713a1 1 0 01.588-1.81h3.462l1.07-3.286z"/></svg>' : '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300 ml-2" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927a1 1 0 011.902 0l1.07 3.286h3.462a1 1 0 01.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.286a1 1 0 01-1.538 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034a1 1 0 01-1.538-1.118l1.07-3.286a1 1 0 00-.364-1.118L2.56 8.713a1 1 0 01.588-1.81h3.462l1.07-3.286z"/></svg>').join('')}
                        </div>
                    </div>
                </div>
                <p class="text-gray-800 mb-4">${artisan.details}</p>
                <h3 class="text-xl font-semibold mb-2">Previous Work</h3>
                <div class="grid grid-cols-3 gap-4 mb-4">
                    ${artisan.previousWork.map((work, index) => `<img key="${index}" src="${work}" alt="Work ${index + 1}" class="rounded-lg" />`).join('')}
                </div>
                <h3 class="text-xl font-semibold mb-2">Tarification</h3>
                <p class="text-gray-800 mb-4">${artisan.tarification}</p>
                <h3 class="text-xl font-semibold mb-2">Client Reviews</h3>
                <div class="space-y-4 mb-4">
                    ${artisan.reviews.map((review, index) => `
                        <div key="${index}" class="border rounded-lg p-4 bg-white shadow-sm">
                            <p class="text-sm text-gray-600">${review.comment}</p>
                            ${Array.from({ length: 5 }, (_, i) => i < review.rating ? '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 ml-2" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927a1 1 0 011.902 0l1.07 3.286h3.462a1 1 0 01.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.286a1 1 0 01-1.538 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034a1 1 0 01-1.538-1.118l1.07-3.286a1 1 0 00-.364-1.118L2.56 8.713a1 1 0 01.588-1.81h3.462l1.07-3.286z"/></svg>' : '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300 ml-2" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927a1 1 0 011.902 0l1.07 3.286h3.462a1 1 0 01.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.286a1 1 0 01-1.538 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034a1 1 0 01-1.538-1.118l1.07-3.286a1 1 0 00-.364-1.118L2.56 8.713a1 1 0 01.588-1.81h3.462l1.07-3.286z"/></svg>').join('')}
                        </div>
                    `).join('')}
                </div>
                <div class="flex justify-end">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition" onclick="contactArtisan(${artisan.id})">Contact</button>
                </div>
            </div>
        `;
    }

    function addToFavorites(artisanId) {
        // Add the selected artisan to favorites
        alert('Added to favorites!');
    }

    function contactArtisan(artisanId) {
        // Redirect to contact form
        window.location.href = `/contact/${artisanId}`;
    }

    const artisans = @json($artisans);
</script>
@endsection
