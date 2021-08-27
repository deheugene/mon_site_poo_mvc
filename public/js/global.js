/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* la fonction navigation permet de rendre le lien selectioné actif */
function navigation() {
    var linkList = $("#navbarContent .nav-link");
    linkList.on("click", function () {
        var link = $(this);
        var i = 1;
        for (i = 0; i < linkList.length; i++)
        {
            if (linkList[i].hasClass("active") && linkList[i] != link) {
                linkList[i].removeClass("active")
            }
        }
        if (!link.hasClass("active")) {
            link.addClass("active");
        }

    });
}

$(document).ready(function () {
    navigation();
});