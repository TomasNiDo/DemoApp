<template>
    <div class="comments-section">
        <div class="comment-composer" v-if="authCheck != 0">
            <comment-composer :article-id="articleId" @add-comment="addComment"></comment-composer>
        </div>
        <div v-else>
            <h5><a :href="login">Login</a> to comment.</h5>
        </div>

        <div class="comments-box">
            <comment-box
                v-for="(comment, index) in comments"
                :key="index"
                :comment="comment"
                :auth-check="authCheck"
                @delete-comment="deleteComment(index)"
            ></comment-box>
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
        },
        authCheck: {
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

    computed: {
        login() {
            return route('login')
        }
    },

    methods: {
        addComment(comment) {
            this.comments.unshift(comment)
        },

        deleteComment(index) {
            this.$delete(this.comments, index)
        }
    },

    async mounted() {
        try {
            const { data } = await axios.get(route('articles.comments', this.articleId))

            Vue.set(this, 'comments', data.comments)
        } catch (error) {
            console.log(error);
        }
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
