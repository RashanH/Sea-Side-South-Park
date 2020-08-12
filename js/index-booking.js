function validate_dates(){

    //check in date
    if (document.querySelector('input[name=check_in]').value==""){
        alert("Please select a check in date!");
        return false;
    } else if (document.querySelector('input[name=check_out]').value==""){
        alert("Please select a check out date!");
        return false;
    }
    

}