<x-app-layout>
    <x-slot name="header">
<<<<<<< HEAD
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

=======
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-4">
                    <strong>Judul:</strong> {{ $book->title }}
                </div>
                <div class="mb-4">
                    <strong>Penulis:</strong> {{ $book->author }}
                </div>
                <div class="mb-4">
                    <strong>Penerbit:</strong> {{ $book->publisher }}
                </div>
                <div class="mb-4">
                    <strong>Tahun:</strong> {{ $book->year }}
                </div>
                <div class="mb-4">
                    <strong>Stok:</strong> {{ $book->stock }}
                </div>
                <div class="mb-4">
                    <strong>Kategori:</strong> {{ $book->category->name }}
                </div>
                <a href="{{ route('books.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
            </div>
        </div>
    </div>
</x-app-layout>