
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
                            <p class="text-2xl font-bold text-blue-600">1,240</p>
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
                        
                        <!-- Card 1 -->
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
                            <!-- Image -->
                            <div class="relative bg-gray-200 h-48 overflow-hidden">
                                <img src="https://via.placeholder.com/400x300?text=2016+Lexus+RX200t" alt="Car" class="w-full h-full object-cover">
                                <button class="absolute top-3 right-3 bg-white rounded-full p-2 shadow hover:bg-gray-100 transition">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Content -->
                            <div class="p-4">
                                <p class="text-sm text-gray-500 mb-1">New Jersey</p>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">2016 - Lexus RX200t</h3>
                                <p class="text-2xl font-bold text-blue-600 mb-4">$25,000</p>

                                <!-- Badges -->
                                <div class="flex flex-wrap gap-2">
                                    <span class="inline-block bg-gray-100 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">SUV</span>
                                    <span class="inline-block bg-gray-100 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">Gasoline</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
                            <!-- Image -->
                            <div class="relative bg-gray-200 h-48 overflow-hidden">
                                <img src="https://via.placeholder.com/400x300?text=2018+Honda+Civic" alt="Car" class="w-full h-full object-cover">
                                <button class="absolute top-3 right-3 bg-white rounded-full p-2 shadow hover:bg-gray-100 transition">
                                    <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Content -->
                            <div class="p-4">
                                <p class="text-sm text-gray-500 mb-1">Los Angeles</p>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">2018 - Honda Civic</h3>
                                <p class="text-2xl font-bold text-blue-600 mb-4">$18,500</p>

                                <!-- Badges -->
                                <div class="flex flex-wrap gap-2">
                                    <span class="inline-block bg-gray-100 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">Sedan</span>
                                    <span class="inline-block bg-gray-100 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">Hybrid</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
                            <!-- Image -->
                            <div class="relative bg-gray-200 h-48 overflow-hidden">
                                <img src="https://via.placeholder.com/400x300?text=2020+Ford+F-150" alt="Car" class="w-full h-full object-cover">
                                <button class="absolute top-3 right-3 bg-white rounded-full p-2 shadow hover:bg-gray-100 transition">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Content -->
                            <div class="p-4">
                                <p class="text-sm text-gray-500 mb-1">Houston</p>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">2020 - Ford F-150</h3>
                                <p class="text-2xl font-bold text-blue-600 mb-4">$32,800</p>

                                <!-- Badges -->
                                <div class="flex flex-wrap gap-2">
                                    <span class="inline-block bg-gray-100 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">Pickup Truck</span>
                                    <span class="inline-block bg-gray-100 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">Diesel</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
                            <!-- Image -->
                            <div class="relative bg-gray-200 h-48 overflow-hidden">
                                <img src="https://via.placeholder.com/400x300?text=2021+Tesla+Model+3" alt="Car" class="w-full h-full object-cover">
                                <button class="absolute top-3 right-3 bg-white rounded-full p-2 shadow hover:bg-gray-100 transition">
                                    <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Content -->
                            <div class="p-4">
                                <p class="text-sm text-gray-500 mb-1">San Francisco</p>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">2021 - Tesla Model 3</h3>
                                <p class="text-2xl font-bold text-blue-600 mb-4">$42,000</p>

                                <!-- Badges -->
                                <div class="flex flex-wrap gap-2">
                                    <span class="inline-block bg-gray-100 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">Sedan</span>
                                    <span class="inline-block bg-gray-100 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">Electric</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center items-center gap-2 mt-8">
                        <button class="px-4 py-2 border border-slate-200 rounded-lg text-gray-700 hover:bg-gray-50">← Prev</button>
                        <button class="px-3 py-2 bg-blue-600 text-white rounded-lg">1</button>
                        <button class="px-3 py-2 border border-slate-200 rounded-lg text-gray-700 hover:bg-gray-50">2</button>
                        <button class="px-3 py-2 border border-slate-200 rounded-lg text-gray-700 hover:bg-gray-50">3</button>
                        <button class="px-4 py-2 border border-slate-200 rounded-lg text-gray-700 hover:bg-gray-50">Next →</button>
                    </div>

                </main>

            </div>
        </div>
    </div>
</x-app-layout>

