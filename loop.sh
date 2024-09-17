echo "\n";
echo "-----------------------";
echo "----Git update repo----";
echo "-----------------------";
echo "\n";
sleep 3
start_time=$(date) 
echo "This is updated from date $start_time">"/home/dim/Public/domains/laravel/startup.txt"
git add .
git commit -m "[fix] new time $start_time"
git push origin master
echo "\n"
echo "Updated success \n"
# ---- for not current folder in git we ca use ----
#git -C "/home/dim/Public/domains/laravel" add .
#git -C "/home/dim/Public/domains/laravel" commit -m "[fix] new time $start_time"
#git -C "/home/dim/Public/domains/laravel" push origin master
#$SHELL

