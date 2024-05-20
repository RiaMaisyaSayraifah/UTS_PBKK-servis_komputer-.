
<x-layout>

    <div class="w-full px-4 py-5 bg-white shadow-md" >
        <div class="flex items-center justify-between">
            <a href="{{ route('keluhan.index') }}"
                class="text-gray-400 transition-all duration-200 ease-in-out hover:text-blue-600 "><i
                    class="fa-solid fa-arrow-left"></i> Kembali</a>
        </div>
        <div>
            <h1 class="mb-5 text-2xl font-bold">Detail Keluhan</h1>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-2 font-bold text-gray-700" for="nama_keluhan">
                        Nama Keluhan
                    </label>
                    <p class="p-2 border border-gray-300 rounded">
                        {{ $keluhan->nama_keluhan }}
                    </p>
                </div>
                <div>
                    <label class="block mb-2 font-bold text-gray-700" for="ongkos">
                        Ongkos
                    </label>
                    <p class="p-2 border border-gray-300 rounded">
                        Rp :    {{ number_format($keluhan->ongkos, 0, ',', '.') }}
                    </p>
                </div>
                <div>
                    <label class="block mb-2 font-bold text-gray-700" for="komputer_id">
                        Komputer
                    </label>
                    <p class="p-2 border border-gray-300 rounded">
                        {{ $komputer->komputer_id }}
                    </p>
                </div>
                <div>
                    <label class="block mb-2 font-bold text-gray-700" for="customer_id">
                        Customer
                    </label>
                    <p class="p-2 border border-gray-300 rounded">
                        {{ $customers->nama_customer }}
                    </p>
                </div>
                <div>
                    <label class="block mb-2 font-bold text-gray-700" for="customer_id">
                        Alamat Customer
                    </label>
                    <p class="p-2 border border-gray-300 rounded">
                        {{ $customers->alamat }}
                    </p>
                </div>
                <div>
                    <label class="block mb-2 font-bold text-gray-700" for="pegawai_id">
                        Pegawai
                    </label>
                    <p class="p-2 border border-gray-300 rounded">
                        {{ $pegawai->nama_pegawai }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
