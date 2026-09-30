<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Buku Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- FORM TAMBAH BUKU -->
                <form action="{{ route('admin.buku.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Kode Buku</label>
                        <input type="text" name="kode_buku" class="w-full border rounded p-2" placeholder="Contoh: BK-001">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Judul Buku</label>
                        <input type="text" name="judu_buku" class="w-full border rounded p-2" placeholder="Masukkan judul buku">
                    </div>
                    <!-- Tambahkan field pengarang, penerbit, dan stok sesuai kebutuhan -->
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>