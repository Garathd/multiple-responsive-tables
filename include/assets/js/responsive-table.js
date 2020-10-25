function responsiveTable(screenSize) {

    // If media query is below 600px
   if (screenSize.matches) {

       // Array to push up CSS styles too
       var stylesArray = [];

       // Getting the amount of tables
       var tableCount = $('.responsive-table-container table').length;
       console.log("Check table count: "+tableCount);

       // Iterate through each table
       for(a = 0; a <= tableCount; a++) {

           // Target each indivdual table
           var tableClass  = ".responsive-table-container:nth-of-type("+(a+1)+") table";

           // Declaring unique table class
           var newTableClass = "table-"+(a);

           // Add Unique Class to each table occurence
           $(tableClass).addClass(newTableClass);

           // Getting Table Headings for Indivdual Classes
           var tableClassHeading = "."+newTableClass +  " th";

            // Count the table headings
           var tableHeadingCount = $(tableClassHeading).length;

           // Iterate through Table Headings
           for(i = 0; i < tableHeadingCount; i++) {

               // Adding the . notation to make it a class to use with JQuery
               var editedClass = "."+newTableClass;
               
               // Getting the value of the table heading
               var tableHeading = $(editedClass).find("th").eq(i).html();

               // Creating CSS Style and Setting Table Row (Heading) with Table Heading;
               var cssRole = editedClass+' td:nth-of-type('+(i+1)+'):before {content: "'+tableHeading+'"}';

               // Pushing CSS style to Styles Array
               stylesArray.push(cssRole);
       
           }// close the i for loop

           
       } //close the a for loop


       // Building the CSS stylesheet
       var styleSheet = "<style> ";

       // Iterate through each style rule
       for(q = 0; q < stylesArray.length; q++) {

           // Setting the CSS Rule
           var indivdualStyleRule = stylesArray[q];

           // Appending the rule to string
           styleSheet += indivdualStyleRule;
       }

       // Finished CSS Style
       var finishedStyleSheet = styleSheet + " </style>";

       // Add Style to HTML
       $('#custom-css').append(finishedStyleSheet);


   }// close if for media query
   
   else {

       // Clear all styles that were created
       $('#custom-css').empty();

   }// close else

}// close responiveTable function


// Set the responsive width for tables. Must match value set in css
var smallScreenSize = window.matchMedia("(max-width: 600px)");

// Call listener responsiveTable function at run time
responsiveTable(smallScreenSize); 

// Attach listener function on state changes
smallScreenSize.addListener(responsiveTable);