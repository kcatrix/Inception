SRCS_DIR		:=	srcs

COMPOSE_FILE	:=	${SRCS_DIR}/docker-compose.yml
ENV_FILE		:=	${SRCS_DIR}/.env

FLAGS			:=	-f ${COMPOSE_FILE} \

all:
	@docker compose ${FLAGS} up -d --build