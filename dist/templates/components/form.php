<?php
$forms = [
    'consult_row_2' => [
        'button'    => 'Получить консультацию архитектора',
        'action'    => '#',
        'class'     => 'form__row--2',
        'contacts'  => true
    ],
    'consult_row_3' => [
        'button'    => 'Обсудить проект',
        'action'    => '#',
        'class'     => 'form__row--3',
        'contacts'  => true
    ],
    'consult_partners' => [
        'button'    => 'Обсудить сотрудничество',
        'action'    => '#',
        'class'     => 'form__row--3',
        'contacts'  => true
    ],
    'consult_reviews' => [
        'button'    => 'Обсудить проект',
        'action'    => '#',
        'class'     => 'form__row--3',
        'contacts'  => true
    ],
];

if (isset($form_id) && isset($forms[$form_id])):

    $form = $forms[$form_id];
    $rowClass = $form['class'];

    ?>
    <form class="form" action="<?= htmlspecialchars($form['action']) ?>" method="post" data-form="<?= htmlspecialchars($form_id) ?>">
        <div class="form__row <?= htmlspecialchars($rowClass) ?>">
            <div class="form__field">
                <label for="name_<?= htmlspecialchars($form_id) ?>">Введите имя</label>
                <input type="text" id="name_<?= htmlspecialchars($form_id) ?>" name="name" placeholder="Имя" required>
            </div>
            <div class="form__field">
                <label for="phone_<?= htmlspecialchars($form_id) ?>">Введите телефон<span class="required">*</span></label>
                <input type="tel" id="phone_<?= htmlspecialchars($form_id) ?>" name="phone" placeholder="+7 (___) ___ - __ - __" required>
            </div>
            <button type="submit" class="button button--primary form__button">
                <span class="button__text"><?= htmlspecialchars($form['button']) ?></span>
            </button>
        </div>

        <div class="form__checkbox">
            <button class="form__checkbox-check form__checkbox-check--active" type="button"></button>
            <div class="form__checkbox-text">
                <span>
                    Я&nbsp;даю согласие на&nbsp;
                    <a href="#">обработку персональных данных</a> на&nbsp;условиях 
                    <a href="#">политики конфиденциальности</a>
                </span>
            </div>
        </div>
    </form>

    <?php if (!empty($form['contacts'])): ?>
        <div class="form__content-contacts">
            <?php
            include 'templates/components/socials/messenger.php';
            include 'templates/components/socials/phone.php';
            ?>
        </div>
    <?php endif; ?>

<?php endif; ?>