@extends('layouts.app')

@section('content')
<div class="Box Box--blue">
    <div class="Box-header Box-header--small d-flex flex-justify-between flex-items-center">
        <div>
            <a class="avatar" data-skip-pjax="true" data-hovercard-type="user" data-hovercard-url="/hovercards?user_id=3670578" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/calebporzio">
                <img height="20" width="20" alt="@calebporzio" src="https://avatars0.githubusercontent.com/u/3670578?s=60&amp;v=4">
            </a>
            <span class="text-gray"><span class="text-gray-dark text-bold">calebpozio</span> Some things.</span>
        </div>
        <div class="text-gray text-small">Last commit last night while drooling on the keyboard</div>
    </div>

    @include('_code-row', ['file' => 'app', 'commit' => 'Update PULL_REQUEST_TEMPLATE.md'])
    @include('_code-row', ['file' => 'config', 'commit' => 'Update PULL_REQUEST_TEMPLATE.md'])
    @include('_code-row', ['file' => 'bootstrap', 'commit' => 'Update PULL_REQUEST_TEMPLATE.md'])
    @include('_code-row', ['file' => 'storage', 'commit' => 'Update PULL_REQUEST_TEMPLATE.md'])
    @include('_code-row', ['file' => 'resources', 'commit' => 'Update PULL_REQUEST_TEMPLATE.md'])
    @include('_code-row', ['file' => 'routes', 'commit' => 'Update PULL_REQUEST_TEMPLATE.md'])
    @include('_code-row', ['file' => 'bin', 'commit' => 'Update PULL_REQUEST_TEMPLATE.md'])
    @include('_code-row', ['file' => 'tests', 'commit' => 'Update PULL_REQUEST_TEMPLATE.md'])
</div>
@endsection
