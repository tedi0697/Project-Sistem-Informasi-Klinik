'modules' => array(
    'gii' => array(
        'class' => 'system.gii.GiiModule',
        'password' => '12345678', // Ganti dengan password pilihan Anda
        // Atur IP yang diizinkan mengakses Gii (ganti sesuai IP Anda)
        'ipFilters' => array('127.0.0.1', '::1'),
    ),
),

'db'=>array(
    'connectionString' => 'phpmyadmin:host=localhost;dbname=db_klinik',
    'password' => '12345678',
    'charset' => 'utf8',
),