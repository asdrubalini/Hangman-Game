const phraseInput = $("#phrase-guess-input");
const letterInput = $("#letter-guess-input");


const onGameEnd = (status, time_elapsed, errors_count) => {
    const minutes = Math.floor(time_elapsed / 60);
    const seconds = Math.round(time_elapsed - (minutes * 60));

    $(".elapsed-minutes").text(minutes);
    $(".elapsed-seconds").text(seconds);
    $(".errors-count").text(errors_count);

    if (status === "won") {
        $("#won-modal").modal("show");

    } else if (status === "lost") {
        $("#lost-modal").modal("show");

    }
}

const onStageUpdated = (new_stage, condemned_image, remaining_attempts) => {
    $("#condemned").attr("src", condemned_image);
    $("#remaining-attempts").text(remaining_attempts);
}

const updateChronologyList = () => {
    fetch(
        "partials/game/guesses_list.php",
        {
            method: "GET",
        }).then(response => {
            if (response.status !== 200) {
                console.log("Got error while requesting API");
                return;
            }

            response.text().then(data => {
                $("#chronology").html(data);
            })
        })
}

const apiGuessPhrase = (phrase) => {
    const data = new FormData();
    data.append("phrase", phrase);

    fetch(
        "api/guess_phrase.php",
        {
            method: "POST",
            body: data
        }).then(response => {
            if (response.status !== 200) {
                console.log("Got error while requesting API");
                return;
            }

            response.json().then(data => {
                if (!data.success) {
                    console.error("Error: " + data.error)
                    return;
                }

                $("#word").text(data.hidden_phrase);
                onStageUpdated(data.stage, data.condemned_image, data.remaining_attempts);

                if (data.status !== "playing") {
                    onGameEnd(data.status, data.duration, data.stage);
                }

                updateChronologyList();
            })
        })
}

const apiGuessLetter = (letter) => {
    const data = new FormData();
    data.append("letter", letter);

    fetch(
        "api/guess_letter.php",
        {
            method: "POST",
            body: data
        }).then(response => {
            if (response.status !== 200) {
                console.log("Got error while requesting API");
                return;
            }

            response.json().then(data => {
                if (!data.success) {
                    console.error("Error: " + data.error)
                    return;
                }

                $("#word").text(data.hidden_phrase);
                $("#chronology").empty();
                onStageUpdated(data.stage, data.condemned_image, data.remaining_attempts);

                if (data.status !== "playing") {
                    onGameEnd(data.status, data.duration, data.stage);
                }

                updateChronologyList();
            })
        })
}

phraseInput.keypress((e) => {

    if (e.keyCode === 13 && phraseInput.val() !== "") {
        apiGuessPhrase(phraseInput.val());
        phraseInput.val("");
    }

});

$("#guess-phrase").click((e) => {
    if (phraseInput.val() !== "") {
        apiGuessPhrase(phraseInput.val());
        phraseInput.val("");
    }
})

letterInput.keypress((e) => {

    // Limit input field to one char only
    if (letterInput.val().length >= 1) {
        e.preventDefault();
    }

    if (e.keyCode === 13 && letterInput.val().length === 1) {
        apiGuessLetter(letterInput.val());
        letterInput.val("");
    }

});

$("#guess-letter").click((e) => {
    if (letterInput.val() !== "") {
        apiGuessLetter(letterInput.val());
        letterInput.val("");
    }
})

$("#won-modal-no, #won-modal-close, #lost-modal-close, #lost-modal-close-button").click((e) => {
    window.location = "index.php";
})

$("#won-modal-leaderboard-button").click((e) => {
    $("#leaderboard-ask-container").css("display", "flex");
})

$("#leaderboard-username-add-button").click((e) => {
    let username = $("#leaderboard-username").val();

    const data = new FormData();
    data.append("username", username);

    fetch(
        "api/add_to_leaderboard.php",
        {
            method: "POST",
            body: data
        }).then(response => {
            if (response.status !== 200) {
                console.log("Got error while requesting API");
                return;
            }

            response.json().then(data => {
                if (data.success) {
                    console.log("Username added successfully");
                    window.location = "leaderboard.php";
                } else {
                    console.log("Error while adding username");
                    window.location = "index.php";
                }

            })
        })
})

$("#game-interrupt").click((e) => {
    $("#interrupt-modal").modal("show");
})

$("#interrupt-modal-confirm").click((e) => {
    fetch(
        "api/reset_game.php",
        {
            method: "POST",
        }).then(response => {
            if (response.status !== 200) {
                console.log("Got error while requesting API");
                return;
            }

            response.json().then(data => {
                if (data.success) {
                    window.location = "index.php";
                }

            })
        })
})
