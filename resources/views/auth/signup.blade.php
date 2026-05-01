
<x-base-layout title="Signup" bodyClass="signupPage">
    <div class="min-h-screen bg-white flex items-center justify-center px-4">
      <div class="w-full max-w-5xl">
        <header class="mb-10 flex items-center justify-center">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-2xl" style="background:linear-gradient(135deg,#e65100,#ffb37a); box-shadow:0 10px 20px rgba(230,81,0,.35);"></div>
            <span class="text-lg font-extrabold tracking-tight text-slate-900">Logoipsum</span>
          </div>
        </header>

        <main class="grid grid-cols-1 gap-10 items-center lg:grid-cols-2">
          <section class="w-full">
            <div class="max-w-md mx-auto space-y-6">
              <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 text-center">Signup</h1>

              <form class="space-y-4" method="POST" action="/signup">
                @csrf
                <div>
                  <input
                    type="email"
                    name="email"
                    placeholder="Your Email"
                    class="w-full rounded-xl border border-gray-200 bg-white px-3 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-[#e65100] focus:outline-none focus:ring-4 focus:ring-orange-100"
                  >
                </div>
                <div>
                  <input
                    type="password"
                    name="password"
                    placeholder="Your Password"
                    class="w-full rounded-xl border border-gray-200 bg-white px-3 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-[#e65100] focus:outline-none focus:ring-4 focus:ring-orange-100"
                  >
                </div>
              
                <div>
                  <input
                    type="text"
                    name="name"
                    placeholder=" Name"
                    class="w-full rounded-xl border border-gray-200 bg-white px-3 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-[#e65100] focus:outline-none focus:ring-4 focus:ring-orange-100"
                  >
                </div>
               
                <div>
                  <input
                    type="tel"
                    name="phone"
                    placeholder="Phone"
                    class="w-full rounded-xl border border-gray-200 bg-white px-3 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-[#e65100] focus:outline-none focus:ring-4 focus:ring-orange-100"
                  >
                </div>

                <button
                  type="submit"
                  class="mt-2 w-full rounded-xl bg-[#e65100] px-4 py-3 text-sm font-extrabold text-white shadow-[0_12px_26px_rgba(230,81,0,.22)] hover:shadow-[0_16px_34px_rgba(230,81,0,.28)]"
                >
                  Register
                </button>
              </form>

              <x-sociel-media />

              <div class="pt-6 text-center text-sm text-slate-500">
                    <span>you have an account? </span>
                  <a class="font-bold text-[#e65100] hover:underline decoration-2 underline-offset-4" href="#">Sign in to your account</a>
              </div>
            </div>
          </section>

          <section class="w-full hidden lg:block">
            <div class="w-full rounded-3xl overflow-hidden border border-gray-200">
              <img
                src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a?auto=format&fit=crop&w=1400&q=80"
                alt="Bright orange Range Rover Evoque"
                class="w-full h-full object-cover"
              >
            </div>
          </section>
        </main>
      </div>
    </div>
</x-base-layout>