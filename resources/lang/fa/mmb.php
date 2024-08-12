<?php

return [

    /**
     * Filter error messages
     */
    'filter'   => [
        'message'          => 'تنها پیغام قابل قبول است',
        'text'             => 'تنها پیغام متنی قابل قبول است',
        'text-single-line' => 'تنها متن تک خطی قابل قبول است',
        'int'              => 'Required integer number',
        'float'            => 'Required number',
        'unsigned-int'     => 'Required unsigned integer number',
        'unsigned-float'   => 'Required unsigned number',
        'media'            => 'تنها پیغام رسانه ای قابل قبول است‌ (عکس/ویدیو/...)',
        'media-or-text'    => 'تنها پیغام متنی یا رسانه ای قابل قبول است (عکس/ویدیو/...)',

        'min'        => 'حداقل عدد قابل قبول :number است',
        'max'        => 'حداکثر عدد قابل قبول :maximum است',
        'min-length' => 'حداقل طول متن قابل قبول :length است',
        'max-length' => 'حداکثر طول متن قابل قبول :length است',
        'divisible' => 'عدد شما باید مضربی از :number باشد',

        'numeric'     => 'تنها عدد قابل قبول است',
        'string-able' => 'تنها متن قابل قبول است',
        'pattern'     => 'پیام نامعتبر است',
    ],


    /**
     * Form messages
     */
    'form'     => [

        /**
         * Form filters
         */
        'filter' => [
            'only-options' => "تنها می توانید از دکمه ها استفاده کنید!",
        ],

        /**
         * Form keyboards
         */
        'key'    => [
            'cancel'   => 'لغو',
            'skip'     => 'رد کردن',
            'previous' => 'قبلی',
            'ineffective' => 'تنظیم نشده',
            'without-changes' => 'مقدار قبلی',
        ],

        /**
         * Form advanced value
         */
        'advanced' => [
            'previous-value' => 'مقدار قبلی:',
        ],

        /**
         * Form scopes
         */
        'scopes' => [
            'delete' => [
                'prompt'  => 'از حذف شدن اطمینان دارید?',
                'confirm' => 'بله، حذف شود!',
            ],
        ],

    ],


    /**
     * Menu messages
     */
    'menu'     => [
        'back'         => 'بازگشت',
        'back-to-main' => 'بازگشت به منوی اصلی',
    ],


    /**
     * Resource messages
     */
    'resource' => [

    ],

    'user-friendly' => [
        'bool-true' => 'بله',
        'bool-false' => 'خیر',
        'null' => 'تنظیم نشده',
    ],

];
