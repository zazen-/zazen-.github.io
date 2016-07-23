<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LABA</title>
        <style>
        	table {border-collapse: collapse;}
        	td {padding: 10px;}
        </style>
    </head>
    <body>
	
	<form name="testform" method="post" action="LABA.php"> 
	<p><b>Виберіть №</b><Br>
   <input type="radio" name="browser" value="1"> Вивести оцінки всіх студентів, що навчаються в певній групі<Br>
   <input type="radio" name="browser" value="2"> Вивести усіх студентів з заданими оцінками по відповідному предмету та їх групи<Br>
   <input type="radio" name="browser" value="3"> Вивести всі групи, що мають іспит по заданому предмету<Br>
  </p>

  <p><input type= "submit" value= "Вивести результат"></p>
	</form>
	
<?php 


// Соединяемся, выбираем базу данных
$link = mysql_connect('s2.ho.ua', 'verminaard', 'nus542')
    or die('Не удалось соединиться: ' . mysql_error());
mysql_select_db('verminaard') or die('Не удалось выбрать базу данных'); 

//https://php1-mcprojects.rhcloud.com/phpmyadmin/
//mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/
// Считываем даные из формы
$№=$_POST['browser']; 
mysql_query("SET NAMES utf8");

// Выполняем SQL-запрос для 1-го
if($№=='1')
{

	
$query = "SELECT person.name, person.surname,groups.group_code, smark.mark_name 
		  FROM person, student, groups, student_group,smark, student_marks
		  WHERE person.person_id=student.student_id 
			AND student.student_id= student_group.student_id 
			AND student_group.group_id=groups.group_id 
                        AND student.student_id= student_marks.student_id 
			AND student_marks.mark_id=smark.mark_id 
			AND groups.group_id= 2;";
$result = mysql_query($query) or die('Запрос INSERT не удался: ' . mysql_error()); 

// Выводим результаты в html
echo"<br><br>";
echo " <table border = '1'><tr><td><b>Ім'я</b></td><td><b>Прізвище</b></td><td><b>Група</b></td><td><b>Оцінка</b></td></tr> ";
while ($line = mysql_fetch_assoc($result)) {
	echo "<tr>";
    echo "<td>".$line['name']."</td>";
    echo "<td>".$line['surname']."</td>";
    echo "<td>".$line['group_code']."</td>";
	echo "<td>".$line['mark_name']."</td>";
	echo "</tr>";
 }
 echo"</table><br>";
} 

// Выполняем SQL-запрос для 2-го
if($№=='2')
{
	$query =  "SELECT person.name, person.surname,groups.group_code, smark.mark_name, subject.subject_name 
		  FROM person, groups, smark, student_marks, subject, teach_plan
		  WHERE person.person_id=student_marks.student_id
			AND student_marks.mark_id=smark.mark_id
                        AND student_marks.teach_plan_id=teach_plan.teach_plan_id
                        AND teach_plan.group_id = groups.group_id
			AND teach_plan.subject_id = subject.subject_id
                        AND teach_plan.test_kind_id = 0
                        AND subject.subject_name = 'Subject_1';";
$result = mysql_query($query) or die('Запрос INSERT не удался: ' . mysql_error()); 

// Выводим результаты в html
echo"<br><br>";
echo " <table border = '1'><tr><td><b>Ім'я</b></td><td><b>Прізвище</b></td><td><b>Група</b></td><td><b>Оцінка</b></td><td><b>Предмет</b></td></tr> ";
while ($line = mysql_fetch_assoc($result)) {
	echo "<tr>";
    echo "<td>".$line['name']."</td>";
    echo "<td>".$line['surname']."</td>";
    echo "<td>".$line['group_code']."</td>";
    echo "<td>".$line['mark_name']."</td>";
	echo "<td>".$line['subject_name']."</td>";
	echo "</tr>";
 }
 echo"</table><br>";
} 

// Выполняем SQL-запрос для 3-го
if($№=='3')
{
	$query = "SELECT stest_kind.test_kind_name, subject.subject_name, groups.group_code 
		  FROM stest_kind, subject, teach_plan, groups 
          WHERE stest_kind.test_kind_id = 0
                        AND teach_plan.test_kind_id = stest_kind.test_kind_id
                        AND subject.subject_id = teach_plan.subject_id
			AND teach_plan.subject_id = 2
			AND teach_plan.group_id=groups.group_id";
$result = mysql_query($query) or die('Запрос INSERT не удался: ' . mysql_error()); 

// Выводим результаты в html 
echo"<br><br>";
echo " <table border = '1'><tr><td><b>Вид тесту</b></td><td><b>Предмет</b></td><td><b>Група</b></td></tr> ";
while ($line = mysql_fetch_assoc($result)) {
	echo "<tr>";
    echo "<td>".$line['test_kind_name']."</td>";
    echo "<td>".$line['subject_name']."</td>";
	echo "<td>".$line['group_code']."</td>";
	echo "</tr>";
 }
 echo"</table><br>";
} 
mysql_free_result($result);


mysql_close($link);

?>
	</body>
</html>