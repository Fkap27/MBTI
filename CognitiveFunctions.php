<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cognitive Functions</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
    <script>
      function myFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
          } else {
            li[i].style.display = "none";
          }
        }
      }
    </script>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            
            <ul class="sidebar-nav" id="myMenu">
                <li class="sidebar-brand">
                    <a href="index.php">
                        MBTI
                    </a>
                </li>
                <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
                <li><a href="CognitiveFunctions.php">Cognitive Functions</a></li>
                <li><a href="INTP.php">INTP</a></li>
                <li><a href="INFP.php">INFP</a></li>
                <li><a href="INTJ.php">INTJ</a></li>
                <li><a href="INFJ.php">INFJ</a></li>
                <li><a href="ISTP.php">ISTP</a></li>
                <li><a href="ISFP.php">ISFP</a></li>
                <li><a href="ISTJ.php">ISTJ</a></li>
                <li><a href="ISFJ.php">ISFJ</a></li>
                <li><a href="ENTP.php">ENTP</a></li>
                <li><a href="ENFP.php">ENFP</a></li>
                <li><a href="ENTJ.php">ENTJ</a></li>
                <li><a href="ENFJ.php">ENFJ</a></li>
                <li><a href="ESTP.php">ESTP</a></li>
                <li><a href="ESFP.php">ESFP</a></li>
                <li><a href="ESTJ.php">ESTJ</a></li>
                <li><a href="ESFJ.php">ESFJ</a></li>
                <li><a href="register/index.php">Register</a></li>
                <li><a href="login/index.php">Login</a></li>
                <form method='post' action=""><input type="submit" value="Logout" name="but_logout"></form>
                <li class='active' style='float:left;'>
                  <?php 
                  // logout
                  if(isset($_POST['but_logout'])){
                      session_destroy();
                      header('Location: index.php');
                  }
                  if(isset($_SESSION['uname']))
                    { 
                      echo $_SESSION["uname"];
                    }
                  elseif(isset($_SESSION['uname']))
                    {
                      echo '<a href="register/index.php">Register</a><a href="login/index.php">Login</a></li>';
                    }
                  ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>How MBTI Works</h1>
                <p>When looking at MBTI in a very broad sense, the personality types are comprised of four letters which gives the general preferences for the specific types. Which are the following:</p>
                <img src="images/personality.jpg" alt="personality">
                <?php
	function TableOfContents($depth)
	/*AutoTOC function written by Alex Freeman
	* Released under CC-by-sa 3.0 license
	* http://www.10stripe.com/  */
	{
	$filename = __FILE__;
	//read in the file
	$file = fopen($filename,"r");
	$html_string = fread($file, filesize($filename));
	fclose($file);
 
	//get the headings down to the specified depth
	$pattern = '/<h[2-'.$depth.']*[^>]*>.*?<\/h[2-'.$depth.']>/';
	$whocares = preg_match_all($pattern,$html_string,$winners);
 
	//reformat the results to be more usable
	$heads = implode("\n",$winners[0]);
	$heads = str_replace('<a name="','<a href="#',$heads);
	$heads = str_replace('</a>','',$heads);
	$heads = preg_replace('/<h([1-'.$depth.'])>/','<li class="toc$1">',$heads);
	$heads = preg_replace('/<\/h[1-'.$depth.']>/','</a></li>',$heads);
 
	//plug the results into appropriate HTML tags
	$contents = '<div id="toc"> 
	<p id="toc-header">Contents</p>
	<ul>
	'.$heads.'
	</ul>
	</div>';
	echo $contents;
	}
 ?>
 <?php TableOfContents(3); ?>
                <h3><a name="FunctionStack"></a>Function Stack</h3>
                <p>To truly understand how the personality type works for MBTI, it is important to learn about the cognitive functions. The cognitive functions are put into a function stack for a personality types going from: Dominant, Auxiliary, Tertiary, and Inferior.</p>
                <p>The cognitive functions will be the 8 perceiving (sensory & intuition) and judging (thinking & feeling) functions as they each have an introverted and extroverted counterpart.</p>
                <img src="images/cf.jpg" alt="CognitiveFunctions">
                <p>Dominant Function: This will be the personality types' most prominant function that will be most discernable and the function they lead with. The following functions serve to aid the dominant function.</p>
                <p>Auxiliary Function: This will be the second most prominent function within a persaonlity type. It will often serve as the sidekick to support the dominant function.</p>
                <p>Tertiary Function: Being the third function, this will be less concious in comparison to the first two functions. But can be used decently well. It will be the opposite of the auxiliary function to provide a level of balance for a personality type.</p>
                <p>Inferior Function: This will be the personality types' least concious function and will often provide difficulty for them as it is the opposite of their dominant function which is the most natural to them. However, this will depend on the individual as they can become healthier and balance by working on and developing their inferior.</p>
                <p>An important thing to mention when determining the cognitive functions of a personality type will be the four letters. For the extroverted percieving and judging types (EXXPs & EXXJs), their respective dominant and inferior functions will be that. Whilst their auxiliary and tertiary will be the opposite. However, for the introverted percieving and judging types (IXXPs & IXXJs), their respective percieving and judging functions will be their auxiliary and tertiary functions. Whilst their dominant and inferior functions will be the opposite.</p>
                <h3><a name="PercievingFunctions"></a>Percieving Functions</h3>
                <h4>Introverted Intuition (Ni) & Extroverted Intuition (Ne)</h4>
                <p>Introverted Intuition (Ni): This is about percieving information within a very convergent, abstract way thinking about the underlying patterns, connections, meanings, and impressions beyond the concrete world, thinking about the bigger picture and the future. As intuition is subconcious pattern recognition, this will enable them to arrive to assumptions, hunches, and conclusions. It serves to help narrow, and converge them into ideas, monoliths, and catogories.</p>
                <p>Extroverted Intuition (Ne): This is about perceiving information within a very divergent, abtsract manner, thinking about the future and bigger picture. Being able to find underlying patterns, connections, and impressions. It is done by taking an idea, considering and generating all the possibilities, speculations, and think outside the box. Essentially brainstorming aloud.</p>
                <h4>Introverted Sensing (Si) & Extroverted Sensing (Se)</h4>
                <p>Introverted Sensing (Si): This is about percieving information from the sensory world within a conservative manner and utilising the past subjective experience to inform the future decisions. As it utilises traditions, conventions, and the familiar with what is already established and known to work. Often opting for routines, maintenance, stability, etc.</p>
                <p>Extroverted Sensing (Se): This is about percieving infomration from the sensory world within a liberal manner and embrace living in the moment. Often relishing in novel experiences, thrills, and pleasures having an openness for new sensory activities. As it is very attune to the present enviroment and very flexible, adapting rather quickly to it.</p>
                <h3><a name="JudgingFunctions"></a>Judging Functions</h3>
                <h4>Introverted Thinking (Ti) & Extroverted Thinking (Te)</h4>
                <p>Introverted Thinking (Ti): This is about making judgements through thorough logical analysis and reasoning. It is curious in nature as it seeks accuracy and filters out emotional biases. Often working with subjective logic as objective data has a subjective foundation. Making it very malleable and fluid with its thinking. Whilst Ti users can be pragmatic and practical, curiousity prioritised more.</p>
                <p>Extroverted Thinking (Te): This is about making judgements through pragmatic and practical logic. As it is concerned with proven external facts and objective data. Making it interested in logical systems, frameworks, standards, and such if it serves a purpose. Whilst Te users can learn information for the sake of curiosity, they prioritise the practical and pragmatic applications.</p>
                <h4>Introverted Feeling (Fi) & Extroverted Feeling (Fe)</h4>
                <p>Introverted Feeling (Fi): This is about making judgements through core, personal, subjective values. And tends to feel rather passionate or strongly about them. Whilst it can certainly overlap with more collective issues but it is willing to go against the concensus if it truly goes against their values as it often favours autonomy and authenticity.</p>
                <p>Extroverted Feeling (Fe): This is about making judgements through seeking group harmony and external feelings of others. Being able to read other people, social norms, and empaphise very easily. Being attune to other people's emotions and often following the concensus. Allowing it to be very communicative and emotionally expressive. Whilst Fe users can have their values, they are more likely to comprimise them for other people's sake.</p>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    



  
</body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>
</html>
