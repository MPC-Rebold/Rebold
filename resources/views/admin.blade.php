@section('title', 'Admin')

<x-app-layout>
    <livewire:layout.header :routes="[['title' => 'Admin', 'href' => route('admin')]]" />
    <div class="py-10">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <livewire:admin.sync />
            <livewire:admin.specification-setting />
        </div>
    </div>
</x-app-layout>
