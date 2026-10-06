<x-app-layout>
    <x-slot name="header">
        <span>✏️</span> Edit Buku
    </x-slot>

    <div style="padding: 48px 16px;">
        <div style="max-width: 720px; margin: 0 auto;">
            <div class="pink-card" style="padding: 32px;">

                @if($errors->any())
                    <div style="padding: 12px; border-radius: 10px; margin-bottom: 16px; background: #fce7f3; color: #9f1239; border-left: 4px solid #9f1239;">
                        <ul style="list-style: disc; padding-left: 20px; margin: 0;">
                            @foreach($errors->all() as $error)
                                <li>❌ {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #be185d;">📕 Judul</label>
                        <input type="text" name="title" value="{{ old('title', $book->title) }}" class="pink-input" required>
                    </div>

                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #be185d;">✍️ Penulis</label>
                        <input type="text" name="author" value="{{ old('author', $book->author) }}" class="pink-input" required>
                    </div>

                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #be185d;">🏢 Penerbit</label>
                        <input type="text" name="publisher" value="{{ old('publisher', $book->publisher) }}" class="pink-input" required>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px;">
                        <div>
                            <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #be185d;">📅 Tahun</label>
                            <input type="number" name="year" value="{{ old('year', $book->year) }}" class="pink-input" required>
                        </div>
                        <div>
                            <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #be185d;">📦 Stok</label>
                            <input type="number" name="stock" value="{{ old('stock', $book->stock) }}" class="pink-input" required>
                        </div>
                    </div>

                    <div style="display: flex; gap: 8px;">
                        <button type="submit" class="blink-btn"
                                style="color: white; padding: 12px 28px; border-radius: 999px; font-weight: 600; border: none; cursor: pointer; background: linear-gradient(135deg, #ec4899, #db2777);">
                            💾 Update
                        </button>
                        <a href="{{ route('books.index') }}"
                           style="color: #be185d; padding: 12px 28px; border-radius: 999px; font-weight: 600; text-decoration: none; background: #fce7f3;">
                            ↩️ Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>