ISAssessment\Assessment
===============

Internet Solutions - Technical Assessment class




* Class name: Assessment
* Namespace: ISAssessment







Methods
-------


### closestToZero

    integer|float ISAssessment\Assessment::closestToZero(\ISAssessment\type $arrayValues)

Implement a function closestToZero



* Visibility: **public**


#### Arguments
* $arrayValues **ISAssessment\type**



### forLoop

    integer ISAssessment\Assessment::forLoop(\ISAssessment\type $arr)

Compute the sum of the numbers in a given list using a for-loop



* Visibility: **public**


#### Arguments
* $arr **ISAssessment\type**



### whileLoop

    integer ISAssessment\Assessment::whileLoop(\ISAssessment\type $arr)

Compute the sum of the numbers in a given list using a while-loop



* Visibility: **public**


#### Arguments
* $arr **ISAssessment\type**



### recursiveFunction

    integer ISAssessment\Assessment::recursiveFunction(\ISAssessment\type $numberArr, \ISAssessment\type $arrSize)

Compute the sum of the numbers in a given list using recursion



* Visibility: **public**


#### Arguments
* $numberArr **ISAssessment\type**
* $arrSize **ISAssessment\type**



### combineArrays

    array ISAssessment\Assessment::combineArrays(\ISAssessment\type $arr1, \ISAssessment\type $arr2)

Combines two lists by alternatively taking elements



* Visibility: **public**


#### Arguments
* $arr1 **ISAssessment\type**
* $arr2 **ISAssessment\type**



### fibonacci

    mixed ISAssessment\Assessment::fibonacci(\ISAssessment\type $number)

* Computes the list of the first 100 Fibonacci numbers



* Visibility: **public**


#### Arguments
* $number **ISAssessment\type**



### absoluteSum

    integer ISAssessment\Assessment::absoluteSum(\ISAssessment\type $arr)

Finds the lowest absolute sum of elements



* Visibility: **public**


#### Arguments
* $arr **ISAssessment\type**


PHPUnit Tests
=============================

Installation
------------

This project assumes you have composer installed.
Simply add:

    "require-dev": {
       "phpunit/phpunit": "^7", 
    }

To your composer.json, and then you can simply install with:

    composer install


Usage
-----

First ensure that phpunit is installed 

To run all tests for the Assessment class functions we just need to point the PHPUnit command-line test runner to the test directory:

    # cd vendor/bin and run phpunit command
    phpunit --bootstrap vendor/autoload.php tests/app/ISAssessment/AssessmentTest
