function menuClick() {
    var menu = document.getElementById("ulNavBar");
    var contenu = document.getElementById("indexMain");

    if(menu.style.display === "none")
    {
        menu.style.display = "block";
    }
    else
    {
        menu.style.display = "none";
    }

    if(contenu.style.display != "block")
    {
        contenu.style.display = "block";
    }
    else
    {
        contenu.style.display = "none";
    }
  }