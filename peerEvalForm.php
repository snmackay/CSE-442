<!DOCTYPE HTML>
<html>
<title>UB CSE Peer Evaluation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>


<style>
hr {
    clear: both;
    visibility: hidden;
}

input[type=radio]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;

}

.checkboxtext
{
  /* Checkbox text */
  font-size: 160%;
  display: inline;
}

</style>

<!-- Header -->
<header id="header" class="w3-container w3-theme w3-padding">
    <div id="headerContentName"  <font color="black"> <h1> Peer Evaluation Form </h1> </font> </div>
</header>




<hr>

<div id="login" class="w3-row-padding w3-padding">

  <form id="peerEval" class="w3-container w3-card-4 w3-light-blue" method='post'>
    <h1>You will fill out an evaluation form for yourself and each of your team mates. </h1>
    <hr>
    <h1>Current person you're evaluating: ___________________ </h1>
    <hr>
    <h1>Please select the option for each prompt that best fits for each question.</h1>
    <hr>
    <h3>Question 1: Role</h3>
    <fieldset id="Question1" >
      <input type="radio"  name="Q1" value="0"><big>'  0 points: Does not willingly assume team roles, rarely completes assigned work.</big><br>
      <input type="radio"  name="Q1" value="1"><big>'  1 point: Usually accepts assigned team roles, occasionally completes assigned work.</big><br>
      <input type="radio"  name="Q1" value="2"><big>'  2 points: Accepts assigned team roles, mostly completes assigned work.</big><br>
      <input type="radio"  name="Q1" value="3"><big>'  3 points: Accepts all assigned team roles, always completes assigned work.</big><br>
    </fieldset>

    <hr>
    <h3>Question 2: Leadership</h3>
    <fieldset id="Question2" >
      <input type="radio"  name="Q2" value="0"><big>'  0 points: Rarely takes leadership role, does not collaborate, sometimes willing to assist teammates.</big><br>
      <input type="radio"  name="Q2" value="1"><big>'  1 point: Occasionally shows leadership, mostly collaborates, generally willin to assist teammates.</big><br>
      <input type="radio"  name="Q2" value="2"><big>'  2 points: Shows an ability to lead when necessary, willing to collaborate, willing to assist teammates.</big><br>
      <input type="radio"  name="Q2" value="3"><big>'  3 points: Takes leadership role, is a good collaborator, always willing to assist teammates.</big><br>
    </fieldset>

    <hr>
    <h3>Question 3: Participation</h3>
    <fieldset id="Question3" >
      <input type="radio"  name="Q3" value="0"><big>'  0 points: Often misses meetings, routinely unprepared for meetings, rarely participates in meetings and doesnt share ideas.</big><br>
      <input type="radio"  name="Q3" value="1"><big>'  1 point: Occasionally misses/ doesn't participate in meetings, somewhat unprepared for meetings, offers unclear/ unhelpful ideas.</big><br>
      <input type="radio"  name="Q3" value="2"><big>'  2 points: Attends and participates in most meetings, comes prepared, and offers useful ideas.</big><br>
      <input type="radio"  name="Q3" value="3"><big>'  3 points: Attends and participates in all meetings, comes prepared, and clearly expresses well-developed ideas.</big><br>
    </fieldset>

    <hr>
    <h3>Question 4: Professionalism</h3>
    <fieldset id="Question4" >
      <input type="radio"  name="Q4" value="0"><big>'  0 points: Often discourteous and/or openly critical of teammates, doesn't want to listen to alternative perspectives.</big><br>
      <input type="radio"  name="Q4" value="1"><big>'  1 point: Not always considerate or courteous towards teammates, usually appreciates teammates perspectives but often unwilling to consider them.</big><br>
      <input type="radio"  name="Q4" value="2"><big>'  2 points: Mostly courteous to teammates, values teammates' perspectives and often willing to consider them.</big><br>
      <input type="radio"  name="Q4" value="3"><big>'  3 points: Always courteous to teammates, values teammates' perspectives, knowledge, and experience, and always willing to consider them.</big><br>
    </fieldset>

    <hr>
    <h3>Question 5: Quality</h3>
    <fieldset id="Question5" >
      <input type="radio"  name="Q5" value="0"><big>'  0 points: Rarely commits to shared documents, others often required to revise, debug, or fix their work.</big><br>
      <input type="radio"  name="Q5" value="1"><big>'  1 point: Occasionally commits to shared documents, others sometimes needed to revise, debug, or fix their work.</big><br>
      <input type="radio"  name="Q5" value="2"><big>'  2 points: Often commits to shared documents, others occasionally needed to revise, debug, or fix their work.</big><br>
      <input type="radio"  name="Q5" value="3"><big>'  3 points: Frequently commits to shared documents, others rarely need to revise, debug, or fix their work.</big><br>
    </fieldset>

    <hr>
    <div id="login" class="w3-row-padding w3-center w3-padding">
    <input type='submit' id="EvalSubmit" class="w3-center w3-button w3-theme-dark" value='Submit Peer Evaluation'></input>
  </div>
    <hr>
  </form>
    </div>
  <hr>


</div>

<!-- Footer -->
<footer id="footer" class="w3-container w3-theme-dark w3-padding-16">
  <h3>Acknowledgements</h3>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <p> <a  class=" w3-theme-light" target="_blank"></a></p>
</footer>

</body>
</html>
