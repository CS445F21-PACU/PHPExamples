#############################################################################
# File name:  Makefile
# Author:     chadd williams
# Date:       Oct 13, 2021
# Class:      CS445
# Assignment: Big DB 
# Purpose:	Copy files from PHP directory to web directory 
#############################################################################

all: copy

copy: 
	mkdir -p /srv/www/htdocs/php/${USER}/PHPExamples
	chmod o+rx -R /srv/www/htdocs/php/${USER}/PHPExamples
	rsync -ahv * /srv/www/htdocs/php/${USER}/PHPExamples
