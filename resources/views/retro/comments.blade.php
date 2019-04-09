@extends('layouts.app')

{{-- Comment Count Section --}}
@section('comment-count')
{{ $comments->count() }} {{ str_plural('comment', $comments->count()) }}
@endsection

{{-- Comment List Section --}}
@section('content')
@foreach($comments as $comment)
    @include('_comment', ['comment' => $comment])
@endforeach

<div class="border-bottom"></div>

{{-- Add Comment --}}
@include('_comment-form')
@endsection
