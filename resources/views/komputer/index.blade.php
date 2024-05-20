<x-layout>
    <div class="w-full px-4 py-5 bg-white shadow-md">
        <h1 class="text-2xl font-bold text-center text-gray-800">Tambah Merek Komputer</h1>
        <form method="POST" action="{{ route('komputer.store') }}" class="mt-5 ">
            @csrf
            <div class="mb-4">
                <label for="merek" class="block mb-2 font-bold text-gray-700">
                    Merek
                </label>
                <div class="relative">
                    <select name="merek" id="merek"
                        class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-600"
                        required>
                        <option value="asus">Asus</option>
                        <option value="acer">Acer</option>
                        <option value="dell">Dell</option>
                        <option value="lain">Lain-Lain</option>
                    </select>
                </div>
            </div>
            <div class="mb-4">
                <label for="kelengkapan" class="block mb-2 font-bold text-gray-700">
                    Kelengkapan
                </label>
                <input type="text" name="kelengkapan" id="kelengkapan"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <button type="submit"
            class="px-4 py-2 font-bold text-white transition-all duration-200 ease-in-out bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
            Tambah Merek
        </button>
        </form>
    </div>
</x-layout>