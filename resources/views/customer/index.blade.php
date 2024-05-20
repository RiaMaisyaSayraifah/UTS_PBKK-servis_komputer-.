<x-layout>
    <div class="container mx-auto mt-5 px-4">
        <h1 class="text-2xl font-bold mb-5">Daftar Customer</h1>
        <a href="{{ route('customers.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Customer</a>
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 rounded mt-3">
                {{ session('success') }}
            </div>
        @endif
        <div class="flex flex-col mt-5">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No.</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $customer->nama_customer }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $customer->alamat }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $customer->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex space-x-2 justify-end">
                                            <a href="{{ route('customers.show', $customer) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Show</a>
                                            <a href="{{ route('customers.edit', $customer) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus customer ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>