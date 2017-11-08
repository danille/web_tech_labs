/**
 * Created by dlebe on 08/11/2017.
 */


// Taken from MDN
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min; //The maximum is exclusive and the minimum is inclusive
}


function playGame() {
    var guess_counter = 0;
    var max_guesses_allowed = 3;
    var is_user_guessed = false;
    var magic_number = getRandomInt(1, 10);

    function makeAGuess() {
        var user_guess_str = window.prompt("Enter your guess here");
        var user_guess = parseInt(user_guess_str);
        guess_counter++;
        return user_guess;
    }

    window.alert("Hi! Nice to see you! Let's play a game!");
    window.alert("All you need is to guess a number!");

    while (!is_user_guessed && guess_counter < max_guesses_allowed){

        var user_guess = makeAGuess();

        if (user_guess === magic_number){
            is_user_guessed = true;
            window.alert("Congrats! You win!")
        }
    }
    document.writeln("the answer is " + magic_number)
}

var playButton = document.getElementById("id_bt_play_game");

playButton.addEventListener("click", playGame, false);



