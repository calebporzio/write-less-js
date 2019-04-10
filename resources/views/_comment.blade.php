{{-- Comment Box --}}
<div class="clearfix p-3" id="comment-{{ $comment->id }}">
    <div class="float-left mr-3">
        <img class="avatar rounded-1" height="44" width="44" alt="@calebporzio" src="https://avatars1.githubusercontent.com/u/3670578?s=88&amp;v=4">
    </div>
    <div class="overflow-hidden">
        <div class="Box Box--blue">
            <div class="Box-header" style="padding-top: 10px; padding-bottom: 10px">
                <span class="text-gray"><strong>calebporzio</strong> commented 2 hours ago</span>
            </div>
            <div class="Box-row">
                {{ $comment->content }}
            </div>
        </div>
    </div>
</div>
