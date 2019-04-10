@extends('layouts.app')

{{-- Comment Count Section --}}
@section('comment-count')
{{ $comments->count() }} {{ str_plural('comment', $comments->count()) }}
@endsection

{{-- Comment List Section --}}
@section('content')
<div class="border-bottom">
    <span class="pagehead f1">Test <span class="f1-light" style="color: #a3aab1">#626</span></span>

    <div class="d-flex flex-items-center mb-4">
        <span class="State State--green">
            <svg height="16" fill="currentColor" class="octicon octicon-issue-opened" viewBox="0 0 14 16" version="1.1" width="14" aria-hidden="true"><path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"></path></svg>
            Open
        </span>
        <span class="text-gray ml-2"><a class="text-gray text-bold">calebporzio</a> opened this issue 2 hours ago · @yield('comment-count')</span>
    </div>
</div>

<div class="pt-3" >
    <div class="clearfix">
        {{-- Sidebar --}}
        <div style="width: 200px; float: right;">
            <div class="border-bottom pt-4 pb-3">
                <div class="text-bold text-gray">
                    Assignees
                    <svg style="float: right" fill="currentColor" class="octicon octicon-gear" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"></path></svg>
                </div>

                <span class="text-small text-gray">No one--assign yourself</span>
            </div>
        </div>

        {{-- Main Content --}}
        <div style="width: 760px; float: left;">
            @foreach($comments as $comment)
                @include('_comment', ['comment' => $comment])
            @endforeach

            <div class="border-bottom"></div>

            {{-- Add Comment --}}
            @include('_comment-form')
        </div>
    </div>
</div>
@endsection
