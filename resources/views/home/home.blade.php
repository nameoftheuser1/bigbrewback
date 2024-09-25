<x-layout>
    <div class="container mx-auto flex justify-center items-center flex-col h-[100svh]">
        <div class="flex gap-3">
            <p>Dito ang login</p>
            <a href="{{ route('login') }}" class="text-blue-500">Here</a>
        </div>
        <div class="flex gap-3">
            <p>Dito ang register</p>
            <a href="{{ route('register') }}" class="text-blue-500">Here</a>
        </div>
    </div>
</x-layout>
