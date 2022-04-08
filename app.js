var card_wrapper = document.getElementById("card-wrapper");

var shorten_url_btn = document.getElementById("shorten-btn");

var copy_url_btn = document.getElementById("copy-btn");



function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        window.alert(' Copying to clipboard was successful!');
      }, function(err) {
        window.alert('Could not copy text: ', err);
      });
}

// console.log(card_wrapper);

let rotate = () => {
  card_wrapper.style.transform = "rotateY(180deg)";
}

if(shorten_url_btn){
    shorten_url_btn.addEventListener('click',rotate);
}

let copttext = ()=>{
    var textfield = document.getElementById("long-url");
    copyToClipboard(textfield.value);
    console.log(textfield);
}

if(copy_url_btn){
    copy_url_btn.addEventListener('click',copttext)
}