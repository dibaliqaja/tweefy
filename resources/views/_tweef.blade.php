<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweef->user->path() }}">
            <img
                src="{{ $tweef->user->avatar }}"
                alt="avatar"
                class="rounded-full mr-2"
                width="50"
                height="50" >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-2">
            <a href="{{ $tweef->user->path() }}">
                {{ $tweef->user->name }}
            </a>
        </h5>
        <p class="text-sm">
            {{ $tweef->body }}
        </p>
    </div>
</div>
