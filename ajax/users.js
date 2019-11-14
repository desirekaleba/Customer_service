

    let request;

    if (window.XMLHttpRequest) {

        request = new XMLHttpRequest();

    } else {

        request = new ActiveXObject("microsoft.XMLHTTP");
    }

    addProduct = (customer_id, data) => {
        request.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                
                request.open("POST", "php/controller.php?req=addProduct", true);
                request.setRequestHeader("content-type","application/x-www-form-urlencoded");
                request.send("customer_id="+customer_id+"&productName="+data[0]+"&price="+data[1]);
            }
        }
    }