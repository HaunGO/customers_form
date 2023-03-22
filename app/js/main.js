console.log('main');

function showCustomer() {
    console.log('showCustomer');
    document.getElementById("customers").innerHTML = "";
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        // console.log(this.responseText)
        document.getElementById("customers").innerHTML = this.responseText;
    }
    xhttp.open("GET", "getCustomer.php");
    xhttp.send();
}

const updateButton = document.getElementById("updateButton");

updateButton.addEventListener('click', function() {
    showCustomer()
}); 




const customerForm = document.getElementById("customerForm");

customerForm.onsubmit = function(event){
    event.preventDefault();
    console.log('customerForm.onSubmit')

    var formData = new FormData(customerForm);

    fetch("/addCustomer.php",
    {
       body: formData,
       method: "post"
    })
    .then((response) => {
        console.log('1')
        if (!response.ok) {
            throw new Error("Network response was not OK");
        }else{
            showCustomer();
        }
        return response;
    })
    .catch((error) => {
        console.error("There has been a problem with your fetch operation:", error);
    });

    //Dont submit the form.
    return false; 

}


const purgeButton = document.getElementById("purgeButton");

purgeButton.addEventListener('click', function() {
    console.log('purgeButton click')
    var formData = new FormData(customerForm);

    fetch("/purgeCustomers.php",
    {
       body: formData,
       method: "post"
    })
    .then((response) => {
        console.log('1')
        showCustomer();
        if (!response.ok) {
            throw new Error("Network response was not OK");
        }
        return response.blob();
    })
    .catch((error) => {
        console.error("There has been a problem with your fetch operation:", error);
    });

    //Dont submit the form.
    return false; 

});



let removeMe = (_id) => {
    console.log('removeMe', _id);
    
    // Call server function and pass id as query param.
    fetch("/removeCustomer.php?id=" + _id,
    { 
       id: _id,
       method: "GET"
    })
    .then((response) => {
        console.log(_id, "removed")
        if (!response.ok) {
            throw new Error("Network response was not OK");
        }else{
            showCustomer();
        }
        // return response.blob();
    })
    .catch((error) => {
        console.error("There has been a problem with your fetch operation:", error);
    });

    //Dont submit the form.
    return false; 
}



let printMe = (_id) => {
    
    // console.log('printMe()', _id)
    // fetch("/printCustomer.php?id=" + _id,
    // { 
    //    id: _id, 
    //    method: "GET"
    // })
    // .then((response) => {
    //     console.log(_id, "please print")
    //     if (!response.ok) {
    //         throw new Error("Network response was not OK");
    //     }else{
    //         showCustomer();
    //     }
    //     // return response.blob();
    // })
    // .catch((error) => {
    //     console.error("There has been a problem with your fetch operation:", error);
    // });

    //Dont submit the form.
    // return false; 

}
