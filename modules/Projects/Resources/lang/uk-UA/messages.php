<?php

return [

    'success' => [
        'added'             => ':type додано!',
        'updated'           => ':type оновлено!',
        'deleted'           => ':type видалено!',
        'duplicated'        => ':type продубльовано!',
        'imported'          => ':type імпортовано!',
        'enabled'           => ':type увімкнено!',
        'disabled'          => ':type відключено!',
    ],

    'error' => [
        'over_payment'      => 'Помилка: Оплату не додано! Сума, яку ви ввели більша загальної: :amount',
        'not_user_company'  => 'Помилка: Вам не дозволено керувати цією компанією!',
        'customer'          => 'Помилка: Користувача не створено! :name ця електронна адреса вже використовується.',
        'no_file'           => 'Помилка: Файл не обрано!',
        'last_category'     => 'Помилка: Неможливо видалити :type категорію!',
        'change_type'       => 'Помилка: Неможливо змінити тип, оскільки :text використаний!',
        'invalid_apikey'    => 'Помилка: Введений API ключ не вірний!',
        'import_column'     => 'Помилка: :message Назва файлу: :sheet. Номер рядка: :line.',
        'import_sheet'      => 'Помилка: Назва аркуша неприпустима. Будь ласка, перевірте зразок файлу.',
        'unknown'           => 'Помилка мережі. Будь ласка, спробуйте ще раз пізніше.',
    ],

    'warning' => [
        'deleted'           => 'Увага: Вам не дозволено видалити <b>:name</b> оскільки воно :text використовується.',
        'disabled'          => 'Увага: Вам не дозволяється відключати <b>:name</b> оскільки воно :text використовується.',
        'disable_code'      => 'Увага: Вам не дозволено видалити <b>:name</b> оскільки воно :text використовується.',
        'payment_cancel'    => 'Увага: Ви скасували останній :method платежу!',
    ],

];
