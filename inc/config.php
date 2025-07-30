<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(844) 945-9666',
        'email_id' => 'info@chasentravel.com',
        'address' => '52 State St Ste 500, Boston, MA 02109, United States',
        'domain_name' => 'https://chasentravel.com',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
