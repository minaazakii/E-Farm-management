function progress(){
    var num = document.getElementsByTagName("tr").length;
    for(var i = 1; i<num; i++){
        var row = document.getElementsByTagName("tr")[i];
        var prog = document.getElementById("progress"+i).innerHTML;
        var value = prog.split("<span>")[1];
        value = value.split("<")[0];
        value = value.split("-");
        var start = value[0];
        var end = value[1];
        var w = document.getElementById("progress"+i).offsetWidth;
        var l = document.getElementById("progress"+i).offsetLeft;
        var result = (end - start +1) * w;
        var lef = l + ( (start - 1) * w);
        console.log(l);
        document.getElementById("progress"+i).style.width = result + "px";
        document.getElementById("progress"+i).style.left = lef +"px";
        document.getElementById("progress"+i).style.visibility = "visible";

        console.log(w);
    }

    


    
}