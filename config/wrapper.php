<?php
class ConfigWrapper
{
    public $_aliases;
    public $_modules;
    public $_tokens;
    public $_params;
    public function __construct()
    {
        $this->_aliases = [
            '@bower' => '@vendor/bower-asset',
            '@npm'   => '@vendor/npm-asset',
            '@helpers' => '@app/providers/components',
            '@coder' => '@app/providers/code',
            '@swagger' => '@app/providers/swagger',
            '@ui' => '@app/providers/interface',
            '@cmd' => '@app/providers/console',
            '@modules' => '@app/modules',
            '@components' => '@app/providers/interface/views/components',

        ];
        $this->_modules = [
            'admin' => [
                'class' => 'mdm\admin\Module',
                'controllerMap' => [
                    'assignment' => [
                        'class' => 'mdm\admin\controllers\AssignmentController',
                        /* 'userClassName' => 'app\models\User', */
                        'idField' => 'user_id',
                        'usernameField' => 'username',
                        //'searchClass' => 'app\models\UserSearch'
                    ],
                ],
            ]
        ];
        $this->_tokens = [
            '{id}' => '<id:\\d[\\d,]*>',
            '{key}' => '<key:[a-zA-Z0-9_\-\/]+>',
            '{crypt_id}' => '<crypt_id:[a-zA-Z0-9\\-]+>',
        ];
        $this->_params = [
            'pageSize' => [10 => 10, 25 => 25, 50 => 50, 100 => 100],
            'pageSizeLimit' => 100,
            'defaultPageSize' => 25,
            'adminEmail' => 'kifaruoutdooradventuressociety@gmail.com',
            'senderEmail' => 'mercymutinda04@gmail.com',
            'senderName' => 'KIFARU ADVENTURES',
            'supportEmail' => 'support@example.com',

        ];
    }
    public function load($item)
    {
        $wrapper = [];
        $routes = []; // Initialized to prevent "Undefined array key" warnings
        $wrapper['aliases'] = $this->_aliases;
        $wrapper['modules'] = $this->_modules;
        $wrapper['tokens'] = $this->_tokens;
        $wrapper['params'] = $this->_params;
        $wrapper['routes'] = []; // Default empty array for REST rules
        $wrapper['controllers'] = [];
        $wrapper['migrationPaths'] = [];

        foreach (new DirectoryIterator(dirname(__DIR__) . '/modules') as $index => $fileinfo) {
            if ($fileinfo->isDir() && !$fileinfo->isDot()) {
                $moduleName = $fileinfo->getFilename();

                // Completely skip the dashboard module registration
                if ($moduleName === 'dashboard') {
                    continue; 
                }

                $wrapper['aliases']['@' . $moduleName] = '@app/modules/' . $moduleName;
                $wrapper['controllers'][] = $moduleName;
                $wrapper['migrationPaths'][] = '@' . $moduleName . '/migrations';

                if ($moduleName !== 'main') {
                    $wrapper['modules'][$moduleName] = [
                        'class' => $moduleName . '\\Module'
                    ];

                    // Process routers for all modules except 'main' and 'dashboard'
                    $dir = dirname(__DIR__) . "/modules/" . $moduleName . "/routers";
                    if (is_dir($dir)) {
                        foreach (glob("{$dir}/*.php") as $filename) {
                            $route = require($filename);
                            if (is_array($route)) {
                                $routes = array_merge($routes, $route);
                            }
                        }
                    }
                }
            }
        }
        
        $wrapper['routes'] = $routes;

        // Generate API Menus for active modules
        foreach ($wrapper['modules'] as $modId => $modConfig) {
            $moduleClass = $modConfig['class'];
            if (property_exists($moduleClass, 'name')) {
                // Use Yii::$app check safely if needed, or stick to static module metadata
                $wrapper['apiMenus'][] = [
                    'title' => $modId . ' Module', 
                    'url' => 'api/swagger', 
                    'param' => ['mod' => $modId]
                ];
            }
        }

        if (!empty($wrapper['apiMenus'])) {
            $wrapper['apiMenus'] = [['title' => 'API Docs', 'icon' => 'code', 'submenus' => $wrapper['apiMenus']]];
            if (isset($_SERVER['ENVIRONMENT']) && $_SERVER['ENVIRONMENT'] == 'dev') {
                $wrapper['apiMenus'][] = ['title' => 'Gii', 'icon' => 'code-fork', 'url' => '/gii'];
            }
        }

        return isset($wrapper[$item]) ? $wrapper[$item] : null;
    }
    
    public function dbDriver($selector = null)
    {
        $connection = [
            'class' => 'yii\db\Connection',
        ];
        
        $driver = isset($_SERVER[$selector . '_DRIVER']) ? $_SERVER[$selector . '_DRIVER'] : 'mysql';

        switch ($driver) {
            case "mssql":
                $connection = array_merge($connection, [
                    'driverName' => 'sqlsrv',
                    'dsn' => "sqlsrv:Server={$_SERVER[$selector . '_HOST']};Database={$_SERVER[$selector . '_DATABASE']}",
                ]);
                break;
            case "pgsql":
                $connection = array_merge($connection, [
                    'dsn' => "pgsql:host={$_SERVER[$selector . '_HOST']};port={$_SERVER[$selector . '_PORT']};dbname={$_SERVER[$selector . '_DATABASE']}",
                ]);
                break;
            default: // mysql
                $connection = array_merge($connection, [
                    'dsn' => "mysql:host={$_SERVER[$selector . '_HOST']};port={$_SERVER[$selector . '_PORT']};dbname={$_SERVER[$selector . '_DATABASE']}",
                ]);
        }
        $connection = array_merge($connection, [
            'username' => $_SERVER[$selector . '_USERNAME'],
            'password' => $_SERVER[$selector . '_PASSWORD'],
            'charset' => 'utf8',
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 60,
            'schemaCache' => 'cache',
        ]);
        return $connection;
    }
}