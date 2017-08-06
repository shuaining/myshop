<?php
return array(
	//url地址访问模式   3：网址/模块/控制器/操作方法
	 'URL_MODEL'             =>  1, 
	//'配置项'=>'配置值'
	'URL_HTML_SUFFIX'	=>	'',
	// URL变量绑定到操作方法作为参数
	'URL_PARAMS_BIND'       =>  true,
	//页面底部显示跟踪信息
	'SHOW_PAGE_TRACE'	=> true,	
	
	//默认分组设置
	'DEFAULT_MODULE'	=>	'Home',					//默认模块
	'MODULE_ALLOW_LIST' =>	array('Home','Admin'),  //定义可供访问的分组列表
	
//设置默认模板引擎
	'template'      => [
    // 模板引擎
    'type'   => 'think',
    //标签库标签开始标签 
    'taglib_begin'  =>  '{',
    //标签库标签结束标记
    'taglib_end'    =>  '}',

	'TMPL_DENY_PHP'   =>  true,
	
],
	
	
	 /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',      // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', 	 // 服务器地址
    'DB_NAME'               =>  'hdgroup',      // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',      // 密码
    'DB_PORT'               =>  '3306',      // 端口
    'DB_PREFIX'             =>  'group_',      // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE,    // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,    // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',  // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, 		 // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,   // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, 		 // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', 	 // 指定从服务器序号
);