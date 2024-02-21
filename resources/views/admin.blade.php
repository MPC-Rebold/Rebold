@section('title', 'Admin')

<x-app-layout>
    @livewire('layout.header', ['routes' => [
        ['title' => 'Admin', 'href' => route('admin')],
    ]])
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <livewire:admin.sync-canvas/>
            <livewire:admin.courses-status/>
            <livewire:admin.specification-setting/>
        </div>
    </div>
</x-app-layout>
