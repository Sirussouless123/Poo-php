// let req = new XMLHttpRequest();

//  req.onreadystatechange = function(){
//         if (req.readyState == 4  && (req.status == 200 || req.status == 0  )){
//             console.log(req);
//             let donnees = JSON.parse(req.response);
//         }else  if (req.status < 4){
//             console.log(req.readyState);
//         }
//  }

// req.open("GET", "http://localhost:8080/index.php",true);
// req.send();



// console.log("Bonjour");

// let req = new XMLHttpRequest();

// let user = {
//    name : "Saïd",
//    pseudo : "Sirus",
//    pwd : "avent123"
// };

// req.open("POST","http://localhost/ajax/index.php",true);

// req.send(JSON.stringify(user));

// console.log(req);

function showData(randomNumber) {
    $.ajax({
        type : "POST",
        url : "ajax.php",
        data : {
         action : "showData",
         number : randomNumber
        },
        dataType : "json",
        success : function(response){
               ${"#message"}.html("response.message");
        }
    })
}

