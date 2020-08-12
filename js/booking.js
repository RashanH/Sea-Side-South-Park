function hideqty(element_to_hide_id, me_name) {

    var chboxs = document.getElementsByName(me_name);
    var vis = "none";
    for(var i=0;i<chboxs.length;i++) { 
        if(chboxs[i].checked){
         vis = "block";
            break;
        }
    }
    document.getElementById(element_to_hide_id).style.display = vis;


}


function validate_booking(){

    //check in date
    if (document.querySelector('input[name=check_in]').value==""){
        alert("Please select a check in date!");
        return false;
    } else if (document.querySelector('input[name=check_out]').value==""){
        alert("Please select a check out date!");
        return false;
    }

    //check all
    var checkedboxes = document.querySelectorAll('input[type=checkbox]:checked');
    if (!checkedboxes.length >0){
        alert("Please select at least one room!");
        return false;
    }

    //check one by one for qty
    if (document.querySelector('input[name=room1]').checked && document.querySelector('input[id=room_1_qty]').value==""){
        alert("Quantity is not selected for first room!");
        return false;
    } else if (document.querySelector('input[name=room2]').checked && document.querySelector('input[id=room_2_qty]').value==""){
        alert("Quantity is not selected for second room!");
        return false;
    } else if (document.querySelector('input[name=room3]').checked && document.querySelector('input[id=room_3_qty]').value==""){
        alert("Quantity is not selected for third room!");
        return false;
    }else if (document.querySelector('input[name=room4]').checked && document.querySelector('input[id=room_4_qty]').value==""){
        alert("Quantity is not selected for fourth room!");
        return false;
    }

}