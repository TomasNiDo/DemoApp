<template>
    <div class="comments-section">
        <comment-composer :article-id="articleId" @add-comment="addComment"></comment-composer>

        <div class="comments-box">
            <comment-box v-for="(comment, index) in comments" :key="index" :comment="comment"></comment-box>
        </div>
    </div>
</template>

<script>
import CommentComposer from './CommentComposer'
import CommentBox from './CommentBox'

export default {
    name: 'comment-section',

    props: {
        articleId: {
            type: Number,
            required: true
        }
    },

    components: {
        CommentComposer,
        CommentBox
    },

    data: () => ({
        comments: []
    }),

    methods: {
        addComment(comment) {
            this.comments.unshift(comment);
        }
    },

    mounted() {
        axios.get(route('articles.comments', this.articleId))
            .then(({ data }) => {
                Vue.set(this, 'comments', data.comments)
            })
    }
}
</script>

<style scoped>
.comments-section {
    margin-top: 30px;
}
.comments-box {
    margin-top: 30px
}
</style>
