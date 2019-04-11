@extends('layouts.app')

@section('nav')
<nav class="tabnav-tabs container" aria-label="Foo bar">
    <router-link to="/code" active-class="selected" class="tabnav-tab" aria-current="page">
        <svg fill="currentColor" class="text-gray-light octicon octicon-code" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"></path></svg>
        Code
    </router-link>

    <router-link to="/issues" active-class="selected" class="tabnav-tab" aria-current="page">
        <svg fill="currentColor" class="text-gray-light octicon octicon-issue-opened" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"></path></svg>
        Issues
    </router-link>
</nav>
@endsection

@section('content')
<router-view></router-view>
@endsection
