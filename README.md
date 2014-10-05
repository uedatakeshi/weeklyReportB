# CakePHP 3.0.0 もくもく会（勉強会） #8 用

[CakePHP 3.0.0 もくもく会（勉強会） #8](http://coedo-cakephp.doorkeeper.jp/events/15904?utm_campaign=event_15904&utm_medium=email&utm_source=ticket) 

[vagrant-lamp-sample](https://github.com/monsat/vagrant-lamp-sample/tree/cakephp3)

[Cookbook 3.x Installation](http://book.cakephp.org/3.0/en/installation.html)

## Installation

```bash
cd ~/htdocs
git clone https://github.com/uedatakeshi/weeklyReportB.git myapp
```

```bash
cd myapp
curl -s https://getcomposer.org/installer | php
php composer.phar update
```

```bash
mkdir logs
mkdir tmp
mkdir tmp/tests
mkdir tmp/sessions
mkdir tmp/cache
mkdir tmp/cache/models
mkdir tmp/cache/persistent
mkdir tmp/cache/views
chmod 0777 logs
chmod 0777 tmp
chmod 0777 tmp/tests
chmod 0777 tmp/sessions
chmod 0777 tmp/cache
chmod 0777 tmp/cache/models
chmod 0777 tmp/cache/persistent
chmod 0777 tmp/cache/views
```

## Configuration

```bash
cp config/app.default.php config/app.php
vim config/app.php
```

以下を書き換え。

```php
'Security' => [
		'salt' => '6b98cea9939950d1552321c66f1d1eec8901187d594a90a622d8976f37e35a9d',
	],
```


```php
	'Datasources' => [
		'default' => [
			'className' => 'Cake\Database\Connection',
			'driver' => 'Cake\Database\Driver\Mysql',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'my_app',
			'password' => 'secret',
			'database' => 'my_app',
			'encoding' => 'utf8',
			'timezone' => 'UTC',
			'cacheMetadata' => true,
```


## Database

```bash
mysql -u root -p
```

```sql
CREATE DATABASE report_db DEFAULT CHARACTER SET utf8;
CREATE TABLE reports(
	id INT AUTO_INCREMENT,
    report_date DATE,
	employee VARCHAR(255),
    activity TEXT,
    comments TEXT,
	created DATETIME,
	modified DATETIME,
	PRIMARY KEY  (id)
);

```


http://localhost/myapp/reports に接続


    

