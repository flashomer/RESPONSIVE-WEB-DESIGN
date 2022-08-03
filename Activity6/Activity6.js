
var _marginTop = 0, _marginLeft = 0,pageHeight= 1,pageWidth = 1,btnTimeout=0;

var level = 1,clickNum = 0, emptyClickNum = 0, fastTime = 1000;
var score = 0, point = 5;

var $ = function (id) { return document.getElementById(id); };


function startGame() {

    clearTimeout(btnTimeout);
    randNum();

}

function bodyClick(){

    emptyClickNum++;
    document.getElementById("emptyClick").innerHTML= emptyClickNum;

   }

function btnClick(){

    clickNum++;
    score += (point*level);
    document.getElementById("score").innerHTML= score;

    if(clickNum > 2) {

         clickNum = 0;
         level++;
         alert("You are the winner! You can go next level"+level);
         fastTime = 1000 - (level * 100);

    }

}

function randNum(){

     _marginTop =  Math.random()*(pageHeight-100) +"px";
     _marginLeft = Math.random()*(pageWidth-200) +"px";


     $("btn").style.marginTop = _marginTop;
     $("btn").style.marginLeft = _marginLeft;

     btnTimeout = setTimeout(startGame, fastTime);


     //console.log(_marginTop+" : "+ ( pageHeight-100 ));
     //console.log(_marginLeft+" : "+ ( pageWidth-200 ));
}



window.onload = function () {

    pageHeight = document.getElementById('main').offsetHeight;
    pageWidth = document.getElementById('main').offsetWidth;

    btnTimeout = setTimeout(startGame, fastTime);

    //console.log(pageHeight);
    //console.log(pageWidth);


};