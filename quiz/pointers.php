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
                
                    <h3>  Which of the following is the proper declaration of a pointer?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value=0 />
                        <label for="question-1-answers-A">A) int x;  </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value=0 />
                        <label for="question-1-answers-B">B) int &amp;x;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value=0 />
                        <label for="question-1-answers-C">C) ptr x;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value=1 />
                        <label for="question-1-answers-D">D) int *x;</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Which of the following gives the memory address of integer variable a?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value=0 />
                        <label for="question-2-answers-A">A) *a;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value=0/>
                        <label for="question-2-answers-B">B) a;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value=1 />
                        <label for="question-2-answers-C">C) &amp;a;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value=0 />
                        <label for="question-2-answers-D">D) address(a);</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>  Which of the following gives the memory address of a variable pointed to by pointer a?.</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value=1 />
                        <label for="question-3-answers-A">A) a;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value=0 />
                        <label for="question-3-answers-B">B) *a;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value=0 />
                        <label for="question-3-answers-C">C) &amp;a;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value=0 />
                        <label for="question-3-answers-D">D) address(a); </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Which of the following is the proper keyword to deallocate memory?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value=1 />
                        <label for="question-4-answers-A">A) free </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value=0 />
                        <label for="question-4-answers-B">B) delete</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value=0 />
                        <label for="question-4-answers-C">C) clear</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value=0 />
                        <label for="question-4-answers-D">D) remove</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>A pointer points to a specific part of the memory</h3>
                    
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