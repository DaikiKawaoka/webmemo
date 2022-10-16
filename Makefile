install:
	@make build
	@make up
	docker compose exec api composer install
	docker compose exec api cp .env.example .env
	docker compose exec api php artisan key:generate
	docker compose exec api php artisan storage:link
	docker compose exec api chmod -R 777 storage bootstrap/cache
	@make fresh
	docker compose exec wev yarn install
	docker compose exec wev yarn start

init:
	docker-compose up --build -d
	docker-compose exec api cp .env.example .env
	docker-compose exec api php artisan key:generate
	docker-compose exec api php artisan migrate:refresh --seed
	docker compose exec web yarn start

up:
	docker compose up -d
build:
	docker compose build
web:
	docker compose exec web bash
api:
	docker compose exec api bash
migrate:
	docker compose exec api php artisan migrate
fresh:
	docker compose exec api php artisan migrate:fresh --seed
seed:
	docker compose exec api php artisan db:seed
dacapo:
	docker compose exec api php artisan dacapo
rollback-test:
	docker compose exec api php artisan migrate:fresh
	docker compose exec api php artisan migrate:refresh
tinker:
	docker compose exec api php artisan tinker
test:
	docker compose exec api php artisan test
optimize:
	docker compose exec api php artisan optimize
optimize-clear:
	docker compose exec api php artisan optimize:clear
cache:
	docker compose exec api composer dump-autoload -o
	@make optimize
	docker compose exec api php artisan event:cache
	docker compose exec api php artisan view:cache
cache-clear:
	docker compose exec api composer clear-cache
	@make optimize-clear
	docker compose exec api php artisan event:clear
db:
	docker compose exec db bash
sql:
	docker compose exec db bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
redis:
	docker compose exec redis redis-cli
ide-helper:
	docker compose exec api php artisan clear-compiled
	docker compose exec api php artisan ide-helper:generate
	docker compose exec api php artisan ide-helper:meta
	docker compose exec api php artisan ide-helper:models --nowrite
