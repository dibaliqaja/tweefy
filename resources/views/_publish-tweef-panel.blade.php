<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweefs">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="What's up men!"
            required>
        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="avatar"
                class="rounded-full mr-2">

            <button
                type="submit"
                class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">
                Tweef
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
    @enderror
</div>
