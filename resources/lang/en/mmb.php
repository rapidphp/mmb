<?php

return [

    /**
     * Filter error messages
     */
    'filter'   => [
        'message'          => 'Required message',
        'text'             => 'Required text message',
        'text-single-line' => 'Required single line message',
        'int'              => 'Required integer number',
        'float'            => 'Required number',
        'unsigned-int'     => 'Required unsigned integer number',
        'unsigned-float'   => 'Required unsigned number',
        'numeric'          => 'Required numeric value',
        'media'            => 'Required media (photo/video/...)',
        'media-or-text'    => 'Required text message or media (photo/video/...)',
        'should-forward'   => 'Message should be forwarded',
        'not-forward'      => 'Message can\'t be forwarded',

        'min'        => 'Minimum number is :number',
        'max'        => 'Maximum number is :maximum',
        'min-length' => 'Minimum length is :length',
        'max-length' => 'Maximum length is :length',
        'divisible' => 'Your number must be a multiple of :number',

        'string-able' => 'Required text message',
        'pattern'     => 'Invalid pattern',
    ],


    /**
     * Form messages
     */
    'form'     => [

        /**
         * Form filters
         */
        'filter' => [
            'only-options' => "You should use the keyboards!",
        ],

        /**
         * Form keyboards
         */
        'key'    => [
            'cancel'   => 'Cancel',
            'skip'     => 'Skip',
            'previous' => 'Previous',
            'ineffective' => 'Not Set',
            'without-changes' => 'Previous Value',
        ],

        /**
         * Form advanced value
         */
        'advanced' => [
            'previous-value' => 'Previous value:',
        ],

        /**
         * Form scopes
         */
        'scopes' => [
            'delete' => [
                'prompt'  => 'Are you sure to delete?',
                'confirm' => 'Yes, Delete!',
            ],
        ],

    ],


    /**
     * Menu messages
     */
    'menu'     => [
        'back'         => 'Back',
        'back-to-main' => 'Back to main menu',
    ],


    /**
     * Resource messages
     */
    'resource' => [

        'default' => [
            'back' => 'Back',
            'page' => 'Page :current/:last',
            'none' => 'None',
        ],

        'info' => [
            'message' => 'Info:',
        ],

        'list' => [
            'message'         => 'Page :page of :lastPage:',
            'not_found_label' => '- - No items found - -',
        ],

        'create' => [
            'key_label' => 'Create New',
        ],

        'edit' => [
            'key_label' => 'Edit',
        ],

        'delete' => [
            'key_label' => 'Delete',
            'message'   => 'Are you sure to delete?',
            'confirm'   => 'Yes, Delete!',
        ],

        'search' => [
            'message' => 'Search:',

            'label'         => 'Search',
            'all_key_label' => 'Show All',
        ],

        'order' => [
            'message' => 'Select the order:',

            'newest' => 'Newest',
            'oldest' => 'Oldest',

            'key_label' => 'Order: :label',
            'label'     => ':label',
        ],

        'filter' => [
            'message' => 'Select:',
        ],

    ],

    'user-friendly' => [
        'bool-true' => 'True',
        'bool-false' => 'False',
        'null' => 'Not Set',
    ],

];
