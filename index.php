<!DOCTYPE html> 
<html lang="en">
<head>
<title>Table Practice</title>
<meta charset="utf-8">
<style>
table { margin: auto;
        border: 5px solid #000066;
        width: 600px; 
		border-spacing: 0;
}
td, th { padding: 0.5em;
		 border-style: none;
         font-family: Arial, sans-serif; 
}
caption { font-family: Verdana, sans-serif;
          font-weight: bold;
          font-size: 1.2em;
          padding-bottom: 0.5em; 
}
tr:nth-of-type(even) { background-color: #eaeaea; }
tr:first-of-type { background-color: #006;
				   color: #eaeaea; }
</style>
</head>
<body>
 <table border="1">  
 <caption>Lighthouse Island Bistro Specialty Coffee Menu</caption>
   <tr>
     <th>Specialty Coffee</th>
	 <th>Description</th>
     <th>Price</th>
  </tr>
  <tr>
     <td>Lite Latte</td>
     <td>Indulge in a shot of espresso with steamed, skim milk. </td>
	 <td>$3.50</td>
  </tr>
  <tr>
     <td>Mocha Latte</td>
     <td>Choose dark or mile chocolate with steamed milk.</td>
	 <td>$4.00</td>
   </tr>
    <tr>
     <td>MCP Latte</td>
     <td>A lucious mocha latte with caramel and pecan syrup.</td>
	 <td>$4.50</td>
  </tr>
</table>

</body>
</html>