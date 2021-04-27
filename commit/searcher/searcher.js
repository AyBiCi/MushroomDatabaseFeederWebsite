function newQuery(){
    q = document.getElementById("search").value;
    $.get("searcher/search.php?query="+q, function(data){
        d = JSON.parse(data); 
        list = document.getElementById("found-list");
        list.innerHTML = "";
        
        for(i = 0;i<d.length;i++){
            let id = d[i].id;
            let type = d[i].type_name;
            let name = d[i].name;
            list.innerHTML += '<div id="search-item" onclick=\'setmushroom('+id+', "'+type+'","'+name+'")\'>'+
            type+" - "+name+"</div>";
        }
    });
}

function setmushroom(id, type, name){
    document.forms[0].type.value = type;
    document.forms[0].name.value = name;
    document.forms[0].id.value = id;
}