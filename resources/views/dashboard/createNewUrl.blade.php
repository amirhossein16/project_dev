<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Fishing Url') }}
        </h2>
        <div class="mt-8">
            <a href="{{route('FishingPanel.index')}}"
               class="bg-red-400 hover:bg-red-500 transition-all text-white font-medium py-2 px-3 rounded focus:outline-none focus:shadow-outline">Back
                To list Of Urls</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative m-2"
                         role="alert">
                        <strong class="font-bold">Input Error ! => </strong>
                        @foreach ($errors->all() as $error)
                            <br><span class="block sm:inline block">{{ $error }}</span>
                        @endforeach
                    </div>
                @endif
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8" action="{{route('FishingPanel.store')}}"
                      method="post">
                    @csrf
                    <div class="mb-10">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Fishing Url
                        </label>
                        <input name="UrlPath"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="username" type="text" placeholder="Fishing Url">
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 transition-all hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Add Url
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
