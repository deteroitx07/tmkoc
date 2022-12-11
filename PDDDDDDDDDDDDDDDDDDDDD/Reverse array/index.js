input = document.getElementById("inp");

function customReverse(input) {

    let leftIndex = 0;
    let rightIndex = input.value.length - 1;
  
    let string = input.value
    
    let array = [];

    for(i=0;i<string.length;i++)
    {
        array[i] = string.charAt(i);
    }


    while (leftIndex < rightIndex) {
  
      let temp = array[leftIndex];
      array[leftIndex] = array[rightIndex];
      array[rightIndex] = temp;
  
      leftIndex++;
      rightIndex--;
    }
    return array.toString();
  }


  function myFunction() {
    document.getElementById("answer").innerHTML =  customReverse(input);
  }




















// var arraydisp = document.getElementById('arraydisp');
// var pushResult = document.getElementById('pushResult');
// var popResult = document.getElementById('popResult');
// var sliceResult = document.getElementById('sliceResult');
// var shiftResult = document.getElementById('shiftResult');


// let array = [1,10,7,4,29,6];

// arraydisp.innerHTML = array;

// array.push(8);

// pushResult.innerHTML = array;

// let pop = array.pop();
// popResult.innerHTML = array;

// let slice = array.slice(1,3);
// sliceResult.innerHTML = slice;

