function change() {
    document.getElementById("yellow").style.display = "block";

    document.getElementById("white").style.display = "none";
}


document.getElementById("down").style.display = "none";




function hide() {
    document.getElementById("cont").style.display = "none";

    document.getElementById("up").style.display = "none";
    document.getElementById("down").style.display = "block";

}

function show() {

    document.getElementById("cont").style.display = "block";

    document.getElementById("down").style.display = "none";
    document.getElementById("up").style.display = "block";

}

/*details of task */
function replacing() {

    document.getElementById("green").style.display = "none";
    document.getElementById("whitesquere").style.display = "block";

}


/*Cleaning the land from weeds and applying compost*/
function showprogress(id)
{

    let divsDetails = document.querySelectorAll("#detailswhite");
    let divsHide = document.querySelectorAll("#hidenold");
    divsDetails[id].style.display = "block";
    divsHide[id].style.display = "none";
    // document.getElementById("detailswhite").style.display = "block";
    // document.getElementById("hidenold").style.display = "none";


}


function clicked() {
    document.getElementById("green").style.display = "block";
    document.getElementById("whitesquere").style.display = "none";

}
