#!/bin/bash
export DEBIAN_FRONTEND=noninteractive
export TERM=xterm

source /usr/local/rvm/scripts/rvm

# replace with your mailblog directory
cd /home/chad/blog
rvm use 1.9.2
rake site:deploy
