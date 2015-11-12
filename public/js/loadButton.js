/*
            //Button Stuff
            document.getElementById("receivedContentContainer").style.border = "hidden";
            document.getElementById("loader").style.display = "block";
            document.getElementById("receivedContent").innerHTML = "<p>Loading...</p>";
*/

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