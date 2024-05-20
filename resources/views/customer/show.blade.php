
<x-layout>
    <div class="container mx-auto mt-5 px-4">
        <h1 class="text-2xl font-bold mb-5">Detail Customer</h1>
        
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="flex justify-between">
                <div class="w-1/2">
                    <div class="mb-4">
                        <label for="nama_customer" class="block text-gray-700 text-sm font-bold mb-2">Nama Customer:</label>
                        <p class="text-gray-900">{{ $customer->nama_customer }}</p>
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
                        <p class="text-gray-900">{{ $customer->alamat }}</p>
                    </div>
                    <div class="mb-4">
                        <label for="jenis_kelamin" class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin:</label>
                        <p class="text-gray-900">{{ $customer->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end space-x-2">
            <a href="{{ route('customers.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kembali</a>
            <a href="{{ route('customers.edit', $customer) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus customer ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </form>
        </div>
    </div>
</x-layout>
