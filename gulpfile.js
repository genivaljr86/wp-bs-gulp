var project 		= 'TemplateA', // Project name, used for build zip.
	url 			= '192.168.2.21/templates/', // Local Development URL for BrowserSync. Change as-needed.
	bower 			= './assets/bower_components/'
	; 

var gulp = require('gulp');
var sass = require('gulp-sass');
var inject = require('gulp-inject');

