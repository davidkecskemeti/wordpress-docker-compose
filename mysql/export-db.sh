#!/bin/bash

echo Export db
mkdir -p init
docker exec appointment-booking-system-test-db-1 /usr/bin/mysqldump -u root --password=somewordpress wordpress > init/backup.sql