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

How the API works:
* You need to first log in using UserLoginRequest.php which will give you a session id. Unfortunately this seems to invalidate any sessions you have in any other app.
* Any other requests works in pairs where one initiates a command and returns a resultKey. Then you can use this resultKey in another request for checking the result.
* Example: ACRemoteRequest.php for requesting AC to start, then calling ACRemoteResult.php to check the result.
* When "responseFlag" is 1, the API has received a response from the car, and the command is complete.
