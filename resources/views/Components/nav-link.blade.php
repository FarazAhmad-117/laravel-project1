@props([
    'active' => false,
    'link' => '#',
    'label' => 'Link',
    'mobile' => false,
    'type' => 'a',
    'onClick' => '',
])

@if ($type === 'a')
    <a href="{{ $link }}"
        class=" {{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md  px-3 py-2 text-sm font-medium {{ $mobile ? 'block' : '' }} "
        {{ $attributes }} aria-current="{{ $active ? 'page' : 'false' }}">
        {{ $label }}
    </a>
@else
    <button onclick="{{ $onClick }}"
        class=" {{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md  px-3 py-2 text-sm font-medium {{ $mobile ? 'block' : '' }} "
        {{ $attributes }} aria-current="{{ $active ? 'page' : 'false' }}">
        {{ $label }}
    </button>
@endif
