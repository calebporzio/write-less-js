<template>
<div class="clearfix p-3">
    <div class="float-left mr-3">
        <img class="avatar rounded-1" height="44" width="44" alt="@calebporzio" src="https://avatars1.githubusercontent.com/u/3670578?s=88&amp;v=4">
    </div>

    <div class="overflow-hidden">
        <form action="/retro/comment" method="POST" @submit.prevent="addComment">
            <div class="Box">
                <div class="Box-header" style="padding-top: 10px; padding-bottom: 10px">
                    <span class="text-gray"><strong>calebporzio</strong> commented 2 hours ago</span>
                </div>

                <div class="Box-row">
                    <div class="form-group m-0">
                        <textarea v-model="content" name="content" placeholder="Leave a comment" style="min-height: 115px; height: 115px;" class="form-control"></textarea>
                    </div>

                    <span class="text-red" v-if="error">{{ error }}</span>
                </div>

                <div class="d-flex flex-justify-end pb-3 px-3">
                    <button class="btn mr-2">Close Issue</button>
                    <button type="submit" class="btn btn-primary">Comment</button>
                </div>
            </div>
        </form>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            content: '',
            error: null,
        }
    },

    methods: {
        addComment() {
            if (this.content.length === 0) {
                this.error = 'The comment cannot be empty'
                return
            }

            this.error = ''

            axios.post('/api/comment', {
                content: this.content,
            }).then(() => {
                this.content = ''
                this.$emit('added')
            }).catch(() => {
                alert('Whoops, something went wrong')
            })

        },
    },
}
</script>
