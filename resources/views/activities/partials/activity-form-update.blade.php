<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Activity') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Please input the information of your activity.') }}
        </p>
    </header>

    <form method="post" action="{{ route('activities.update', ['id' => $activity->id]) }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="activity_type" :value="__('Activity Type')" />
            <select x-model="type" x-ref="typeEL" name="type" id="activity_type" class="mt-1 block sm:rounded-lg">
                <option value="surf" @if($activity->type == 'surf') selected @endif>Surf</option>
                <option value="windsurf" @if($activity->type == 'windsurf') selected @endif>Windsurf</option>
                <option value="kayak" @if($activity->type == 'kayak') selected @endif>Kayak</option>
                <option value="atv" @if($activity->type == 'atv') selected @endif>ATV</option>
                <option value="hot air balloon" @if($activity->type == 'hot air balloon') selected @endif>Hot Air Balloon</option>
              </select>
        </div>

        <div>
            <x-input-label for="activity_date" :value="__('Date')" />
            <x-text-input id="activity_date" name="date" type="date" class="mt-1 block w-full" autocomplete="Activity Date" value="{{$formattedDate}}" />
            <x-input-error :messages="$errors->createActivity->get('date')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="activity_notes" :value="__('Notes')" />
            <x-text-input id="activity_notes" name="notes" type="text" class="mt-1 block w-full" autocomplete="Activity notes" value="{{$activity->notes}}" />
            <x-input-error :messages="$errors->createActivity->get('notes')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="activity_satisfaction" :value="__('Satisfaction')" />
            <x-text-input id="activity_satisfaction" name="satisfaction" type="number" class="mt-1 block w-full" min="0" max="10" autocomplete="Activity notes" value="{{$activity->satisfaction}}" />
            <x-input-error :messages="$errors->createActivity->get('satisfaction')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Update') }}</x-primary-button>
        </div>
    </form>
</section>
