<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 919-2090',
        'email_id' => 'info@chasentravel.com',
        'address' => '1700 Quail Street, Suite 100 Newport Beach, CA 92660',
        'domain_name' => 'https://chasentravel.com',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
