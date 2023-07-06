<?php
$p1=$_POST['optradio1'];
$p2=$_POST['optradio2'];
$p3=$_POST['optradio3'];
$p4=$_POST['optradio4'];
$p5=$_POST['optradio5'];
$p6=$_POST['optradio6'];
$p7=$_POST['optradio7'];
$p8=$_POST['optradio8'];
$p9=$_POST['optradio9'];
$p10=$_POST['optradio10'];

echo '<p>1)O romantismo est� relacionado com o surgimento de um novo p�blico leitor. Qual � esse p�blico?</p>
<form>
<div class="radio">
<label><input type="radio" name="optradio1" value="1" disabled>Fazendeiro</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio1" value="2" disabled>Nobreza</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio1"  value="3" disabled>Escravos</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio1"  value="4" disabled checked>Burguesia</label>
 </div>
 </form>
</div>
<br>';

if ($p1==4)
echo "Voc� respondeu burguesia e sua resposta est� certa";
else
if ($p1==3) 
echo "Voc� marcou escravos,Voc� errou";
else
if ($p1==2)
echo "Voc� marcou Nobreza,Voc� errou";
else
echo "Voc� marcou Fazendeiro,Voc� errou";

echo '<form>
<div class="radio">
<label><input type="radio" name="optradio2" value="1" disabled>Douglas</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio2"  value="2" disabled checked>Wellington</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio2"  value="3" disabled>Windhoek</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio2"  value="4" disabled>West Island</label>
 </div>
 </form>
</div>
<br>';

if ($p2==2)
echo "Voc� respondeu Wellington e sua resposta est� certa";
else
if ($p2==3)
echo "Voc� marcou Windhoek,Voc� errou";
else
if($p2==1)
echo"Voc� marcou Douglas,Voc� errou";
else 
echo "Voc� marcou West Island,Voc� errou";

echo '<div class="container">
 <p>3)Qual foi o �ltimo continente a ser povoado pelo homem?</p>
<form>
<div class="radio">
<label><input type="radio" name="optradio3"  value="1" disabled>Europa</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio3"  value="2" disabled checked>America</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio3" value="3" disabled>Oceania</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio3" value="4" disabled>�sia</label>
 </div>
 </form>
</div>
<Br>';

if ($p3==2)
echo "Voc� respondeu America e sua resposta est� certa";
else
if ($p3==3) 
echo "Voc� marcou Oceania,Voc� errou";
else
if ($p3==1)
echo "Voc� marcou Europa,Voc� errou";
else
echo "Voc� marcou �sia,Voc� errou";


echo'<div class="container">
 <p>4)N�O � uma organela membrosa</p>
<form>
<div class="radio">
<label><input type="radio" name="optradio4"  value="1" disabled >Complexo Golgiense</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio4" value="2" disabled >Ret�culo Endoplasm�tico</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio4"  value="3" disabled >Mitoc�ndria</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio4"  value="4" disabled checked>Ribossomos</label>
 </div>
 </form>
</div>
<br>';

if ($p4==4)
echo "Voc� respondeu ribossomos e sua resposta est� certa";
else
if ($p4==3) 
echo "Voc� marcou Mitoc�ndria,Voc� errou";
else
if ($p4==1)
echo "Voc� marcou Complexo Golgiense,Voc� errou";
else
echo "Voc� marcou Reticulo Endopl�smatico,Voc� errou";

echo'<div class="container">
<p>5)Qual o elemento qu�mico � um metal e � solido � temperatura ambiente?</p>
<form>
<div class="radio">
<label><input type="radio" name="optradio5"  value="1" disabled checked>Merc�rio</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio5"  value="2" disabled>Arg�nio</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio5"  value="3" disabled>Bromo</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio5" value="4" disabled>Hidrog�nio</label>
 </div>
 </form>
</div>
<br>';

if ($p5==1)
echo "Voc� respondeu Merc�rio e sua resposta est� certa";
else
if ($p5==2) 
echo "Voc� marcou �rgonio,Voc� errou";
else
if ($p5==3)
echo "Voc� marcou Bromo,Voc� errou";
else
echo "Voc� marcou Hidrog�nio,Voc� errou";

echo'<div class="container">
<p>6)Quanto � 15�?</p>
<form>
<div class="radio">
<label><input type="radio" name="optradio6"  value="1" disabled >125</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio6" value="2" disabled checked>225</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio6" value="3" disabled >95</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio6" value="4" disabled >124</label>
 </div>
 </form>
</div>
<br>';

