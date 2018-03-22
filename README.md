# Features: Pest and Disease Management:

Predict probability of disease Factors considered: Crop, Humidity, Temperature, Date (Month/Season), Region(State and district),
Soil moisture and rainfall. Here we have used a pre-trained regression model available on http://www.imdagrimet.gov.in/node/399 for every crop and it’s corresponding diseases.

Suggest pesticide according to the disease. Data for this was obtained from http://pest2.bengalsols.com and http://raitamitra.kar.nic.in/pps/listMF.htm for the states of Maharashtra and Karnataka.

Display vendor along with quantity, directions to use, and other vendor details like vendor district, and vendor state. The vendor list generated is mapped to the farmer model, to filter out only those vendors which are constrained within the district boundaries.

# Advantages:

Predicting beforehand will reduce the total loss if failure occurs.
Suggesting pesticides to use for that particular disease for farmers who are unaware.
Display vendors who sell those specific pesticides so that farmers know where to go.
Factors considered for better UX and ease of use for farmers:

Multilingual site. Supports all regional languages.
SMS API Integration for Farmers, which ensures ease of use of technology by them.
Technology Used:

Optimizing a pre-trained model using machine learning, based on a weather API, along with the factors listed above.

Running Python scripts in Laravel.

Laravel as a back-end framework.

HTML, CSS, Bootstrap, JS, jQuery, Ajax.

Weather Forecast API (Darkscan).

Email.js

SMS API: Message91

Web Scrapping for Vendor Details of Pesticide.

Datasets:

Vedas : Soil Moisture dataset.
http://farmer.gov.in : Pesticide Dealers.
http://www.imdagrimet.gov.in : Pesticide Disease.
http://agmarknet.gov.in/ : Current Mandi MSP.
https://sammy1997blog.wordpress.com/ This link contains the project description wrt datasets, tech stack used, features as well as screenshots.
