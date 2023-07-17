#!/bin/bash

service k3s stop

rm -rf /var/lib/rancher/k3s/ /etc/rancher/ /run/k3s/

mount |grep kubelet |awk '{print $3}' | while read a ; do umount $a ;done

mount |grep k3s |awk '{print $3}' | while read a ; do umount $a ;done



