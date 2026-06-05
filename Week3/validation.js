function validateForm()
{
    let email = document.getElementById("email").value;

    if(email === "")
    {
        alert("Email is required");
        return false;
    }

    return true;
}