<div class="border border-gray-300 rounded-lg">
    @forelse ($tweefs as $tweef)
        @include('_tweef')
    @empty
        <p class="p-4">No tweefs yet.</p>
    @endforelse

    {{ $tweefs->links() }}
</div>
