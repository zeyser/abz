# It would be better to use docker-compose without sudo
# TODO Info about switching already exists(mb add here link)

init: d-up frontend-install frontend-build


d-up:
	sudo docker-compose up -d

d-down:
	sudo docker-compose down

d-build:
	sudo docker-compose up --build -d

cli:
	sudo docker exec -it php-cli-cont bash

# install all needed in frontend (node_modules, etc)
frontend-install:
	docker-compose exec frontend-nodejs npm install

# build app (from src into dist directory)
frontend-build:
	docker-compose exec frontend-nodejs npm run build

# Set for host machine permissions to write in storage and cache
# by default www-data can't write to this directories because of repository was created by system user(KpoT)
perm:
	sudo chgrp -R web storage api/bootstrap/cache
	sudo chmod -R ug+rwx storage api/bootstrap/cache

#### We have user on host machine and user that work from docker. If we create files on host machine we can't open it
#### in docker. But docker understand userId and groupId. So we can do this trick with group ->
# We need to check that our user in system belongs to group web(1001 - gid)
check-user:
	getent group web | grep "1001"

# If our user is not in group web(1001), then add him
add-current-user:
	groupadd web --gid 1001
	usermod -a -G web $USER
####
