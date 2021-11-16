<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Email Customization
    |--------------------------------------------------------------------------
    |
    | Here you can change the body for your reset email
    | SUBJECT - Email Subject
    | GREETING - Email Greeting
    | BEFORE_CODE - The text displayed before the code, use an array and each line to be a new entry
    | AFTER_CODE - The text displayed after the code, use an array and each line to be a new entry
    | SIGN_OFF - The text displayed before your apps name
    |
    */
    'PASSWORD_RESET_CODE_LENGTH' => 6,
    'PASSWORD_RESET_SUBJECT' => 'Setel ulang kata sandi',
    'PASSWORD_RESET_GREETING' => 'yang terhormat.',
    'PASSWORD_RESET_BEFORE_CODE' => [
        'Anda baru-baru ini meminta untuk menyetel ulang sandi akun Anda.',
    ],
    'PASSWORD_RESET_AFTER_CODE' => [
        'Harap salin dan tempel kode diatas ini ke dalam aplikasi',
    ],
    'PASSWORD_RESET_SIGN_OFF' => '',

    /*
    Token will be injected at the end. Example:
    'PASSWORD_RESET_DEEPLINK' => 'myapp://resetpassword?token=',
    */
    'PASSWORD_RESET_DEEPLINK' => '',

];
