<x-app-layout>
    <section class="min-h-screen bg-[#f3f4f6]">
        

        <div class="mx-auto grid w-full max-w-7xl grid-cols-1 gap-6 px-4 py-8 sm:px-6 lg:grid-cols-12 lg:px-8">
            <aside class="lg:col-span-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <h2 class="text-base font-bold text-slate-900">Filter Cars</h2>
                    <p class="mt-1 text-sm text-slate-500">Narrow your search results.</p>

                    <div class="mt-5 space-y-4">
                        <label class="block">
                            <span class="mb-1.5 block text-xs font-semibold uppercase tracking-wide text-slate-500">Make</span>
                            <select class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-orange-500 focus:ring-4">
                                <option>All Makes</option>
                                <option>Lexus</option>
                                <option>BMW</option>
                                <option>Toyota</option>
                                <option>Audi</option>
                            </select>
                        </label>

                        <label class="block">
                            <span class="mb-1.5 block text-xs font-semibold uppercase tracking-wide text-slate-500">Model</span>
                            <select class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-orange-500 focus:ring-4">
                                <option>All Models</option>
                                <option>RX200t</option>
                                <option>X5</option>
                                <option>Camry</option>
                                <option>A4</option>
                            </select>
                        </label>

                        <label class="block">
                            <span class="mb-1.5 block text-xs font-semibold uppercase tracking-wide text-slate-500">Price Range</span>
                            <select class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-orange-500 focus:ring-4">
                                <option>Any Price</option>
                                <option>$10,000 - $20,000</option>
                                <option>$20,000 - $30,000</option>
                                <option>$30,000 - $50,000</option>
                                <option>$50,000+</option>
                            </select>
                        </label>

                        <label class="block">
                            <span class="mb-1.5 block text-xs font-semibold uppercase tracking-wide text-slate-500">Fuel Type</span>
                            <select class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none ring-orange-100 transition focus:border-orange-500 focus:ring-4">
                                <option>All Fuel Types</option>
                                <option>Gasoline</option>
                                <option>Hybrid</option>
                                <option>Electric</option>
                                <option>Diesel</option>
                            </select>
                        </label>
                    </div>
                </div>
            </aside>

            <main class="lg:col-span-9">
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
                    <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <img
                            src="https://images.unsplash.com/photo-1614200187524-dc4b892acf16?auto=format&fit=crop&w=1200&q=80"
                            alt="2016 Lexus RX200t"
                            class="h-48 w-full object-cover"
                        >
                        <div class="space-y-3 p-4">
                            <h3 class="text-base font-bold text-slate-900">2016 Lexus RX200t</h3>
                            <p class="text-xl font-extrabold text-orange-600">$25,000</p>
                            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">New Jersey</span>
                            <button type="button" class="w-full rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800">View Details</button>
                        </div>
                    </article>

                    <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <img
                            src="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=1200&q=80"
                            alt="2019 BMW X5"
                            class="h-48 w-full object-cover"
                        >
                        <div class="space-y-3 p-4">
                            <h3 class="text-base font-bold text-slate-900">2019 BMW X5</h3>
                            <p class="text-xl font-extrabold text-orange-600">$38,000</p>
                            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">New York</span>
                            <button type="button" class="w-full rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800">View Details</button>
                        </div>
                    </article>

                    <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <img
                            src="https://images.unsplash.com/photo-1542362567-b07e54358753?auto=format&fit=crop&w=1200&q=80"
                            alt="2020 Toyota Camry"
                            class="h-48 w-full object-cover"
                        >
                        <div class="space-y-3 p-4">
                            <h3 class="text-base font-bold text-slate-900">2020 Toyota Camry</h3>
                            <p class="text-xl font-extrabold text-orange-600">$22,000</p>
                            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">California</span>
                            <button type="button" class="w-full rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800">View Details</button>
                        </div>
                    </article>

                    <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <img
                            src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1200&q=80"
                            alt="2018 Audi A4"
                            class="h-48 w-full object-cover"
                        >
                        <div class="space-y-3 p-4">
                            <h3 class="text-base font-bold text-slate-900">2018 Audi A4</h3>
                            <p class="text-xl font-extrabold text-orange-600">$27,500</p>
                            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Texas</span>
                            <button type="button" class="w-full rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800">View Details</button>
                        </div>
                    </article>

                    <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <img
                            src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1200&q=80"
                            alt="2021 Mercedes C300"
                            class="h-48 w-full object-cover"
                        >
                        <div class="space-y-3 p-4">
                            <h3 class="text-base font-bold text-slate-900">2021 Mercedes C300</h3>
                            <p class="text-xl font-extrabold text-orange-600">$41,200</p>
                            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Florida</span>
                            <button type="button" class="w-full rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800">View Details</button>
                        </div>
                    </article>

                    <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <img
                            src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=1200&q=80"
                            alt="2017 Honda Civic"
                            class="h-48 w-full object-cover"
                        >
                        <div class="space-y-3 p-4">
                            <h3 class="text-base font-bold text-slate-900">2017 Honda Civic</h3>
                            <p class="text-xl font-extrabold text-orange-600">$18,900</p>
                            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Arizona</span>
                            <button type="button" class="w-full rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800">View Details</button>
                        </div>
                    </article>
                </div>
            </main>
        </div>
    </section>
</x-app-layout>