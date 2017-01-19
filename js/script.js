$("#signUp").click(function()
{
    $("#windowLogin").fadeIn("fast");
    $("#page").css("z-index", "2", "backgroundColor" ,"blue", "opacity", "0.4");
});


$("#closeLogin").click(function()
{
    $("#windowLogin").fadeOut("fast");
});
