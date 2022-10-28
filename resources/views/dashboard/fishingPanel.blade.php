<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fishing Panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
                <div class="overflow-x-auto">
                    <div
                        class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                        <div class="w-full lg:w-5/6">
                            @if ($errors->any())
                                <div
                                    class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative m-2"
                                    role="alert">
                                    <strong class="font-bold">Input Error ! => </strong>
                                    @foreach ($errors->all() as $error)
                                        <br><span class="block sm:inline block">{{ $error }}</span>
                                    @endforeach
                                </div>
                            @endif
                            @if(session('success') || session('edited') || session('Deleted') || session('warning'))
                                <div
                                    class="m-10 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                                    role="alert">
                                    <div class="flex">
                                        <div class="py-1">
                                            <svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path
                                                    d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                                            </svg>
                                        </div>
                                        <div class="my-auto">
                                            @if(session('success'))
                                                <p class="font-bold">{{session('success') }}</p>
                                            @elseif(session('edited'))
                                                <p class="font-bold">{{session('edited') }}</p>
                                            @elseif(session('Deleted'))
                                                <p class="font-bold">{{session('Deleted') }}</p>
                                            @elseif(session('warning'))
                                                <p class="font-bold">{{session('warning') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="bg-white shadow-md rounded my-6">
                                <table class="min-w-max w-full table-auto">
                                    <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-center">id</th>
                                        <th class="py-3 px-6 text-center">path</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-gray-600 text-sm font-light">
                                    @foreach($a as $url)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100 even:bg-teal-200">
                                            <td class="py-3 px-6 whitespace-nowrap">
                                                <div class="flex justify-center items-center">
                                                    <span class="font-medium">{{$url['id']}}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6">
                                                <div class="flex items-center justify-center">
                                                    <span class="font-bold">
                                                            {{$url['UrlPath']}}
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$a->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
