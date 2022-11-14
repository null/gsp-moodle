#!/bin/bash
git submodule foreach git pull
echo ""
#blue text
tput setaf 5; echo "Updated Moodle to latest version on current branch. If you want to switch branch, refer to https://docs.moodle.org/400/en/Git_for_Administrators"
#reset color
tput sgr 0
