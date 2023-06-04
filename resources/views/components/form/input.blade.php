@props(['value' => ''])

@if($attributes->get('type') == 'text')

    @php
        $class = 'w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
     @endphp

@elseif($attributes->get('type') == 'file')

    @php
         $class = 'relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary'
    @endphp

@elseif($attributes->get('type') == 'submit')

    @php
        $class = 'text-white bg-indigo-500 border-0 py-2 px-6 gradient rounded text-lg'
    @endphp

@endif

<input {{ $attributes->class([
    'w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out',
])->merge([
    'class' => $class,
    'type' => $attributes->get('type'),
    'name' =>  $attributes->get('name'),
    'value' => (old($attributes->get('name')) ?: $value),
]) }}>




