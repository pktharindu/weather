<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form class="w-full mb-6">
                    <div class="-mx-3 flex flex-wrap">
                        <div class="px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="latitude">
                                Latitude
                            </label>
                            <input
                                class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="latitude" name="latitude" type="text" required value="{{ old('latitude') ?? $latitude }}">
                            @error('latitude')
                            <p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="longitude">
                                Longitude
                            </label>
                            <input
                                class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="longitude" name="longitude" type="text" required value="{{ old('longitude') ?? $longitude }}">
                            @error('longitude')
                            <p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-3">
                            <button type="submit" class="bg-indigo-500 font-bold hover:bg-indigo-700 mt-6 px-4 py-3 rounded-lg text-white">Check Weather</button>
                        </div>
                    </div>
                </form>
                {{ dump($weather) }}
            </div>
        </div>
    </div>
</x-app-layout>
