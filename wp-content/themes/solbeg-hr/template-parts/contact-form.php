<?php
/**
 * @package Solbeg_hr
 */

?>
<div class="comtact-form__grid">
    <div class="comtact-form__name">
        <input class="comtact-form__name" id="" name="name" minlength="2" type="text" placeholder="Имя" required>
    </div>

    <div class="comtact-form__phone">
        <span class='obligatory-cross'>*</span>
        <input id="" type="tel" name="phone" pattern="+[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Телефон">
    </div>


    <div class="comtact-form__email">
        <span class='obligatory-cross'>*</span>
        <input id="" type="email" name="email" placeholder="Электронная почта" required>
    </div>

    <div class="comtact-form__comment">
        <textarea id="" name="comment" placeholder="Комментарий" required></textarea>
    </div>

    <div class="comtact-form__resume">
        <label>
            <span class="comtact-form__resume-text" id="filename">+ Прикрепить резюме</span>
            <input class="comtact-form__resume-input" type="file" name="resume">
        </label>
    </div>

    <div class="comtact-form__submit">
        <input class="submit" type="submit" value="Отправить">
    </div>

</div>