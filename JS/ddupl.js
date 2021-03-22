var ddup = {
 
  hzone: null, 
  hstat: null,
  hform: null, 
  init : function () {
    
    ddup.hzone = document.getElementById("upzone");
    ddup.hstat = document.getElementById("upstat");
    ddup.hform = document.getElementById("upform");
    
    
    if (window.File && window.FileReader && window.FileList && window.Blob) {
      
      ddup.hzone.addEventListener("dragenter", function (e) {
        e.preventDefault();
        e.stopPropagation();
        ddup.hzone.classList.add('highlight');
      });
      ddup.hzone.addEventListener("dragleave", function (e) {
        e.preventDefault();
        e.stopPropagation();
        ddup.hzone.classList.remove('highlight');
      });
      
      
      ddup.hzone.addEventListener("dragover", function (e) {
        e.preventDefault();
        e.stopPropagation();
      });
      ddup.hzone.addEventListener("drop", function (e) {
        e.preventDefault();
        e.stopPropagation();
        ddup.hzone.classList.remove('highlight');
        ddup.queue(e.dataTransfer.files);
      });
    }

    
    else {
      ddup.hzone.style.display = "none";
      ddup.hform.style.display = "block";
    }
  },
  
  
  upqueue : [], 
  uplock : false, 
  queue : function (files) {
    
    for (let f of files) {
      
      ddup.hstat.innerHTML += `<div>${f.name} - Added to queue</div>`;
      
      ddup.upqueue.push(f); 
    }
    
    ddup.go();
  },
  
  
  go : function () { if (!ddup.uplock && ddup.upqueue.length!=0) {
    
    ddup.uplock = true;

   
    let thisfile = ddup.upqueue[0];
    ddup.upqueue.shift();

    
    ddup.hstat.innerHTML += `<div>${thisfile.name} - Upload started</div>`;

   
    let data = new FormData();
    data.append('upfile', thisfile);
    // ADD MORE POST DATA IF YOU WANT
    // data.append("KEY", "VALUE");
    
   
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "dd-upload.php");
    xhr.onload = function () {
     
      ddup.hstat.innerHTML += `<div>${thisfile.name} - ${this.response}</div>`;
      
      ddup.uplock = false;
      ddup.go();
    };
    xhr.onerror = function(evt){
      
      ddup.hstat.innerHTML += `<div>${thisfile.name} - AJAX ERROR</div>`;
      
      ddup.uplock = false;
      ddup.go();
    };
    xhr.send(data);
  }}
};
window.addEventListener("DOMContentLoaded", ddup.init);