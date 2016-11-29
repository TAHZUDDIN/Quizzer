# Quizzer


To run this app i am using XAMPP with Apache and MySql . First need to create a database with the name 'quizzer' wth two tables 'choices'
and 'questions' . The fields of 'choices' will be id(int) ,question_number(int), is_correct(tinyint), text(text). 'id' will be primary key.
Table 'questions' fields are question_number(int) and text(text). question_number primary key but  is not auto increment.  


I have used user name as 'root' and password none that is ''.



Quizzer is a small PHP application where user could first add a quiz and four answer options and specify which one is correct question answer 
number  ..../quizzer/add.php . After adding when goes to ....../quizzer/   user will get a welcome page which has a start quiz button 
on clicking the button user will be redirected to quiz page where below each question four radio buttons will be there , on answering
a question by selecting a particular radio button user will be redirected to the next question . When answering is over user will be 
redirected to a final page where he will get .5 per right question answer and total will be displayed. 
