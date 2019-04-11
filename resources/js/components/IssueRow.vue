<template>
<div class="Box-row Box-row--small d-flex flex-justify-between">
    <div class="clearfix">
        <div class="float-left mr-3">
            <svg fill="currentColor" class="text-green octicon octicon-issue-opened" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"></path></svg>
        </div>
        <div class="overflow-hidden">
            <div class="">
                <router-link to="/issue" class="f4 text-bold text-gray-dark">
                    {{ title }}
                </router-link>
            </div>
            <div class="text-gray text-small">
                #28172 opened an hour ago by adamthehutt
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: ['title'],
}
</script>
