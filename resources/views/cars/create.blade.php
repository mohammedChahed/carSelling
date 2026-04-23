@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-[#f3f4f6] px-4 py-8 sm:px-6 lg:px-8">
    <div class="mx-auto w-full max-w-7xl">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-7 lg:p-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-12">
                <div class="lg:col-span-8">
                    <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 sm:text-3xl">Add new car</h1>

                    <form class="mt-6 space-y-6" action="#" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                            <label class="block">
                                <span class="mb-1.5 block text-sm font-semibold text-slate-700">Make</span>
                                <select class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-[#e65100] focus:ring-4">
                                    <option>Select Make</option>
                                    <option>Lexus</option>
                                    <option>BMW</option>
                                    <option>Toyota</option>
                                    <option>Audi</option>
                                </select>
                            </label>

                            <label class="block">
                                <span class="mb-1.5 block text-sm font-semibold text-slate-700">Model</span>
                                <select class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-[#e65100] focus:ring-4">
                                    <option>Select Model</option>
                                    <option>RX200t</option>
                                    <option>X5</option>
                                    <option>Camry</option>
                                    <option>A4</option>
                                </select>
                            </label>

                            <label class="block">
                                <span class="mb-1.5 block text-sm font-semibold text-slate-700">Year</span>
                                <select class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-[#e65100] focus:ring-4">
                                    <option>Select Year</option>
                                    <option>2024</option>
                                    <option>2023</option>
                                    <option>2022</option>
                                    <option>2021</option>
                                </select>
                            </label>
                        </div>

                        <fieldset class="space-y-2">
                            <legend class="text-sm font-semibold text-slate-700">Car Type</legend>
                            <div class="flex flex-wrap gap-4">
                                <label class="inline-flex items-center gap-2 text-sm text-slate-700">
                                    <input type="radio" name="car_type" class="h-4 w-4 border-slate-300 text-[#e65100] focus:ring-[#e65100]" checked>
                                    Sedan
                                </label>
                                <label class="inline-flex items-center gap-2 text-sm text-slate-700">
                                    <input type="radio" name="car_type" class="h-4 w-4 border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    Hatchback
                                </label>
                                <label class="inline-flex items-center gap-2 text-sm text-slate-700">
                                    <input type="radio" name="car_type" class="h-4 w-4 border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    SUV
                                </label>
                            </div>
                        </fieldset>

                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <label class="block">
                                <span class="mb-1.5 block text-sm font-semibold text-slate-700">Price</span>
                                <input type="number" placeholder="e.g. 25000" class="w-full rounded-lg border border-slate-200 px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-[#e65100] focus:ring-4">
                            </label>

                            <label class="block">
                                <span class="mb-1.5 block text-sm font-semibold text-slate-700">VIN Code</span>
                                <input type="text" placeholder="e.g. 1HGCM82633A123456" class="w-full rounded-lg border border-slate-200 px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-[#e65100] focus:ring-4">
                            </label>
                        </div>

                        <fieldset class="space-y-2">
                            <legend class="text-sm font-semibold text-slate-700">Fuel Type</legend>
                            <div class="flex flex-wrap gap-4">
                                <label class="inline-flex items-center gap-2 text-sm text-slate-700">
                                    <input type="radio" name="fuel_type" class="h-4 w-4 border-slate-300 text-[#e65100] focus:ring-[#e65100]" checked>
                                    Gasoline
                                </label>
                                <label class="inline-flex items-center gap-2 text-sm text-slate-700">
                                    <input type="radio" name="fuel_type" class="h-4 w-4 border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    Diesel
                                </label>
                                <label class="inline-flex items-center gap-2 text-sm text-slate-700">
                                    <input type="radio" name="fuel_type" class="h-4 w-4 border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    Electric
                                </label>
                                <label class="inline-flex items-center gap-2 text-sm text-slate-700">
                                    <input type="radio" name="fuel_type" class="h-4 w-4 border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    Hybrid
                                </label>
                            </div>
                        </fieldset>

                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <label class="block">
                                <span class="mb-1.5 block text-sm font-semibold text-slate-700">State / Region</span>
                                <select class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-[#e65100] focus:ring-4">
                                    <option>Select State</option>
                                    <option>California</option>
                                    <option>New York</option>
                                    <option>Texas</option>
                                    <option>Florida</option>
                                </select>
                            </label>

                            <label class="block">
                                <span class="mb-1.5 block text-sm font-semibold text-slate-700">City</span>
                                <select class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-[#e65100] focus:ring-4">
                                    <option>Select City</option>
                                    <option>Los Angeles</option>
                                    <option>New York City</option>
                                    <option>Houston</option>
                                    <option>Miami</option>
                                </select>
                            </label>
                        </div>

                        <fieldset class="space-y-3">
                            <legend class="text-sm font-semibold text-slate-700">Features</legend>
                            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                                <label class="inline-flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700">
                                    <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    Air Conditioning
                                </label>
                                <label class="inline-flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700">
                                    <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    Keyless Entry
                                </label>
                                <label class="inline-flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700">
                                    <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    Sunroof
                                </label>
                                <label class="inline-flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700">
                                    <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    Bluetooth
                                </label>
                                <label class="inline-flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700">
                                    <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    Rear Camera
                                </label>
                                <label class="inline-flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700">
                                    <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-[#e65100] focus:ring-[#e65100]">
                                    Parking Sensors
                                </label>
                            </div>
                        </fieldset>

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center rounded-lg bg-[#e65100] px-6 py-3 text-sm font-bold text-white shadow-[0_12px_26px_rgba(230,81,0,.24)] transition hover:brightness-110"
                        >
                            Submit
                        </button>
                    </form>
                </div>

                <aside class="lg:col-span-4">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <p class="text-sm font-semibold text-slate-700">Car Images</p>
                        <label
                            for="car-image-upload"
                            class="mt-3 flex aspect-square w-full cursor-pointer items-center justify-center rounded-2xl border-2 border-dashed border-slate-300 bg-white text-slate-400 transition hover:border-[#e65100] hover:text-[#e65100]"
                        >
                            <span class="inline-flex h-14 w-14 items-center justify-center rounded-full border border-slate-300 text-3xl leading-none">+</span>
                        </label>
                        <input id="car-image-upload" type="file" class="sr-only" accept="image/*" multiple>
                        <p class="mt-3 text-xs text-slate-500">Click to upload one or multiple car photos.</p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
