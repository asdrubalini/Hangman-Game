// Launch buttons

$("#start-singleplayer").click((e) => {
    $("#singleplayer-modal").modal("show");
});

$("#start-multiplayer").click((e) => {
    $("#multiplayer-modal").modal("show");
});

// Modal buttons

$("#multiplayer-launch-game").click((e) => {
    $("#gamemode").val("multiplayer");

    const phrase = $("#userInputPhrase").val();

    if (phrase === null || phrase === "") {
        $("#modal-other-player-hint").hide();
        $("#modal-empty-error-hint").show();
        return;
    }

    $("#phrase").val(phrase);
    $("#submitGame").submit();
});

$("#singleplayer-launch-game").click((e) => {
    $("#gamemode").val("singleplayer");

    $("#submitGame").submit();
});
