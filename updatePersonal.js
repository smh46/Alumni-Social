window.onload = function(){

  document.getElementById("submitPer").onclick = update;
	getAdd = document.getElementById("changeAdd");
  getNum = document.getElementById("changeNum");
  getOc = document.getElementById("changeOc");
  getAbout = document.getElementById("changeAbout");

  dispResults = document.getElementById("infoInputs");
}

  function update(){

    var changeInfo = new XMLHttpRequest();

    var params = new FormData();
    params.append("Address", getAdd.value);
    params.append("Number", getNum.value);
    params.append("Occupation", getOc.value);
    params.append("About", getAbout.value);

    changeInfo.onload = function(){
      dispResults.innerHTML = this.responseText;
      getAdd.value = "";
      getNum.value = "";
      getOc.value = "";
      getAbout.value = "";
    }

    changeInfo.open("POST", "updatePersonalInfo.php", true);
    changeInfo.send(params);

  }
