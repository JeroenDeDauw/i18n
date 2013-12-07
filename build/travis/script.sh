#! /bin/bash

set -x

cd ../phase3/extensions/i18n

if [ "$MW-$DBTYPE" == "master-mysql" ]
then
	php ../../tests/phpunit/phpunit.php -c phpunit.xml.dist --coverage-clover build/logs/clover.xml
else
	php ../../tests/phpunit/phpunit.php -c phpunit.xml.dist
fi