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
                
                    <h3>  Which of the following correctly declares an array?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value=1 />
                        <label for="question-1-answers-A">A) int anarray[10];  </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value=0 />
                        <label for="question-1-answers-B">B) int anarray;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value=0 />
                        <label for="question-1-answers-C">C) anarray{10}; </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value=0 />
                        <label for="question-1-answers-D">D) array anarray[10];</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> What is the index number of the last element of an array with 29 elements?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value=0 />
                        <label for="question-2-answers-A">A) 29</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value=1/>
                        <label for="question-2-answers-B">B) 28</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value=0 />
                        <label for="question-2-answers-C">C) 0 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value=0 />
                        <label for="question-2-answers-D">D) undefined</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Which of the following is a two-dimensional array?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value=0 />
                        <label for="question-3-answers-A">A) array anarray[20][20];</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value=1 />
                        <label for="question-3-answers-B">B)int anarray[20][20];</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value=0 />
                        <label for="question-3-answers-C">C) int array[20, 20];</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value=0 />
                        <label for="question-3-answers-D">D)char array[20]; </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which of the following correctly accesses the seventh element stored in foo, an array with 100 elements?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value=1 />
                        <label for="question-4-answers-A">A) foo[6];</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value=0 />
                        <label for="question-4-answers-B">B) foo[7];</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value=0 />
                        <label for="question-4-answers-C">C) foo-7;)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value=0 />
                        <label for="question-4-answers-D">D) foo </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>An array can have multiple type of variables</h3>
                    
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