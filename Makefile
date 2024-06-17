.PHONY: start stop build shell composer-install

CONTAINER_NAME=$(shell grep APP_NAME .env | cut -d '=' -f2)_app

start:
	docker-compose --env-file .env -f docker/docker-compose.yml up --build -d

stop:
	docker-compose --env-file .env -f docker/docker-compose.yml down

build:
	docker-compose --env-file .env -f docker/docker-compose.yml build

shell:
	docker exec -it $(CONTAINER_NAME) /bin/bash

composer-install:
	docker exec -it $(CONTAINER_NAME) composer install