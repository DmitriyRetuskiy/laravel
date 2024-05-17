#!/bin/bash
echo "\n";
echo "-----------------------";
echo "----Git update repo----";
echo "-----------------------";
sleep 5
start_time=$(date) 
echo "This is updated from date $start_time">"/home/dim/Public/domains/laravel/startup.txt"
git -C "/home/dim/Public/domains/laravel" add .
git -C "/home/dim/Public/domains/laravel" commit -m "[fix] new time $start_time"
git -C "/home/dim/Public/domains/laravel" push origin master

