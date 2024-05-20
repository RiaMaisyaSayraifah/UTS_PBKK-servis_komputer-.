<x-layout>
    <div class="w-full px-4 py-5 bg-white shadow-md">
        <a href="{{ route('keluhan.index') }}"
            class="text-gray-400 transition-all duration-200 ease-in-out hover:text-blue-600 "><i
                class="fa-solid fa-arrow-left"></i> Kembali</a>

        <h1 class="text-2xl font-bold text-center text-gray-800">Edit Keluhan</h1>
        <form method="POST" action="{{ route('keluhan.update', $keluhan) }}" class="mt-5 ">
            @csrf
            @method('PATCH')

            <div class="mb-4">
                <label for="nama_keluhan" class="block mb-2 font-bold text-gray-700">
                    Nama Keluhan
                </label>
                <input type="text" name="nama_keluhan" id="nama_keluhan"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                    value="{{ old('nama_keluhan', $keluhan->nama_keluhan) }}" required>
            </div>

            <div class="mb-4">
                <label for="ongkos" class="block mb-2 font-bold text-gray-700">
                    Onkos
                </label>
                <input type="number" name="ongkos" id="ongkos"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                    value="{{ old('ongkos', $keluhan->ongkos) }}" required>
            </div>
            <div class="mb-4">
                <label for="komputer_id" class="block mb-2 font-bold text-gray-700">
                    Pilih No kendaraan  {{ '(Disable)' }}
                </label>
                <input type="text" name="komputer_id" id="komputer_id"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                    value="{{ $komputer->komputer_id }}" required readonly>
                <input type="hidden" name="komputer_id_hidden" value="{{ $kendaraan->no_pol }}">
            </div>
            <div class="mb-4">
                <label for="customer_id" class="block mb-2 font-bold text-gray-700">
                    Customer {{ '(Disable)' }}
                </label>
                <input type="text"
                    class="w-full px-3 text-gray-700 border rounded appearance-none py-2leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ $customers->nama_customer }}" required readonly>
                <input type="hidden" name="customer_id" value="{{ $customers->id }}">
            </div>
            <div class="mb-4">
                <label for="pegawai_id" class="block mb-2 font-bold text-gray-700">
                    Pegawai {{ '(Disable)' }}
                </label>
                <input type="text"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                    value="{{ $pegawai->nama_pegawai }}" required readonly>
                <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
            </div>

            <button type="submit"
                class="px-4 py-2 font-bold text-white transition-all duration-200 ease-in-out bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                Edit Keluhan
            </button>

        </form>
    </div>
</x-layout>