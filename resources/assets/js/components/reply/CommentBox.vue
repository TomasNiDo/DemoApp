<template>
    <div class="comment-box">
        <div class="card">
            <div class="card-body">
                <div>
                    <strong>{{ comment.user.name }}: </strong>
                    <span>{{ comment.content }}</span>
                </div>
                <div class="mt-md-1">
                    <small><i class="fa fa-clock-o"></i> {{ timeAgo }}</small>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment-timezone'

export default {
    name: 'comment-box',

    props: {
        comment: {
            type: Object,
            required: true
        }
    },

    computed: {
        timeAgo() {
            let timeAgo = moment(this.comment.created_at + "+08:00", "YYYY-MM-DD HH:mm:ssZ");
            return timeAgo.fromNow();
        }
    }
}
</script>

<style scoped>
.comment-box {
    margin-bottom: 15px;
}
</style>
