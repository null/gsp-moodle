#!/bin/bash
#rm -rf web

composer update

#blue text
tput setaf 5; echo "Updated Moodle to latest v4.* version"
#reset color
tput sgr 0
