<div class="border border-blue rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
            name="body"
            class="w-full"
            placeholder="What's up doc?"
            required
        ></textarea>

        <hr class="my-4">
        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2"
            >
            <button type="submit" class="bg-blue-500 rounded-lg shadow p-2 text-white">Tweet a root
            </button>
        </footer>
    </form>
</div>
