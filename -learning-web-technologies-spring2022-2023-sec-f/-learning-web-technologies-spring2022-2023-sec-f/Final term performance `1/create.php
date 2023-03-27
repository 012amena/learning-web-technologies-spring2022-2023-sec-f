<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashbord</title>
</head>
<body>
	<table border="1">

       <tr>
        <td>Feature Name:<input type="text"  placeholder="Enter Feature Name"></input></td>
       </tr>

       <tr>
        <td>Feature Owner:<input type="text" placeholder="Enter Feature Owner"></input></td>
       </tr>

       <tr>
        <td>Feature Team Name:<input type="text" placeholder="Enter Team Name"></input></td>
       </tr>

       <tr>
        <td>Feature Overview:<input type="text" placeholder="Enter Feature Overview"></input></td>
       </tr>

       <tr>
        <td>Strategic Alignment:<input type="text" placeholder="How to support your Buniness"></input></td>
       </tr>

       <tr>
        <td>Value Score: <input type="text" placeholder="Estimate feature"></input><select name="score" id="score">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="+">+</option>
                        </select></td>
       </tr>

      <tr>
    <td> User Challenges:<input type="text" placeholder="Try to solve User Problem"></input></td>
    </tr>

    <tr>
    <td> Open Question:<input type="text" placeholder="Whats your Question??"></input></td>
    </tr>
        </table><br><hr>
        <button><a href="submit.php">Submit</button>

</body>
</html>