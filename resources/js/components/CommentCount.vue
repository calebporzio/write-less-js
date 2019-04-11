<template>
<span>
    {{ count }} comment{{ count > 1 ? 's' : '' }}
</span>
</template>

<script>
export default {
    data() {
        return {
            loading: true,
            count: null,
        }
    },

    created() {
        this.loadCount()
    },

    methods: {
        loadCount() {
            axios.get('/api/comment-count')
                .then(response => {
                    this.count = response.data.count
                    this.loading = false
                })
            },
    },
}
</script>
