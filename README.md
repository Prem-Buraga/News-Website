# News-Website
This is a simple web application that fetches and displays the latest news headlines from a specified country using the News API. The news articles are presented in a visually appealing format.
This is a simple web application that fetches and displays the latest news headlines from a specified country using the News API. The news articles are presented in a visually appealing format.

**Requirements**
A valid API key from NewsAPI: https://newsapi.org/.
A web server with PHP support (e.g., Apache, Nginx).

**#Setup**

**1. Get an API Key**
First, sign up at NewsAPI to get your API key.

**2. Update the Code with Your API Key**
In the provided PHP code, replace the placeholder 'Replace With Your API' with your actual NewsAPI key.

**3. Deploy the Code**
Save the provided PHP code into a file named index.php.
Upload the index.php file to your web server.
Access the file via your web browser.

**4. Code Explanation**
The code is a simple PHP script embedded within an HTML file. Here's a breakdown of what each part does:

HTML Structure
The HTML structure defines the layout and styles for displaying news articles.

PHP Code
API Request

API Key and Country: The $apiKey variable stores your NewsAPI key, and $country specifies the country for which you want to fetch news.
cURL Initialization: Initializes a new session and sets options for the cURL transfer.
CURLOPT_RETURNTRANSFER ensures the response is returned as a string.
CURLOPT_HTTPHEADER sets the User-Agent header to comply with NewsAPI requirements.
Handling the Response

Error Handling: If cURL encounters an error, it prints the error message.
Decoding Response: The JSON response is decoded into a PHP associative array.
Debugging: Uncomment print_r($data); to print the entire response for debugging purposes.
Displaying Articles: The code checks if the response contains articles. If so, it iterates through each article and displays its image, title, and description.
Closing cURL Session: Closes the cURL session to free up resources.
Customization
Country: Change the value of the $country variable to fetch news from a different country. Use the country code (e.g., us for the United States).
Styling: Customize the CSS in the <style> block to change the appearance of the news elements.

**Additional Resources**

NewsAPI Documentation : https://newsapi.org/docs

PHP cURL Documentation : https://newsapi.org/docs/client-libraries/php

**Video Guide**

For a detailed walkthrough, please refer to the video guide included in the project directory. The video demonstrates how to set up and deploy the NewsWebsite application.

**Note**:Video Attached in files
