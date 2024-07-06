# Robot-Movement-Logger

This task consists of an HTML page and a PHP script designed to display the most recent movement command logged in a database. The HTML page (display_move.html) provides a user-friendly interface with a refresh button to update the displayed command, while the PHP script (fetch_last_move.php) retrieves the latest command from the database. This setup allows users to monitor the last movement command sent to the robot conveniently.

How It Works:

User Interaction:

The user opens the display_move.html page in a web browser.

The page initially loads the most recent movement command by calling the PHP script.

The user can click the "Refresh" button to update the displayed command.

Data Retrieval:

The JavaScript function in display_move.html sends an asynchronous request to fetch_last_move.php whenever the page loads or the "Refresh" button is clicked.

The PHP script connects to the MySQL database, retrieves the last logged movement command from the robot table, and returns it as plain text.

The JavaScript function updates the display on the HTML page with the latest command received from the PHP script.
