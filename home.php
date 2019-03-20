
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<style>
			.container {
				margin-bottom: 50px;
			}
			.indent {
				margin-left: 30px;
			}
			
			ul {
				background-color: #555;
				color: white;
				padding: 10px;
			}
			
			ul li {
				list-style-type: none;
			}
			
			p {
				display: inline;
			}
			
			form h3 {
				font-size: 20px;
			}
			.ourTitle {
				text-align: center;
				color: navy;
			}
			.logout, .logout:hover { 
				text-decoration: none;
				text-transform: uppercase;
				text-align:center;
				border:1px solid navy;
				padding:5px 20px;
				background-color:navy;
				color:white;
				box-shadow:0px 5px 8px navy;
			}
			
			.navbar {
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				border: 1px solid navy;
				border-radius: 0;
				background: navy;
				color: white;
				
			}
		</style>
	</head>
	<?php 
  session_start();
  if (!isset($_SESSION["user"])){
	header("Location: login.php");
  } 
		require_once 'conn.php';
		$username = $_SESSION['user'];
		$query = "SELECT * FROM `member` WHERE `username` = :username";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->execute();
		$row = $stmt->fetch();	
		$grades = $row['grades'];
		
		if (isset($_POST['subQuiz'])){
			
			$answers = array();
			array_push($answers, $_POST['q1']);
			array_push($answers, $_POST['q2']);
			array_push($answers, $_POST['q3']);
			array_push($answers, $_POST['q4']);
			array_push($answers, $_POST['q5']);
			array_push($answers, $_POST['q6']);
			array_push($answers, $_POST['q7']);
			array_push($answers, $_POST['q8']);
			array_push($answers, $_POST['q9']);
			array_push($answers, $_POST['q10']);
			$index; $finalGrade = 0;
			for($index = 0; $index < count($answers); $index++){
				if ($answers[$index] == 1){
					$finalGrade++;
				}
			}
			
			echo "<div class='container' style='margin-top: 40px;'><div class='col-md-2'></div><div class='col-md-8 text-center'>
				  <div class='jumbotron'><h3>You scored ". $finalGrade . " out of " . count($answers) . "!</h3>
				  <a href='./home.php' class='logout form-control'>Go back!</a></div></div>
				  <div class='col-md-2'></div></div>";
			exit;
			
		}
		
		if (isset($_POST['chapter1'])){
			$grades = $grades + 10;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		if (isset($_POST['chapter2'])){
			$grades = $grades + 10;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		if (isset($_POST['chapter3'])){
			$grades = $grades + 10;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		if (isset($_POST['chapter4'])){
			$grades = $grades + 10;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		if (isset($_POST['chapter5'])){
			$grades = $grades + 10;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		if (isset($_POST['chapter6'])){
			$grades = $grades + 10;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		if (isset($_POST['chapter7'])){
			$grades = $grades + 10;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		if (isset($_POST['chapter8'])){
			$grades = $grades + 10;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		if (isset($_POST['chapter9'])){
			$grades = $grades + 10;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		if (isset($_POST['chapter10'])){
			$grades = $grades + 10;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		
		if (isset($_POST['resetProg'])){
			$grades = 0;
			$query = "UPDATE `member` SET `grades`= :grades WHERE `username` = :username";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':grades', $grades);
			$stmt->execute();
		}
		
?>
<body style='font-family: "Ubuntu Mono", monospace;'>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<a class="navbar-brand" href="home.php">2GSolutions</a>
			<a class='navbar-brand pull-right' href="logout.php"><span class='glyphicon glyphicon-user'></span>
			<font style='text-transform: uppercase;'> <?= $username; ?></font> Logout</a>
		</div>
	</nav>
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<h5>Welcome, <b><?php echo htmlspecialchars($_SESSION["firstname"]); ?></b></h5>
		<h3 class="text-primary ourTitle">Introduction to Programming - C Basics</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<form method='post' action='?'><input type='submit' name='resetProg' value='Reset Progress' class='logout form-control'/></form>
		<?php if ($grades > 100){ ?>
			<a class='btn btn-default form-control'>Grade Points: 100%</a>
		<?php } else { ?>
			<a class='btn btn-default form-control'>Grade Points: <?php echo $grades; ?>%</a>
		<?php } ?>
		<center></center>
		<hr>
		<!-- .// Accordion -->
		<div class='main-accordion'>
			<button id='trigger1' class='form-control'>Variables and Types</button>
			
				<div class='content1'>
					<form action='?' method='post'>
						<h4>Data Types</h4>
						<p>C has several types of variables, but there are a few basic types:
						Integers - whole numbers which can be either positive or negative. Defined using char, int, short, long or long long.
						Unsigned integers - whole numbers which can only be positive. Defined using unsigned char, unsigned int, 
						unsigned short, unsigned long or unsigned long long. Floating point numbers - real numbers (numbers with 
						fractions). Defined using float and double. Structures - will be explained later, in the Structures section.
						The different types of variables define their bounds. A char can range only from -128 to 127, whereas 
						a long can range from -2,147,483,648 to 2,147,483,647 (long and other numeric data types may have 
						another range on different computers, for example - from –9,223,372,036,854,775,808 to 9,223,372,036,854,775,807 on 64-bit computer).
						Note that C does not have a boolean type. Usually, it is defined using the following notation:<br>
						<ul>
							<li>#define BOOL char</li>
							<li>#define FALSE 0</li>
							<li>#define TRUE 1</li>
						</ul>
						C uses arrays of characters to define strings, and will be explained in the Strings section.</p>
						<h4>Defining Variables</h4>
						<p>For numbers, we will usually use the type int, which an integer in the size of a "word" the 
						default number size of the machine which your program is compiled on. On most computers today, 
						it is a 32-bit number, which means the number can range from -2,147,483,648 to 2,147,483,647.
						To define the variables foo and bar, we need to use the following syntax:<br>
						<ul>
							<li>int foo;</li>
							<li>int bar = 1;</li>
						</ul>
						The variable foo can be used, but since we did not initialize it, we don't know what's in it. 
						The variable bar contains the number 1. Now, we can do some math. Assuming a, b, c, 
						d, and e are variables, we can simply use plus, minus and multiplication operators 
						in the following notation, and assign a new value to a:
						<ul>
							<li>int a = 0,b = 1,c = 2,d = 3, e = 4;</li>
							<li>a = b - c + d * e;</li>
							<li>printf("%d", a); /* will print 1-2+3*4 = 11 */</li>
						</ul></p>
						<?php if ($grades < 10){ ?>
							<input type='submit' name='chapter1' class='btn btn-default pull-right' value='Completed'>
						<?php } else { ?>
							<h5><span class='glyphicon glyphicon-check'></span> &nbsp Completed</h5>
						<?php } ?>
						<hr>
					</form>
				</div>
				
				
			<?php if ($grades >= 10){ ?>
			<button id='trigger2' class='form-control'>Arrays - Basics</button>
			<div class='content2'>
				<form action='?' method='post'>
				<h4>Arrays & Definition</h4>
				<p>Arrays are special variables which can hold more than one value under the same 
				variable name, organised with an index. Arrays are defined using a very straightforward syntax:
				<ul>
					<li>/* defines an array of 10 integers */</li>
					<li>int numbers[10];</li>
				</ul>
				Accessing a number from the array is done using the same syntax. Notice that arrays in C 
				are zero-based, which means that if we defined an array of size 10, then the array cells 
				0 through 9 (inclusive) are defined. numbers[10] is not an actual value.
				<ul>
					<li>int numbers[10];</li>
					<li>/* populate the array */</li>
					<li>numbers[0] = 10;</li>
					<li>numbers[1] = 20;</li>
					<li>numbers[2] = 30;</li>
					<li>numbers[3] = 40;</li>
					<li>numbers[4] = 50;</li>
					<li>numbers[5] = 60;</li>
					<li>numbers[6] = 70;</li>
					<li>/* print the 7th number from the array, which has an index of 6 */</li>
					<li>printf("The 7th number in the array is %d", numbers[6]);</li>
				</ul>
				Arrays can only have one type of variable, because they are implemented as a 
				sequence of values in the computer's memory. Because of that, accessing a 
				specific array cell is very efficient.</p>
				
				<hr>
				
				<?php if ($grades < 20){ ?>
					<input type='submit' name='chapter2' class='btn btn-default pull-right' value='Completed'>
				<?php } else { ?>
					<h5><span class='glyphicon glyphicon-check'></span> &nbsp Completed</h5>
				<?php } ?>
				</form>
			</div>
			<?php } ?> 
			<?php if ($grades >= 20){ ?>
			<button id='trigger3' class='form-control'>Multidimensional Arrays</button>
			<div class='content3'>
				<form action='?' method='post'>
				<p>In the previous tutorials on Arrays, we covered, well, arrays and how they work. 
				The arrays we looked at were all one-dimensional, but C can create and use multi-dimensional arrays. 
				Here is the general form of a multidimensional array declaration:
				<ul>
					<li>type name[size1][size2]...[sizeN];</li>
				</ul>
				For example, here's a basic one for you to look at -
				<ul>
					<li>int foo[1][2][3];</li>
				or maybe this one -
					<li>char vowels[1][5] = { {'a', 'e', 'i', 'o', 'u'} };</li>
				</ul></p>
				<h4>Two-dimensional Arrays</h4>
				<p>The simplest form of multidimensional array is the two-dimensional array. 
				A two-dimensional array is pretty much a list of one-dimensional arrays. 
				To declare a two-dimensional integer array of size [ x ][ y ], 
				you would write something like this − type arrayName [x][y];
				Where type can be any C data type (int, char, long, long long, double, etc.) 
				and arrayName will be a valid C identifier, or variable. A two-dimensional array 
				can be considered as a table which will have [ x ] number of rows and [ y ] 
				number of columns. A two-dimensional array a, which contains three rows and four 
				columns can be shown and thought about like this −
				<ul>
					<li>char vowels[][5] = {</li>
					<li class='indent'>{'A', 'E', 'I', 'O', 'U'},</li>
					<li class='indent'>{'a', 'e', 'i', 'o', 'u'}</li>
					<li>};</li>
				</ul>
				the compiler would already know that there are two "dimensions" 
				you could say, but, you need need NEED a [ y ] value!! The compiler 
				may be smart, but it will not know how many integers, characters, floats, 
				whatever you're using you have in the dimensions. Keep that in mind.</p>
				<h4>Initializing Two-Dimensional Arrays</h4>
				<p>Multidimensional arrays may be used by specifying bracketed[] 
				values for each row. Below is an array with 3 rows and each row has 4 
				columns. To make it easier, you can forget the 3 and keep it blank, 
				it'll still work.
				<ul>
					<li>int a[3][4] = {</li>
					<li class='indent'>{0, 1, 2, 3} ,   /*  initializers for row indexed by 0 */</li>
					<li class='indent'>{4, 5, 6, 7} ,   /*  initializers for row indexed by 1 */</li>
					<li class='indent'>{8, 9, 10, 11}   /*  initializers for row indexed by 2 */</li>
					<li>};</li>
				</ul>
				The inside braces, which indicates the wanted row, are optional. 
				The following initialization is the same to the previous example −
				<ul><li>int a[3][4] = {0,1,2,3,4,5,6,7,8,9,10,11};</li></ul>
				</p>
				<h4>Accessing Two-Dimensional Array Elements</h4>
				<p>An element in a two-dimensional array is accessed by using the 
				subscripts, i.e., row index and column index of the array. For example −
				<ul><li>int val = a[2][3];</li></ul>
				The above statement will take the 4th element from the 3rd row of the array.</p>
				<i><h4>Exercise</h4>
				<p>Let us try to find out the average marks of a group of five students for 
				two subjects, Mathematics and Physics. To do this, we use a two-dimensional 
				array called grades. The marks corresponding to Mathematics would be stored 
				in the first row (grades[0]), whereas those corresponding to Physics would 
				be stored in the second row (grades[1]). Complete the following steps so 
				that you can execute this program.</p></i>
				<?php if ($grades < 30){ ?>
					<input type='submit' name='chapter3' class='btn btn-default pull-right' value='Completed'>
				<?php } else { ?>
					<h5><span class='glyphicon glyphicon-check'></span> &nbsp Completed</h5>
				<?php } ?>
				</form>
			</div>
			<?php } ?>
			<?php if ($grades >= 30){ ?>
			<button id='trigger4' class='form-control'>Conditions</button>
			<div class='content4'>
				<form action='?' method='post'>
				<h4>Decision Making</h4>
				<p>In life, we all have to make decisions. In order to make a decision we weigh out our options and so do our programs.
				Here is the general form of the decision making structures found in C.
				<ul>
					<li>int target = 10;</li>
					<li>if (target == 10) {</li>
					<li class='indent'>printf("Target is equal to 10");</li>
					<li>}</li>
				</ul>
				<h4>The if statement</h4>
				<p>The if statement allows us to check if an expression is true or false, and 
				execute different code according to the result. To evaluate whether two variables 
				are equal, the == operator is used, just like in the first example.
				Inequality operators can also be used to evaluate expressions. For example:
				<ul>
					<li>int foo = 1;</li>
					<li>int bar = 2;</li>
					<li>if (foo < bar) {</li>
					<li class='indent'>printf("foo is smaller than bar.");</li>
					<li>}</li>
					<li>if (foo > bar) {</li>
					<li class='indent'>printf("foo is greater than bar.");</li>
					<li>}</li>
				</ul>
				We can use the else keyword to exectue code when our expression evaluates to false.
				<ul>
					<li>int foo = 1;</li>
					<li>int bar = 2;</li>
					<li>if (foo < bar) {</li>
					<li class='indent'>printf("foo is smaller than bar.");</li>
					<li>} else {</li>
					<li class='indent'>printf("foo is greater than bar.");</li>
					<li>}</li>
				</ul>
				Sometimes we will have more than two outcomes to choose from. In these 
				cases, we can "chain" multiple if else statements together.
				<ul>
					<li>int foo = 1;</li>
					<li>int bar = 2;</li>
					<li>if (foo < bar) {</li>
					<li class='indent'>printf("foo is smaller than bar.");</li>
					<li>} else if (foo == bar) {</li>
					<li class='indent'>printf("foo is equal to bar.");</li>
					<li>} else {</li>
					<li class='indent'>printf("foo is greater than bar.");</li>
					<li>}</li>
				</ul>
				You can also nest if else statements if you like.
				<ul>
					<li>int peanuts_eaten = 22;</li>
					<li>int peanuts_in_jar = 100;</li>
					<li>int max_peanut_limit = 50;</li>
					<li>if (peanuts_in_jar > 80) {</li>
					<li>if (peanuts_eaten < max_peanut_limit) {</li>
					<li class='indent'>printf("Take as many peanuts as you want!\n");</li>
					<li>}</li>
					<li>} else {</li>
					<li>if (peanuts_eaten > peanuts_in_jar) {</li>
					<li class='indent'>printf("You can't have anymore peanuts!\n");</li>
					<li>}</li>
					<li>else {</li>
					<li class='indent'>printf("Alright, just one more peanut.\n");</li>
					<li class='indent'>}</li>
					<li>}</li>
				</ul>
				Two or more expressions can be evaluated together using logical operators 
				to check if two expressions evaluate to true together, or at least one of 
				them. To check if two expressions both evaluate to true, use the AND 
				operator &&. To check if at least one of the expressions evaluate to 
				true, use the OR operator ||.
				<ul>
					<li>int foo = 1;</li>
					<li>int bar = 2;</li>
					<li>int moo = 3;</li>
					<li>if (foo < bar && moo > bar) {</li>
					<li class='indent'>printf("foo is smaller than bar AND moo is larger than bar.");</li>
					<li>}</li>
					<li>if (foo < bar || moo > bar) {</li>
					<li class='indent'>printf("foo is smaller than bar OR moo is larger than bar.");</li>
					<li>}</li>
				</ul>
				The NOT operator ! can also be used likewise:
				<ul>
					<li>int target = 9;</li>
					<li>if (target != 10) {</li>
					<li class='indent'>printf("Target is not equal to 10");</li>
					<li>}</li>
				</ul>
				
				<i><h4>Exercise</h4>
				<p>In this exercise, you must construct an if statement inside 
				the guessNumber function statement that checks if the number guess 
				is equal to 555. If that is the case, the function must print out 
				using printf "Correct. You guessed it!". If guess is less than 555, 
				the function must print out using printf "Your guess is too low." If 
				guess is greater than 555, the function must print out using printf 
				"Your guess is too high."</p></i>
				<?php if ($grades < 40){ ?>
					<input type='submit' name='chapter4' class='btn btn-default pull-right' value='Completed'>
				<?php } else { ?>
					<h5><span class='glyphicon glyphicon-check'></span> &nbsp Completed</h5>
				<?php } ?>
				</form>
			</div>
			<?php } ?>
			<?php if ($grades >= 40){ ?>
			<button id='trigger5' class='form-control'>Strings - Basics</button>
			<div class='content5'>
				<form action='?' method='post'>
				<h4>Defining strings</h4>
				<p>Strings in C are actually arrays of characters. Although using pointers in 
				C is an advanced subject, fully explained later on, we will use pointers to a 
				character array to define simple strings, in the following manner:</p>
				<ul>
					<li>char * name = "John Smith";</li>
				</ul>
				This method creates a string which we can only use for reading. 
				If we wish to define a string which can be manipulated, we will 
				need to define it as a local character array:
				<ul>
					<li>char name[] = "John Smith";</li>
				</ul>
				This notation is different because it allocates an array variable so we can manipulate it. 
				The empty brackets notation [] tells the compiler to calculate the size of the array automatically. 
				This is in fact the same as allocating it explicitly, adding one to the length of the string:
				<ul>
					<li>char name[] = "John Smith";</li>
					<li>/* is the same as */</li>
					<li>char name[11] = "John Smith";</li>
				</ul>
				The reason that we need to add one, although the string John Smith is exactly 10 
				characters long, is for the string termination: a special character (equal to 0) 
				which indicates the end of the string. The end of the string is marked because the 
				program does not know the length of the string - only the compiler knows 
				it according to the code.</p>
				<h4>String formatting with printf</h4>
				<p>We can use the printf command to format a string together with other strings, in the following manner:
				<ul>
					<li>char * name = "John Smith";</li>
					<li>int age = 27;</li>
					<li>/* prints out 'John Smith is 27 years old.' */</li>
					<li>printf("%s is %d years old.\n", name, age);</li>
				</ul>
				</p>
				<h4>String Length</h4>
				<p>The function 'strlen' returns the length of the string which has to be passed as an argument:
				<ul>
					<li>char * name = "Nikhil";</li>
					<li>printf("%d\n",strlen(name));</li>
				</ul></p>
				<h4>String comparison</h4>
				<p>The function strncmp compares between two strings, returning the number 0 if 
				they are equal, or a different number if they are different. The arguments are 
				the two strings to be compared, and the maximum comparison length. There is also 
				an unsafe version of this function called strcmp, but it is not recommended to 
				use it. For example:
				<ul>
					<li>char * name = "John";</li>
					<li>if (strncmp(name, "John", 4) == 0) {</li>
					<li class='indent'>printf("Hello, John!\n");</li>
					<li>} else {</li>
					<li class='indent'>printf("You are not John. Go away.\n");</li>
					<li>}</li>
				</ul></p>
				
				<h4>String Concatenation</h4>
				The function 'strncat' appends first n characters of src string 
				string to the destination string where n is min(n,length(src)); The 
				arguments passed are destination string, source string, and n - 
				maximum number of characters to be appended.For Example:
				<ul>
					<li>char dest[20]="Hello";</li>
					<li>char src[20]="World";</li>
					<li>strncat(dest,src,3);</li>
					<li>printf("%s\n",dest);</li>
					<li>strncat(dest,src,20);</li>
					<li>printf("%s\n",dest);</li>
				</ul></p>
				<?php if ($grades < 50){ ?>
					<input type='submit' name='chapter5' class='btn btn-default pull-right' value='Completed'>
				<?php } else { ?>
					<h5><span class='glyphicon glyphicon-check'></span> &nbsp Completed</h5>
				<?php } ?>
				</form>
			</div>
			<?php } ?>
			<?php if ($grades >= 50){ ?>
			<button id='trigger6' class='form-control'>For Loops</button>
			<div class='content6'>
				<form action='?' method='post'>
				<h4>For loops</h4>
				<p>For loops in C are straightforward. They supply the ability 
				to create a loop - a code block that runs multiple times. 
				For loops require an iterator variable, usually notated as i.
				For loops give the following functionality-> a)Initialize the iterator variable using an initial value,
				b)Check if the iterator has reached its final value, c)Increases the iterator.
				For example, if we wish to iterate on a block for 10 times, we write:
				<ul>
					<li>int i;</li>
					<li>for (i = 0; i < 10; i++) {</li>
					<li class='indent'>printf("%d\n", i);</li>
					<li>}</li>
				</ul>
				This block will print the numbers 0 through 9 (10 numbers in total). For loops 
				can iterate on array values. For example, if we would want to sum all the 
				values of an array, we would use the iterator i as the array index:
				<ul>
					<li>int array[10] = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };</li>
					<li>int sum = 0;</li>
					<li>int i;</li>
					<li>for (i = 0; i < 10; i++) {</li>
					<li class='indent'>sum += array[i];</li>
					<li>}</li>
					<li>/* sum now contains a[0] + a[1] + ... + a[9] */</li>
					<li>printf("Sum of the array is %d\n", sum);</li>
				</ul></p>
				<?php if ($grades < 60){ ?>
					<input type='submit' name='chapter6' class='btn btn-default pull-right' value='Completed'>
				<?php } else { ?>
					<h5><span class='glyphicon glyphicon-check'></span> &nbsp Completed</h5>
				<?php } ?>
				</form>
			</div>
			<?php } ?>
			<?php if ($grades >= 60){ ?>
			<button id='trigger7' class='form-control'>While Loops</button>
			<div class='content7'>
				<form action='?' method='post'>
				<h4>While loops</h4>
				<p>While loops are similar to for loops, but have less functionality. 
				A while loop continues executing the while block as long as the condition 
				in the while remains true. For example, the following code will execute 
				exactly ten times:
				<ul>
					<li>int n = 0;</li>
					<li>while (n < 10) {</li>
					<li class='indent'>n++;</li>
					<li>}</li>	
				</ul>
				While loops can also execute infinitely if a condition is given 
				which always evaluates as true (non-zero):
				<ul>
					<li>while (1) {</li>
					<li class='indent'>/* do something */</li>
					<li>}</li>
				</ul></p>
				<?php if ($grades < 70){ ?>
					<input type='submit' name='chapter7' class='btn btn-default pull-right' value='Completed'>
				<?php } else { ?>
					<h5><span class='glyphicon glyphicon-check'></span> &nbsp Completed</h5>
				<?php } ?>
				</form>
				
			</div>
			<?php } ?>
			<?php if ($grades >= 70){ ?>
			<button id='trigger8' class='form-control'>Functions</button>
			<div class='content8'>
				<form action='?' method='post'>
				<h4>Functions</h4>
				<p>C functions are simple, but because of how C works, the power of 
				functions is a bit limited. Functions receive either a fixed or variable 
				amount of arguments.Functions can only return one value, or return no value. 
				In C, arguments are copied by value to functions, which means that we cannot 
				change the arguments to affect their value outside of the function. To do 
				that, we must use pointers, which are taught later on.
				Functions are defined using the following syntax:
				<ul>
					<li>int foo(int bar) {</li>
					<li class='indent'>/* do something */</li>
					<li class='indent'>return bar * 2;</li>
					<li>}</li>
					<li>int main() {</li>
					<li class='indent'>foo(1);</li>
					<li>}</li>
				</ul>
				The function foo we defined receives one argument, which is bar. The function 
				receives an integer, multiplies it by two, and returns the result.</p>
				<?php if ($grades < 80){ ?>
					<input type='submit' name='chapter8' class='btn btn-default pull-right' value='Completed'>
				<?php } else { ?>
					<h5><span class='glyphicon glyphicon-check'></span> &nbsp Completed</h5>
				<?php } ?>
				</form>
			</div>
			<?php } ?>
			<?php if ($grades >= 80){ ?>
			<button id='trigger9' class='form-control'>Static Keyword</button>
			<div class='content9'>
				<form action='?' method='post'>
				<h4>Static</h4>
				<p>static is a keyword in the C programming language. It can be used with variables and functions.</p>
				<h4>What is a static variable?</h4>
				<p>By default, variables are local to the scope in which they are defined. Variables 
				can be declared as static to increase their scope up to file containing them. 
				As a result, these variables can be accessed anywhere inside a file.
				Consider the following scenario – we want to count the runners participating in a race:
				<ul>
					<li>#include<stdio.h></li>
					<li>int runner() {</li>
						<li class='indent'>int count = 0;</li>
						<li class='indent'>count++;</li>
						<li class='indent'>return count;</li>
					<li>}</li>
					<li>int main()</li>
					<li>{</li>
						<li class='indent'>printf("%d ", runner());</li>
						<li class='indent'>printf("%d ", runner());</li>
						<li class='indent'>return 0;</li>
					<li>}</li>
				</ul>
				We will see that count is not updated because it is removed from memory as soon as 
				the function completes. If static is used, however:
				<ul>
					<li>#include<stdio.h></li>
					<li>int runner() {</li>
						<li class='indent'><b>static</b> int count = 0;</li>
						<li class='indent'>count++;</li>
						<li class='indent'>return count;</li>
					<li>}</li>
					<li>int main()</li>
					<li>{</li>
						<li class='indent'>printf("%d ", runner());</li>
						<li class='indent'>printf("%d ", runner());</li>
						<li class='indent'>return 0;</li>
					<li>}</li>
				</ul>
				</p>
				<?php if ($grades < 90){ ?>
					<input type='submit' name='chapter9' class='btn btn-default pull-right' value='Completed'>
				<?php } else { ?>
					<h5><span class='glyphicon glyphicon-check'></span> &nbsp Completed</h5>
				<?php } ?>
				</form>
			</div>
			<?php } ?>
			<?php if ($grades >= 90){ ?>
			<button id='trigger10' class='form-control'>Pointers</button>
			<div class='content10'>
				<form action='?' method='post'>
				<h4>Pointers</h4>
				<p>Pointers are also variables and play a very important role in C programming 
				language. They are used for several reasons, such as:
				<ol>
					<li>Strings</li>
					<li>Dynamic memory allocation</li>
					<li>Sending function arguments by reference</li>
					<li>Building complicated data structures</li>
					<li>Pointing to functions</li>
					<li>Building special data structures (i.e. Tree, Tries, etc...)</li>
					<li>And many more.</li>
				</ol></p>
				<h4>What is a pointer?</h4>
				<p>A pointer is essentially a simple integer variable which holds a memory 
				address that points to a value, instead of holding the actual value itself.
				The computer's memory is a sequential store of data, and a pointer points 
				to a specific part of the memory. Our program can use pointers in such a 
				way that the pointers point to a large amount of memory - depending on 
				how much we decide to read from that point on.</p>
				<h4>Strings as pointers</h4>
				<p>We've already discussed strings, but now we can dive in a bit deeper 
				and understand what strings in C really are (which are called C-Strings 
				to differentiate them from other strings when mixed with C++) The following line:
				<ul>
					<li>char * name = "John";</li>
				</ul>
				does three things:
				<ol>
					<li>It allocates a local (stack) variable called name, which is a pointer to a single character.</li>
					<li>It causes the string "John" to appear somewhere in the program memory (after it is compiled and executed, of course).</li>
					<li>It initializes the name argument to point to where the J character resides at (which is followed by the rest of the string in the memory).</li>
				</ol>
				If we try to access the name variable as an array, it will work, and will return the ordinal value of the character J, 
				since the name variable actually points exactly to the beginning of the string. Since we know that the memory is 
				sequential, we can assume that if we move ahead in the memory to the next character, we'll receive the next 
				letter in the string, until we reach the end of the string, marked with a null terminator (the character 
				with the ordinal value of 0, noted as \0).</p>
				<h4>Dereferencing</h4>
				<p>Dereferencing is the act of referring to where the pointer points, instead of the memory address. 
				We are already using dereferencing in arrays - but we just didn't know it yet. The brackets operator - 
				[0] for example, accesses the first item of the array. And since arrays are actually pointers, accessing 
				the first item in the array is the same as dereferencing a pointer. Dereferencing a pointer is done 
				using the asterisk operator *. If we want to create an array that will point to a different variable 
				in our stack, we can write the following code:	
				<ul>
					<li>/* define a local variable a */</li>
					<li>int a = 1;</li>
					<li>/* define a pointer variable, and point it to a using the & operator */</li>
					<li>int * pointer_to_a = &a;</li>
					<li>printf("The value a is %d\n", a);</li>
					<li>printf("The value of a is also %d\n", *pointer_to_a);</li>
				</ul></p>
				<?php if ($grades < 95){ ?>
					<input type='submit' name='chapter10' class='btn btn-default pull-right' value='Completed'>
				<?php } else { ?>
					<h5><span class='glyphicon glyphicon-check'></span> &nbsp Completed</h5>
				<?php } ?>
				</form>
			</div>
			<?php } ?>
			<?php if ($grades >= 100){ ?>
			<h3>Time for your final quiz!</h3>
				<form method='post' action='?'>
					<ol>
					<!-- Arrays -->
					<li>
						<h3>Which of the following correctly declares an array?</h3>
						<div>
							<input type="radio" name="q1" id="q1" value=1 required/>
							<p>A) int anarray[10];</p>
						</div>
						<div>
							<input type="radio" name="q1" id="q1" value=0 required/>
							<p>B) int anarray;</p></p>
						</div>

						<div>
							<input type="radio" name="q1" id="q1" value=0 required/>
							<p>C) anarray{10};</p>
						</div>
						
						<div>
							 <input type="radio" name="q1" id="q1" value=0 required/>
							<p>D) array anarray[10];</p>
						</div>
					</li>
					
					<!-- Conditions -->
					<li>
						<h3>Evaluate ! ( 1 && !( 0 || 1 )).</h3>
						<div>
							<input type="radio" name="q2" id="q2" value=1 required/>
							<p>A) True</p>
						</div>
						<div>
							<input type="radio" name="q2" id="q2" value=0 required/>
							<p>B) False</p>
						</div>
						<div>
							<input type="radio" name="q2" id="q2" value=0 required/>
							<p>C) Both</p>
						</div>
						<div>
							<input type="radio" name="q2" id="q2" value=0 required/>
							<p>D) Unevaluatable</p>
						</div>
					</li>
					
					<!-- Functions -->
					<li>
						<h3>Which of the following is a complete function?</h3>
						<div>
							<input type="radio" name="q3" id="q3" value=0 />
							<p>A) int funct();</p>
						</div>
						<div>
							<input type="radio" name="q3" id="q3" value=0 required/>
							<p>B) void funct(int) { printf( "Hello");</p>
						</div>
						<div>
							<input type="radio" name="q3" id="q3" value=0 required/>
							<p>C) void funct(x) { printf( "Hello"); }</p>
						</div>
						<div>
							<input type="radio" name="q3" id="q3" value=1 required/>
							<p>D) int funct(int x) {return x=x+1;}</p>
						</div>
					</li>
					
					<!-- For loops -->
					<li>
						<h3>While loops can  execute infinitely if the condition always evaluates as true</h3>
						<div>
							<input type="radio" name="q4" id="q4" value=1 required/>
							<p>A) True</p>
						</div>
						<div>
							<input type="radio" name="q4" id="q4" value=0 required/>
							<p>B) False</p>
						</div>
					</li>
					
					<!-- Pointers 1-->
					<li>
						<h3> Which of the following is the proper keyword to deallocate memory?</h3>
						<div>
							<input type="radio" name="q5" id="q5" value=1 required/>
							<p>A) free </p>
						</div>
						<div>
							<input type="radio" name="q5" id="q5" value=0 required/>
							<p>B) delete</p>
						</div>
						<div>
							<input type="radio" name="q5" id="q5" value=0 required/>
							<p>C) clear</p>
						</div>
						<div>
							<input type="radio" name="q5" id="q5" value=0 required/>
							<p>D) remove</p>
						</div>
					</li>
					
					<!-- Pointers 2 -->
					<li>
						<h3>A pointer points to a specific part of the memory</h3>
						<div>
							<input type="radio" name="q6" id="q6" value=1 required/>
							<p>A) True</p>
						</div>
						<div>
							<input type="radio" name="q6" id="q6" value=0 required/>
							<p>B) False</p>
						</div>
					</li>
					
					<!-- Strings 1-->
					<li>
						<h3>What character ends all strings?</h3>
						<div>
							<input type="radio" name="q7" id="q7" value=0 required/>
							<p>A) '.'</p>
						</div>
						<div>
							<input type="radio" name="q7" id="q7" value=0 required/>
							<p>B) '\end'</p>
						</div>
						<div>
							<input type="radio" name="q7" id="q7" value=1 required/>
							<p>C) '\0'</p>
						</div>
						<div>
							<input type="radio" name="q7" id="q7" value=0 required/>
							<p>D) '\n'</p>
						</div>
					</li>
					
					<!-- Strings 2 -->
					<li>
						<h3>Strings in C are arrays of characters</h3>
						<div>
							<input type="radio" name="q8" id="q8" value=1 required/>
							<p>A) True</p>
						</div>
						<div>
							<input type="radio" name="q8" id="q8" value=0 required/>
							<p>B) False</p>
						</div>
					</li>
					
					<!-- Pointers 3 -->
					<li>
						<h3>Which of the following is the proper declaration of a pointer?</h3>
						<div>
							<input type="radio" name="q9" id="q9" value=0 required/>
							<p>A) int x;</p>
						</div>
						<div>
							<input type="radio" name="q9" id="q9" value=0 required/>
							<p>B) int &amp;x;</p>
						</div>
						<div>
							<input type="radio" name="q9" id="q9" value=0 required/>
							<p>C) ptr x;</p>
						</div>
						<div>
							<input type="radio" name="q9" id="q9" value=1 required/>
							<p>D) int *x;</p>
						</div>
					</li>
					
					<!-- Functions 2 -->
					<li>
						<h3> Which of the following is a valid function call (assuming the function exists)?</h3>
						<div>
							<input type="radio" name="q10" id="q10" value=1 required/>
							<p>A) funct;</p>
						</div>
						<div>
							<input type="radio" name="q10" id="q10" value=0 required/>
							<p>B) funct x,y;</p>
						</div>
						<div>
							<input type="radio" name="q10" id="q10" value=0 required/>
							<p>C) funct();</p>
						</div>
						<div>
							<input type="radio" name="q10" id="q10" value=0 required/>
							<p>D) int funct();</p>
						</div>
					</li>
				</ol>
				<input type='submit' name='subQuiz' value='Submit Quiz' class='btn btn-default pull-right'/>
				</form>
			<?php } ?>
			
		</div>
		<br><br><br>
		<center><a class='logout form-control' style='padding:5px;'>&copy - George Zafiris & George Iliopoulos</a></center>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src='js/content.js'></script>
	</div>
</body>
</html>
















