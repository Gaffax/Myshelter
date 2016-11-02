<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form test</title>
    <link rel="stylesheet" href="/css/master.css" media="screen" title="no title">
  </head>
  <body>

    <form class="input-form" action="index.html" method="post">
      <fieldset class="add_institution">
          <legend>Tilføj ny Institution</legend>

          <p><label for="name">Navn</label><input type="text" name="name" size="20" lenght="25" id="name"><br></p>
          <p><label for="number">Nummer </label><input type="text" name="number" size="20" lenght="25" id="number"></p>
          <p><label for="floor">Etage </label><input type="text" name="floor" size="20" lenght="25" id="floor"><br></p>
          <p><label for="door">Dør </label><input type="text" name="door" size="20" lenght="25" id="door"><br></p>
          <p><label for="city">By </label><input type="text" name="city" size="20" lenght="25" id="city"><br></p>
          <p><label for="country">Land</label><input type="text" name="country" size="20" lenght="25" id="country"><br></p>
          <p><label for="phone">Telefon </label><input type="text" name="phone" size="20" lenght="25" id="phone"><br></p>
          <p><label for="website">Hjemmeside </label><input type="text" name="website" size="20" lenght="25" id="website"><br></p>
      </fieldset>
      
      <fieldset>
        <legend>Tilladt</legend>
        <p>
          <label for="dogs">Hunde</label><input type="checkbox" name="dogs" value="dogs" />
          <label for="Alcohol">Alcohol</label><input type="checkbox" name="alchol" value="alchol" />
          <label for="men">Mænd</label><input type="checkbox" name="men" value="men" />
          <label for="women">Kvinder</label><input type="checkbox" name="women" value="women" />
        </p>
      </fieldset>

        <p><input type="reset" name="name" value="Reset"> <input type="submit" name="submit" value="Submit"></p>

    </form>
  </body>
</html>
