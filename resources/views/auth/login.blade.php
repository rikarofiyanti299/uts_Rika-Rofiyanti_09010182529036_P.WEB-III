<x-guest-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-5">
            <label for="email" class="block font-bold mb-2" style="color: #be185d; font-size: 0.95rem;">
                Email Address
            </label>
            <div style="position: relative;">
                <span style="position: absolute; left: 18px; top: 50%; transform: translateY(-50%); font-size: 1.1rem;">📧</span>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                       autocomplete="username"
                       class="pink-input"
                       style="padding: 16px 18px 16px 50px; font-size: 1rem;"
                       placeholder="admin@perpus.test">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-5">
            <label for="password" class="block font-bold mb-2" style="color: #be185d; font-size: 0.95rem;">
                Password
            </label>
            <div style="position: relative;">
                <span style="position: absolute; left: 18px; top: 50%; transform: translateY(-50%); font-size: 1.1rem;">🔒</span>
                <input id="password" type="password" name="password" required
                       autocomplete="current-password"
                       class="pink-input"
                       style="padding: 16px 18px 16px 50px; font-size: 1rem;"
                       placeholder="••••••••">
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center mb-6">
            <label for="remember_me" class="inline-flex items-center" style="cursor: pointer;">
                <input id="remember_me" type="checkbox" name="remember"
                       style="width: 18px; height: 18px; accent-color: #ec4899; cursor: pointer;">
                <span class="ms-2" style="color: #be185d; font-size: 0.95rem;">Ingat saya</span>
            </label>
        </div>

        <!-- Button Login -->
        <button type="submit"
                class="blink-btn"
                style="width: 100%;
                       color: white;
                       font-weight: bold;
                       padding: 16px;
                       border-radius: 12px;
                       border: none;
                       cursor: pointer;
                       position: relative;
                       z-index: 30;
                       font-size: 1.05rem;
                       letter-spacing: 0.3px;
                       background: linear-gradient(135deg, #ec4899, #db2777);
                       box-shadow: 0 10px 25px rgba(236, 72, 153, 0.4);">
            💖 Masuk ke Perpustakaan
        </button>

        <!-- Link Register -->
        <p class="text-center mt-5" style="color: #be185d; font-size: 0.9rem;">
            Belum punya akun?
            <a href="{{ route('register') }}" class="font-bold hover:underline" style="color: #ec4899;">
                Daftar di sini 🌸
            </a>
        </p>

    </form>

</x-guest-layout>