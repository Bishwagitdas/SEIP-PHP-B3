var incrementButton = document.getElementById('increment');
var decrementButton = document.getElementById('decrement');
var content = document.getElementById('content');


incrementButton.addEventListener('click',function(){

   var output = content.value++;
   content.innerHTML = output;

});
decrementButton.addEventListener('click',function(){

    if(content.value > 0){
        var output = content.value--;
        content.innerHTML = output;

    }
    else{
        alert('Please Increment First');
    }
 
 });