# It would be better to use docker-compose without sudo TODO Info about switching already exists(mb add here link)
docker-up: memory
	sudo docker-compose up

docker-down:
	sudo docker-compose down

docker-build: memory
	sudo docker-compose up --build -d

# elasticsearch remote machine problem
memory:
	sudo sysctl -w vm.max_map_count=262144

cli:
	sudo docker exec -it php-cli-cont bash

# Set for host machine permisions to write in storage and cache
# by default www-data can't write to this directories because of repository was created by system user(KpoT)
perm:
	sudo chgrp -R web storage bootstrap/cache
	sudo chmod -R ug+rwx storage bootstrap/cache

# We need to check that our user in system belongs to group web(1001 - gid)
check-user:
	getent group web | grep "1001"

# If our user is not in group web(1001), then add him
add-current-user:
	groupadd web --gid 1001
	usermod -a -G web $USER