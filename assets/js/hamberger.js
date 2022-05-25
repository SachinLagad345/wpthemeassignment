let toggler = 0;

function showMenu() {

if(toggler == 0)
{
document.getElementById("urlclass_id").classList.remove("urlclass");
document.getElementById("urlclass_id").classList.add("urlclass-responsive");
toggler++;
}

else
{
document.getElementById("urlclass_id").classList.remove("urlclass-responsive");
document.getElementById("urlclass_id").classList.add("urlclass");
toggler--;
}
}