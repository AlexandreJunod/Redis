$(document).ready(function () {

    $("body").on("click", "input[name*='checkboxesFinished']", function () {

        let selector = $("input[name='_" + $(this).attr("name") + "'");
        if ($(this).is(":checked")) {
            selector.attr("checked", "");
            selector.val("on")
        }else{
            selector.removeAttr("checked");
            selector.val("off")
        }

    });
});
