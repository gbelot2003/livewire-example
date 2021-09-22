@props(
    [
    'leadingAddOn' => false,
    ]
)

<div class="flex rounded-md shadow-sm">
    @if ($leadingAddOn)
    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm h-8">
        {{ $leadingAddOn }}
    </span>
    @endif

    <input
        {{ $attributes }}
        class="{{ $leadingAddOn ? 'rounded-none rounded-r-md ': 'rounded-md' }} flex-1 form-input block w-full h-8 pl-2 transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-gray-300 focus:bg-white focus:ring-2 focus:ring-blue-600"
     />
</div>
