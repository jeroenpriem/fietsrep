BOOTSTRAP ?= wp-content/themes/fietsreparatiedienst/assets/css/less/style.css
BOOTSTRAP_LESS ?= wp-content/themes/fietsreparatiedienst/assets/css/less/style.less
DATE=$(shell date +%I:%M%p)
CHECK=\033[32m✔ Done\033[39m
HR=\033[37m--------------------------------------------------\033[39m
PATH := ./node_modules/.bin:$(PATH)


#
# BUILD DOCS
#

build:
	@echo "\n\n"
	@echo "\033[36mBuilding Bootstrap...\033[39m"
	@echo "${HR}"
	@printf "Compiling LESS with Recess..."
	@recess --compile ${BOOTSTRAP_LESS} > ${BOOTSTRAP}
	@echo "               ${CHECK}"
	@echo "${HR}"
	@echo "\033[36mSuccess!\n\033[39m"
	@echo "\033[37mThanks for using Bootstrap,"
	@echo "<3 @mdo and @fat\n\033[39m"




#
# CSS COMPLILE
#

bootstrap-css: bootstrap/css/*.css

bootstrap/css/*.css: less/*.less
	mkdir -p bootstrap/css
	recess --compile ${BOOTSTRAP_LESS} > bootstrap/css/bootstrap.css
	recess --compress ${BOOTSTRAP_LESS} > bootstrap/css/bootstrap.min.css
	recess --compile ${BOOTSTRAP_RESPONSIVE_LESS} > bootstrap/css/bootstrap-responsive.css
	recess --compress ${BOOTSTRAP_RESPONSIVE_LESS} > bootstrap/css/bootstrap-responsive.min.css

#
# FONTS
#

bootstrap-fonts: bootstrap/fonts/*

bootstrap/fonts/*: fonts/*
	mkdir -p bootstrap/fonts
	cp fonts/* bootstrap/fonts/




#
# WATCH LESS FILES
#

watch:
	echo "Watching less files..."; \
	watchr -e "watch('less/.*\.less') { system 'make' }"


.PHONY: docs watch gh-pages bootstrap-img bootstrap-css bootstrap-js
