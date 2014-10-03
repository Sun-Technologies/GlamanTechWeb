$(".dropdown dt a").click(function() {
    $(".dropdown dd ul").toggle();
});
$(".dropdown dd ul li a").click(function() {
    var text = $(this).html();
    $(".dropdown dt a span").html(text);
    $(".dropdown dd ul").hide();
});
$(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (! $clicked.parents().hasClass("dropdown"))
        $(".dropdown dd ul").hide();
});

$(".dropdownsec dt a").click(function() {
    $(".dropdownsec dd ul").toggle();
});
$(".dropdownsec dd ul li a").click(function() {
    var text = $(this).html();
    $(".dropdownsec dt a span").html(text);
    $(".dropdownsec dd ul").hide();
});
$(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (! $clicked.parents().hasClass("dropdownsec"))
        $(".dropdownsec dd ul").hide();
});