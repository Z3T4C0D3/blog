<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-600">
    <div>
        {{ $logo }}
    </div>

    <div class="font-mono text-2xl w-full sm:max-w-md mt-6 px-6 py-4 bg-slate-400 shadow-md overflow-hidden sm:rounded-lg border-black">
        {{ $slot }}
    </div>
</div>
