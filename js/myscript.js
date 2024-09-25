function validateForm() {
 
    emptyVal();
    if ( emptyVal()) {
        return true;
    } else {
        return false;
    }
}
 
function emptyVal() {
    var name = document.getElementById("cus_name").value;
    var address = document.getElementById("cus_address").value;
    var contact = document.getElementById("contact").value;
    var id = document.getElementById("id").value;
    var date = document.getElementById("del_date").value;
    var time = document.getElementById("time").value;
 
    if (name === "" || address === "" || contact === "" || id === "" || date === "" || time === "" )
        {
            document.getElementById("emptyout").innerHTML = "All fields are required.";
            return false;
        }
        return true;
}
 