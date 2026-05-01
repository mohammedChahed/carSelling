

<x-base-layout title="SignIn" bodyClass="page-login">
    {{-- Main Container: Ensure it takes up enough space and centers content --}}
    <div class="w-full max-w-7xl mx-auto min-h-screen flex flex-col">
        
        <header class="px-6 py-6 sm:px-10">
            <div class="inline-flex items-center gap-2.5 select-none" aria-label="Logoipsum">
                <svg class="h-8 w-8" viewBox="0 0 64 64" aria-hidden="true">
                    <path fill="#e65100" d="M32 2l6.8 16.8L56 12l-8.2 15.9L62 32l-14.2 4.1L56 52l-17.2-6.8L32 62l-6.8-16.8L8 52l8.2-15.9L2 32l14.2-4.1L8 12l17.2 6.8L32 2z"/>
                </svg>
                <span class="font-bold tracking-tight text-xl">Logoipsum</span>
            </div>
        </header>

        <main class="flex-grow flex items-center px-6 pb-10 sm:px-10" role="main">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 w-full items-center">
                
                {{-- Form Section --}}
                <section class="flex justify-center lg:justify-start">
                    <div class="w-full max-w-md">
                        <h1 class="text-4xl font-extrabold text-slate-900 mb-8 text-center lg:text-left">Login</h1>

                        <form method="POST" action="/signin" autocomplete="on" class="space-y-4">
                            @csrf

                            <div>
                                <input
                                    class="h-12 w-full rounded-lg border border-slate-200 bg-white px-4 text-sm outline-none transition-all focus:border-[#e65100] focus:ring-4 focus:ring-[#e65100]/10"
                                    type="email"
                                    name="email"
                                    placeholder="Your Email"
                                    inputmode="email"
                                    autocomplete="email"
                                    required
                                />
                            </div>
                            <x-form-error name="email" />

                            <div>
                                <input
                                    class="h-12 w-full rounded-lg border border-slate-200 bg-white px-4 text-sm outline-none transition-all focus:border-[#e65100] focus:ring-4 focus:ring-[#e65100]/10"
                                    type="password"
                                    name="password"
                                    placeholder="Your Password"
                                    autocomplete="current-password"
                                    required
                                />
                            </div>
                            <x-form-error name="password" />
                            <div class="flex justify-end">
                                <a class="text-sm font-semibold text-[#e65100] hover:text-[#d34900] transition-colors" href="#">Reset Password</a>
                            </div>

                            <button
                                type="submit"
                                class="h-12 w-full rounded-lg bg-[#e65100] text-white text-sm font-bold shadow-lg shadow-orange-900/20 transition-all active:scale-[0.98] hover:bg-[#d34900] focus:ring-4 focus:ring-[#e65100]/20"
                            >
                                Login
                            </button>

                            {{-- Divider --}}
                            <div class="relative py-4">
                                <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-slate-200"></div></div>
                                <div class="relative flex justify-center text-xs uppercase"><span class="bg-white px-2 text-slate-500">Or continue with</span></div>
                            </div>

                           <x-sociel-media />

                            <div class="pt-6 text-center text-sm text-slate-500">
                                <span>Don't have an account? </span>
                                <a class="font-bold text-[#e65100] hover:underline decoration-2 underline-offset-4" href="{{ route('signup') }}">Create an account</a>
                            </div>
                        </form>
                    </div>
                </section>

                {{-- Hero Image Section --}}
                <aside class="hidden lg:block relative w-full h-full min-h-[500px]" aria-label="Hero image">
                    <div class="absolute inset-0 rounded-3xl overflow-hidden shadow-2xl shadow-slate-200">
                        <img
                            class="h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a?auto=format&fit=crop&w=1400&q=80"
                            alt="Orange Range Rover Evoque"
                        />
                        {{-- Optional Overlay for better integration --}}
                        <div class="absolute inset-0 bg-gradient-to-tr from-orange-500/10 to-transparent pointer-events-none"></div>
                    </div>
                </aside>
                
                {{-- Mobile Image (Visible only on small screens) --}}
                <div class="lg:hidden w-full h-64 rounded-2xl overflow-hidden mb-8 order-first">
                     <img
                        class="h-full w-full object-cover"
                        src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a?auto=format&fit=crop&w=1400&q=80"
                        alt="Orange Range Rover Evoque"
                    />
                </div>

            </div>
        </main>
    </div>
</x-base-layout>