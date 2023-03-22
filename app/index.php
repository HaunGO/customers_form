<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title>B:H + DW</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->

</head>

<body>
    <main>

        <h1 class="text-3xl font-bold underline">B:H + Dealer's Warehouse</h1>
    
    


    <form action="./addCustomer.php" method="post" class="form" id="customerForm">
        <fieldset style="display:inline-block">
            <legend>Customer Information</legend>
            <div>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" >
            </div>
            <div>
                <label for="address_1">Address 1:</label><br>
                <input type="text" id="address_1" name="address_1" >
            </div>
            <div>
                <label for="address_2">Address 2:</label><br>
                <input type="text" id="address_2" name="address_2">
            </div>
            <div>
                <label for="city">City:</label><br>
                <input type="text" id="city" name="city" >
            </div>
            <div>
                <label for="state">State:</label><br>
                <input type="text" id="state" name="state" >
            </div>
            <div>
                <label for="zip">Zip:</label><br>
                <input type="text" id="zip" name="zip" >
            </div>
        </fieldset>
            <!-- 
                <div>
            <label for="phone">Phone:</label><br>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div>
            <label for="fax">Fax:</label><br>
            <input type="tel" id="fax" name="fax"><br><br>
        </div>
        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="contact_person">Contact Person:</label><br>
            <input type="text" id="contact_person" name="contact_person" required>
        </div>
        <div>
            <label for="type_of_business">Type of Business:</label><br>
            <select id="type_of_business" name="type_of_business" required>
                <option value="">Select One</option>
                <option value="corporation">Corporation</option>
                <option value="llc">LLC</option>
                <option value="sole_proprietor">Sole Proprietor</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div>
            <label for="description_of_business">Description of Business:</label><br>
            <textarea id="description_of_business" name="description_of_business" rows="4" ></textarea>
        </div>
        <div>
                <label for="preferred-days">Preferred Days of Receiving Shipments from Dealers Warehouse *</label>
                <br>
                <input type="checkbox" id="monday" name="preferred-days" value="monday">
                <label for="monday">Monday</label><br>
                <input type="checkbox" id="tuesday" name="preferred-days" value="tuesday">
                <label for="tuesday">Tuesday</label><br>
                <input type="checkbox" id="wednesday" name="preferred-days" value="wednesday">
                <label for="wednesday">Wednesday</label><br>
                <input type="checkbox" id="thursday" name="preferred-days" value="thursday">
                <label for="thursday">Thursday</label><br>
                <input type="checkbox" id="friday" name="preferred-days" value="friday">
                <label for="friday">Friday</label>
        </div>
    -->

    <br>
    <br>

        <input id="" type="submit" value="Add Customer" >
        
    </form>
    
    <hr>
    <h3>Complete Customer list</h3>
    <button id="updateButton">Show All Customers</button>
    <button id="purgeButton">Purge Database</button>
    <br>
    <section id="customers"></section>


    <script src="js/main.js"></script>

</body>

</html>





