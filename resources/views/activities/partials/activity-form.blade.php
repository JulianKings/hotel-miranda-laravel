<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Create Activity') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Please input the information of your activity.') }}
        </p>
    </header>

    <form method="post" action="{{ route('activities.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div>
            <x-input-label for="activity_type" :value="__('Activity Type')" />
            <select x-model="type" x-ref="typeEL" name="type" id="activity_type" class="mt-1 block sm:rounded-lg">
                <option value="surf">Surf</option>
                <option value="windsurf">Windsurf</option>
                <option value="kayak">Kayak</option>
                <option value="atv">ATV</option>
                <option value="hot air balloon">Hot Air Balloon</option>
              </select>
        </div>

        <div>
            <x-input-label for="activity_date" :value="__('Date')" />
            <x-text-input id="activity_date" name="date" type="date" class="mt-1 block w-full" autocomplete="Activity Date" />
            <x-input-error :messages="$errors->createActivity->get('date')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="activity_notes" :value="__('Notes')" />
            <x-text-input id="activity_notes" name="notes" type="text" class="mt-1 block w-full" autocomplete="Activity notes" />
            <x-input-error :messages="$errors->createActivity->get('notes')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Create') }}</x-primary-button>

            @if (session('status') === 'activity-created')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Created.') }}</p>
            @endif
        </div>
    </form>
</section>
