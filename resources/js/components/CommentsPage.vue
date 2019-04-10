<template>
<div>
    <div v-if="loading">loading...</div>

    <div dusk="ready" v-else>
        <comment
            :key="index"
            v-for="(comment, index) in comments"
            :comment="comment"
        />

        <add-comment @added="loadComments"/>
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
            axios.get('/future/api/comment')
                .then(response => {
                    this.comments = response.data
                    this.loading = false
                })
            },
    },
}
</script>
