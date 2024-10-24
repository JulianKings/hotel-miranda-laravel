<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activities') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-3">
            <div class="p-2 sm:p-2 sm:rounded-lg">
                <div class="max-w-xl">
                    <button type="button" class="bg-white px-4 py-2 text-black hover:bg-gray-800 sm:px-8 sm:py-3 sm:rounded-lg" onclick="window.location='{{ route('activities.create') }}'">
                        Create
                    </button>
                </div>
            </div>
        </div>
    </div>

    @foreach($bokkings as $booking)
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <p class="text-2xl font-extrabold">Booking #{{$booking->id}}</p>
                        <ul class="py-4">
                            <li>
                                <strong>Date:</strong> {{$booking->date}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
