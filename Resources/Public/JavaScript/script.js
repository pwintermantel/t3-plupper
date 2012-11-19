var visitor = plupper.getVisitorUUID();
var plupperButton = document.getElementById("plupperStatusButton");
plupperButton.setAttribute("target", "_blank");
plupperButton.setAttribute("href", "https://www.plupper.com/widget?p=" + plupperButton.rel + "&v=" + visitor);

