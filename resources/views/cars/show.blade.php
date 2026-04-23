
<x-app-layout>
    <section class="min-h-screen bg-[#f3f4f6]">
        

        <div class="mx-auto w-full max-w-7xl space-y-6 px-4 py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">
                <div class="space-y-4 lg:col-span-7">
                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <img
                            src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a?auto=format&fit=crop&w=1600&q=80"
                            alt="2016 Lexus RX200t main photo"
                            class="h-[340px] w-full object-cover sm:h-[430px]"
                        >
                    </div>

                    <div class="grid grid-cols-4 gap-3">
                        <button type="button" class="overflow-hidden rounded-xl border-2 border-[#e65100] bg-white shadow-sm">
                            <img
                                src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a?auto=format&fit=crop&w=600&q=80"
                                alt="Thumbnail front view"
                                class="h-20 w-full object-cover"
                            >
                        </button>
                        <button type="button" class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition hover:border-slate-300">
                            <img
                                src="https://images.unsplash.com/photo-1542362567-b07e54358753?auto=format&fit=crop&w=600&q=80"
                                alt="Thumbnail side view"
                                class="h-20 w-full object-cover"
                            >
                        </button>
                        <button type="button" class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition hover:border-slate-300">
                            <img
                                src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=600&q=80"
                                alt="Thumbnail rear view"
                                class="h-20 w-full object-cover"
                            >
                        </button>
                        <button type="button" class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition hover:border-slate-300">
                            <img
                                src="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=600&q=80"
                                alt="Thumbnail interior"
                                class="h-20 w-full object-cover"
                            >
                        </button>
                    </div>
                </div>

                <aside class="space-y-5 lg:col-span-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 sm:text-3xl">2016 Lexus RX200t</h1>
                        <p class="mt-3 text-4xl font-black text-[#e65100]">$25,000</p>

                        <button
                            type="button"
                            class="mt-5 inline-flex w-full items-center justify-center rounded-xl bg-[#e65100] px-5 py-3 text-sm font-bold text-white shadow-[0_12px_28px_rgba(230,81,0,.28)] transition hover:brightness-110"
                        >
                            Contact Seller
                        </button>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h2 class="text-base font-bold text-slate-900">Technical Specs</h2>

                        <div class="mt-4 grid grid-cols-2 gap-3">
                            <div class="rounded-xl bg-slate-50 p-3">
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Mileage</p>
                                <p class="mt-1 text-sm font-bold text-slate-800">78,500 km</p>
                            </div>
                            <div class="rounded-xl bg-slate-50 p-3">
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Fuel Type</p>
                                <p class="mt-1 text-sm font-bold text-slate-800">Gasoline</p>
                            </div>
                            <div class="rounded-xl bg-slate-50 p-3">
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Transmission</p>
                                <p class="mt-1 text-sm font-bold text-slate-800">Automatic</p>
                            </div>
                            <div class="rounded-xl bg-slate-50 p-3">
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Engine</p>
                                <p class="mt-1 text-sm font-bold text-slate-800">2.0L Turbo</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

            <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-7">
                <h2 class="text-xl font-extrabold tracking-tight text-slate-900">Description</h2>
                <p class="mt-3 leading-7 text-slate-600">
                    This 2016 Lexus RX200t is in excellent condition, combining a smooth ride with premium comfort and modern safety features.
                    It has been regularly maintained, drives perfectly, and is ideal for both city commuting and long-distance travel.
                    The interior is clean and refined, with quality materials and advanced infotainment to make every drive enjoyable.
                </p>
            </section>
        </div>
    </section>
</x-app-layout>