<template>
    <div>
        <template>
            <loader v-show="isLoadedMessages === true"
                    object="#2f5496"
                    color1="#ffffff"
                    color2="#17fd3d"
                    size="3"
                    speed="1"
                    bg="#343a40"
                    objectbg="#999793"
                    opacity="80"
                    disableScrolling="false"
                    name="spinning">
            </loader>
        </template>
        <div class="chat__contact is-online">
            <span class="chat__name">{{ contact.full_name }}</span>
            <span class="chat__status"
                  :class="contact.status === 1 ? 'is-online': ''">
                {{ contact.status === 1 ? '在线' : '离线' }}
            </span>
        </div>
        <div class="chat__row">
            <button class="chat__close"
                    :disabled="this.chatId === null"
                    @click="sendLink"
                    type="button">
                发送链接
            </button>
            <button class="chat__close js-edit-chat"
                    @click="setActiveScreen('chat__edit')"
                    type="button">
                编辑联系人
            </button>
            <button class="chat__close js-begin-chat"
                    :disabled="this.chatId === null"
                    @click="openChat"
                    type="button">
                打开聊天
            </button>
            <button class="chat__close"
                    @click="deleteContact"
                    type="button">
                刪除聯繫人
            </button>
        </div>
        <button class="chat__close"
                @click="setActiveScreen('chat__inner')"
                type="button">
            关闭
        </button>
        <chat-messages v-show="screen === 'chat__wrap'"
                       ref="messageComponent"
                       :new-message="newMessage"
                       :contact="contact"
                       :screen="screen"
                       :back-path="this.$parent.backPath"
                       :chat-id="currentChatId"></chat-messages>
        <div class="chat__edit"
             :class="screen === 'chat__edit' ? 'is-active' : ''">
            <edit-contact :contact_id="contact.id"
                          :name="contact.name"
                          :last_name="contact.last_name"></edit-contact>
<!--            <p class="chat__subtitle">Edit contact</p>-->
<!--            <input class="form-control input"-->
<!--                   type="text"-->
<!--                   placeholder="Edit chat">-->
<!--            <div class="chat__buttons">-->
<!--                <button class="chat__close"-->
<!--                        type="button">-->
<!--                    Edit-->
<!--                </button>-->
<!--                <button class="chat__close"-->
<!--                        @click="setActiveScreen('chat__settings')"-->
<!--                        type="button">-->
<!--                    Close-->
<!--                </button>-->
<!--            </div>-->
        </div>
        <div class="chat__delete"
             :class="screen === 'chat__delete' ? 'is-active' : ''">
            <p class="chat__subtitle">刪除聯繫人</p>
            <input class="form-control input"
                   type="text"
                   placeholder="編輯聊天">
            <button class="chat__close"
                    type="button">
                删除
            </button>
            <button class="chat__close"
                    @click="setActiveScreen('chat__wrap')"
                    type="button">
                关闭
            </button>
        </div>
    </div>
</template>

<script>
import ChatMessages from "./ChatMessages";
import EditContact from "./EditContact";
export default {
    name: "ChatSettings",
    components: {
        EditContact,
        ChatMessages
    },
    data(){
        return{
            chatId: null,
            isLoadedMessages: false,
            linkSentSuccess: false,
            showModal: false
        }
    },
    props: [
        'screen',
        'currentChatId',
        'newMessage',
        'contact'
    ],
    inject: [
        'setActiveScreen',
        'setCurrentChat'
    ],
    methods: {
        sendLink(){
            this.isLoadedMessages = true;
            let message = '<a href="' + window.location.href + '" target="_blank">看法</a>';
            this.$refs.messageComponent.sendMessage(message, false, this.chatId, true);
        },
        getChat(contact){
            var that = this;
            return axios.get('/api/chat/user_chats/' + contact.id)
                .then(response => {
                    that.chatId = response.data.data.id;
                    that.$parent.newChat = that.chatId;
                })
                .catch(function(e) {
                    console.log('error: ', e);
                });
        },
        deleteContact() {
            var that = this;
            this.isLoadedMessages = true;
            const indexOfObject = this.$parent.contacts.findIndex(object => {
                return object.id === this.contact.id;
            });
            this.$parent.contacts.splice(indexOfObject, 1);
            axios.post('/api/chat/delete_contact', {
                id: this.contact.id
            }).then(function(response){
                that.isLoadedMessages = false;
                if(response.data.success === true){
                    $('.successMessageContent').remove();
                    $('#successMessageContent').text(response.data.message);
                    $('#successMessageContent').removeAttr('hidden');
                    $('#successMessage').modal();
                }
                that.$parent.deleteContact = that.contact.id;
                that.setActiveScreen('');
            });
        },
        openChat(){
            this.$parent.backPath = 'chat__settings'
            this.setActiveScreen('chat__wrap');
            this.setCurrentChat(this.chatId)
        }
    },
    watch:{
        contact(newVal){
            if(newVal.chatId === null){
                this.getChat(newVal);
            } else {
                this.chatId = newVal.chatId;
            }
        },
        linkSentSuccess(newVal){
            console.log('linkSentSuccess', newVal);
            this.isLoadedMessages = false;
            if(this.showModal){
                if(newVal === true){
                    $('.successMessageContent').remove();
                    $('#successMessageContent').text('链接发送成功');
                    $('#successMessageContent').removeAttr('hidden');
                    $('#successMessage').modal();
                } else {
                    $('#errorMessageContent').text('嘗試再次發送鏈接');
                    $('#defaultErrorMessageContent').attr("hidden",true);
                    $('#errorMessageContent').removeAttr('hidden');
                    $('#errorMessage').modal();
                }
            }
            this.showModal = false;
        }
    },
}
</script>

<style scoped>
.is-online{
    color: #5dcf5d;
}
</style>
