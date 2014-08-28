map-it
======

Helping users locate items in the library stacks.

## Install

### MySQL

You will need a database with three tables

    CREATE TABLE `all_callno` (`id` mediumint(11) NOT NULL AUTO_INCREMENT,
    `library` varchar(11) NOT NULL DEFAULT '',
    `begin_callno` varchar(255) NOT NULL,
    `collection` varchar(11) NOT NULL DEFAULT '',
    `floor` varchar(255) NOT NULL,
    `range` varchar(255) NOT NULL,
    `lastmodified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
    )
    

    CREATE TABLE `key_lookup` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `key` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
    )
    

    CREATE TABLE `libraries` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `code` varchar(11) DEFAULT NULL,
    `display` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
    )
    
### .htaccess

Save the .htaccess file.  You shouldn't need to edit it.

    cp .htaccess.example .htaccess
    
### Settings

Copy the example and fill in the details.

    cd api; cp config.sample.ini config.ini
    
## License

Dual licensed under the MIT license (below) and [GPL license](http://www.gnu.org/licenses/gpl-3.0.html).

<small>
MIT License

Copyright (c) 2013 The Harvard Library Innovation Lab

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
</small>
