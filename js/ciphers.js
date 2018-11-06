
// Makes BUTTON responsive to RADIOs
document.getElementById("decrypt").addEventListener("click", function() {
  document.getElementById("av_button").innerHTML = "Decipher";
});
document.getElementById("encrypt").addEventListener("click", function() {
  document.getElementById("av_button").innerHTML = "Encipher";
});


/******
ASCII-V
******/
function ascii_vigenere(text, text2, dir) {
  // Define the variables
  var plainTextArray = [];
  var keyArray = [];
  var cypherArray = [];
  var letter;
  var newLetter;
  var newText = [];
  var newString;
  
  // IF ENciphering
  if (document.getElementById('encrypt').checked) {
    // Reprint inputs
    document.getElementById("cyphertext").innerHTML = text;
    document.getElementById("cyphertext2").innerHTML = text2;

    // Converts the letters and puctuation to their ASCII values and PUSHes them to an array.
    // PLAIN TEXT
    for (i=0; i<text.length; i++) {
      letter = text[i];
      plainTextArray.push(text.charCodeAt(i));
    }
    // KEY TEXT
    for (i=0; i<text2.length; i++) {
      letter = text2[i];
      keyArray.push(text2.charCodeAt(i)-32);
    }

    // Creates the CIPHER TEXT by adding the ASCII value of letter to the modified ASCII value of the KEY 
    for (i=0; i<text.length; i++) {
      newLetter = plainTextArray[i] + (keyArray[i % text2.length]);
      var tempLetter = 0
      // Limits output to the most common area of ASCII table used in English
      // and prevents the SPACE code from massing things up
      // PUSHes result to new array
      if (newLetter == 127) {
        cypherArray.push(172);
        tempLetter = 172;
      } else if (newLetter > 126) {
        cypherArray.push(newLetter-95);
        tempLetter = newLetter-95;
      } else if (newLetter < 32) {
        cypherArray.push(newLetter+95); 
        tempLetter = newLetter+95; 
      } else {
        cypherArray.push(newLetter);
        tempLetter = newLetter;
      }
      console.log( plainTextArray[i], ' + ', (keyArray[i % text2.length]), ' = ',newLetter, '  tempLetter ', tempLetter);
    }

    // Converts ASCII codes in the cypherArray to a letters then links them into a STRING
    // and prints it out
    for (i=0; i<cypherArray.length; i++){
      newText.push(String.fromCharCode(cypherArray[i]));
    }
    newString = newText.join('');
    document.getElementById("outputtext").innerHTML = newString; 

  // This is the DEcipher componant.
  // It works the same way but reverses the arithmatic
  } else {
    document.getElementById("cyphertext").innerHTML = text;
    document.getElementById("cyphertext2").innerHTML = text2;
    for (i=0; i<text.length; i++) {
      letter = text[i];
      plainTextArray.push(text.charCodeAt(i));
    }
      for (i=0; i<text2.length; i++) {
      letter = text2[i];
      keyArray.push(text2.charCodeAt(i)-32);
    }
    for (i=0; i<text.length; i++) {

      if (plainTextArray[i] == 172) {
        newLetter = 127 - (keyArray[i % text2.length]);
      } else {
        newLetter = plainTextArray[i] - (keyArray[i % text2.length]);
      }
      if (newLetter > 126) {
        cypherArray.push(newLetter-95);
      } else if (newLetter < 33) {
        cypherArray.push(newLetter+95);
      } else {
        cypherArray.push(newLetter);
      }
    }

    for (i=0; i<cypherArray.length; i++){
      newText.push(String.fromCharCode(cypherArray[i]));
    }
    newString = newText.join('');
    document.getElementById("outputtext").innerHTML = newString;    
  }
}

