<?php
$emp_id=fgets(STDIN);
$hours_worked=fgets(STDIN);
$amount_per_hour=fgets(STDIN);
printf("NUMBER = %d\n",$emp_id);
printf("SALARY = U$ %.2f\n",$hours_worked*$amount_per_hour);
?>