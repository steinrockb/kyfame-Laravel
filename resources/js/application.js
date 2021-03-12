$(document).ready(function () {

    $("#startBtn").click(function () {

        $("#startBtn").hide();
        $("#section1").show();
    });

    $(".nextBtn").click(function () {
        var sectionNum = $(this).data("section");
        $("#section" + sectionNum).hide();
        $("#section" + (sectionNum + 1)).show();
    });
});