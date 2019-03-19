 <style>
 div{
    height: 40px:
    /*border: 1px solid black;*/
 }
 .nota{
   width: 50px;
 }
 label{
   font-weight: bold;/*negrito*/
 }
 </style>
 <form action="topexemplo1.php" method="get">
 <div>
   <label> Ano </label> 
   <input type="text" name="ano">
 </div>
  <div>
    <label>Aluno</label> 
     <input type="text" name="aluno">
 </div>
 <div>
    <div>
    <label> nota 1 </label> 
  <input class="nota" type="text" name="n1">
    </div>
    <div>
  <label> nota 2 </label> 
  <input class="nota" type="text" name="n2">
    </div>
    <div>
  <label> nota 3 </label> 
  <input class="nota" type="text" name="n3">
    </div>
    <div>
  <label> nota 4 </label> 
  <input class="nota" type="text" name="n4">
    </div>
    
 </div>
     <div>
 <input type="submit" value="CALCULAR">
 <input type="reset" value="Limpar">
      </div>
 </form>