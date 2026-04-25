
<x-app-layout>
    <section class="min-h-screen bg-[#f3f4f6]">
        

        <div class="mx-auto w-full max-w-7xl space-y-6 px-4 py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">
                <div class="space-y-4 lg:col-span-7">
                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <img
                            src="{{ $cars->city->name }}"
                            alt="2016 Lexus RX200t main photo"
                            class="h-[340px] w-full object-cover sm:h-[430px]"
                        >
                    </div>

                    <div class="grid grid-cols-4 gap-3">
                        <button type="button" class="overflow-hidden rounded-xl border-2 border-[#e65100] bg-white shadow-sm">
                            <img
                                src="{{ $cars->city->name }}"
                                alt="Thumbnail front view"
                                class="h-20 w-full object-cover"
                            >
                        </button>
                        <button type="button" class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition hover:border-slate-300">
                            <img
                                src="{{ $cars->city->name }}"
                                alt="Thumbnail side view"
                                class="h-20 w-full object-cover"
                            >
                        </button>
                        <button type="button" class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition hover:border-slate-300">
                            <img
                                src="{{ $cars->city->name }}"
                                alt="Thumbnail rear view"
                                class="h-20 w-full object-cover"
                            >
                        </button>
                        <button type="button" class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition hover:border-slate-300">
                            <img
                                src="{{ $cars->city->name }}"
                                alt="Thumbnail interior"
                                class="h-20 w-full object-cover"
                            >
                        </button>
                    </div>
                </div>

                <aside class="space-y-5 lg:col-span-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 sm:text-3xl">{{ $cars->year }}{{ $cars->model->name  }}</h1>
                        <p class="mt-3 text-4xl font-black text-[#e65100]">${{ $cars->price }}</p>

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
                                <p class="mt-1 text-sm font-bold text-slate-800">{{ $cars->mileage }} km</p>
                            </div>
                            <div class="rounded-xl bg-slate-50 p-3">
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Fuel Type</p>
                                <p class="mt-1 text-sm font-bold text-slate-800">$cars->fuel->name</p>
                            </div>
                            <div class="rounded-xl bg-slate-50 p-3">
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">TRANSMITION</p>
                                <p class="mt-1 text-sm font-bold text-slate-800">Automatic</p>
                            </div>
                            <div class="rounded-xl bg-slate-50 p-3">
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">ENGINE</p>
                                <p class="mt-1 text-sm font-bold text-slate-800">2.0L Turbo</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

            <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-7">
                <h2 class="text-xl font-extrabold tracking-tight text-slate-900">Seller Information</h2>
                <div class="mt-6 flex items-center justify-between rounded-xl bg-gradient-to-r from-[#e65100]/10 to-orange-100 p-6">
                    <div class="flex items-center space-x-6">
                        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#e65100]">
                            <span class="text-2xl font-bold text-white">{{ substr($cars->user->name, 0, 1) }}</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $cars->user->name }}</h3>
                            <p class="mt-1 flex items-center text-slate-600">
                                <svg class="mr-2 h-5 w-5 text-[#e65100]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.8c.07.572.194 1.12.36 1.635A1 1 0 0 1 6.737 6.61l-1.4.98a6.002 6.002 0 0010.326 10.326l.98-1.4a1 1 0 011.54.486c.07.21.126.434.16.658.003.02.006.04.009.06a1 1 0 01-.992 1.1H17a1 1 0 01-1-1v-2.153a6 6 0 00-6-6 1 1 0 00-1 1v2.155D"></path>
                                </svg>
                                {{ $cars->user->phone ?? 'Not provided' }}
                            </p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-4xl font-black text-[#e65100]">{{ $cars->user->cars()->count() }}</p>
                        <p class="mt-1 text-sm font-semibold text-slate-600">Listed Cars</p>
                    </div>
                </div>
            </section>

            <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-7">
                <h2 class="text-xl font-extrabold tracking-tight text-slate-900">Description</h2>
                <p class="mt-3 leading-7 text-slate-600">
                    {{ $cars->description }}
                </p>
            </section>
        </div>
    </section>
</x-app-layout>