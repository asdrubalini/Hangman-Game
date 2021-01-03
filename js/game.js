const phraseInput = $("#phrase-guess-input");
const letterInput = $("#letter-guess-input");


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

                if (data.guess_status) {

                } else {

                }
            })
        })
}

const apiGuessLetter = (letter) => {

}

phraseInput.keypress((e) => {

    if (e.keyCode === 13 && phraseInput.val() !== "") {
        apiGuessPhrase(phraseInput.val());
        phraseInput.val("");
    }

});

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
