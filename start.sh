#!/bin/bash
php spark migrate
php -S 0.0.0.0:$PORT -t public
