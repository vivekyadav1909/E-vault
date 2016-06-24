function Validate()
{
    var uname = document.SignupForm.txtUserName;
    if (uname.value == null || uname.value == "")
    {
        alert("Please Enter User Name!");
        uname.focus();
        return false;
    }

    var letters = /^[A-Za-z]+$/;
    if (uname.value.match(letters))
    {
//return true;
    }
    else
    {
        alert("Please Enter Characters Only at User Name");
        uname.focus();
        return false;
    }

    var pass = document.SignupForm.txtPassword;
    if (pass.value == null || pass.value == "")
    {
        alert("Please Enter Your Password!");
        pass.focus();
        return false;
    }

    var uemail = document.SignupForm.txtEmail;
    if (uemail.value == null || uemail.value == "")
    {
        alert("Please Enter User Email!");
        uemail.focus();
        return false;
    }

    var uemail = document.SignupForm.txtEmail;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (uemail.value.match(mailformat))
    {
//return true;
    }
    else
    {
        alert("You have Entered An Invalid Email!");
        uemail.focus();
        return false;
    }

    var address = document.SignupForm.txtAddress;
    if (address.value == "")
    {
        alert("Please Enter valid address!")
        address.focus();
        return false;
    }

    var address_letter = /^[A-Za-z0-9]+$/;
    if (address.value.match(address_letter))
    {
//return true;
    }
    else
    {
        alert("Please Enter Alpha-Nummerics Only at address");
        address.focus();
        return false;
    }

    var mobile = document.SignupForm.txtMobile;
    if (mobile.value == "" || mobile.value == null)
    {
        alert("Please enter your mobile no.!");
        mobile.focus();
        return false;
    }

    var mobile_letter = /^[0-9]+$/
    if (mobile.value.match(mobile_letter))
    {
//return true;
    }
    else
    {
        alert("Please enter Numerics only");
        mobile.focus();
        return false;
    }

    var photo = document.SignupForm.txtUpload;
    if (photo.value == "" || photo.value == null)
    {
        alert("Please Select Photo!")
        photo.focus();
        return false;
    }
    return true;
}