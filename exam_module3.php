<?php 
// task1
$student=[
    'name'=>'Alice',
    'age'=>22,
    'grade'=>'A'
];
echo "Age: ".$student['age']."\n";

// task2
$student=[
    'name'=>'Alice',
    'age'=>22,
    'grade'=>'A'
];

if(array_key_exists('grade',$student)){
    echo "Grade Key Exists\n\n";
}
else{
    echo "Grade is not present\n\n";
}

// task3
$numbers=array(100,200,50,40,50);
foreach ($numbers as $number) {
    echo $number."\n";
}

// task4
$names=['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin','Moni'];
function namesStartWithM($name){
    if($name[0]=='M'){
        return true;
    }
    return false;
}
$namesWithM=array_filter($names,'namesStartWithM');
print_r($namesWithM);
echo "\n";
// task5
$originalString='Hello, World!';
$revString=strrev("Hello World!");
echo $revString."\n";