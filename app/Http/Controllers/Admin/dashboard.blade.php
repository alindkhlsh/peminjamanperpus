
<h3 class="text-lg font-bold text-gray-800 mb-4">Selamat Datang, Admin!</h3>
                <p class="text-gray-600">Gunakan menu di bawah atau navigasi sistem untuk mengelola data buku, pengguna, dan transaksi peminjaman.</p>
                
                <div class="mt-6 flex gap-4">
                    <a href="{{ route('admin.buku.index') }}" class="bg-indigo-600 text-black px-4 py-2 rounded shadow hover:bg-indigo-700">Kelola Buku</a>
                    <a href="{{ route('admin.user.index') }}" class="bg-gray-600 text-black px-4 py-2 rounded shadow hover:bg-gray-700">Kelola User</a>