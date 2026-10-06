<x-app-layout>
    <x-slot name="header">
        <span>📖</span> Daftar Buku
    </x-slot>

    <div style="padding: 48px 16px;">
        <div style="max-width: 1280px; margin: 0 auto;">
            <div class="pink-card" style="padding: 24px;">

                <a href="{{ route('books.create') }}" class="blink-btn"
                   style="color: white; padding: 10px 22px; border-radius: 999px; font-weight: 600; text-decoration: none; display: inline-block; margin-bottom: 20px; background: linear-gradient(135deg, #ec4899, #db2777);">
                   ➕ Tambah Buku
                </a>

                @if(session('success'))
                    <div style="padding: 12px; border-radius: 10px; margin-bottom: 16px; font-weight: 500; background: #fce7f3; color: #be185d; border-left: 4px solid #ec4899;">
                        ✅ {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('books.index') }}" method="GET" style="margin-bottom: 20px; display: flex; flex-wrap: wrap; gap: 8px;">
                    <input type="text" name="search" placeholder="🔍 Cari judul atau penulis..." 
                           class="pink-input" style="flex: 1; min-width: 200px;" value="{{ request('search') }}">
                    <button type="submit" class="blink-btn"
                            style="color: white; padding: 10px 22px; border-radius: 999px; font-weight: 600; border: none; cursor: pointer; background: linear-gradient(135deg, #ec4899, #db2777);">
                        Cari 💖
                    </button>
                    <a href="{{ route('books.index') }}"
                       style="color: #be185d; padding: 10px 22px; border-radius: 999px; font-weight: 600; text-decoration: none; background: #fce7f3;">
                        Reset
                    </a>
                </form>

                <div style="overflow-x: auto; border-radius: 12px;">
                    <table class="pink-table" style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="text-align: left;">No</th>
                                <th style="text-align: left;">Judul</th>
                                <th style="text-align: left;">Penulis</th>
                                <th style="text-align: left;">Penerbit</th>
                                <th style="text-align: left;">Tahun</th>
                                <th style="text-align: left;">Stok</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $index => $book)
                            <tr style="border-bottom: 1px solid #fce7f3;">
                                <td style="padding: 12px;">{{ $index + 1 }}</td>
                                <td style="padding: 12px; font-weight: 500;">{{ $book->title }}</td>
                                <td style="padding: 12px;">{{ $book->author }}</td>
                                <td style="padding: 12px;">{{ $book->publisher }}</td>
                                <td style="padding: 12px;">{{ $book->year }}</td>
                                <td style="padding: 12px;">{{ $book->stock }}</td>
                                <td style="padding: 12px; text-align: center; white-space: nowrap;">
                                    <a href="{{ route('books.show', $book->id) }}"
                                       style="color: white; padding: 6px 14px; border-radius: 8px; font-size: 12px; font-weight: 600; text-decoration: none; background: #f472b6;">Detail</a>
                                    <a href="{{ route('books.edit', $book->id) }}"
                                       style="color: white; padding: 6px 14px; border-radius: 8px; font-size: 12px; font-weight: 600; text-decoration: none; background: #db2777; margin-left: 4px;">Edit</a>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                style="color: white; padding: 6px 14px; border-radius: 8px; font-size: 12px; font-weight: 600; border: none; cursor: pointer; background: #9f1239; margin-left: 4px;"
                                                onclick="return confirm('Hapus buku ini? 💔')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" style="padding: 16px; text-align: center; color: #be185d;">
                                    🌸 Belum ada data buku.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>