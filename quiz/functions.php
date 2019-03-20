<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>QUIZ QUIZ QUIZ</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3> Which is not a proper prototype?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value=0 />
                        <label for="question-1-answers-A">A) int funct(char x, char y);  </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value=0 />
                        <label for="question-1-answers-B">B) void funct();</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value=1 />
                        <label for="question-1-answers-C">C) double funct(char x) </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value=0 />
                        <label for="question-1-answers-D">D) char x();</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> What is the return type of the function with prototype: "int func(char x, float v, double t);"</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value=0 />
                        <label for="question-2-answers-A">A) char</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value=1/>
                        <label for="question-2-answers-B">B) int</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value=0 />
                        <label for="question-2-answers-C">C) float</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value=0 />
                        <label for="question-2-answers-D">D) double</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Which of the following is a valid function call (assuming the function exists)?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value=1 />
                        <label for="question-3-answers-A">A) funct;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value=0 />
                        <label for="question-3-answers-B">B) funct x,y;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value=0 />
                        <label for="question-3-answers-C">C) funct(); </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value=0 />
                        <label for="question-3-answers-D">D) int funct(); </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Which of the following is a complete function?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value=0 />
                        <label for="question-4-answers-A">A) int funct();</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value=0 />
                        <label for="question-4-answers-B">B) void funct(int) { printf( "Hello"); </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value=0 />
                        <label for="question-4-answers-C">C) void funct(x) { printf( "Hello"); }</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value=1 />
                        <label for="question-4-answers-D">D)  int funct(int x) {return x=x+1;}</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>In C, arguments are copied by reference to functions</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value=0 />
                        <label for="question-5-answers-A">A) True</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value=1 />
                        <label for="question-5-answers-B">B) False</label>
                    </div>
                    
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
	

</body>

</html>