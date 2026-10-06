<x-app-layout>
    <x-slot name="header">
        <span>🏠</span> Dashboard
    </x-slot>

    <div style="padding: 48px 16px;">
        <div style="max-width: 1280px; margin: 0 auto;">

            <div class="pink-card" style="padding: 32px; text-align: center; margin-bottom: 24px;">
                <span class="text-6xl float-icon">💖</span>
                <h3 class="text-3xl font-extrabold shimmer-text" style="margin-top: 16px;">
                    Selamat Datang, {{ Auth::user()->name }}!
                </h3>
                <p style="margin-top: 8px; color: #be185d;">
                    Anda berhasil login ke Sistem Perpustakaan Pink 🌸
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin-bottom: 24px;">

                <div class="pink-card" style="padding: 24px; text-align: center;">
                    <div class="text-5xl float-icon" style="margin-bottom: 8px;">📚</div>
                    <div class="text-sm font-semibold uppercase" style="color: #be185d;">Total Judul Buku</div>
                    <div style="font-size: 36px; font-weight: 800; color: #ec4899; margin-top: 8px;">{{ $totalBooks ?? 0 }}</div>
                </div>

                <div class="pink-card" style="padding: 24px; text-align: center;">
                    <div class="text-5xl float-icon" style="margin-bottom: 8px;">📦</div>
                    <div class="text-sm font-semibold uppercase" style="color: #be185d;">Total Stok Buku</div>
                    <div style="font-size: 36px; font-weight: 800; color: #ec4899; margin-top: 8px;">{{ $totalStock ?? 0 }}</div>
                </div>

            </div>

            <div style="text-align: center; margin-bottom: 24px;">
                <a href="{{ route('books.index') }}" class="blink-btn"
                   style="color: white; padding: 12px 28px; border-radius: 999px; font-weight: 600; text-decoration: none; background: linear-gradient(135deg, #ec4899, #db2777);">
                    📚 Kelola Buku
                </a>
            </div>

            <div class="pink-card" style="padding: 24px;">
                <h4 class="font-bold text-lg" style="color: #be185d; margin-bottom: 16px;">🆕 5 Buku Terbaru</h4>

                <div style="overflow-x: auto; border-radius: 12px;">
                    <table class="pink-table" style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="text-align: left;">Judul</th>
                                <th style="text-align: left;">Penulis</th>
                                <th style="text-align: left;">Penerbit</th>
                                <th style="text-align: left;">Tahun</th>
                                <th style="text-align: left;">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($latestBooks ?? [] as $book)
                            <tr style="border-bottom: 1px solid #fce7f3;">
                                <td style="padding: 12px; font-weight: 500;">{{ $book->title }}</td>
                                <td style="padding: 12px;">{{ $book->author }}</td>
                                <td style="padding: 12px;">{{ $book->publisher }}</td>
                                <td style="padding: 12px;">{{ $book->year }}</td>
                                <td style="padding: 12px;">{{ $book->stock }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" style="padding: 16px; text-align: center; color: #be185d;">🌸 Belum ada buku.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>