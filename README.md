# File

This provide a simple api to read and write files

[![Build Status](https://secure.travis-ci.org/desarrolla2/File.png)](http://travis-ci.org/desarrolla2/File)

[![Latest Stable Version](https://poser.pugx.org/desarrolla2/file/v/stable.png)](https://packagist.org/packages/desarrolla2/file) [![Total Downloads](https://poser.pugx.org/desarrolla2/file/downloads.png)](https://packagist.org/packages/desarrolla2/file)

## Installation

### With Composer

It is best installed it through [packagist](http://packagist.org/packages/desarrolla2/file) 
by including `desarrolla2/file` in your project composer.json require:

``` json
    "require": {
        // ...
        "desarrolla2/file":  "*"
    }
```

### Without Composer

You can also download it from [Github] (https://github.com/desarrolla2/File),  but no autoloader is provided so 
you'll need to register it with your own PSR-4  compatible autoloader.

## Usage
   
``` php   
<?php
require __DIR__ . '/../vendor/autoload.php';

use Desarrolla2\File\File;

// Simple api to write file

File::write($fileName,$data);

// Simple api to read file

File::read($fileName);

```

## Formats

Current supported formats are:

- File: raw data
- Json: encode arrays to json files.

## Contact

You can contact with me on [@desarrolla2](https://twitter.com/desarrolla2).