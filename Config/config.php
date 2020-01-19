<?php

return [

    'name' => 'Notifier', 
    
    'desc' => 'Laravel Exception Notifier.', 
    
    'version' => '1.0.0', 

    /*
    |--------------------------------------------------------------------------
    | Exception Email Enabled
    |--------------------------------------------------------------------------
    | Enable/Disable exception email notifications
    |
    */

    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Exception Email From
    |--------------------------------------------------------------------------
    | This is the email your exception will be from.
    |
    */

    'from' => 'email@email.com',

    /*
    |--------------------------------------------------------------------------
    | Exception Email To
    |--------------------------------------------------------------------------
    | This is the email(s) the exceptions will be emailed to.
    | You can send to more than one email, just separate them with commas (,)
    |
    */

    'to' => 'noviyantorahmadi@gmail.com',

    /*
    |--------------------------------------------------------------------------
    | Exception Email CC
    |--------------------------------------------------------------------------
    | This is the email(s) the exceptions will be CC emailed to.
    | You can send to more than one email, just separate them with commas (,)
    |
    */

    'cc' => '',

    /*
    |--------------------------------------------------------------------------
    | Exception Email BCC
    |--------------------------------------------------------------------------
    | This is the email(s) the exceptions will be BCC emailed to.
    | You can send to more than one email, just separate them with commas (,)
    |
    */

    'bcc' => '',

    /*
    |--------------------------------------------------------------------------
    | Exception Email Subject
    |--------------------------------------------------------------------------
    | This is the subject of the exception email
    |
    */

    'subject' => 'Error on '.config('app.name'),

    /*
    |--------------------------------------------------------------------------
    | Exception Email View
    |--------------------------------------------------------------------------
    | This is the view that will be used for the email.
    |
    */

    'view' => 'notifier::emails.exception',
];
