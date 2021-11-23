#!/bin/bash

name=${1}
ns=${2}
count=${3}
mem=${4}
cpu=${5}
reqmem=${6}
reqcpu=${7}
str=${8}
host1=${9}
host2=${10}
host3=${11}

sudo cp /root/projectyml/projectnginx.yaml /root/projectyml/${name}.yaml
sudo sed -i "s/passname/${name}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/namespace: nasp/namespace: ${ns}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/replicas: 1/replicas: ${count}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/mem1/${mem}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/cpu1/${cpu}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/reqmem/${reqmem}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/reqcpu/${reqcpu}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/str1/${str}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/1hsts.2hsts.3hsts/${host1}.${host2}.${host3}/g" /root/projectyml/${name}.yaml
#sudo kubectl apply -f /root/projectyml/${name}.yaml

