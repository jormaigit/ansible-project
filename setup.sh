rm -f ubuntu-test

docker network create ansible --subnet=172.20.0.0/24
docker run --detach --privileged --volume=/sys/fs/cgroup:/sys/fs/cgroup:rw --ip 172.20.0.100 --cgroupns=host --name=ubuntu-test --network=ansible-test apasoft/ubuntu22-ansible
