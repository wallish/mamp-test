<?php

require_once 'vendor/autoload.php';

  $f = new \Adldap\Adldap([
            'default' => [
                'hosts' => ['ad01.domain.fr', 'ad02.domain.fr'],
                'base_dn' => 'ou=Utilisateurs,ou=xxx,dc=xxx,dc=xxx,dc=xxx,dc=xx',
                'username' => 'user',
                'password' => 'password',

                // Optional Configuration Options
                'use_ssl' => false,
                'use_tls' => false,
                'timeout' => 5,
            ]
        ]);