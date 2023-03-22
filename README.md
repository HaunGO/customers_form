## Greetings 
This is a PHP skills assessment and demonstrations. 

## NOTE.  In the interest of time:
- There are NO styles added. 
- There is NO form validation.
- There was NO consideration for security or accessibility.
- Only a portion of the form fields were added. 

## To Run Locally

(<a href="https://www.docker.com/products/docker-desktop/" target="_blank">Docker</a> must be installed)

1. Download or clone this repository. 

2. Open project in Terminal and run docker-compose up to spin up the local Apache server, MySql database, and PhpMyAdmin. 

3. Open your browser to <a href="http://localhost/" target="_blank" >http://localhost/</a>

4. Open phpMyAdmin <a href="http://localhost/8080/" target="_blank" >http://localhost:8080/</a>  and import the customers.sql.gz (located in root/db/customers.sql.gz) 'customers' table in 'my-form-db'.

5. You are now ready to use the app to add customers to the database, delete them individually, purge the entire database, view an individual customer details page, and generate a pdf using the supplied fpdf library.
