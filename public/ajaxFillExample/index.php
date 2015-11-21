<!DOCTYPE html>
<html>
<head>
<title>Example for Fill Divs</title>    
<link rel="stylesheet" type="text/css" href="styles.css">    
<style></style>
<script src="../jquery-1.11.2.min.js"></script>
<script>
    
    function updateInfo(requestOption) {
        
        //Home Button Selection - Gets info standard.
        if(requestOption == "home"){ 
            
            //Button Stuff
            document.getElementById("receivedContentContainer").style.border = "hidden";
            document.getElementById("loader").style.display = "block";
            document.getElementById("receivedContent").innerHTML = "<p>Loading...</p>";

            //Use Webservice URL to retrieve desired data!
            var reqURL = "http://cs2830.azurewebsites.net/a8/webservice.php?content=" + requestOption;
            console.dir(requestOption);
            
            $.get(reqURL, function(me) {
                console.dir(me);
                document.getElementById("receivedContentContainer").style.border = "solid black 3px";          
                document.getElementById("loader").style.display = "none";
                $("#receivedContent").html(me);

            }); 
        }
        
        //XML Button Selection - Gets info via XML Formatted Data
        else if(requestOption == "xml"){
            
            //Button Stuff
            document.getElementById("receivedContentContainer").style.border = "hidden";
            document.getElementById("loader").style.display = "block";
            document.getElementById("receivedContent").innerHTML = "<p>Loading...</p>";

            //Use Webservice URL to retrieve desired data!
            var reqURL = "http://cs2830.azurewebsites.net/a8/webservice.php?content=data&format=" + requestOption;
            console.dir(requestOption)

            $.get(reqURL, function(me) {
                var output = "<ul>";
                $(me).find('dinosaur').each(function(){
                    var name = $(this).find("name").text();
                    var period = $(this).find("period").text();
                    console.dir(name);
                    console.dir(period);
                    output += ("<li>" + name + " lived during the " + period + "</li>");         
                 });
                document.getElementById("receivedContentContainer").style.border = "solid black 3px";
                document.getElementById("loader").style.display = "none";
                $("#receivedContent").html(output + "</ul>");
            });       
        }
        
        //JSON Button Selection - Gets info via JSON Formatted Data
        else if(requestOption == "json"){
            
            //Button Stuff
            document.getElementById("receivedContentContainer").style.border = "hidden";
            document.getElementById("loader").style.display = "block";
            document.getElementById("receivedContent").innerHTML = "<p>Loading...</p>";
            
            //Use Webservice URL to retrieve desired data!
            var reqURL = "http://cs2830.azurewebsites.net/a8/webservice.php?content=data&format=" + requestOption;
            console.dir(requestOption);

            $.getJSON(reqURL, function(me) {
                console.dir(me);
                var output = "<p>";
                for (var i = 0; i < me.length; i++) { 
                    output +=(me[i].name + " has a diet " + me[i].diet + "<br>");
                }
                document.getElementById("receivedContentContainer").style.border = "solid black 3px";          
                document.getElementById("loader").style.display = "none";
                $("#receivedContent").html(output + "</p>");
            });    
        }
        
        //Load Button Selection - Shows how the Loading Display Looks... Fascinating!
        else if(requestOption == "load"){
            
            //Button Stuff
            document.getElementById("receivedContentContainer").style.border = "hidden";
            document.getElementById("loader").style.display = "block";
            document.getElementById("receivedContent").innerHTML = "<p>Loading...</p>";           

            function sleepDawg() {
                sleep(true);
            }
        }
        
        else{$("#receivedContent").html("Something went wrong ! :(");}
      		
	}

    //Function to change Colors
    var tick = 1;
    setInterval(function() {
        var loadNodes = document.querySelectorAll(".loadNode");

        //Much Colors, Very Excite ! lol
        if (tick == 1) {
            backgroundColors = ["red", "blue", "green","yellow", "orange", "purple","black","grey"];
            tick = 2;
        }
        else if (tick == 2) {
            backgroundColors = ["blue", "green","yellow", "orange", "purple","black", "grey","red"];

            tick = 3
        }
        else if (tick == 3) {
            backgroundColors = ["green","yellow", "orange", "purple","black", "grey","red","blue"];

            tick = 4;
        }
        else if (tick == 4) {
            backgroundColors = ["yellow", "orange", "purple","black", "grey","red","blue", "green"];      
            tick = 5;
        }
        else if (tick == 5) {
            backgroundColors = ["orange", "purple","black", "grey","red","blue", "green", "yellow"];
            tick = 6;
        }
        else if (tick == 6) {
            backgroundColors = ["purple","black", "grey","red","blue", "green", "yellow", "orange"];
            tick = 7;
        }
        else if (tick == 7) {
            backgroundColors = ["black", "grey","red","blue", "green", "yellow", "orange", "purple"];
            tick = 8;
        }
        else {
            backgroundColors = ["grey","red","blue", "green", "yellow", "orange", "purple", "black"];
            tick = 1;
        }

        //Load dem Nodes bro
        loadNodes[0].style.backgroundColor = backgroundColors[0];
        loadNodes[1].style.backgroundColor = backgroundColors[1];
        loadNodes[2].style.backgroundColor = backgroundColors[2];
        loadNodes[3].style.backgroundColor = backgroundColors[3];
        loadNodes[4].style.backgroundColor = backgroundColors[4];
        loadNodes[5].style.backgroundColor = backgroundColors[5];
        loadNodes[6].style.backgroundColor = backgroundColors[6];
        loadNodes[7].style.backgroundColor = backgroundColors[7];
    }, 250);   
    
</script>
</head>
<body>
    
    <div id="wrapper" class="group">
        <h1 id="wrapperTitle">Welcome to Dino City.... lol.</h1>        
        <hr>
        <div id="buttonContainer">    
            <button type="button" class="dinoButton" onclick="updateInfo('home')">Home</button>
            <button type="button" class="dinoButton" onclick="updateInfo('xml')">XML Dinos</button>
            <button type="button" class="dinoButton" onclick="updateInfo('json')">JSON Dinos</button>
            <button type="button" class="dinoButton" onclick="updateInfo('load')">Load Button</button>
        </div>
        <div id="receivedContentContainer">
            <div id="receivedContent"><h1>Try Clicking Some Buttons~</h1>
            </div>
                 <div id="loader">
                    <div class="loadNode"></div>
                    <div class="loadNode"></div>
                    <div class="loadNode"></div>
                    <div class="loadNode"></div>
                    <div class="loadNode"></div>
                    <div class="loadNode"></div>
                    <div class="loadNode"></div>
                    <div class="loadNode"></div>
                </div>       
        </div>
    </div>
    
</body>
</html>