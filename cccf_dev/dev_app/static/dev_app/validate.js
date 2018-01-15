function onlyAlphabets(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)|| ( charCode >= 36 && charCode  <= 40))
            return true;
        else
            return false;
    }
    catch (err) {
        alert(err.Description);
    }
}

function onlyAlphaNum(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode >= 48 && charCode <= 57) || ( charCode >= 96 && charCode  <= 105)|| ( charCode >= 36 && charCode  <= 40) )
            return true;
        else
            return false;
    }
    catch (err) {
        alert(err.Description);
    }
}

function onlyNumbers(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ( (charCode >= 46 && charCode <= 57) || ( charCode >= 36 && charCode  <= 40)  )
            return true;
        else
            return false;
    }
    catch (err) {
        alert(err.Description);
    }
}

function onlylaptop(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ( (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode >= 48 && charCode <= 57) || ( charCode >= 96 && charCode  <= 105)  )
            return true;
        else
            return false;
    }
    catch (err) {
        alert(err.Description);
    }
}


    // 186 is the keycode for colon, semi colon




function limitText(limitField, limitCount, limitNum)
{
    if (limitField.value.length > limitNum)
    {              
        limitField.value = limitField.value.substring(0, limitNum);        
    } 
}


