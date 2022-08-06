<div class="chat__wrapper">
    <div class="chat">
        <button class="chat__btn js-contacts" type="button">往還</button>
        <button class="chat__btn js-create-contact" type="button">联系人</button>
        <div class="chats">
            <div class="chat__contact is-online js-begin-chat">
                <span class="chat__name">演示用户1</span>
                <span class="chat__status">在线</span>
                <span class="chat__count">5</span>
            </div>
            <div class="chat__contact js-begin-chat">
                <span class="chat__name">演示用户2</span>
                <span class="chat__status">离线</span>
                <span class="chat__count">2</span>
            </div>
        </div>
        <button class="chat__close js-close-chat" type="button">关闭</button>
        <div class="chat__inner">
            <div class="chat__contacts">
                <div class="chat__contact is-online js-chat-contact">
                    <span class="chat__name">演示用户1</span>
                    <span class="chat__status">在线</span>
                </div>
                <div class="chat__contact js-chat-contact">
                    <span class="chat__name">演示用户2</span>
                    <span class="chat__status">离线</span>
                </div>
            </div>
            <button class="chat__close js-close-chat-contacts" type="button">关闭</button>
        </div>
        <div class="chat__settings">
            <div class="chat__contact is-online">
                <span class="chat__name">演示用户1</span>
                <span class="chat__status">在线</span>
            </div>
            <div class="chat__row">
                <button class="chat__close" type="button">发送链接</button>
                <button class="chat__close js-edit-chat" type="button">编辑联系人</button>
                <button class="chat__close js-begin-chat" type="button">打开聊天</button>
                <button class="chat__close js-open-delete" type="button">刪除聯繫人</button>
            </div>
            <button class="chat__close js-close-settings" type="button">关闭</button>
            <div class="chat__edit">
                <p class="chat__subtitle">更改聯繫資料</p>
                <input class="form-control input" type="text" placeholder="更改聯繫資料">
                <div class="chat__buttons">
                    <button class="chat__close"
                            style="margin-bottom: 0px"
                            type="submit">
                        改變
                    </button>
                    <button class="chat__close js-close-edit"
                            style="margin-bottom: 0px"
                            type="button">
                        关闭
                    </button>
                </div>
            </div>
            <div class="chat__delete">
                <p class="chat__subtitle">刪除聯繫人</p>
                <input class="form-control input" type="text" placeholder="您的數據">
                <div class="chat__buttons">
                    <button class="chat__close"
                            style="margin-bottom: 0px"
                            type="submit">
                        删除
                    </button>
                    <button class="chat__close js-close-chat-delete"
                            style="margin-bottom: 0px"
                            type="button">
                        关闭
                    </button>
                </div>
            </div>
        </div>
        <div class="chat__create">
            <div class="chat__inputs">
                <input class="chat__input" type="text" placeholder="姓名">
                <input class="chat__input" type="text" placeholder="姓">
                <input class="chat__input" type="email" placeholder="電郵">
            </div>
            <div class="chat__buttons">
                <button class="chat__close" type="button">邀請</button>
                <button class="chat__close js-close-create" type="button">关闭</button>
            </div>
        </div>
        <div class="chat__wrap">
            <div class="chat__contact is-online">
                <span class="chat__name">演示用户1</span>
                <span class="chat__status">在线</span>
            </div>
            <div class="chat__buttons three__mod">
                <button class="chat__close js-show-btns" type="button">改變</button>
                <button class="chat__close js-select-all" type="button" style="display: none;">選擇全部</button>
                <button class="chat__close js-delete-messages" type="button" style="display: none;">删除</button>
            </div>
            <div class="chat__window">
                <div class="chat__holder">
                    @for($i=1;$i<=4;$i++)
                        <div class="chat__message receiver">
                            <div class="checkbox-item">
                                <input type="checkbox"
                                       class="custom-checkbox"
                                       id="messageTest{{$i}}">
                                <label for="messageTest{{$i}}"></label>
                            </div>
                            <img class="chat__decor left__mod" src="{{ asset('images/message-decor.png') }}" alt="#">
                            <p>消息的收件人</p>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="chat__field-wrap">
                <div class="chat__field">
                    <img class="chat__decor left__mod" src="{{ asset('images/message-decor.png') }}" alt="#">
                    <textarea class="chat__textarea js-chat-textarea" placeholder="信息"></textarea>
                    <img class="chat__decor right__mod" src="{{ asset('images/message-decor.png') }}" alt="#">
                </div>
                <input class="btn__emoji js-btn-emoji"
                       type="image"
                       src="{{ asset('/images/emoji_1.png') }}"/>
                <div class="chat__emoji-holder">
                    @for($i=1;$i<=24;$i++)
                        <img src="{{ asset('/images/emoji_' . $i . '.png') }}"
                             class="chat__emoji">
                    @endfor
                </div>
            </div>
            <div class="chat__buttons six__mod">
                <button data-tooltip="首先，您需要按下按鈕選擇正確的評論 &quot;打開&quot;"
                        class="chat__close"
                        type="button">Twitter</button>
                <button data-tooltip="首先，您需要按下按鈕選擇正確的評論 &quot;打開&quot;"
                        class="chat__close"
                        type="button">Facebook</button>
                <button data-tooltip="首先，您需要按下按鈕選擇正確的評論 &quot;打開&quot;"
                        class="chat__close"
                        type="button">Telegram</button>
                <button class="chat__close"
                        type="button">發送</button>
                <button class="chat__close"
                        data-tooltip="首先，您需要按下按鈕選擇正確的評論 &quot;打開&quot;"
                        type="button">發送鏈接</button>
                <button class="chat__close js-close-messages"
                        type="button">关闭</button>
            </div>
        </div>
    </div>
    <button class="chat__open js-open-chat" type="button">
    <span class="chat__icon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
            <path d="M32,3C15.4,3,0,16.2,0,30c0,7.8,6.3,14.7,13,19.3c-0.1,1.2-0.9,5.3-5.7,9.8c-0.7,0.7-0.2,1.8,0.8,1.7
                c8.6-1,15.5-5.8,16.7-6.7c1.4,0.3,4.6,0.8,7.2,0.8c16.6,0,32-11.2,32-25S48.6,3,32,3z"/>
        </svg>
    </span>
        <span class="chat__open-text">聊天</span>
    </button>
</div>
<script>
    $(document).ready(function() {
        localStorage.activeScreen = undefined;
        localStorage.activeContact = undefined;
        localStorage.currentChatId = undefined;
        localStorage.showChat = undefined;
        localStorage.authId = undefined;
    });
</script>
