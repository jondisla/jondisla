$('document').ready(function () {
    console.log('ready')

    var userInput = prompt("What would you like to do?");
    var log = console.log();
    while (userInput.length >= 1) {
        if (userInput === "list") {
            console.log(userOutput)
        } else if (userOutput === "quit") {
            break;
        }
        var userOutput = prompt("What would you like to do?");
        // return userInput;
    }
})