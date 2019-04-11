<div id="repo-list">
    @foreach ($repos as $repo)
        <div class="border p-2 px-3 text-bold text-gray-dark d-flex flex-justify-between">
            <div>{{ $repo->name }}</div>
            <div class="text-gray-light">
                {{ $repo->stars }} {{ str_plural('star', $repo->stars) }}
            </div>
        </div>
    @endforeach
</div>
