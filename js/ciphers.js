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
  var plainTextArray = [];
  var keyArray = [];
  var cypherArray = [];
  var letter;
  var newLetter;
  var newText = [];
  var newString;
  
  if (document.getElementById('encrypt').checked) {
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
      newLetter = plainTextArray[i] + (keyArray[i % text2.length]);
      //console.log(newLetter);
      var tempLetter = 0
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

    for (i=0; i<cypherArray.length; i++){
      newText.push(String.fromCharCode(cypherArray[i]));
    }
    newString = newText.join('');
    document.getElementById("outputtext").innerHTML = newString; 

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

