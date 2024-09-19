function sendPostAjax(url, data) {
    var zapros = new XMLHttpRequest();
    zapros.onreadystatechange = function() {
        if(zapros.readyState == 4 && zapros.status == 200) {

			booksCount = JSON.parse(zapros.response);
            //alert(booksCount.count);
            localStorage.setItem('OrderCount', booksCount.count);            
            document.getElementById('kol').innerHTML = booksCount.count;
	    }
	};
    zapros.open("POST", url);
    zapros.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    zapros.setRequestHeader("X-CSRF-TOKEN", document.getElementsByName('csrf-token')[0].getAttribute('content'));
    zapros.send(data);	  
    } 


