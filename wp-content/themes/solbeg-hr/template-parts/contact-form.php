<div class="contact-form__wrapper">
    <h3>Связаться с нами</h3>
    <div class="contact-form__grid">
        <input class="comtact-form__name"
               id=""
               name="name"
               minlength="2"
               type="text"
               placeholder="Имя любимое твое"
               required
        >
        <input id=""
               type="tel"
               name="phone"
               pattern="+[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{4}"
               placeholder="Телефон"
        >
        <input id=""
               type="email"
               name="email"
               placeholder="Электронная почта"
               required
        >
        <div>
            <span class="contact-form__resume-text" id="filename">+ Прикрепить резюме</span>
            <input class="contact-form__resume-input" type="file" name="resume">
        </div>
    </div>

    <div class="contact-form__comment">
        <textarea id="" name="comment" placeholder="Комментарий" required></textarea>
    </div>

    <div class="comtact-form__submit">
        <input class="submit" type="submit" value="Отправить">
    </div>

</div>