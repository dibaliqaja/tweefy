<x-app>
    <div>
        @foreach ($users as $user)
            <a href="{{ $user->path() }}" class="flex items-center mb-5">
                <img src="{{ $user->avatar }}"
                    alt="{{ $user->avatar }}'s avatar"
                    width="60"
                    class="rounded mr-4">
                <h4 class="font-bold">{{ '@' . $user->username }}</h4>
            </a>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>
