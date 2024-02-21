<?php

use Livewire\Volt\Component;
use App\Models\Assessment;
use App\Models\Course;

new class extends Component {
    public array $assessments;
}; ?>

<div class="space-y-4">
    @if (count($assessments) > 0)
        @foreach ($assessments as $assessment)
            <div
                class="overflow-hidden bg-white px-6 py-4 text-gray-900 shadow-sm transition-all hover:scale-[1.007] sm:rounded-lg">
                <div class="flex items-center justify-between">
                    <a class="hover:underline"
                        href="{{ route('assessment', [$assessment['course_id'], $assessment['id']]) }}" wire:navigate>
                        <div>
                            <div class="text-lg font-semibold">
                                {{ $assessment['title'] }}
                            </div>
                            <div class="text-sm text-gray-500">
                                {{ Course::find($assessment['course_id'])->title }}
                            </div>
                        </div>
                    </a>

                    <div class="flex space-x-4">
                        <x-canvas-button class="h-10 w-10" :href="'/courses/' . $assessment['course_id'] . '/assignments/' . $assessment['id']" />
                        <x-button secondary :href="route('assessment', [$assessment['course_id'], $assessment['id']])" wire:navigate class="relative">
                            <span class="transition-transform duration-300">Go</span>
                            <x-icon
                                class="h-5 w-5 translate-x-0 transform transition-transform group-hover:translate-x-1"
                                name="arrow-right" />
                        </x-button>

                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="flex max-h-20 w-full items-center justify-between px-6 py-4 text-gray-900">
                No assessments found
            </div>
        </div>
    @endif
</div>
