AI TOOL FOR DETECTING AGRICULTURAL PROBLEMS

Our AI Tool for Predicting Agricultural Problems  page integrates advanced solutions to support effective farming.
It offers three key features: Live Weather, Plant Disease Detection, and Plant Care. 
Users can navigate to each page by clicking the corresponding option. 
The Live Weather page provides real-time weather updates and irrigation advice based on current conditions. 
The Plant Disease Detection page allows users to upload images of affected leaves and select observed symptoms to identify diseases and receive treatment recommendations. 
The Plant Care page offers detailed information on chemical, organic, and mineral & natural fertilizers, 
including their preparation, benefits, and types. This comprehensive tool ensures farmers have the insights needed for proactive and informed agricultural management.

1. Layout and Navigation:

The web application utilizes a simple and intuitive structure:

HTML: Defines the structure of the page, including navigation links and containers for displaying images.
CSS: Provides custom styling for visual aesthetics.
JavaScript: Manages interactive behavior, such as displaying images based on user actions.

2. HTML Structure:

<head> Section:

The head section includes metadata, links to the Bootstrap CSS framework for styling, and custom styles.
A script tag includes JavaScript for image display functionality.
<body> Section:

Navigation Bar:
Uses Bootstrap classes for a responsive navigation bar.
The navigation bar includes links to different sections (Live Weather, Plant Disease Detection, Plant Care Page).

Live Weather :
Our Live Weather  Page provides real-time weather updates for any location based on user input. Simply enter the name of your area to receive the current temperature and weather conditions in Celsius. Additionally, by entering the temperature of your area, our tool advises on whether irrigation is needed. It leverages temperature thresholds and weather data to recommend optimal irrigation times, ensuring efficient water usage and healthy crops. Stay informed and make smart irrigation decisions with ease, all from a single, user-friendly platform.
 
Plant Disease Detection :
Our Plant Disease Detection page helps identify and treat plant diseases with ease. Users can upload an image of an affected leaf, and our system analyzes the image to detect potential bacterial, viral, or fungal diseases. Additionally, users can check boxes corresponding to observed symptoms like rotten smell, mosaic patterns, leaf curling, and stunted growth. The tool cross-references the image and symptoms to diagnose the disease accurately. It then displays the image along with the disease name and provides effective treatment solutions to restore your plant’s health. This user-friendly tool ensures quick and reliable plant care right at your fingertips.
 
Plant Care Page :
Our Plant Care page offers comprehensive information on various fertilizers to enhance plant health. Users can explore three main categories: Chemical, Organic, and Mineral & Natural Fertilizers. Each category has a dedicated page accessible via a "Details" button. These pages provide in-depth descriptions, covering the preparation, benefits, and types of each fertilizer. Whether you're interested in the rapid action of chemical fertilizers, the eco-friendly nature of organic options, or the balanced nutrients in mineral and natural choices, our guide helps you make informed decisions for optimal plant growth and care.
 

Content Area:
Contains a series of <img> elements, each associated with a different section. These images are initially hidden.


3. CSS Styling:

The custom CSS enhances the visual appearance:

Background Image: The body uses a background image that covers the entire viewport and remains fixed during scrolling.
Navigation Bar: The navigation bar has a white background, and the links have bold, black text.
Images: All images are initially hidden and only displayed when the corresponding link is clicked.

css

body {
    background: url("...") no-repeat center center fixed;
    background-size: cover;
    padding-top: 20px;
}
.navbar {
    background-color: #ffffff;
}
.nav-link {
    color: #000000;
    font-weight: bold;
}
img {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
    display: none; /* Initially hide all images */
}

4. JavaScript Functionality:

The JavaScript function showImage(imageId) dynamically shows the image associated with the clicked link:

Hide All Images: Uses querySelectorAll to select and hide all <img> elements.
Show Selected Image: The image associated with the clicked link is displayed using its id.

javascript

function showImage(imageId) {
    // Hide all images
    var images = document.querySelectorAll('img');
    images.forEach(function(image) {
        image.style.display = 'none';
    });

    // Display the clicked image
    var clickedImage = document.getElementById(imageId);
    clickedImage.style.display = 'block';
}

5. External Libraries:

Bootstrap: Enhances the design and responsiveness of the navigation bar and layout.
jQuery and Popper.js: Facilitate dynamic behavior and interaction, especially for the navbar's toggle functionality on smaller screens.

html

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

6. User Interaction:

Users interact with the application by clicking on the navigation links.
Upon clicking a link, the corresponding image is shown, and the others are hidden, providing visual feedback related to the selected tool.

This web application provides a simple yet effective interface for users to explore AI tools related to weather, plant disease detection, and plant care. 
The combination of HTML, CSS, JavaScript, and Bootstrap ensures a responsive and interactive user experience.