if ($p6==2)
echo "Voc� respondeu 225 e sua resposta est� certa";
else
if ($p6==1) 
echo "Voc� marcou 125,Voc� errou";
else
if ($p6==3)
echo "Voc� marcou 95,Voc� errou";
else
echo "Voc� marcou 124,Voc� errou";

echo '<div class="container">
<p>7)"Um corpo em repouso tende a permanecer em repouso, enquanto um corpo em movimento tende a permanecer em movimento"</p>
essa lei �?
<form>
<div class="radio">
<label><input type="radio" name="optradio7"  value="1" disabled>Princ�pio de Hamilton</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio7" value="2" disabled>Lei da const�ncia do movimento.</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio7" value="3"  disabled checked>Lei da In�rcia</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio7" value="4" disabled>Lei geral da din�mica</label>
 </div>
 </form>
</div>
<br>
<div class="container">';

if ($p7==3)
echo "Voc� respondeu Lei da in�rcia e sua resposta est� certa";
else
if ($p7==1) 
echo "Voc� marcou Principio de Hamilton,Voc� errou";
else
if ($p7==2)
echo "Voc� marcou Lei da const�ncia do movimento,Voc� errou";
else
echo "Voc� marcou Lei geral da din�mica,Voc� errou";


echo'<div class="container">
<p>8)Assinale a alternativa em que todas as palavras est�o corretas, no plural e no singular</p>
<form>
<div class="radio">
<label><input type="radio" name="optradio8"  value="1" disabled>Guardas-chuvas, Placa de v�deos, impressoras digital</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio8"  value="2" disabled checked>Guarda-chuvas, Placas de v�deo, impressoras digitais</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio8" value="3" disabled>Guardas-chuvas, Placa de v�deo, impressoras digitadas</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio8" value="4" disabled>Guardadores de chuva, Placas de v�deo, Impress�es digitais</label>
 </div>
 </form>
</div>
<br>
<div class="container">';

if ($p8==2)
echo "Voc� respondeu Guarda-chuvas, Placas de v�deo, impressoras digitais e sua resposta est� certa";
else
if ($p8==1) 
echo "Voc� marcou Guardas-chuvas, Placa de v�deos, impressoras digital,Voc� errou";
else
if ($p8==3)
echo "Voc� marcou Guardas-chuvas, Placa de v�deo, impressoras digitadas,Voc� errou";
else
echo "Voc� marcou Guardadores de chuva, Placas de v�deo, Impress�es digitais,Voc� errou";

echo'<div class="container">
<p>9)Qual fil�sofo foi professor de Alexandre, o Grande?</p>
<form>
<div class="radio">
<label><input type="radio" name="optradio9"  value="1" disabled>S�crates</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio9"  value="2" disabled checked>Arist�teles</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio9" value="3" disabled>Tom�s de Aquino</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio9" value="4" disabled>Pit�goras</label>
 </div>
 </form>
</div>
<br>';

if ($p9==2)
echo "Voc� respondeu Arist�teles e sua resposta est� certa";
else
if ($p9==1) 
echo "Voc� marcou S�crates,Voc� errou";
else
if ($p9==3)
echo "Voc� marcou Tom�s de Aquino,Voc� errou";
else
echo "Voc� marcou Pit�goras,Voc� errou";

echo '<div class="container">
<p>10)Qual a diferen�a entre "good evening" e "good night"?</p>
<form>
<div class="radio">
<label><input type="radio" name="optradio10"  value="1" disabled>N�o h� diferen�a.</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio10" value="2" disabled checked>Good evening � usado quando se chega � um local para o cumprimento,<br>
 e good night � usado para se despedir, sendo os dois utilizados ap�s as 6 da noite.</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio10" value="3" disabled>Good evening � usado antes das 6 da noite e good night � usado depois desse hor�rio.</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio10"  value="4" disabled>Nenhuma das anteriores.

</label>
 </div>
 </form>
</div>
<br>
</body>
</html>';

if ($p10==2)
echo "Voc� respondeu Good evening � usado quando se chega � um local para o cumprimento
 e good night � usado para se despedir, sendo os dois utilizados ap�s as 6 da noite, e sua resposta est� certa";
else
if ($p10==1) 
echo "Voc� marcou N�o h� diferen�a,Voc� errou";
else
if ($p10==3)
echo "Voc� marcou Good evening � usado antes das 6 da noite e good night � usado depois desse hor�rio ,Voc� errou";
else
echo "Voc� marcou Nenhuma das anteriores,Voc� errou";
?>