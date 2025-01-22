<?php
return array(
    'client_id' => 'local.XXXXXXXXXXXXXXXXXX', // Код приложения (client_id)
    'client_secret' => 'XXXXXXXXXXXXXXXXXXXXX', // Секретный код приложения (client_secret)
    'application_scope' => array(
        'crm',
        'user',
        'bizproc',
        'placement'
    ),
    'placement' => array(
        'CRM_DEAL_DETAIL_TAB' // Размещение в карточке сделки
    )
);
