echo "-----------------------";
echo "----Git update repo----";
echo "-----------------------";
sleep 5
start_time=$(date) 
echo "This is updated from date $start_time">"startup.txt"
git add .
git commit -m "[fix] new time $start_time"
git push origin master

