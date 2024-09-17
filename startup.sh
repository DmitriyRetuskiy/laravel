echo "\n";
echo "-----------------------";
echo "----Git update repo----";
echo "-----------------------";
sleep 3
start_time=$(date) 
echo "This is updated from date $start_time">"/home/dim/Public/domains/laravel/startup.txt"
git add .
git commit -m "[fix] new time $start_time"
git push origin master
echo "Updated success"
# ---- for not current folder in git we ca use ----
#git -C "/home/dim/Public/domains/laravel" add .
#git -C "/home/dim/Public/domains/laravel" commit -m "[fix] new time $start_time"
#git -C "/home/dim/Public/domains/laravel" push origin master
#$SHELL

