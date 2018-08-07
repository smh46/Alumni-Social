window.onload = function(){

	viewNews = document.getElementById("middleContent");

    while(viewNews.firstChild){
      viewNews.removeChild(viewNews.firstChild);
    }

    var getNews = new XMLHttpRequest();

    getNews.onload = function(){
      viewNews.innerHTML = this.responseText;
    }

    getNews.open("GET", "listnews.php", true);
    getNews.send();

}
