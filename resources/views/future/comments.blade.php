@extends('layouts.app')

{{-- Comment Count Section --}}
@section('comment-count')
{{-- {{ $comments->count() }} {{ str_plural('comment', $comments->count()) }} --}}
<comment-count></comment-count>
@endsection

{{-- Comment List Section --}}
@section('content')
<comments-page></comments-page>
@endsection
