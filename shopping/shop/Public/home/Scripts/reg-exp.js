var myregExp = {
	mobile: /^0?(13|15|17|18)[0-9]{9}$/, //手机
	password: /^[0-9a-zA-Z]{6,20}$/, //密码
	letter: /[a-zA-Z]+/,
	num: /[0-9]+/,
	//username: /(^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$)|(^0?(13|15|17|18|14)[0-9]{9}$)/,
	email: /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/, //邮件
};