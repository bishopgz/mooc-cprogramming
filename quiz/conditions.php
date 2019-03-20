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
                
                    <h3> Which of the following is the boolean operator for logical-and?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value=0 />
                        <label for="question-1-answers-A">A) &amp;  </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value=1 />
                        <label for="question-1-answers-B">B) &amp; &amp;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value=0 />
                        <label for="question-1-answers-C">C) &vert; </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value=0 />
                        <label for="question-1-answers-D">D) &amp; &vert;</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Which of the following is "true"?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value=1 />
                        <label for="question-2-answers-A">A) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value=0/>
                        <label for="question-2-answers-B">B) 0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value=0 />
                        <label for="question-2-answers-C">C) 15</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value=0 />
                        <label for="question-2-answers-D">D) -1</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Evaluate ! ( 1 && !( 0 || 1 )).</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value=1 />
                        <label for="question-3-answers-A">A)  True</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value=0 />
                        <label for="question-3-answers-B">B) False</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value=0 />
                        <label for="question-3-answers-C">C) Both </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value=0 />
                        <label for="question-3-answers-D">D) Unevaluatable </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which of the following shows the correct syntax for an if statement?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value=0 />
                        <label for="question-4-answers-A">A)  if expression</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value=0 />
                        <label for="question-4-answers-B">B)  if { expression</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value=1 />
                        <label for="question-4-answers-C">C)  if ( expression )</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value=0 />
                        <label for="question-4-answers-D">D) expression if</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Two or more expressions can be evaluated together using logical operators</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value=1 />
                        <label for="question-5-answers-A">A) True</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value=0 />
                        <label for="question-5-answers-B">B) False</label>
                    </div>
                    
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
	

</body>

</html>