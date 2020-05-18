<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach (range(1, 8) as $item)
        <li class="mb-3">
            <div class="flex items-center tx-sm">
                <img src="https://i.pravatar.cc/40" alt="avatar" class="rounded-full mr-2">
                Joe Taslim
            </div>
        </li>
    @endforeach
</ul>
