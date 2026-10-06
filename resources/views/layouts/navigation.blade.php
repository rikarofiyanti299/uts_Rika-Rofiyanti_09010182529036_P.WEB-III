<nav class="shadow-lg" 
     style="background: linear-gradient(135deg, #ec4899, #db2777); 
            border-bottom: 3px solid #fbcfe8;
            position: relative;
            z-index: 50;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 16px;">
        <div style="display: flex; justify-content: space-between; align-items: center; height: 64px;">

            <div style="display: flex; align-items: center; gap: 32px;">
                <a href="{{ route('dashboard') }}" style="display: flex; align-items: center; gap: 8px; text-decoration: none;">
                    <span class="text-3xl float-icon">📚</span>
                    <span class="font-extrabold text-xl text-white">Perpustakaan</span>
                </a>

                <div class="hidden sm:flex" style="gap: 24px;">
                    <a href="{{ route('dashboard') }}" 
                       class="text-white font-semibold hover:text-pink-200 transition py-2"
                       style="text-decoration: none; {{ request()->routeIs('dashboard') ? 'border-bottom: 4px solid #fbcfe8;' : '' }}">
                        🏠 Dashboard
                    </a>
                    <a href="{{ route('books.index') }}" 
                       class="text-white font-semibold hover:text-pink-200 transition py-2"
                       style="text-decoration: none; {{ request()->routeIs('books.*') ? 'border-bottom: 4px solid #fbcfe8;' : '' }}">
                        📖 Data Buku
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex" style="align-items: center; gap: 12px;">
                <span class="text-white text-sm">
                    Halo, <strong>{{ Auth::user()->name ?? 'User' }}</strong> 💕
                </span>
                <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                    @csrf
                    <button type="submit" 
                            style="padding: 8px 18px; border-radius: 20px; border: none; font-weight: 600; font-size: 14px; cursor: pointer; background: white; color: #be185d;">
                        Logout 🚪
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>