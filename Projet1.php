<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		body{
        margin-left: 400px;
        margin-right: 400px;
        margin-top: 40px;
        margin-bottom: 40px;
       background-image: linear-gradient(to right,#e63946,blue);
      } 
      input::placeholder
      {
        font-style: italic;
      }
      a{  
        text-decoration: none;
            }
       a:hover {
        color: #e63946; 
        text-decoration:none;weight:bold ;
        }
       {
         transform-style: 
       }
          
       option, #jour, #mois, #annee
       {
        font-weight: bold;
        color: black;

       }
       #jour, #mois, #annee
       {

        font-size: 1.2em;

       }
          .container{
            background-color: black;
            color:white;
            border: 1px solid black ;
            border-radius: 10px;
            padding-left,right: 100px;
            padding:25px;
            box-shadow: 0 0 15px black;
          }
          h4,h2{
            text-align: center;
            margin-bottom: -20px;
          }
          .form-submit-button{
          border-radius: 15px;
            background: #e63946;
            color: white;
            border-style: outset;
            border-color: #e63946;
            height: 50px;
            font: bold 19px  arial ,sans-serif;
            text-shadow: none ;
            margin-top: 15px;
           
            }
            .form-submit-button:hover
            {
              transform: scale(1.1) ;
            }
            label{
              color: black;
            }
            .form-control{
              
              border-radius: 9px;
              margin-top: 15px; 
              font: bold 17px   sans-serif;
              height: 60px;
                
            }
            .form-control:hover{
              box-shadow:  0 0 10px #fff;
            }
	</style>
	<title>s'inscrire sur twitter</title>
</head>
<body>
	<div class="container" >
    <img src="logo1.png" width="100px" height="90px"> 
		<h2>Créer votre compte</h2><br><br>
			<form action="session.php" method="post">
        <div class="row">
    <div class="col-12">
   <input type="text" class="form-control" placeholder="Nom et prénom" id="nom" name="nom" required="required" >
</div></div>
   <div class="row">
	<div class="col-12">
   	<input type="tel"  class="form-control" placeholder="Téléphone" name="tel" id="tel" required="required"  ></div></div>
    <div class="row">
  <div class="col-12">
   	<p><a href="Projet1'.php" >Utiliser un email</a></p></div></div>
   	<h4>Date de naissance</h4><br>
   	<div class="row">
   		<div class="col-12">
   	<p >Cette information ne sere pas affichée publiquement . Confirmez votre âge , même si ce compte est pour une entreprise , un animal de compagnie ou autre chose . </p></div></div>
   	<div class="row">
    <div class="col-12 col-lg-6">
 <select name="mois" id="mois"  class="form-control" name="mois" required="required">
 	<option value=""  >Mois</option>
    <option value="Jan" >Janvier</option>
     <option value="Fev">Février</option>
       <option value="Mar">Mars</option>
        <option value="Avr">Avril</option>
         <option value="Mai">Mai</option>
          <option value="Jui">Juin</option>
           <option value="Juil" >Juillet</option>
            <option value="Aout">Aout</option>
             <option value="Sep">Septembre</option>
              <option value="Oct">Octobre</option>
              <option value="Nov">Novembre</option> 
              <option value="Dec">Décembre</option></select></div>
              <div class="col-12 col-lg-3">
              <select name="jour" id="jour"  class="form-control" name="jour" required="required" >  
              	<option value="" >Jour</option>
          <option value="1" >1</option>
           <option value="2">2</option>
            <option value="3">3</option>
             <option value="4">4</option>
              <option value="5">5</option>
               <option value="6">6</option>
                <option value="7" >7</option>
                 <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
                   <option value="13">13</option>
                   <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                     <option value="17">17</option>
                     <option value="18">18</option>
                      <option value="19">19</option>
                       <option value="20">20</option>
                       <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                          <option value="24">24</option>
                           <option value="25">25</option>
                            <option value="26">26</option>
                             <option value="27">27</option>
                              <option value="28">28</option>
                               <option value="29" >29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>  
                            </select></div>
                            <div class="col-12 col-lg-3">
<select  name="annee" id="annee" class="form-control " name="annee" required="required">
<option value="" class="b">Année</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>

</select></div></div><br>
<div class="row"><div class="col-lg-5 col-12"></div><div class="col-12 col-lg-5">
<input type="submit" name="submit"   class="form-submit-button" role="button" value="Suivant"></div></div>
</form></div></div></div>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>