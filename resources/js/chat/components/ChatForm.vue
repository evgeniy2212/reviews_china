<template>
    <div class="input-group">
        <input id="btn-input"
               type="text"
               name="message"
               class="form-control input-sm" placeholder="在這裡輸入您的消息..."
               v-model="newMessage"
               @keyup.enter="sendMessage">
        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                發送
            </button>
        </span>
    </div>
</template>

<script>
export default {
    props: ['user'],

    data() {
        return {
            newMessage: ''
        }
    },

    methods: {
        sendMessage() {
            this.$emit('messagesent', {
                user: this.user,
                message: this.newMessage
            });

            this.newMessage = ''
        }
    }
}
</script>
