SRCS_DIR		:=	srcs

COMPOSE_FILE	:=	${SRCS_DIR}/docker-compose.yml
ENV_FILE		:=	${SRCS_DIR}/.env

FLAGS			:=	-f ${COMPOSE_FILE} \

all:
	@docker compose ${FLAGS} up -d --build

clean:
	@rm -rf /home/acoezard/data/www/* > /dev/null
	@rm -rf /home/acoezard/data/database/* > /dev/null
	@echo ${__BLUE}"info"${__WHITE}" - cleaned docker data"${__EOC}

fclean: clean
	@docker rmi -f nginx > /dev/null
	@docker rmi -f mariadb > /dev/null
	@docker rmi -f wordpress > /dev/null
	@echo ${__BLUE}"info"${__WHITE}" - cleaned docker images(s)"${__EOC}
	@docker rm -f nginx > /dev/null
	@docker rm -f mariadb > /dev/null
	@docker rm -f wordpress > /dev/null
	@echo ${__BLUE}"info"${__WHITE}" - cleaned docker container(s)"${__EOC}
	@docker volume rm -f inception_database > /dev/null
	@docker volume rm -f inception_www > /dev/null
	@echo ${__BLUE}"info"${__WHITE}" - cleaned docker volumes(s)"${__EOC}
	@docker network rm inception > /dev/null
	@echo ${__BLUE}"info"${__WHITE}" - cleaned docker network(s)"${__EOC}