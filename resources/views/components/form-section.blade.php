
<div class="mt-5 md:mt-0 md:col-span-2">
    <form wire:submit="{{ $submit }}">
        <div
            class="px-4 py-5 bg-white sm:p-6 {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
            <div class="grid grid-cols-6 gap-6">
                {{ $form }}
            </div>
        </div>

        @if (isset($actions))
            <div
                class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                {{ $actions }}
            </div>
        @endif
