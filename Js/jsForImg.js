console.log("jnsdm");
addBtn5 = document.querySelector("#A5");
addBtn6 = document.querySelector("#A6");
addBtn7 = document.querySelector("#A7");
addBtn8 = document.querySelector("#A8");
addBtn9 = document.querySelector("#A9");
addBtn10 = document.querySelector("#A10");
addBtn11= document.querySelector("#A11");
addBtn12 = document.querySelector("#A12");
addBtn13 = document.querySelector("#A13");
addBtn14= document.querySelector("#A14");
addBtn15 = document.querySelector("#A15");


addBtn5.addEventListener('click',function(){setTimeout(() => (showNotes5()),1)});
addBtn6.addEventListener('click',function(){setTimeout(() => (showNotes6()),1)});
addBtn7.addEventListener('click',function(){setTimeout(() => (showNotes7()),1)});
addBtn8.addEventListener('click',function(){setTimeout(() => (showNotes8()),1)})
addBtn9.addEventListener('click',function(){setTimeout(() => (showNotes9()),1)})
addBtn10.addEventListener('click',function(){setTimeout(() => (showNotes10()),1)})
addBtn11.addEventListener('click',function(){setTimeout(() => (showNotes11()),1)})
addBtn12.addEventListener('click',function(){setTimeout(() => (showNotes12()),1)})
addBtn13.addEventListener('click',function(){setTimeout(() => (showNotes13()),1)})
addBtn14.addEventListener('click',function(){setTimeout(() => (showNotes14()),1)})
addBtn15.addEventListener('click',function(){setTimeout(() => (showNotes15()),1)})


function showNotes5(){
    console.log("A5");
    hideAll();
    document.getElementById("I5").style.display = "block";
    document.getElementById("des").innerText = "A1";

}
function showNotes6(){
    console.log("A6");
    hideAll();
    document.getElementById("I6").style.display = "block";
    document.getElementById("des").innerText = "A2";

}
function showNotes7(){
    console.log("A7");
    hideAll();
    document.getElementById("I7").style.display = "block";
    document.getElementById("des").innerText = "A3";

}
function showNotes8(){
    console.log("A8");
    hideAll();
    document.getElementById("I8").style.display = "block";
    document.getElementById("des").innerText = "A4";

}
function showNotes9(){
    console.log("A9");
    hideAll();
    document.getElementById("I9").style.display = "block";
    document.getElementById("des").innerText = "A5";

}
function showNotes10(){
    console.log("A10");
    hideAll();
    document.getElementById("I10").style.display = "block";
    document.getElementById("des").innerText = "A6";

}
function showNotes11(){
    console.log("A11");
    hideAll();
    document.getElementById("I11").style.display = "block";
    document.getElementById("des").innerText = "A7";
}
function showNotes12(){
    console.log("A12");
    hideAll();
    document.getElementById("I12").style.display = "block";
    document.getElementById("des").innerText = "A8";

}
function showNotes13(){
    console.log("A13");
    hideAll();
    document.getElementById("I13").style.display = "block";
    document.getElementById("des").innerText = "A9";

}
function showNotes14(){
    console.log("A14");
    hideAll();
    document.getElementById("I14").style.display = "block";
    document.getElementById("des").innerText = "A10";

}
function showNotes15(){
    console.log("A15");
    hideAll();
    document.getElementById("I15").style.display = "block";
    document.getElementById("des").innerText = "A11";

}
function hideAll(){

    document.getElementById("I5").style.display = "none";
    document.getElementById("I6").style.display = "none";
    document.getElementById("I7").style.display = "none";
    document.getElementById("I8").style.display = "none";
    document.getElementById("I9").style.display = "none";
    document.getElementById("I10").style.display = "none";
    document.getElementById("I11").style.display = "none";
    document.getElementById("I12").style.display = "none";
    document.getElementById("I13").style.display = "none";
    document.getElementById("I14").style.display = "none";
    document.getElementById("I15").style.display = "none";
   

}