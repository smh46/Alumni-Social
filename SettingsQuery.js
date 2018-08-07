window.onload = function(){


	document.getElementById("submitPass").onclick = change;
	getOld = document.getElementById("oldPass");
  getNew = document.getElementById("newPass");
  getConfirm = document.getElementById("confirmPass");
  postError= document.getElementById("changeResults");

}

		function change(){

    var changePass = new XMLHttpRequest();

    var params = new FormData();
    params.append("oldPass", getOld.value);
    params.append("newPass", getNew.value);
    params.append("repeatPass", getConfirm.value);

    changePass.onload = function(){
      getOld.value = "";
      getNew.value = "";
      getConfirm.value = "";
      postError.innerHTML = this.responseText;
    }

    changePass.open("POST", "SettingsQuery.php", true);
    changePass.send(params);

  }
