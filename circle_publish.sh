#!/bin/bash

echo 'auto merge to production branch';
echo 'GIT_USER_EMAIL'.$GIT_USER_EMAIL;
echo 'GIT_USER_NAME'.$GIT_USER_NAME;

git config --global user.email "pankaj9296@gmail.com"
git config --global user.name "Pankaj Patidar"

git checkout -b "$1"
git merge master
git commit -am "$CIRCLE_BRANCH build#$CIRCLE_BUILD_NUM"
git push --force --set-upstream origin $1
