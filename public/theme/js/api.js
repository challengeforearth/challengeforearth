$( document ).ready(function() {
	"use strict";
    let challengeid = $("#challengeid");
    let challengeaccepted = $("#challengeaccepted");
    let icon = $("#challengeaccepted > .fas");
    let challengetext = $("#challengetext");
    challengeaccepted.click(function(){
        $.ajax({
            type: "GET",
            url: "/api/challenge/update/"+challengeid.text(),
            success: function (dataCheck) {
                icon.removeClass();
                icon.addClass(dataCheck.code);
                challengetext.text(dataCheck.message);
                if(dataCheck.status === 1){
                    challengeaccepted.removeClass('btn-green');
                    challengeaccepted.addClass('btn-orange');
                }else{
                    challengeaccepted.removeClass('btn-orange');
                    challengeaccepted.addClass('btn-green');
                }
            }
        });
        return false;
    });

    let ideaBtnSend = $("#ideaBtnSend");
    ideaBtnSend.click(function(){
        $.ajax({
            type: "POST",
            url: "/api/dashboard/feedback",
            data: {message: $("#ideaMessage").val(), _token: $("#csrf-token").attr('value')},
            success: function (dataCheck) {
                let result = JSON.parse(dataCheck);
                $("#ideaResult").text(result.message);
            }
        });
        return false;
    });

    


});