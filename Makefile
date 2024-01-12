up:
	docker compose up --build

down:
	docker compose down --remove-orphans

cli:
	docker compose run --rm cli bash

mysql:
	docker exec -it linux-php-db-1 mysql -pdbroot

mysql-bash:
	docker exec -it linux-php-db-1 bash

mysql-dump:
	docker exec -it linux-php-db-1 bash -c "mysqldump -d -pdbroot student > /var/local/dbdump.sql"

mysql-from-dump:
	docker exec -it linux-php-db-1 bash -c "mysql -pdbroot student < /var/local/dbdump.sql"		