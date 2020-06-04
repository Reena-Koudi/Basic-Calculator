# Basic-Calculator

A simple calculator with the user history management

# Installation

- Fork this repo, and clone to your local machine.

- I have setup and congigured the webpack. At the moment it doesn't work as expected, hence I have tried running the project on the local php-server.

- Run the php server in your local machine and go to the localhost.

For example if the localhost is 8080 then go to http://localhost:8080/basic-calculator/index.html to check the basic calculator.

To check the stored sum go to http://localhost:8080/basic-calculator/php/calculations.php

# Task Completed

- User can push each number on the calculator using their mouse and it will display on the header of the calculator.

- User can enter the operation and be able to perform addition, subtraction, division and multiplication in order to get the correct result when clicking equals.

- After the user has put in their sum, pressing the Equal gives the answer and update the current displayed sum in the header and display the answer.

- When the user clicks the save button on the calculator, the sum is stored in a CSV file, along with the user's IP Address, date it was added and the browser used.

- The data stored in the CSV file is converted into an array and displayed in the table format in the Calculations.php

# Future Improvements

- Clicking the AC button should give the "All Clear" and clear the calculator header to 0, and remove any background sums, ready to start a new one.

- Handling the large inputs and outputs.

- Not allowing the two operators clicked on a go.

- Webpack Configuration to support the project running.
