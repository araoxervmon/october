<?php namespace System\Database\Seeds;

use Seeder;
use System\Models\EmailLayout;

class SeedSetupEmailLayouts extends Seeder
{

    public function run()
    {

$css = 'a, a:hover {
    text-decoration: none;
    color: #0862A2;
    font-weight: bold;
}

td, tr, th, table {
    padding: 0px;
    margin: 0px;
}

p {
    margin: 10px 0;
}';

$html = '<html>
    <head>
        <style type="text/css" media="screen">
            {{ css|raw }}
        </style>
    </head>
    <body>
        {{ message|raw }}
    </body>
</html>';

$text = '{{ message|raw }}';

        EmailLayout::create([
            'is_locked'    => true,
            'name'         => 'Default',
            'code'         => 'default',
            'content_html' => $html,
            'content_css'  => $css,
            'content_text' => $text,
        ]);

$html = '<html>
    <head>
        <style type="text/css" media="screen">
            {{ css|raw }}
        </style>
    </head>
    <body>
        {{ message|raw }}
        <hr />
        <p>This is an automatic message. Please do not reply to it.</p>
    </body>
</html>';

$text = '{{ message|raw }}


---
This is an automatic message. Please do not reply to it.
';

        EmailLayout::create([
            'is_locked'    => true,
            'name'         => 'System',
            'code'         => 'system',
            'content_html' => $html,
            'content_css'  => $css,
            'content_text' => $text,
        ]);
    }

}