#!/bin/sh

# Wait for MySQL to be available
echo "Waiting for MySQL..."
until mysqladmin ping -h db -u root -pPalve@56 --silent; do
  sleep 2
done

echo "MySQL is up - starting Apache"
exec apache2-foreground