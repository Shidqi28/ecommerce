<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data"
                        id="productsForm">
                        @csrf
                        <div class="p-1 rounded-xl">
                            <div class="mb-4">
                                <label for="brand_id"
                                    class="block mb-2 text-sm font-medium text-gray-900     dark:text-white">
                                    Brand<span class="text-red-500"></span class="text-red-500">
                                </label>
                                <select id="brand_id" name="brand_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                                    dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <option value="">Pilih Brand ...</option>
                                    @foreach ( $brands as $b )
                                        <option value="{{$b->id}}">{{$b->name}}</option>
                                    @endforeach      
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="category_id"
                                    class="block mb-2 text-sm font-medium text-gray-900     dark:text-white">
                                    Categories<span class="text-red-500"></span class="text-red-500">
                                </label>
                                <select id="category_id" name="category_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                                    dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <option value="">Pilih Categories ...</option>
                                    @foreach ( $categories as $c )
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name
                                    <span class="text-red-500"></span></label>
                                <input type="text" id="name" name="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan Nama Disini ..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="mb-4">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description<span class="text-red-500"></span></label>
                                <input type="text" id="description" name="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan Description Disini ..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="mb-4">
                                <label for="base_price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price<span class="text-red-500"></span>
                                </label>
                                <input type="text" id="base_price" name="base_price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan Base Price Disini ..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="mb-4">
                                <label for="is_active"
                                    class="block mb-2 text-sm font-medium text-gray-900     dark:text-white">
                                    Active<span class="text-red-500"></span class="text-red-500">
                                </label>
                                <select id="is_active" name="is_active"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                                    dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <option value="">Pilih Disini ...</option>
                                    <option value="AKTIF">Aktif</option>
                                    <option value="TIDAK AKTIF">Tidak Aktif</option>       
                                </select>
                            </div>
                            <button type="submit" class="flex bg-sky-200 hover:bg-sky-700 hover:bg-sky-500 text-sky-600 hover:text-white inline-flex rounded-full">
                                <div>
                                    <div
                                        class="flex items-center justify-between font-medium rounded-full pl-6 pr-2 py-2 text-xs transition-all duration-300">
                                        <span>Simpan</span>
                                    </div>
                                </div>
                                <div class="bg-sky-100 text-sky-600 w-8 h-8 items-center justify-center flex rounded-full">
                                    <i class="fi fi-sr-disk text-sm mt-1"></i>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>