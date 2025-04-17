
var names  = ["Ben", "Joel", "Judy", "Anne"];
var scores = [  88,   98,   77,   88];

var $ = function(id) { return document.getElementById(id); };

window.onload = function() {
    $("display_results").onclick = displayResults;
    $("display_scores").onclick  = displayScores;
    $("add").onclick             = addScore;
  
    $("name").focus();
};

function displayResults() {
    var total   = 0,
        highest = scores[0];
    for (var i = 0; i < scores.length; i++) {
        total += scores[i];
        if (scores[i] > highest) {
            highest = scores[i];
        }
    }
    var average = total / scores.length;

    var html  = "<h2>Results</h2>";
        html += "<p>Average score is " + average.toFixed(2) + "</p>";
        html += "<p>Highest score is " + highest + "</p>";

    $("results").innerHTML = html;
}

function displayScores() {
    var html = "<h2>Scores</h2>"; 
	html += "<tr><th>Name</th><th>Score</th></tr>";
    for (var i = 0; i < names.length; i++) {
        html += "<tr><td>" + names[i] + "</td><td>" + scores[i] + "</td></tr>";
    }
    $("scores_table").innerHTML = html;
}

function addScore() {
    var nameVal  = $("name").value.trim();
    var scoreRaw = $("score").value.trim();
    var scoreVal = Number(scoreRaw);

    if (nameVal === "" || isNaN(scoreVal) || scoreVal < 0 || scoreVal > 100) {
        alert("You must enter a name and a valid score");
        return;
    }

    names.push(nameVal);
    scores.push(scoreVal);

    $("name").value  = "";
    $("score").value = "";
    $("name").focus();
}
