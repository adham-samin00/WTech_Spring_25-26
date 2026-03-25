function analyzeText()
{
    let text = document.getElementById("inputText").value;
    let result = document.getElementById("result");

    let charCount = text.length;

    let word = text.split(" ");
    let wordCount = word.length;

    let reverseText = text.split("").reverse().join("");    


    result.innerHTML = 
    "Number of characters: " + charCount + "<br>" +
    "Total Words: " + wordCount + "<br>" +
    "Reversed Text: " + reverseText;
}