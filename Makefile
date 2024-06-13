.PHONY: start stop build shell

start:
	docker-compose --env-file .env -f docker/docker-compose.yml up --build -d

stop:
	docker-compose --env-file .env -f docker/docker-compose.yml down

build:
	docker-compose --env-file .env -f docker/docker-compose.yml build

shell:
	docker exec -it $$(grep APP_NAME .env | cut -d '=' -f2)_app /bin/bash
