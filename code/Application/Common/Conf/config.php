<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_MODULE'    => 'Home', //默认模块
    'MODULE_ALLOW_LIST'	=> array('Home', 'Admin','Commth'),
    'LOAD_EXT_CONFIG' 	=> 'db',  //设置公共模块访问
    'URL_MODEL'			=> 0,
    'DATA_CACHE_TYPE'	=> 'file',
    'DATA_CACHE_TIME'	=> 7000,
    'SAFE_SALT'			=> '/@DragonDean/#', // 全局盐值
    'SESSION_OPTIONS'	=>  array(
        'name'                =>  'user',                    //设置session名
        'expire'              =>  240000,                   //SESSION保存24小时
        'use_trans_sid'       =>  1,                         //跨页传递
        'use_only_cookies'    =>  0,                         //是否只开启基于cookies的session的会话方式
    ),
);