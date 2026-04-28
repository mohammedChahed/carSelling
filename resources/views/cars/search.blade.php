
<x-app-layout>

    <div class="min-h-screen">
        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                
                <!-- Sidebar Filters -->
                <aside class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h2 class="text-lg font-semibold text-gray-800 mb-6">Define your search criteria</h2>
                        
                        <!-- Found Cars Counter -->
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                            <p class="text-sm text-gray-600">Found</p>
                            <p class="text-2xl font-bold text-blue-600">{{ $cars->total() }}</p>
                            <p class="text-xs text-gray-500">cars</p>
                        </div>

                        <!-- Maker Dropdown -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Maker</label>
                            <select class="w-full px-4 py-2 border border-slate-200 rounded-lg bg-white text-gray-700 focus:outline-none focus:border-blue-500">
                                <option>Select Maker</option>
                                <option>Toyota</option>
                                <option>Honda</option>
                                <option>Ford</option>
                                <option>Chevrolet</option>
                                <option>BMW</option>
                            </select>
                        </div>

                        <!-- Model Dropdown -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Model</label>
                            <select class="w-full px-4 py-2 border border-slate-200 rounded-lg bg-white text-gray-700 focus:outline-none focus:border-blue-500">
                                <option>Select Model</option>
                                <option>Camry</option>
                                <option>Corolla</option>
                                <option>Highlander</option>
                                <option>RAV4</option>
                            </select>
                        </div>

                        <!-- Type Dropdown -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Type</label>
                            <select class="w-full px-4 py-2 border border-slate-200 rounded-lg bg-white text-gray-700 focus:outline-none focus:border-blue-500">
                                <option>Select Type</option>
                                <option>Sedan</option>
                                <option>SUV</option>
                                <option>Hatchback</option>
                                <option>Coupe</option>
                                <option>Pickup Truck</option>
                            </select>
                        </div>

                        <!-- Year From/To -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Year</label>
                            <div class="grid grid-cols-2 gap-2">
                                <input type="number" placeholder="From" class="px-3 py-2 border border-slate-200 rounded-lg bg-white text-gray-700 focus:outline-none focus:border-blue-500" min="1990" max="2030">
                                <input type="number" placeholder="To" class="px-3 py-2 border border-slate-200 rounded-lg bg-white text-gray-700 focus:outline-none focus:border-blue-500" min="1990" max="2030">
                            </div>
                        </div>

                        <!-- Price From/To -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Price ($)</label>
                            <div class="grid grid-cols-2 gap-2">
                                <input type="number" placeholder="From" class="px-3 py-2 border border-slate-200 rounded-lg bg-white text-gray-700 focus:outline-none focus:border-blue-500" min="0">
                                <input type="number" placeholder="To" class="px-3 py-2 border border-slate-200 rounded-lg bg-white text-gray-700 focus:outline-none focus:border-blue-500" min="0">
                            </div>
                        </div>

                        <!-- Mileage From/To -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Mileage (km)</label>
                            <div class="grid grid-cols-2 gap-2">
                                <input type="number" placeholder="From" class="px-3 py-2 border border-slate-200 rounded-lg bg-white text-gray-700 focus:outline-none focus:border-blue-500" min="0">
                                <input type="number" placeholder="To" class="px-3 py-2 border border-slate-200 rounded-lg bg-white text-gray-700 focus:outline-none focus:border-blue-500" min="0">
                            </div>
                        </div>

                        <button class="w-full bg-blue-600 text-white font-medium py-2 rounded-lg hover:bg-blue-700 transition">Search</button>
                    </div>
                </aside>

                <!-- Main Content Area -->
                <main class="lg:col-span-3">
                    <!-- Order By -->
                    <div class="flex justify-end mb-6">
                        <select class="px-4 py-2 border border-slate-200 rounded-lg bg-white text-gray-700 focus:outline-none focus:border-blue-500">
                            <option>Sort By: Latest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Year: Newest</option>
                        </select>
                    </div>

                    <!-- Car Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                       @foreach ($cars as $car )
                           <x-card-item :$car/>
                       @endforeach
                     </div>

                     <!-- Pagination -->
                     <div class="mt-8 flex flex-col items-center gap-4">
                        <!-- Pagination Links -->
                        <nav class="flex items-center gap-3" aria-label="Pagination">
                            <!-- Previous Button -->
                            @if ($cars->onFirstPage())
                                <button disabled class="text-gray-300 cursor-not-allowed" aria-label="Previous page">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                            @else
                                <a href="{{ $cars->previousPageUrl() }}" class="text-gray-400 hover:text-gray-600 transition" aria-label="Previous page">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </a>
                            @endif

                            <!-- Page Numbers -->
                            <div class="flex items-center gap-2">
                                @foreach ($cars->getUrlRange(max(1, $cars->currentPage() - 1), min($cars->lastPage(), $cars->currentPage() + 1)) as $page => $url)
                                    @if ($page == $cars->currentPage())
                                        <button class="w-8 h-8 rounded-full bg-orange-500 text-white font-medium text-sm flex items-center justify-center" aria-current="page">{{ $page }}</button>
                                    @else
                                        <a href="{{ $url }}" class="w-8 h-8 text-gray-500 hover:text-gray-700 font-medium text-sm flex items-center justify-center transition">{{ $page }}</a>
                                    @endif
                                @endforeach
                            </div>

                            <!-- Next Button -->
                            @if ($cars->hasMorePages())
                                <a href="{{ $cars->nextPageUrl() }}" class="text-gray-400 hover:text-gray-600 transition" aria-label="Next page">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            @else
                                <button disabled class="text-gray-300 cursor-not-allowed" aria-label="Next page">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            @endif
                        </nav>

                        <!-- Bottom Line -->
                        <div class="w-full h-1 bg-gradient-to-r from-orange-500 via-pink-500 to-purple-500 rounded"></div>
                     </div>

                    

                </main>

            </div>
        </div>
    </div>
</x-app-layout>

