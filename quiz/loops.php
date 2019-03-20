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
                
                    <h3>  What is the final value of x when the code: int x; for(x=0; x &lt 10; x++) {} is run?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value=1 />
                        <label for="question-1-answers-A">A) 10 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value=0 />
                        <label for="question-1-answers-B">B) 9 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value=0 />
                        <label for="question-1-answers-C">C) 0 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value=0 />
                        <label for="question-1-answers-D">D) 1</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>  When does the code block following "while(x &lt 100)" execute?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value=1 />
                        <label for="question-2-answers-A">A) When x is less than one hundred</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value=0/>
                        <label for="question-2-answers-B">B) When x is greater than one hundred</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value=0 />
                        <label for="question-2-answers-C">C) When x is equal to one hundred</label>
                    </div>
                    
             
                
                </li>
                
                <li>
                
                    <h3>Which is not a loop structure?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value=0  />
                        <label for="question-3-answers-A">A) For</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value=0 />
                        <label for="question-3-answers-B">B) Do while</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value=0 />
                        <label for="question-3-answers-C">C) While </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value=1 />
                        <label for="question-3-answers-D">D) Repeat Until </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>How many times is a do while loop guaranteed to loop?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value=0 />
                        <label for="question-4-answers-A">A) 0 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value=1 />
                        <label for="question-4-answers-B">B) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value=0 />
                        <label for="question-4-answers-C">C)  Infinitely </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value=0 />
                        <label for="question-4-answers-D">D) It depends</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>While loops can  execute infinitely if the condition always evaluates as true</h3>
                    
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