<x-app-layout>
    <x-slot name="header">
        <span>📖</span> Detail Buku
    </x-slot>

    <div style="padding: 48px 16px;">
        <div style="max-width: 720px; margin: 0 auto;">
            <div class="pink-card" style="padding: 32px;">

                <div style="text-align: center; margin-bottom: 24px;">
                    <span class="text-6xl float-icon">📚</span>
                </div>

                <table style="width: 100%;">
                    <tr style="border-bottom: 1px solid #fce7f3;">
                        <td style="padding: 12px; font-weight: bold; width: 160px; color: #be185d;">📕 Judul</td>
                        <td style="padding: 12px;">{{ $book->title }}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #fce7f3;">
                        <td style="padding: 12px; font-weight: bold; color: #be185d;">✍️ Penulis</td>
                        <td style="padding: 12px;">{{ $book->author }}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #fce7f3;">
                        <td style="padding: 12px; font-weight: bold; color: #be185d;">🏢 Penerbit</td>
                        <td style="padding: 12px;">{{ $book->publisher }}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #fce7f3;">
                        <td style="padding: 12px; font-weight: bold; color: #be185d;">📅 Tahun</td>
                        <td style="padding: 12px;">{{ $book->year }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; font-weight: bold; color: #be185d;">📦 Stok</td>
                        <td style="padding: 12px;">{{ $book->stock }}</td>
                    </tr>
                </table>

                <div style="display: flex; gap: 8px; margin-top: 24px;">
                    <a href="{{ route('books.edit', $book->id) }}" class="blink-btn"
                       style="color: white; padding: 12px 28px; border-radius: 999px; font-weight: 600; text-decoration: none; background: linear-gradient(135deg, #ec4899, #db2777);">
                        ✏️ Edit
                    </a>
                    <a href="{{ route('books.index') }}"
                       style="color: #be185d; padding: 12px 28px; border-radius: 999px; font-weight: 600; text-decoration: none; background: #fce7f3;">
                        ↩️ Kembali
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>