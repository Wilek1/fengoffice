
README
======

FengOffice version 1.7.4

SMS API from [E.OCEAN](http://eocean.pk/) has been integrated in this FengOffice.

Sms Events have been attached on
* A new event is created/modified sms to its subscribers and invitees is sent.
* A new task is created/modified sms to its subcribers and assignee is sent.

Frontend Changes
----------------

After standard installation of FengOffice, follow these steps to create a mandatory field for cellphone numbers to Users.

* Navigate to Administration -> Custom Properties
* Select `User` from dropwon
* Add a new field named `Phone Number` and check the required and visible by default options
* Save those changes

Note
----

Currently the number format is `92333XXXXXXX` , this is the format defined by E Ocean for its SMS API. I have not yet tested international SMS with this code.


