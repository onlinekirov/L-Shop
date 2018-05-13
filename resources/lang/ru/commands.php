<?php

return [
    'user' => [
        'create' => [
            'greeting' => 'Создание нового пользователя.',
            'username' => 'Введите имя пользователя (username)',
            'email' => 'Введите адрес электронной почты пользователя (email)',
            'password' => 'Введите пароль пользователя',
            'password_confirmation' => 'Повторите пароль',
            'password_confirmation_error' => 'Пароли должны совпадать.',
            'activate' => 'Активировать пользователя.',
            'roles' => 'Выберите роли, которые ',
            'success' => 'Пользователь создан успешно.'
        ],
        'delete' => [
            'title' => 'Удаление пользователя',
            'description' => 'Эта операция безвозвратно удалит из системы пользователя и все связанные с ним компоненты.',
            'confirm' => 'Продолжить?',
            'canceled' => 'Удаление отменено.',
            'success' => 'Пользователь успешно удален.'
        ],
        'roles' => [
            'attach' => [
                'user_not_found' => 'Пользователь с именем ":username" не найден.',
                'role_not_found' => 'Роль с именем ":name" не найдена.',
                'already_has_role' => 'Пользователь уже имеет роль ":name".',
                'success' => 'Роли пользователя успешно обновлены.'
            ],
            'detach' => [
                'role_not_found' => 'Роль с именем ":name" у данного пользователя не найдена.'
            ],
            'list' => [
                'title' => 'Роли пользователя :username',
                'table' => [
                    'id' => 'ID',
                    'name' => 'Имя роли'
                ]
            ]
        ]
    ],
    'purchase' => [
        'complete' => [
            'not_found' => 'Покупка с заданным идентификатором не найдена.',
            'already_completed' => 'Данная покупка уже завершена.',
            'success' => 'Покупка успешно завершена, содержимое выдано пользователю.',
        ]
    ],
    'rcon' => [
        'welcome' => 'Добро пожаловать в интерактивную Rcon-консоль.',
        'select_server' => 'Для начала, выберите сервер с которым вы хотите соединиться',
        'connecting' => 'Установка соединения с сервером...',
        'connected' => 'Соединение установлено!',
        'error' => 'Не удалось установить соединение с сервером.',
        'input' => 'Введите команду'
    ],
    'db' => [
        'transfer' => [
            'welcome' => 'Вас привествует мастер преобразования содержимого базы данных L-Shop. Он поможет адаптировать данные, хранящиеся в БД старой версии L-Shop к новой версии.',
            'select_version' => 'Выберите версию, данные с которой нужно преобразовать',
            'wait_transfer' => 'Подождите, выполняется преобразование...',
            'success_transfer' => 'Преобразование прошло успешно!',
            'wait_seeding' => 'Подождите, выполняется загрузка системных данных в БД...',
            'success_seeding' => 'Загрузка прошла успешно!',
        ]
    ]
];
