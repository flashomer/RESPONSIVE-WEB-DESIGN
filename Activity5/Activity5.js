var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("add").onclick = addScore;
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
};

function displayResults()
{
	var average = 0;
    var highScore= 0;
    var highScoreIndex= 0;

	for(var i=0;i<scores.length;i++)
	{
		average= (average*(i)+scores[i])/(i+1);
        if(scores[i] > highScore) {
            highScoreIndex = i;
            highScore = scores[i];
        }
	}

	document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score is "+average + "<br \> Hight score = "+names[highScoreIndex]+" width a score a of "+ scores[highScoreIndex];
}

function displayScores()
{
	var tableText = '<table><tr><td><b>Name</b></td><td><b>Score</b></td></tr>';
	for(var i=0;i<scores.length;i++)
	{
		tableText += "<tr><td>"+names[i]+"</td><td>"+scores[i]+"</td></tr>";
	}

	document.getElementById("scores_table").innerHTML= "<h2> Scores </h2>"+ tableText + "</table> "
}


function addScore()
{
    if(document.getElementById("name").value != '' && document.getElementById("name").value != "undefined"){

      if(parseInt(document.getElementById("score").value) > -1 && parseInt(document.getElementById("score").value) < 101){

         names.push(document.getElementById("name").value);
         scores.push(parseInt(document.getElementById("score").value));
         console.log(names);
         console.log(scores);
      } else {
          alert("You must enter a valid score!");
      }
    } else {
        alert("You must enter a name!");
    }
}



