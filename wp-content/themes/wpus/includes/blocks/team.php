<?php

/*
 * Регистрация блока
 */

if (function_exists('acf_register_block_type')) {

    add_action('acf/init', function () {

        acf_register_block_type(array(
            'name' => 'team-block', // нельзя использовать нижние подчёркивания
            'title' => 'Команда',
            'render_template' => 'includes/blocks/team-display.php',
            'category' => 'faq-category',
            'mode' => 'edit',
        ));

    });

}

/*
 * Регистрация полей для блока
 */

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
        'key' => 'group_team', // обязательно использовать приставку group_
        'title' => 'Команда',
        'fields' => array(
            array(
                'key' => 'field_team_title', // обязательно использовать приставку field_
                'label' => 'Заголовок', // значение не должно совпадать со значением ключа key
                'name' => 'team_title', // значение не должно совпадать со значением ключа key; по этому значению происходит вызов значения поля на конечной странице
                'type' => 'text',
            ),
            array(
                'key' => 'field_team_subtitle',
                'label' => 'Подаголовок',
                'name' => 'team_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'field_team_items',
                'label' => 'Команда',
                'name' => 'team_items',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_team_name',
                        'label' => 'Имя',
                        'name' => 'team_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_team_publish',
                        'label' => 'Показывать?',
                        'name' => 'team_publish',
                        'type' => 'radio',
                        'choices' => array(
                            'no' => 'Нет',
                            'yes' => 'Да',
                        ),
                    ),
                    array(
                        'key' => 'field_team_publish_no',
                        'label' => 'Нет',
                        'name' => 'team_publish_no',
                        'type' => 'text',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_team_publish',
                                    'operator' => '==',
                                    'value' => 'no',
                                ),
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_team_publish_yes',
                        'label' => 'Да',
                        'name' => 'team_publish_yes',
                        'type' => 'text',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_team_publish',
                                    'operator' => '==',
                                    'value' => 'yes',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/team-block', // приставка acf/ обязательна
                ),
            ),
        ),
    ));

}

/*

Типы полей (type)

Основное

    text _ Текст
    textarea _ Область текста
    number _ Число
    range _ Диапазон
    email _ E-mail
    url _ Ссылка
    password _ Пароль

Содержание

    image _ Изображение
    file _ Файл
    wysiwyg _ Редактор WordPress
    oembed _ Медиа
    gallery _ Галерея

Выбор

    select _ Выбор (select)
    checkbox _ Флажок (checkbox)
    radio _ Переключатель (radio)
    button_group _ Группа кнопок
    true_false _ Да / Нет

Отношение

    link _ Ссылка
    post_object _ Объект записи
    page_link _ Ссылка на страницу
    relationship _ Записи
    taxonomy _ Таксономия
    user _ Пользователь

jQuery

    google_map _ Расположение на карте
    date_picker _ Дата
    date_time_picker _ Дата и время
    time_picker _ Время
    color_picker _ Цвет

Блок

    message _ Сообщение
    accordion _ Аккордеон
    tab _ Вкладка
    group _ Группа
    repeater _ Повторитель
    flexible_content _ Гибкое содержание
    clone _ Клон

*/

/*

Привязка полей к типу занных (location)

Запись

    post_type _ Тип записи
    post_template _ Шаблон записи
    post_status _ Статус записи
    post_format _ Формат записи
    post_category _ Рубрика записи
    post_taxonomy _ Таксономия записи
    post _ Запись

Страница

    page_template _ Шаблон страницы
    page_type _ Тип страницы
    page_parent _ Родитель страницы
    page _ Страница

Пользователь

    current_user _ Текущий пользователь
    current_user_role _ Группа текущего пользователя
    user_form _ Пользователь
    user_role _ Группа пользователя

Формы

    taxonomy _ Таксономия
    attachment _ Медиафайл
    comment _ Комментарий
    widget _ Виджет
    nav_menu _ Меню
    nav_menu_item _ Пункт меню
    block _ Блок
    options_page _ Страница с опциями

*/