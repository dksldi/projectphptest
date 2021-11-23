#!/bin/bash

name=${1}
ns=${2}
count=${3}
lab=${4}
img=${5}

sudo cp /root/projectyml/project.yaml /root/projectyml/${name}.yaml
sudo sed -i "s/name: my-web/name: ${name}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/replicas: 2/replicas: ${count}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/namespace: sp/namespace: ${ns}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/app: websrv/app: ${lab}/g" /root/projectyml/${name}.yaml
sudo sed -i "s/image: httpd/image: ${img}/g" /root/projectyml/${name}.yaml
sudo kubectl apply -f /root/projectyml/${name}.yaml
