
<div id="repo-list">
    @foreach ($repos as $repo)
        <div class="border p-2 px-3 text-bold text-gray-dark">
            {{ $repo->name }}
        </div>
    @endforeach
</div>
