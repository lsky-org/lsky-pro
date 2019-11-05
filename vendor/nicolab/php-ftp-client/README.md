# nicolab/php-ftp-client

A flexible FTP and SSL-FTP client for PHP.
This lib provides helpers easy to use to manage the remote files.

> This package is aimed to remain simple and light. It's only a wrapper of the FTP native API of PHP, with some useful helpers. If you want to customize some methods, you can do this by inheriting one of the [3 classes of the package](src/FtpClient).


## Install

  * Use composer: _require_ `nicolab/php-ftp-client`

  * Or use GIT clone command: `git clone git@github.com:Nicolab/php-ftp-client.git`

  * Or download the library, configure your autoloader or include the 3 files of `php-ftp-client/src/FtpClient` directory.


## Getting Started

Connect to a server FTP :

```php
$ftp = new \FtpClient\FtpClient();
$ftp->connect($host);
$ftp->login($login, $password);
```

OR

Connect to a server FTP via SSL (on port 990 or another port) :

```php
$ftp = new \FtpClient\FtpClient();
$ftp->connect($host, true, 990);
$ftp->login($login, $password);
```

Note: The connection is implicitly closed at the end of script execution (when the object is destroyed). Therefore it is unnecessary to call `$ftp->close()`, except for an explicit re-connection.


### Usage

Upload all files and all directories is easy :

```php
// upload with the BINARY mode
$ftp->putAll($source_directory, $target_directory);

// Is equal to
$ftp->putAll($source_directory, $target_directory, FTP_BINARY);

// or upload with the ASCII mode
$ftp->putAll($source_directory, $target_directory, FTP_ASCII);
```

*Note : FTP_ASCII and FTP_BINARY are predefined PHP internal constants.*

Get a directory size :

```php
// size of the current directory
$size = $ftp->dirSize();

// size of a given directory
$size = $ftp->dirSize('/path/of/directory');
```

Count the items in a directory :

```php
// count in the current directory
$total = $ftp->count();

// count in a given directory
$total = $ftp->count('/path/of/directory');

// count only the "files" in the current directory
$total_file = $ftp->count('.', 'file');

// count only the "files" in a given directory
$total_file = $ftp->count('/path/of/directory', 'file');

// count only the "directories" in a given directory
$total_dir = $ftp->count('/path/of/directory', 'directory');

// count only the "symbolic links" in a given directory
$total_link = $ftp->count('/path/of/directory', 'link');
```

Detailed list of all files and directories :

```php
// scan the current directory and returns the details of each item
$items = $ftp->scanDir();

// scan the current directory (recursive) and returns the details of each item
var_dump($ftp->scanDir('.', true));
```

Result:

	'directory#www' =>
	    array (size=10)
	      'permissions' => string 'drwx---r-x' (length=10)
	      'number'      => string '3' (length=1)
	      'owner'       => string '32385' (length=5)
	      'group'       => string 'users' (length=5)
	      'size'        => string '5' (length=1)
	      'month'       => string 'Nov' (length=3)
	      'day'         => string '24' (length=2)
	      'time'        => string '17:25' (length=5)
	      'name'        => string 'www' (length=3)
	      'type'        => string 'directory' (length=9)

	  'link#www/index.html' =>
	    array (size=11)
	      'permissions' => string 'lrwxrwxrwx' (length=10)
	      'number'      => string '1' (length=1)
	      'owner'       => string '0' (length=1)
	      'group'       => string 'users' (length=5)
	      'size'        => string '38' (length=2)
	      'month'       => string 'Nov' (length=3)
	      'day'         => string '16' (length=2)
	      'time'        => string '14:57' (length=5)
	      'name'        => string 'index.html' (length=10)
	      'type'        => string 'link' (length=4)
	      'target'      => string '/var/www/shared/index.html' (length=26)

	'file#www/README' =>
	    array (size=10)
	      'permissions' => string '-rw----r--' (length=10)
	      'number'      => string '1' (length=1)
	      'owner'       => string '32385' (length=5)
	      'group'       => string 'users' (length=5)
	      'size'        => string '0' (length=1)
	      'month'       => string 'Nov' (length=3)
	      'day'         => string '24' (length=2)
	      'time'        => string '17:25' (length=5)
	      'name'        => string 'README' (length=6)
	      'type'        => string 'file' (length=4)


All FTP PHP functions are supported and some improved :

```php
// Requests execution of a command on the FTP server
$ftp->exec($command);

// Turns passive mode on or off
$ftp->pasv(true);

// Set permissions on a file via FTP
$ftp->chmod(0777, 'file.php');

// Removes a directory
$ftp->rmdir('path/of/directory/to/remove');

// Removes a directory (recursive)
$ftp->rmdir('path/of/directory/to/remove', true);

// Creates a directory
$ftp->mkdir('path/of/directory/to/create');

// Creates a directory (recursive),
// creates automaticaly the sub directory if not exist
$ftp->mkdir('path/of/directory/to/create', true);

// and more ...
```

Get the help information of remote FTP server :

```php
var_dump($ftp->help());
```

Result :

	array (size=6)
	  0 => string '214-The following SITE commands are recognized' (length=46)
	  1 => string ' ALIAS' (length=6)
	  2 => string ' CHMOD' (length=6)
	  3 => string ' IDLE' (length=5)
	  4 => string ' UTIME' (length=6)
	  5 => string '214 Pure-FTPd - http://pureftpd.org/' (length=36)


_Note : The result depend of FTP server._


### Extend

Create your custom `FtpClient`.

```php
// MyFtpClient.php

/**
 * My custom FTP Client
 * @inheritDoc
 */
class MyFtpClient extends \FtpClient\FtpClient {

  public function removeByTime($path, $timestamp) {
      // your code here
  }

  public function search($regex) {
      // your code here
  }
}
```

```php
// example.php
$ftp = new MyFtpClient();
$ftp->connect($host);
$ftp->login($login, $password);

// remove the old files
$ftp->removeByTime('/www/mysite.com/demo', time() - 86400));

// search PNG files
$ftp->search('/(.*)\.png$/i');
```


## API doc

See the [source code](https://github.com/Nicolab/php-ftp-client/tree/master/src/FtpClient) for more details.
It is fully documented :blue_book:


## Testing

Tested with "atoum" unit testing framework.


## License

[MIT](https://github.com/Nicolab/php-ftp-client/blob/master/LICENSE) c) 2014, Nicolas Tallefourtane.


## Author

| [![Nicolas Tallefourtane - Nicolab.net](http://www.gravatar.com/avatar/d7dd0f4769f3aa48a3ecb308f0b457fc?s=64)](http://nicolab.net) |
|---|
| [Nicolas Talle](http://nicolab.net) |
| [![Make a donation via Paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=PGRH4ZXP36GUC) |
