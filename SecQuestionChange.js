window.onload = function(){

  document.getElementById("submitSec").onclick = update;
	getQues= document.getElementById("changeSec");
  getAns = document.getElementById("changeAns");

  dispResults = document.getElementById("infoInputs");
}

  function update(){

    var changeInfo = new XMLHttpRequest();

    var params = new FormData();
    params.append("Question", getQues.value);
    params.append("Answer", getAns.value);

    changeInfo.onload = function(){
      dispResults.innerHTML = this.responseText;
      getQues.value = "";
      getAns.value = "";
    }

    changeInfo.open("POST", "SecQuestionChange.php", true);
    changeInfo.send(params);

  }
