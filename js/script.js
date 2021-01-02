// Launch buttons

$("#start-singleplayer").click((e) => {
    $("#singleplayer-modal").modal("show");
});

$("#start-multiplayer").click((e) => {
    $("#multiplayer-modal").modal("show");
});

// Modal buttons

$("#multiplayer-launch-game").click((e) => {
    $("#gameType").val("multiplayer");
    $("#userPhrase").val($("#userInputPhrase").val());

    $("#submitGame").submit();
});

$("#singleplayer-launch-game").click((e) => {
    $("#gameType").val("singleplayer");

    $("#submitGame").submit();
});
