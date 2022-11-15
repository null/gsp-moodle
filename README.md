# gsp-moodle
Moodle for GSP

## internal use
for gsp

## about
Moodle was checked out via the cool command "git submodule add" - see https://docs.moodle.org/400/en/Git_for_Administrators"

### to install
- create new folder 
- clone this repository: 
`
git clone --recurse-submodules   https://github.com/null/gsp-moodle .
` 

### update moodle core
To update Moodle simply execute 
`
./update-moodle.sh
`

in Shell. For switching to a new branch (e.g. origin/MOODLE_410_STABLE in the future), refer to the doc above
