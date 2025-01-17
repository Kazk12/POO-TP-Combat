var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "session_maker.php", true);

xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
        alert("Done! Session created.");
    }
};

