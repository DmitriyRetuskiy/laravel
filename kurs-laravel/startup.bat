@echo "-----------------------";
@echo "----Git update repo----";
@echo "-----------------------";
timeout.exe /t 5
echo "This is updated from date %date% time %time%">"startup.txt"
git add .
git commit -m "[fix] new time %time%"
git push origin master