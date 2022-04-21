let lampSW = document.getElementById("lampSW")
lampSW.onchange = function() {
    let url = "http://localhost/smart/add/lamp.php"
    let k
    if (lampSW.checked) {
        k = 1
    } else {
        k = 0
    }

    let json = { "status": k }
    makeRequest(url, json)
};


function makeRequest(url, json) {
    fetch(url, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(json)
        })
        .then(function(response) {
            return response.json()
        })
        .then(function(data) {
            console.log(data)
        })

}