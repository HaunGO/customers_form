console.log('main');

function showCustomer() {
    console.log('showCustomer')
    document.getElementById("customers").innerHTML = "";
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        console.log(this.responseText)
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

}

