<x-app-layout>
    <section class="min-h-screen bg-[#f3f4f6]">
        <div class="mx-auto w-full max-w-7xl space-y-6 px-4 py-8 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="flex items-center justify-between rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <div>
                    <h1 class="text-3xl font-extrabold text-slate-900">My Cars</h1>
                    <p class="mt-1 text-slate-600">Manage and view all your listed vehicles</p>
                </div>
                <a href="{{ route('create') }}" class="inline-flex items-center rounded-xl bg-[#e65100] px-6 py-3 text-sm font-bold text-white shadow-[0_12px_28px_rgba(230,81,0,.28)] transition hover:brightness-110">
                    <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add New Car
                </a>
            </div>

            <!-- Empty State -->
            @if($cars->isEmpty())
            <div class="rounded-2xl border border-dashed border-slate-300 bg-slate-50 p-12 text-center">
                <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">No cars listed yet</h3>
                <p class="mt-1 text-slate-600">Start by adding your first car to the marketplace</p>
                <a href="{{ route('create') }}" class="mt-4 inline-flex rounded-lg bg-[#e65100] px-4 py-2 text-sm font-semibold text-white transition hover:brightness-110">
                    Add Your First Car
                </a>
            </div>
            @else

            <!-- Table -->
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-slate-200 bg-slate-50">
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-600">Image</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-600">Title</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-600">Price</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-600">Published</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-600">Status</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-600">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200">
                            @foreach($cars as $car)
                            <tr class="transition hover:bg-slate-50">
                                <!-- Image -->
                                <td class="px-6 py-4">
                                    <img src="{{ $car->carImage->image_url ?? 'https://via.placeholder.com/80' }}" alt="{{ $car->model->name }}" class="h-16 w-16 rounded-lg object-cover">
                                </td>

                                <!-- Title -->
                                <td class="px-6 py-4">
                                    <div>
                                        <p class="font-semibold text-slate-900">{{ $car->year }} {{ $car->model->name }}</p>
                                        <p class="text-sm text-slate-500">{{ $car->city->name ?? 'Unknown' }}</p>
                                    </div>
                                </td>

                                <!-- Price -->
                                <td class="px-6 py-4">
                                    <p class="font-bold text-[#e65100]">${{ number_format($car->price, 0) }}</p>
                                </td>

                                <!-- Published Date -->
                                <td class="px-6 py-4">
                                    <p class="text-sm text-slate-600">
                                        @if($car->published_at)
                                            {{ \Carbon\Carbon::parse($car->published_at)->format('M d, Y') }}
                                        @else
                                            <span class="text-slate-400">Not published</span>
                                        @endif
                                    </p>
                                </td>

                                <!-- Status -->
                                <td class="px-6 py-4">
                                    @if($car->published_at)
                                        <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">Active</span>
                                    @else
                                        <span class="inline-flex rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700">Draft</span>
                                    @endif
                                </td>

                                <!-- Actions -->
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <!-- Edit Button -->
                                        <a href="{{ route('create') }}" class="inline-flex rounded-lg bg-blue-100 p-2 text-blue-600 transition hover:bg-blue-200" title="Edit">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                            </svg>
                                        </a>

                                        <!-- Images Button -->
                                        <a href="{{ route('create') }}" class="inline-flex rounded-lg bg-purple-100 p-2 text-purple-600 transition hover:bg-purple-200" title="Manage Images">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"></path>
                                            </svg>
                                        </a>

                                        <!-- Delete Button -->
                                        <form method="POST" action="{{ route('cars') }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this car?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex rounded-lg bg-red-100 p-2 text-red-600 transition hover:bg-red-200" title="Delete">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </section>
</x-app-layout>