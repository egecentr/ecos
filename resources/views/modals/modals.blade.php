<div
    class="popup-wrapper popup-thank-you">
    <div
        class="popup-mask">
    </div>

    <div
        class="popup">

        <div
            class="popup__close">
        </div>

        <div
            class="popup-title">
            Спасибо.
        </div>

        <div
            class="thank-you">
            Ваше сообщение отправлено.
        </div>


    </div>

</div>

<div
    class="popup-wrapper popup-callback">
    <div
        class="popup-mask">
    </div>

    <div
        class="popup">

        <div
            class="popup__close">
        </div>

        <div
            class="popup-title">
            Обратный звонок
        </div>

        <div
            class="popup-text">
            Заполните форму и наши <br>
            менеджеры свяжутся с вами.
        </div>

        <form
            class="callback-form">

            <div
                class="callback-input__wrapper callback-input__wrapper_icon-user">
                <input
                    v-model="request.name"
                    type="text"
                    class="callback-input"
                    placeholder="Ваше имя"
                />
            </div>

            <div
                class="callback-input__wrapper  callback-input__wrapper_icon-phone">
                <input
                    v-mask="'+7 (###) ###-##-##'"
                    v-model="request.phone"
                    type="text"
                    class="callback-input"
                    placeholder="Телефон"
                />
            </div>

            <div
                class="callback-form__footer">
                <button @click="makeRequest('Обратный звонок')"
                    class="button"
                    type="submit">
                    Отправить
                </button>
            </div>

        </form>
    </div>
</div>
