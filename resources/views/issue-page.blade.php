@extends('layouts.app')

{{-- Comment Count Section --}}
@section('comment-count')
{{ $comments->count() }} {{ str_plural('comment', $comments->count()) }}
@endsection

{{-- Comment List Section --}}
@section('content')

@include('includes._issue-header')

<div class="pt-3" >
    <div class="clearfix">
        {{-- Sidebar --}}
        @include('includes._issue-sidebar')

        {{-- Main Content --}}
        <div style="width: 760px; float: left;">
            @include('includes._comment', ['comment' => 'Im mad about something!'])
            @include('includes._comment', ['comment' => 'Im mad about something!'])
            @include('includes._comment', ['comment' => 'Im mad about something!'])

            {{-- Add Comment --}}
            @include('includes._comment-form')
        </div>
    </div>
</div>
@endsection
