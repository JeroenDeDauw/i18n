#! /bin/bash

set -x

cd ../phase3/extensions/i18n

if [ "$MW-$DBTYPE" == "master-mysql" ]
then
	phpunit --coverage-clover ../../extensions/i18n/build/logs/clover.xml
else
	phpunit
fi