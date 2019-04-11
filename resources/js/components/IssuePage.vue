<template>
<div class="pt-3" >
    <div class="clearfix">
        <!-- Sidebar -->
        <div style="width: 200px; float: right;">
            <div class="border-bottom pt-4 pb-3"> <div class="text-bold text-gray"> Assignees <svg style="float: right" fill="currentColor" class="octicon octicon-gear" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"></path></svg> </div> <span class="text-small text-gray">No one--assign yourself</span> </div>

            <transfer-issue/>
        </div>

        <!-- Main Content -->
        <div style="width: 760px; float: left;">
            <div v-if="loading">loading...</div>

            <div dusk="ready" v-else>
                <comment :key="index" v-for="(comment, index) in comments" :comment="comment" />

                <add-comment @added="loadComments"/>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            loading: true,
            comments: [],
        }
    },

    created() {
        this.loadComments()
    },

    methods: {
        loadComments() {
            setTimeout(() => {
                this.loading = false
            }, 500)

            this.comments = [
                'Im mad about something',
                'Im mad about something',
                'Im mad about something',
            ]
        },
    },
}
</script>
