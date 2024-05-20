
<x-layout>

    <div class="w-full px-4 py-5 bg-white shadow-md">
        <a href="{{ route('pegawai.create') }}"
            class="px-4 py-3 text-white transition-all duration-200 ease-in-out bg-blue-600 hover:font-medium">Tambah
            Pegawai</a>
        <table class="w-full mt-5 text-sm text-left text-gray-500 ">
            <thead class="text-xs text-white uppercase bg-blue-600">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Nama Pegawai
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-mediu uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $pegawai)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">
                            {{ $pegawai->nama_pegawai }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pegawai->alamat }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pegawai->status }}
                        </td>
                        <td >
                            <div class="flex float-right gap-10">
                                <a href="{{ route('pegawai.show',$pegawai) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Show</a>
                                <a href="{{ route('pegawai.edit',$pegawai) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                                <form action="{{ route('pegawai.destroy',$pegawai) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
