function prodType(prod){
    var dvd = document.getElementById("dvd");
    var book = document.getElementById("book");
    var furniture = document.getElementById("furniture");
    var size = document.getElementById("size");
    var weight = document.getElementById("weight");
    var width = document.getElementById("width");
    var length = document.getElementById("length");
    var height = document.getElementById("height");

    
    dvd.style.display="none";
    book.style.display="none";
    furniture.style.display="none";
    
    if(prod=="DVD"){
        dvd.style.display="block";
        size.attr("required");
    }else if(prod=="Book"){
        book.style.display="block";
        weight.attr("required");
    }else if(prod=="Furniture"){
        furniture.style.display="block";
        width.attr("required");
        height.attr("required");
        length.attr("required");
    }
  }