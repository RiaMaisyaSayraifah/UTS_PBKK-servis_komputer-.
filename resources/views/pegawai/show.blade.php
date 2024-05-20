<x-layout>        
    <div class="w-full px-4 py-5 bg-white shadow-md">
        <div class="flex items-center justify-between">
            <a href="{{ route('pegawai.index') }}" class="text-gray-400 transition-all duration-200 ease-in-out hover:text-blue-600 "><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            
        </div>
        <div class="mt-4">
            <h1 class="my-4 text-2xl font-bold">{{ $pegawai->nama_pegawai }}</h1>
            <div class="grid grid-cols-2 gap-2">
                <div>
                    <p><strong>Alamat:</strong> {{ $pegawai->alamat }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $pegawai->jenis_kelamin }}</p>
                    <p><strong>Jabatan:</strong> {{ $pegawai->jabatan }}</p>
                </div>
                <div>
                    <p><strong>Status:</strong> {{ $pegawai->status }}</p>
                    <p><strong>Tanggal Masuk:</strong> {{ $pegawai->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>