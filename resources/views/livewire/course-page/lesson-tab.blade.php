<div
     class="flex flex-col w-full text-center mr-2 p-2 mt-1 rounded-xl text-gray-700 {{ $i == request('video') || (request('video') == NULL && $i == 1) ? 'bg-blue-300 hover:bg-blue-500' : 'bg-gray-300 hover:bg-gray-200'}}"
>
    <a wire:navigate href="/courses/{{ $authorSlug }}/{{ $courseSlug }}/?video={{ $i }}">
        <span>Video {{ $i }}</span>
    </a>
</div>
