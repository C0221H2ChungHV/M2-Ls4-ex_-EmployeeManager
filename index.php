<?php
include "Employee/Employer.php";
include "EmployeeManager/EmployerManager.php";

use Staff\Employer;
use Manager\EmployerManager;

$array1 = [
    'first_name' => 'Nguyen',
    'last_name' => 'Duy Son',
    'date_of_birth' => '9/4/2021',
    'adress' => 'cau giay',
    'job' => 'trai bao'
];
$array2 = [
    'first_name' => 'Le',
    'last_name' => 'Quan',
    'date_of_birth' => '10/4/2021',
    'adress' => 'gam cau',
    'job' => 'trai ghe'
];
$array3 = [
    'first_name' => 'Pham Anh',
    'last_name' => 'Vu',
    'date_of_birth' => '10/11/2021',
    'adress' => 'cong cho',
    'job' => 'com tro'
];
$employee1 = new Employer($array1);
$employee2 = new Employer($array2);
$employee3 = new Employer($array3);
EmployerManager::add($employee1);
EmployerManager::add($employee2);
EmployerManager::add($employee3);
EmployerManager::del(1);
EmployerManager::update($employee2,0);
$arr = EmployerManager::getEmployee();
foreach ($arr as $a) {
    echo $a->getfirst_name();
    echo $a->getlast_name() . ", ";
    echo $a->getdate_of_birth() . ", ";
    echo $a->getadress() . ", ";
    echo $a->getjob() . "<br/>";
}