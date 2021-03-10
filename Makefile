init:
	docker-compose build --no-cache;
	docker-compose up -d;

up:
	docker-compose up -d;

ps:
	docker-compose ps;

down:
	docker-compose down;
