# Paystack-cakephp3
Cakephp3 payment component to integrate Paystack API for faster development time. Can process payment, verify payment, create plans/packages, subscriptions, fetch payment details and more.

## Introduction

This is a cakephp3 component that  get JSON value back from Paystack API so you can use in your application development. Simply change the AUTHORIZATION KEY in the PaystackComponent.php to the one provided by paystack.

## Features

* Create and edit Product or Service subscription plans
* Verify payments
*

## Installation

Installation is straight forward. Simply download/clone the component file and include in your application component folder.
_Manual_
```
Download: https://github.com/charlie4biz/Paystack-cakephp3.git
Unzip that download
Copy the resulting folder to app/src/controller/component
Rename the folder you just copied to postage
```

_Git Clone_
In your component directory(app/src/controller/component) type:
```
git clone https://github.com/charlie4biz/Paystack-cakephp3.git
```

## Usage
First input your `SECRET_KEY` from [paystack](http://paystack.co/) in the constructor function of PaystackComponent.php
```
$this->http = new Client([
"headers" => ["authorization" => "Bearer SECRET_KEY"]
]);
```
Then in your controller, you can initialize the class from the component by doing.
```
$this->loadComponent('Paystack');
```
To use the method, e.g verify payment, Simply do
```
$this->Paystack->verifytransaction($reference);
Note that `$reference` here is the transaction reference that needs to be verified.
```

## Support
You can join the cakephp3 IRC channel support cause my support is limited. email: charlie4biz@gmail.com
