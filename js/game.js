const phraseInput = $("#phrase-guess-input");
const letterInput = $("#letter-guess-input");



const apiGuessPhrase = (phrase) => {

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
