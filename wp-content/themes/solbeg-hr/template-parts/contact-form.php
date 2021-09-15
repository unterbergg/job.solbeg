<div class="contact-form__wrapper">
    <h3>Связаться с нами</h3>
    <div class="contact-form__grid">
        <input id=""
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
        <textarea id="" name="comment" placeholder="Комментарий" rows="3" required></textarea>
        <div class="contact-form__resume">
            <input class="contact-form__resume-input" type="file" name="resume">
            <span class="contact-form__resume-after"></span>
        </div>
    </div>

    <div class="contact-form__submit">
        <input class="submit base__button" type="submit" value="Отправить">
    </div>

</div>