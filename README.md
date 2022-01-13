# Duck pond simulator
Hi, welcome and thank you for taking this assignment. We set up this assignment to see how you think about 
object-oriented programming. For this assignment, the context will be a duck pond simulator. The duck pond simulator can
show a large variety of duck species swimming and making quacking sounds. Your assignment is to create these ducks. 

## How this assignment works
This assignment will test your skills by using test driven development. That means that you just need to write the 
implementation for the tests that are given. The tests describe the features you need to implement. 

Because software requirements change over time, we have created separate test suites that describe the chapters in the 
lifecycle of the duck pond simulator. 

* Chapter 0 - Genesis
* Chapter 1 - Quack quack
* Chapter 2 - Learning to fly
* Chapter 3 - More ducks please
* Chapter 4 - Breaking the fourth wall

Make sure you do these chapters in order. Only move on to the next chapter when all tests in all current and previous
chapters are green. (if you run the right chapter, the right tests will be run automatically) Also commit your code to 
git after every chapter, so we have an understanding of the process you went through.

## How to run this project
You are free to use whatever PHP 8 and PHPUnit 9 setup you like to make things work. However, the easiest way to go 
about things is probably by using Docker and Docker Compose, so you can use the setup that was included in the 
assignments source code. If you do not know how to set up docker, you can find out how to do that here:

* https://docs.docker.com/engine/install/
* https://docs.docker.com/compose/install/

Once installed, the project can be build by running the following commands:
```
docker-compose build 
```
You then need to install the composer dependencies to include PHPUnit:
```
docker-compose run php composer install
```
Lastly, you can run the individual chapters by running phpunit while providing the right chapter. 
```
docker-compose run php vendor/bin/phpunit --testsuite chapter_0
docker-compose run php vendor/bin/phpunit --testsuite chapter_1
docker-compose run php vendor/bin/phpunit --testsuite chapter_2
docker-compose run php vendor/bin/phpunit --testsuite chapter_3
docker-compose run php vendor/bin/phpunit --testsuite chapter_4
```
## Rules
* Do not repeat yourself**
* Expect more types of ducks and behaviors in the future
* Use OOP to solve the problems at hand
* You must make all given tests pass
* You may make changes to all classes in the/src folders
* You should not change files outside the /src folders
* When you're done, just zip the entire package and send it to devops@fittinq.com
* Always use the PSR code conventions:
    * https://www.php-fig.org/psr/psr-0/
    * https://www.php-fig.org/psr/psr-1/
    * https://www.php-fig.org/psr/psr-2/
    * https://www.php-fig.org/psr/psr-4/
    * https://www.php-fig.org/psr/psr-12/




