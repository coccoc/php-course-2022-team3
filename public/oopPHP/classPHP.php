<?php
    // class User{
    //     const MALE = '1';
    //     const FEMALE = '2';
    //     public string $name;
    //     public static int $age;
    //     public function setName():int
    //     {
    //         //dinh nghia kieu gia tri tra ve

    //     }
    // }
    class Student{
        public function __call($methodName,$agruments)
        {
            echo $methodName;
            print_r($agruments);
        }
    }
    $objStudent = new Student();
    $objStudent->getStudenDetails(1);