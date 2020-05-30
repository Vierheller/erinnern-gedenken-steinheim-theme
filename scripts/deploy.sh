#!/usr/bin/env bash

if [[ -z "$TRAVIS" ]]; then
	echo "Script is only to be run by Travis CI" 1>&2
	exit 1
fi

if [[ -z "$FTP_SERVER" ]]; then
	echo "Target FTP server url not set" 1>&2
	exit 1
fi

if [[ -z "$FTP_USERNAME" ]]; then
	echo "Target FTP username not set" 1>&2
	exit 1
fi

if [[ -z "$FTP_PASSWORD" ]]; then
	echo "Target FTP password not set" 1>&2
	exit 1
fi

if [[ -z "$TRAVIS_BRANCH" || "$TRAVIS_BRANCH" != "master" ]]; then
	echo "Build branch is required and must be 'master'" 1>&2
	exit 0
fi

PROJECT_ROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )/.." && pwd )"

find ${PROJECT_ROOT} -type f -exec curl -u ${FTP_USERNAME}:${FTP_PASSWORD} --ftp-create-dirs -T {} sftp://${FTP_SERVER}/wp-content/themes/erinnern-gedenken-steinheim/{} \;
