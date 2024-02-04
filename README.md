## Installing
1 - open cmd in path of this /project_root
2- composer update

## Do Test
First :- (ShippingTest)
    - in path src/Tests/ShippingTest.php
    - to do test :
        * open cmd in path /project_root_path
        * do this commend to run all functions one time  (php vendor/bin/phpunit src/Tests/ShippingTest.php)
        * if you want to run one function only do this commands:
            + php vendor/bin/phpunit src/Tests/ShippingTest.php --filter testcalculateTaxAramexEgypt
            + php vendor/bin/phpunit src/Tests/ShippingTest.php --filter testcalculateTaxAramexKuwait
            + php vendor/bin/phpunit src/Tests/ShippingTest.php --filter testcalculateTaxFedexEgypt
            + php vendor/bin/phpunit src/Tests/ShippingTest.php --filter testcalculateTaxFedexKuwait

Second :- (ProductTest)
    - in path src/Tests/ProductTest.php
    - to do test :
        * open cmd in path /project_root_path
        * do this commend to run all functions one time  (php vendor/bin/phpunit src/Tests/ProductTest.php)
        * if you want to run one function only do this commands:
            + php vendor/bin/phpunit src/Tests/ProductTest.php --filter testProductCalculatePriceSmallWhite
            + php vendor/bin/phpunit src/Tests/ProductTest.php --filter testProductCalculatePriceMediumWhite
            + php vendor/bin/phpunit src/Tests/ProductTest.php --filter testProductCalculatePriceLargeWhite
            + php vendor/bin/phpunit src/Tests/ProductTest.php --filter testProductCalculatePriceSmallRed
            + php vendor/bin/phpunit src/Tests/ProductTest.php --filter testProductCalculatePriceMediumRed
            + php vendor/bin/phpunit src/Tests/ProductTest.php --filter testProductCalculatePriceLargeRed
            + php vendor/bin/phpunit src/Tests/ProductTest.php --filter testProductCalculatePriceSmallBlue
            + php vendor/bin/phpunit src/Tests/ProductTest.php --filter testProductCalculatePriceMediumBlue
            + php vendor/bin/phpunit src/Tests/ProductTest.php --filter testProductCalculatePriceLargeBlue

Third :- (OrderTest)
    - in path src/Tests/OrderTest.php
    - to do test :
        * open cmd in path /project_root_path
        * do this commend to run all functions one time  (php vendor/bin/phpunit src/Tests/OrderTest.php)
        * if you want to run one function only do this commands:
            + php vendor/bin/phpunit src/Tests/OrderTest.php --filter testOrderHaveReceipt


## Info

    1 - Folder Interfaces Have StatusChangeInterface
    2 - Folder Models Have All Models (Address, Order, Product, Shipping, User)
    3 - Folder Services Have Order status
    4 - Folder Tests Have All Classess Of Tests (OrderTest, ProductTest, ShippingTest)



********************************************* Thank You *********************************************