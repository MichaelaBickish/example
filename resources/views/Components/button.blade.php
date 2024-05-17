      <a  {{ $attributes->merge(['class'=> 'relative inline-flex items-center px-2 py-2  text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md leading-5 hover:text-blue-400 focus:z-10 focus:outline-none focus:ring ring-blue-400 focus:border-blue-400 active:bg-blue-800 active:text-blue-500 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800']) }}>
        {{ $slot }}
    </a>
