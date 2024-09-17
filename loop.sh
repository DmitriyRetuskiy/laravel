echo "\n";
echo "---------------------------------------";
echo "----This is release loop in sh file----";
echo "---------------------------------------";
echo "\n";
sleep 1

# ---- for cycle in array sh ---- 

#for planet in Меркурий Венера Земля Марс Юпитер Сатурн Уран Нептун Плутон
#do
#  sleep 2
  
#  if [ "$planet" = "Земля" ] # если земля то выводи другую строку
#   then 
#     echo "Это земля!"
#   else
#     echo $planet
#  fi 

#done

# ---- for reading lines in file ----

#for line in $(cat startup.sh)
#do 
#   echo $line ; sleep 1
#done 


# ---- for not current folder in git we ca use ----
#git -C "/home/dim/Public/domains/laravel" add .
#git -C "/home/dim/Public/domains/laravel" commit -m "[fix] new time $start_time"
#git -C "/home/dim/Public/domains/laravel" push origin master
#$SHELL

