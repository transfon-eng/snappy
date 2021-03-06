snappy
======

Snappy is a fast compression algorythm from Google, it favours performance over ratios, and I love all that ...

http://code.google.com/p/snappy/

Most linux distros can install snappy using their package manager, use yum|apt-get install snappy-dev[el]

API
===

```php
<?php
/*
* Compress data using snappy compression
* @return string
*/
function snappy_compress($data);

/*
* Validates a compressed string
* @return boolean
*/
function snappy_validate($data);

/*
* Decompress data using snappy compression
* @return string
*/
function snappy_uncompress($data);
?>
```

That's all so far, stream wrappers to come ...

Install
=======

To install this extension you must have the snappy library and headers installed on your system. 

Clone this respository into ext/snappy in your build tree, and execute the following ( or something very like it ):

```
./buildconf --force
./configure --with-snappy=/usr/lib64
make
```

To run the snappy test to make sure everything is working execute the following:

```
TEST_PHP_EXECUTABLE=sapi/cli/php sapi/cli/php run-tests.php ext/snappy
```

Note: phpize can also be used, if you like that sort of thing ...

Expect
======

The following are the results of comparing zlib and snappy using the data included in the test file with this extension:

```
COMPRESS:
SNAPPY: 3306 bytes in 0.000051 seconds
ZLIB: 1855 bytes in 0.000322 seconds
UNCOMPRESS:
SNAPPY: 9503 bytes in 0.000015 seconds
ZLIB: 9503 bytes in 0.000069 seconds

```
