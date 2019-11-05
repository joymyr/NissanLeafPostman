# NissanLeafPostman
Postman collection for the Nissan Leaf (Carwings) API. I'm using this myself for testing the API while developing my Android-app [QuickLeaf](https://play.google.com/store/apps/details?id=no.joymyr.quickleaf) 

To run the postman collection, you need to add "userId", "encrypted_password", and "region" to Environment variables.

Valid regions are:
* "NE" (Europe)
* "NNA" (US)
* "NCI" (Canada)
* "NMA" (Australia)
* "NML" (Japan)

Encrypted password can be obtained by running "encrypt_password.php", which e.g. can be run at http://phpfiddle.org/lite
