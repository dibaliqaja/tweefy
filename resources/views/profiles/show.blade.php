<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="profile-banner" class="mb-2">
            <img
                src="{{ $user->avatar }}"
                alt="avatar"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                style="left: 50%">
        </div>
        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 shadow py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            Ea inventore ab excepturi consequatur. Ut quis eum sit ea velit saepe aperiam. Laudantium adipisci voluptate quia illo id dolorem.
        </p>
    </header>

    @include('_timeline', [
        'tweefs' => $tweefs
    ])
</x-app>
