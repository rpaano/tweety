<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach(range(1, 8) as $index)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img
                    src="https://picsum.photos/40"
                    alt=""
                    class="rounded-full mr-2"
                >
                Romel Paano
            </div>
        </li>
    @endforeach
</ul>
