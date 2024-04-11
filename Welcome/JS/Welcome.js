$(document).ready(function(){    
        setInterval(updateTime, 1000);
        setInterval(updateStatus, 1000);

    $("#SignOut").click(function(){
        $.ajax({
            type:"Get",
            url: "Welcome/PHP/destroySession.php",
            success: function(){
            location.href = "welcome.php";
            }
        })
    })

});

function updateTime()
{
    var currentDate = new Date();
    document.getElementById("date").innerHTML = currentDate.toLocaleDateString([],{day:"numeric", month:"long", year:"numeric"});
    document.getElementById("time").innerHTML = currentDate.toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
}

function updateStatus()
{
    var logstatus = document.getElementById("status").innerHTML;
    if(logstatus.includes("Out"))
    {
        document.getElementById("Login").value = "Login";
    }
    else
    {
        document.getElementById("Login").value = "Logout";
    }

}